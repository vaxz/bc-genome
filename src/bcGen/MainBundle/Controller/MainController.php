<?php
/**
 * MainController.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */
namespace bcGen\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use bcGen\MainBundle\Entity\Gene;
use bcGen\MainBundle\Entity\GeneRepository;
use bcGen\MainBundle\Entity\Locus;
use bcGen\MainBundle\Entity\LocusRepository;
use bcGen\MainBundle\Entity\LocusChromosome;
use bcGen\MainBundle\Entity\LocusChromosomeRepository;
use bcGen\MainBundle\Entity\Chromosome;
use bcGen\MainBundle\Entity\ChromosomeRepository;
use bcGen\MainBundle\Form\SearchGeneType;
use bcGen\MainBundle\Form\SearchGenesType;
/**
 * MainController class gathers all the methods that manage the following pages of the web site :
 * homepage, detailed display, locus display and gene neighbourhood.  
 * 
 * @see http://api.symfony.com/2.7/Symfony/Bundle/FrameworkBundle/Controller/Controller.html
 * Symfony documentation on the Controller class
 * @see http://api.symfony.com/2.7/Symfony/Component/HttpFoundation/Response.html
 * Symfony documentation on the Response class
 * @see http://api.symfony.com/2.7/Symfony/Component/HttpFoundation/Request.html
 * Symfony documentation on the Request class
 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
 * Doctrine documentation on the class ArrayCollection
 * 
 * @see \bcGen\MainBundle\Entity\Gene Class Gene
 * @see \bcGen\MainBundle\Entity\GeneRepository Class GeneRepository
 * @see \bcGen\MainBundle\Entity\Locus Class Locus
 * @see \bcGen\MainBundle\Entity\LocusRepository Class LocusRepository
 * @see \bcGen\MainBundle\Entity\LocusChromosome Class LocusChromosome
 * @see \bcGen\MainBundle\Entity\LocusChromosomeRepository Class LocusChromosomeRepository
 * @see \bcGen\MainBundle\Entity\Chromosome Class Chromosome
 * @see \bcGen\MainBundle\Entity\ChromosomeRepository Class ChromosomeRepository
 * @see \bcGen\MainBundle\Form\SearchGeneType Class SearchGeneType
 * @see \bcGen\MainBundle\Form\SearchGenesType Class SearchGenesType
 * 
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 */
class MainController extends Controller
{
	/**
	 * This method ensures the homepage display
	 * @return Symfony\Component\HttpFoundation\Response
	 */
    public function homepageAction()
    {
        return $this->render( 'bcGenMainBundle:Main:homepage.html.twig' );
    }
	
	/**
	 * This method ensures the detailed display 
	 * @throws createNotFoundException if the method request is not POST
	 * @return Symfony\Component\HttpFoundation\Response
	 */
    public function detailedDisplayAction()
    {
    	
		//$request = $this->getRequest(); deprecated method
		$request=Request::createFromGlobals(); // required Symfony\Component\HttpFoundation\Request;
		
		if ( $request->getMethod() != "POST" )
		{
			throw $this->createNotFoundException( "The seeked page does not exist" );
		}
		else
		{
			
			$form = $this->createForm( new SearchGeneType() );
			//$form->bind($request); deprecated method
			$form->handleRequest($request);
			$tmp=$form['search']->getData();
			
			if ( empty($tmp) )
			{			
				if ( !empty( $request->request->get('geneNum') ) )
				{
					$tmp = $request->request->get('geneNum');
				}
				else
				{
					throw $this->createNotFoundException( "The seeked page does not exist");			
				}	
			}			
			
			$result=$this->databaseDetailedSearch($tmp);
			return $this->render( 'bcGenMainBundle:Main:detailedDisplay.html.twig',
			                       array('result' => $result,
								         'detailed' => 0,
								         'neighborhood' => 1
										)
			    			     );
	    }	    	
    }// FUNCTION END

    /**
	 * This method ensures the locus display 
	 * @throws createNotFoundException if the method request is not GET or
	 *                                 the search variable is empty ($_GET['bcgen_mainbundle_search_genes']['search'])  
	 * @return Symfony\Component\HttpFoundation\Response
	 */
    public function locusDisplayAction()
    {
    	$request=Request::createFromGlobals();
		
		if ( $request->getMethod() == "GET" && 
		     !empty( $request->query->get('bcgen_mainbundle_search_genes')['search'] ) ) {
		     	
			$charArray=str_split( $request->query->get('bcgen_mainbundle_search_genes')['search'] );
			$size=sizeof($charArray);
			$tmp='';
						
			for($i=0; $i<$size; $i++)
			{				
				if( preg_match( '#[\n\r]#', $charArray[$i]) )
				{
					$arrayAccessionNum[]=$tmp;
					$tmp='';
					if( preg_match( '#[\n\r]#', $charArray[$i+1]) ) $i++;		
				}
				else if( preg_match( '#[\s]#', $charArray[$i]) )
				{
					$arrayAccessionNum[]=$tmp;
					$tmp='';		
				}
				else
				{
					$tmp.=$charArray[$i];
				}				    
			}
			
			if( !empty($tmp) ) $arrayAccessionNum[]=$tmp;
			
			$tmpCollection= new \Doctrine\Common\Collections\ArrayCollection();
				
			foreach ($arrayAccessionNum as $num) {
				
			        $tmp=$this->databaseLocusSearch($num);
				    $tmpCollection->add($tmp);
			}
			
			$paginator = $this->get('knp_paginator');
            $resultCollection = $paginator->paginate( $tmpCollection,
                                                      $request->query->get('page', 1),
                                                      4 );
													 
			return $this->render( 'bcGenMainBundle:Main:locusListDisplay.html.twig',
			                       array('resultCollection' => $resultCollection,
								         'detailed' => 1,
								         'neighborhood' => 1
										)
			    			     );			
		}
		else throw $this->createNotFoundException( "The seeked page does not exist");
					
    }// FUNCTION END
    
    /**
	 * This method ensures the display of a searchGeneForm
	 * @see \bcGen\MainBundle\Form\SearchGeneType Class SearchGeneType
	 * @return Symfony\Component\HttpFoundation\Response
	 */
    public function searchGeneAction()
    {
    	$form = $this->createForm( new SearchGeneType() );
    	return $this->render( 'bcGenMainBundle:Main:searchGeneForm.html.twig',
    	                       array( 'form' => $form->createView() ) );
    }
	
	/**
	 * This method ensures the display of a searchGenesForm
	 * @see \bcGen\MainBundle\Form\SearchGenesType Class SearchGenesType
	 * @return Symfony\Component\HttpFoundation\Response
	 */
    public function searchGenesAction()
    {
    	$form = $this->createForm( new SearchGenesType() );
    	return $this->render( 'bcGenMainBundle:Main:searchGenesForm.html.twig',
    	                       array( 'form' => $form->createView() ) );
    }

	/**
	 * This method ensures the display of the gene neighborhood
	 * @see \bcGen\MainBundle\Entity\Locus Class Locus
	 * @see \bcGen\MainBundle\Entity\LocusRepository Class LocusRepository
	 * @uses \bcGen\MainBundle\Entity\LocusRepository::findAllLocusFromChromosomeId()
	 * @uses \bcGen\MainBundle\Entity\LocusRepository::countLocus()
	 * @throws createNotFoundException if the method request is not GET or if one of the following variables is empty :
	 *                                 chromosomeId ( $_GET['chromosomeId'] )
	 *                                 locusId      ( $_GET['locusId'] )
	 * @return Symfony\Component\HttpFoundation\Response 
	 */
	public function neighborhoodDisplayAction()
	{
		$request=Request::createFromGlobals();
		
		if( $request->getMethod() != "GET" || 
		    empty( $request->query->get('chromosomeId') ) ||
			empty( $request->query->get('locusId') ) )
		{
			throw $this->createNotFoundException( "The seeked page does not exist" );
		}
		else
		{
			$chromosomeId = (integer) ( $request->query->get('chromosomeId') );
			$locusId = (integer) ( $request->query->get('locusId') );
			
			$repository = $this->recoverRepository('bcGenMainBundle:Locus');			
			$tmpArray = $repository->findAllLocusFromChromosomeId( $chromosomeId );
			$locusCount = (integer) $repository->countLocus( $locusId );
			$defaultpage = ceil( $locusCount/5 );
									   	
			$paginator = $this->get('knp_paginator');
            $resultArray = $paginator->paginate( $tmpArray,
                                                 $request->query->get('page', $defaultpage ),
                                                 5 );
												 	
			return $this->render( 'bcGenMainBundle:Main:neighborhoodDisplay.html.twig',
			                       array( 'resultArray' => $resultArray,
			                              'chromosomeId' => $chromosomeId,
			                              'detailed' => 1,
			                              'neighborhood' => 0			                               
								         )
			    			    );
		}		
	}
	
	/**
	 * This method allows to get the required repository from its name
	 * This method is equivalent to a shortcut
	 * 
	 * @see http://api.symfony.com/2.7/Symfony/Bundle/FrameworkBundle/Controller/Controller.html
	 * Symfony documentation on the Controller class
	 * @uses Controller::getDoctrine() 
	 * @see http://api.symfony.com/2.7/Symfony/Bundle/DoctrineBundle/Registry.html
	 * Symfony documentation on the Registry class
	 * The method getManager() is not described in the Symfony documentation
	 * @uses Registry::getManager() 
	 * @see http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityManager.html
	 * Doctrine Documentation on the EntityManager class
	 * @uses EntityManager::getRepository()
	 *  
	 * @param string The name of an entity class
	 * @return Doctrine\ORM\EntityRepository The repository for an entity class
	 */
	private function recoverRepository( $nomRepository )
    {
		  return $this->getDoctrine()->getManager()->getRepository( $nomRepository );
    }
	
	/**
	 * This method to gather all the information from a string supposed to be the accession number
	 * of defined Gene object 
	 * 
	 * @see \bcGen\MainBundle\Entity\Gene Class Gene
	 * @see \bcGen\MainBundle\Entity\GeneRepository Class GeneRepository
	 * @see \bcGen\MainBundle\Entity\Locus Class Locus
	 * @see \bcGen\MainBundle\Entity\LocusRepository Class LocusRepository
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneLocusFromAccessionNum()
	 * @see \bcGen\MainBundle\Entity\LocusChromosome Class LocusChromosome
	 * @see \bcGen\MainBundle\Entity\LocusChromosomeRepository Class LocusChromosomeRepository
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneLocusChromosomeFromAccessionNum()
     * @see \bcGen\MainBundle\Entity\Chromosome Class Chromosome
	 * @see \bcGen\MainBundle\Entity\ChromosomeRepository Class ChromosomeRepository
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneChromosomeFromAccessionNum() 
	 * 
	 * @throws createNotFoundException if no gene, locus, locusChromosome, chromosome object is found
	 * @param string The supposed accession number
	 * @return array 
	 */
	private function databaseDetailedSearch( $accessionNum )
	{
		$result=array();
		$result['accessionNum'] = $accessionNum;
		$result['onlyOneGene'] = new Gene();
		$result['locus'] = new Locus();
		$result['locusChromosome'] = new LocusChromosome();
		$result['chromosome'] = new Chromosome();
		
		$result['onlyOneGene'] = $this->recoverRepository('bcGenMainBundle:Gene')
		                       ->findOneByGeneAccession( $accessionNum );
								   	
		if( empty( $result['onlyOneGene'] ) )
			throw $this->createNotFoundException( "There is no gene with the following
    		                                       accession number : ".$accessionNum );
		else
		{
			$result['locus'] = $this->recoverRepository('bcGenMainBundle:Locus')
    		                    ->findOneLocusFromAccessionNum( $accessionNum );
											
			if ( !empty( $result['locus'] ) )
			{
				$result['locus']->getLocusGenes()->getIterator()
				                ->uasort( array( 'bcGen\MainBundle\Entity\Gene', 'self::geneAccessionComp' ) );
			}
			
			$result['locusChromosome']=$this->recoverRepository('bcGenMainBundle:LocusChromosome')
				                            ->findOneLocusChromosomeFromAccessionNum( $accessionNum );
			$result['chromosome']=$this->recoverRepository('bcGenMainBundle:Chromosome')
			                           ->findOneChromosomeFromAccessionNum( $accessionNum );
		}		
		return $result;					 	
	}// FUNCTION END
	
	/**
	 * This method to gather all the information from a string supposed to be the accession number
	 * of defined Gene object 
	 * 
	 * @see \bcGen\MainBundle\Entity\Gene Class Gene
	 * @see \bcGen\MainBundle\Entity\GeneRepository Class GeneRepository
	 * @see \bcGen\MainBundle\Entity\Locus Class Locus
	 * @see \bcGen\MainBundle\Entity\LocusRepository Class LocusRepository
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneLocusFromAccessionNum()
	 * @see \bcGen\MainBundle\Entity\LocusChromosome Class LocusChromosome
	 * @see \bcGen\MainBundle\Entity\LocusChromosomeRepository Class LocusChromosomeRepository
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneLocusChromosomeFromAccessionNum()
     * @see \bcGen\MainBundle\Entity\Chromosome Class Chromosome
	 * @see \bcGen\MainBundle\Entity\ChromosomeRepository Class ChromosomeRepository
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneChromosomeFromAccessionNum() 
	 * 
	 * @throws createNotFoundException if no gene, locus, locusChromosome, chromosome object is found
	 * @param string The supposed accession number
	 * @return array It contains the results of the 
	 */
	private function databaseLocusSearch( $accessionNum )
	{
		$result=array();
		$result['accessionNum']=$accessionNum;
		$result['geneId']='';
		$result['locus']='';
		$result['chromosomeId']='';
			
		$tmp= $this->recoverRepository('bcGenMainBundle:Gene')
		           ->findOneGeneIdFromAccessionNum( $accessionNum );
				   
		if ( sizeof($tmp) <= 1  )
		{
			if ( !empty($tmp) )
			{
				$result['geneId'] = $tmp[0]['id'];
			    $result['locus'] = new Locus();
			    $result['locus'] = $this->recoverRepository('bcGenMainBundle:Locus')
		                                ->findOneLocusFromAccessionNum( $accessionNum );
												
				if ( !empty( $result['locus'] ) )
				{
					$result['locus']->getLocusGenes()->getIterator()
					                ->uasort( array( 'bcGen\MainBundle\Entity\Gene', 'self::geneAccessionComp' ) );
				}
							
				$tmp = $this->recoverRepository('bcGenMainBundle:Chromosome')
				            ->findOneChromosomeIdFromAccessionNum( $accessionNum );
				
				if (  sizeof($tmp) <= 1  )
				{
					if ( !empty($tmp) )
					{
						$result['chromosomeId'] = $tmp[0]['id'];
					}						
				}
				else
				{
					throw $this->createNotFoundException( "Something wrong happened with the method
				                                           \"findOneChromosomeIdFromAccessionNum\".
				                                            Several results were obtained" );
				}
			}						
		}
		else
		{
			throw $this->createNotFoundException( "Something wrong happened with the method
			                                       \"findOneGeneIdFromAccessionNum\".
			                                       Several results were obtained" );
		}
			
		return $result;					 	
	}// FUNCTION END
	
}// CLASS END

?>
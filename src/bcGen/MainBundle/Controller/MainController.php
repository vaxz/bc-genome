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
use Doctrine\Common\Collections\ArrayCollection;
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
 *
 * @link http://api.symfony.com/2.7/Symfony/Bundle/FrameworkBundle/Controller/Controller.html
 *                                          Symfony documentation on the Controller class
 * @link http://api.symfony.com/2.7/Symfony/Component/HttpFoundation/Response.html
 *                                          Symfony documentation on the Response class
 * @link http://api.symfony.com/2.7/Symfony/Component/HttpFoundation/Request.html
 *                                          Symfony documentation on the Request class
 * @link http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
 *                                          Doctrine documentation on the class ArrayCollection
 *     
 * @see \bcGen\MainBundle\Entity\Gene                           Class Gene
 * @see \bcGen\MainBundle\Entity\GeneRepository                 Class GeneRepository
 * @see \bcGen\MainBundle\Entity\Locus                          Class Locus
 * @see \bcGen\MainBundle\Entity\LocusRepository                Class LocusRepository
 * @see \bcGen\MainBundle\Entity\LocusChromosome                Class LocusChromosome
 * @see \bcGen\MainBundle\Entity\LocusChromosomeRepository      Class LocusChromosomeRepository
 * @see \bcGen\MainBundle\Entity\Chromosome                     Class Chromosome
 * @see \bcGen\MainBundle\Entity\ChromosomeRepository           Class ChromosomeRepository
 * @see \bcGen\MainBundle\Form\SearchGeneType                   Class SearchGeneType
 * @see \bcGen\MainBundle\Form\SearchGenesType                  Class SearchGenesType
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * 
 * @version 0.1.0 0.1.0
 */
class MainController extends Controller {
	
	/**
	 * This method ensures the homepage display
	 *
	 * @return Symfony\Component\HttpFoundation\Response
	 */
	public function homepageAction()
	{
		return $this->render ( 'bcGenMainBundle:Main:page_home.html.twig' );
	}
	
	/**
	 * This method ensures the detailed display
	 *
	 * @throws createNotFoundException if the method request is not POST
	 *        
	 * @return Symfony\Component\HttpFoundation\Response
	 */
	public function detailedDisplayAction()
	{
		
		// $request = $this->getRequest(); deprecated method
		$request = Request::createFromGlobals (); // require Symfony\Component\HttpFoundation\Request;
		$form = null;
		$tmp = '';
		$result = array ();
		
		if ($request->getMethod() != "POST")
		{
			throw $this->createNotFoundException( "The seeked page does not exist" );
		}
		else
		{
			
			$form = $this->createForm ( new SearchGeneType() );
			// $form->bind($request); deprecated method
			$form->handleRequest( $request );
			// The test to check the form validity is useless. There is only one text field : search
			$tmp = $form['search']->getData();
			
			if ( empty ( $tmp )
			     && empty ( $tmp = $request->request->get( 'geneNum' ) ) 
			   )
			{
				throw $this->createNotFoundException( "The seeked page does not exist" );
			}
			
			$result = $this->databaseDetailedSearch( $tmp );
			return $this->render ( 'bcGenMainBundle:Main:page_detailed.html.twig',
					               array ( 'result' => $result,
					                       'detailed' => 0,
					               		   'neighborhood' => 1
					               		  )
					              );
		}// IF END
	} // FUNCTION END
	
	/**
	 * This method ensures the locus display
	 *
	 * @throws createNotFoundException if the method request is not GET
	 *                                 or the search variable is empty
	 *                                    ($_GET['bcgen_mainbundle_search_genes']['search'])
	 *        
	 * @return Symfony\Component\HttpFoundation\Response
	 */
	public function locusDisplayAction()
	{		
		$request = Request::createFromGlobals (); // require Symfony\Component\HttpFoundation\Request;
		$charArray = array (); // character array
		$arraySize = 0;
		$tmp = '';
		$i = 0; // loop index
		$accessionNumArray = array ();
		$tmpCollection = new \Doctrine\Common\Collections\ArrayCollection();
		$paginator = $this->get( 'knp_paginator' );
		$NBLOCUSPERPAGE = 4;
		$resultCollection = null;
		
		if ( $request->getMethod() == "GET"
			 && !empty( $request->query->get( 'bcgen_mainbundle_search_genes' )['search'] ) 
		    ) 
		{
			
			$charArray = str_split( $request->query->get( 'bcgen_mainbundle_search_genes' )['search'] );
			$arraySize = sizeof( $charArray );
			
			for( $i = 0; $i < $arraySize; $i ++ )
			{
				
				if (preg_match ( '#[\n\r]#', $charArray[$i] ) )
				{					
					$accessionNumArray [] = $tmp;
					$tmp = '';
					
					if ( preg_match ( '#[\n\r]#', $charArray[$i + 1] ) ) $i++;	
				}
				else if ( preg_match ( '#[\s]#', $charArray[$i] ) )
				{
					$accessionNumArray [] = $tmp;
					$tmp = '';
				}
				else
				{
					$tmp .= $charArray [$i];
				}
			} // FOR LOOP END
			
			if ( !empty( $tmp ) ) $accessionNumArray[] = $tmp;
			
			foreach ( $accessionNumArray as $num )
			{				
				$tmp = $this->databaseLocusSearch( $num );
				$tmpCollection->add( $tmp );
			}
			
			$resultCollection = $paginator->paginate (
					                                   $tmpCollection,
					                                   $request->query->get( 'page', 1 ),
					                                   $NBLOCUSPERPAGE
					                                  );
			
			return $this->render ( 'bcGenMainBundle:Main:page_locusList.html.twig',
					               array ( 'resultCollection' => $resultCollection,
					               		   'detailed' => 1,
					               		   'neighborhood' => 1 
					               		  )
					              );
		} else  throw $this->createNotFoundException ( "The seeked page does not exist" );
		
	} // FUNCTION END
	
	/**
	 * This method ensures the display of a searchGeneForm
	 *
	 * @see    \bcGen\MainBundle\Form\SearchGeneType        Class SearchGeneType
	 *     
	 * @return Symfony\Component\HttpFoundation\Response
	 */
	public function searchGeneAction()
	{
		$form = $this->createForm ( new SearchGeneType() );
		return $this->render( 'bcGenMainBundle:Main:form_searchGene.html.twig',
				               array ( 'form' => $form->createView ()
				               		  )
				             );
	}
	
	/**
	 * This method ensures the display of a searchGenesForm
	 *
	 * @see    \bcGen\MainBundle\Form\SearchGenesType     Class SearchGenesType
	 *     
	 * @return Symfony\Component\HttpFoundation\Response
	 */
	public function searchGenesAction()
	{
		$form = $this->createForm( new SearchGenesType () );
		return $this->render( 'bcGenMainBundle:Main:form_searchGenes.html.twig',
				               array ( 'form' => $form->createView ()
				               		  )
				              );		
	}
	
	/**
	 * This method ensures the display of the gene neighborhood
	 * 
	 *
	 * @see  \bcGen\MainBundle\Entity\Locus             Class Locus
	 *     
	 * @uses \bcGen\MainBundle\Entity\LocusRepository::findAllLocusFromChromosomeId()
	 * @uses \bcGen\MainBundle\Entity\LocusRepository::countLocus()
	 *      
	 * @throws createNotFoundException   if the method request is not GET
	 *                                   or if one of the following variables is empty :
	 *                                        chromosomeId ( $_GET['chromosomeId'] )
	 *                                        locusId ( $_GET['locusId'] )
	 *                                        or if $chromosomeId, $locusId or both are not integer
	 *        
	 * @return Symfony\Component\HttpFoundation\Response
	 */
	public function neighborhoodDisplayAction() 
	{
		$request = Request::createFromGlobals ();
		$chromosomeId = 0;
		$locusId = 0;
		$locusRepository = $this->recoverRepository( 'bcGenMainBundle:Locus' );
		$tmpArray = null;
		$locusCount = 0;
		$defaultpage = 0;
		$NBLOCUSPERPAGE = 5;
		$paginator = $this->get( 'knp_paginator' );
		$resultArray = null;
		$message ='';
				
		if ( $request->getMethod () != "GET"
			 || empty ( $request->query->get( 'chromosomeId' ) ) 
			 || empty ( $request->query->get( 'locusId' ) )
		   ) 
		{
			throw $this->createNotFoundException( "There's a problem with \$_GET[]" );
		}
		else
		{
			$chromosomeId = ( integer ) ( $request->query->get( 'chromosomeId' ) );
			$locusId = ( integer ) ( $request->query->get( 'locusId' ) );
			
			if ( $chromosomeId == 0 || $locusId == 0 )
			{
				$message = "The \$_GET['chromosomeId'], \$_GET['locusId'] or both are not numerics.";
				throw $this->createNotFoundException( $message );
			}
			else
			{
				$tmpArray = $locusRepository->findAllLocusFromChromosomeId( $chromosomeId );				
				$locusCount = ( integer ) $locusRepository->countLocus( $locusId );
				
				if ( empty ( $tmpArray ) || empty ( $locusCount ) )
				{
					$message = "The chromosome Id is not in the database : " . $chromosomeId;
					$message .= "\n or the locus Id is not in the database : " . $locusId ;
					throw $this->createNotFoundException( $message );
				}
				else
				{
					$defaultpage = ceil( $locusCount / $NBLOCUSPERPAGE );
					
					$resultArray = $paginator->paginate( $tmpArray,
							                             $request->query->get ( 'page', $defaultpage ),
							                             $$NBLOCUSPERPAGE
							                            );
					
					return $this->render ( 'bcGenMainBundle:Main:page_neighborhood.html.twig',
							               array ( 'resultArray' => $resultArray,
							                       'chromosomeId' => $chromosomeId,
							                       'detailed' => 1,
							                       'neighborhood' => 0
							               		  )
							             );
				} // IF END
			} // IF END
		} // IF END
	} // FUNCTION END
	
	/**
	 * This method allows to get the required repository from its name
	 * This method is equivalent to a shortcut
	 *      
	 * @param  string The name of an entity class
	 * @return Doctrine\ORM\EntityRepository The repository for an entity class
	 */
	private function recoverRepository($nomRepository)
	{
		return $this->getDoctrine ()->getManager ()->getRepository ( $nomRepository );
	}
	
	/**
	 * From a string which supposed to be the accession number of defined Gene object,
	 * the method gathers all the gene information. 
	 * 
	 * @todo Remove the dump() methods
	 *
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneLocusFromAccessionNum()
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneLocusChromosomeFromAccessionNum()
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneChromosomeFromAccessionNum()
	 *      
	 * @throws createNotFoundException if no gene, locus, locusChromosome, chromosome object is found
	 * 
	 * @param  string The supposed accession number
	 * 
	 * @return array It contains the data linked to a Gene object.
	 */
	private function databaseDetailedSearch($accessionNum) 
	{
		$result = array ();
		$result['accessionNum'] = $accessionNum;
		$result['onlyOneGene'] = new Gene ();
		$result['locus'] = new Locus ();
		$result['locusChromosome'] = new LocusChromosome ();
		$result['chromosome'] = new Chromosome ();
		$message = '';
		
		$result['onlyOneGene'] = $this->recoverRepository( 'bcGenMainBundle:Gene' )
		                              ->findOneByGeneAccession( $accessionNum );
		
		if ( empty( $result['onlyOneGene'] ) )
		{
			$message = "There is no gene with the following accession number : ".$accessionNum;
			throw $this->createNotFoundException( $message );
		}
		else 
		{
			$result['locus'] = $this->recoverRepository( 'bcGenMainBundle:Locus' )
			                        ->findOneLocusFromAccessionNum( $accessionNum );
			
			if ( !empty( $result['locus'] ) ) 
			{
				
				$result['locus']->getLocusGenes()
				                ->getIterator()
				                ->uasort( array ( 'bcGen\MainBundle\Entity\Gene',
				                 		          'self::geneAccessionComp'
				                 		         )
				                 		 );
			}
			
			$result['locusChromosome'] = $this->recoverRepository( 'bcGenMainBundle:LocusChromosome' )
			                                  ->findOneLocusChromosomeFromAccessionNum( $accessionNum );
			$result['chromosome'] = $this->recoverRepository( 'bcGenMainBundle:Chromosome' )
			                             ->findOneChromosomeFromAccessionNum( $accessionNum );
			
			return $result;
			
		} // IF END
	} // FUNCTION END
	
	/**
	 * From a string which is supposed to be the accession number of defined Gene object, 
	 * the method gathers all locus the information.
	 *
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneLocusFromAccessionNum()
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneLocusChromosomeFromAccessionNum()
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneChromosomeFromAccessionNum()
	 *      
	 * @throws createNotFoundException if no gene, locus, locusChromosome, chromosome object is found
	 * 
	 * @param  string The supposed accession number
	 * 
	 * @return array It contains the data linked to a Locus object.
	 */
	private function databaseLocusSearch($accessionNum)
	{
		$result = array ();
		$result ['accessionNum'] = $accessionNum;
		$result ['geneId'] = 0;
		$result ['locus'] = new Locus ();
		$result ['chromosomeId'] = 0;
		$message = '';
		
		$tmp = $this->recoverRepository ( 'bcGenMainBundle:Gene' )
		            ->findOneGeneIdFromAccessionNum ( $accessionNum );
		
		if ( ! empty ( $tmp ) )
		{
			$result['geneId'] = $tmp[0]['id'];
			$result['locus'] = $this->recoverRepository ( 'bcGenMainBundle:Locus' )
			                        ->findOneLocusFromAccessionNum ( $accessionNum );
			$tmp = $this->recoverRepository ( 'bcGenMainBundle:Chromosome' )
			            ->findOneChromosomeIdFromAccessionNum ( $accessionNum );
			
			if ( ! empty ( $result ['locus'] ) )
			{
				$result['locus']->getLocusGenes ()
				                ->getIterator ()
				                ->uasort ( array ( 'bcGen\MainBundle\Entity\Gene',
				                 		            'self::geneAccessionComp'
				                 		           )
				                 		   );
			}
			
			if ( ! empty ( $tmp ) ) $result ['chromosomeId'] = $tmp [0] ['id'];			
		}
		else
		{
			$message =  "There is no gene with the following accession number : " . $accessionNum;
			throw $this->createNotFoundException ( $message );
			
		} // IF END
	} // FUNCTION END
} // CLASS END

?>
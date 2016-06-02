<?php

/**
 * GeneTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\Gene;
use bcGen\MainBundle\Entity\Publication;
use bcGen\MainBundle\Entity\Genome;
use bcGen\MainBundle\Entity\Locus;
use bcGen\MainBundle\Entity\Annotation;
use bcGen\MainBundle\Entity\Protein;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * GeneTest class gathers all the unit tests linked to the Gene class.
 *
 * @link https://phpunit.de/manual/current/en/index.html This link gives details on how to use PHPunit
 * 
 * @see \bcGen\MainBundle\Entity\Gene         Class Gene
 * @see \bcGen\MainBundle\Entity\Genome       Class Genome
 * @see \bcGen\MainBundle\Entity\Locus        Class Locus 
 * @see \bcGen\MainBundle\Entity\Annotation   Class Annotation 
 * @see \bcGen\MainBundle\Entity\Publication  Class Publication
 * @see \bcGen\MainBundle\Entity\Protein      Class Protein
 *     
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 */
class GeneTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedGene
	 */
	private $stubedGene;
	
	/**
	 *
	 * @var \bcGen\MainBundle\Entity\Gene $gene
	 */
	private $gene;
	
	/**
	 *
	 * @var \bcGen\MainBundle\Entity\Genome $genome
	 */
	private $genome;
	
	/**
	 *
	 * @var \bcGen\MainBundle\Entity\Locus $locus
	 */
	private $locus;
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\Annotation $annotation
	 */
	private $annotation;
	
	/**
	 *
	 * @var \bcGen\MainBundle\Entity\Publication $publication
	 */
	private $publication;	
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\Protein $protein
	 */
	private $protein;
	
	/**
	 * 
	 * @var array
	 */
	private $genes;
	
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::setUp()
	 * @uses PHPUnit_Framework_TestCase::getMock()
	 */
	public function setUp() {
		
		$this->stubedGene = $this->getMock ( "bcGen\MainBundle\Entity\Gene" );
		$this->gene = new Gene ();
		$this->genome = new Genome ();
		$this->locus = new Locus ();
		$this->annotation = new Annotation();
		$this->publication = new Publication();
		$this->protein = new Protein();
		$this->genes = array();
		
		$this->genes[0] = null;
		$this->genes[1] = new Gene();
		$this->genes[2] = new Gene();
		$this->genes[3] = new Gene();
		$this->genes[4] = new Gene();
		$this->genes[5] = new Gene();
		
		$this->genes[1]->setGeneAccession('BCIN');
		$this->genes[2]->setGeneAccession('B0510');
		$this->genes[3]->setGeneAccession('BC1G');
		$this->genes[4]->setGeneAccession('BCT4');
		$this->genes[5]->setGeneAccession('BOFU');
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		
		$this->stubedGene = null;
		$this->gene = null;
		$this->genome = null;
		$this->locus = null;
		$this->annotation = null;
		$this->publication = null;
		$this->protein = null;
		$this->genes = null;
	}
	
	/**
	 * Test the getId() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getId()
	 */
	public function testGetId() {
		echo ("\n********************Test GetId()************************************************************\n");
		
		$this->stubedGene->method ( 'getId' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedGene->getId () );
	}
	
	/**
	 * Test the getGeneSeq() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getGeneSeq()
	 */
	public function testGetGeneSeq() {
		echo ("\n********************Test GetGeneSeq()*******************************************************\n");
		
		$this->stubedGene->method ( 'getGeneSeq' )->willReturn ( "getGeneSeq" );
		$this->assertEquals ( "getGeneSeq", $this->stubedGene->getGeneSeq () );
	}
	
	/**
	 * Test the getGeneRef() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getGeneRef()
	 */
	public function testGetGeneRef() {
		echo ("\n********************Test GetGeneRef()*******************************************************\n");
		
		$this->stubedGene->method ( 'getGeneRef' )->willReturn ( TRUE );
		$this->assertTrue( $this->stubedGene->getGeneRef () );
	}
	
	/**
	 * Test the getGeneAccession() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getGeneAccession()
	 */
	public function testGetGeneAccession() {
		echo ("\n********************Test GetGeneAccession()*************************************************\n");
		
		$this->stubedGene->method ( 'getGeneAccession' )->willReturn ( "getGeneAccession" );
		$this->assertEquals ( "getGeneAccession", $this->stubedGene->getGeneAccession () );
	}
	
	/**
	 * Test the getGeneContig() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getGeneContig()
	 */
	public function testGetGeneContig() {
		echo ("\n********************Test GetGeneContig()****************************************************\n");
		
		$this->stubedGene->method ( 'getGeneContig' )->willReturn ( "getGeneContig" );
		$this->assertEquals ( "getGeneContig", $this->stubedGene->getGeneContig () );
	}
	
	/**
	 * Test the getGeneAnnotations() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getGeneAnnotations()
	 */
	public function testGetGeneAnnotations() {
		echo ("\n********************Test GetGeneAnnotations()***********************************************\n");
		
		$tmp = get_class ( $this->gene->getGeneAnnotations () );
		$this->assertEquals ( $tmp, "Doctrine\Common\Collections\ArrayCollection" );
	}
	
	/**
	 * Test the getGeneGenome() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getGeneGenome()
	 */
	public function testGetGeneGenome() {
		echo ("\n********************Test GetGeneGenome()****************************************************\n");
		
		$tmp = '';
		
		$this->stubedGene->method ( 'getGeneGenome' )->willReturn ( $this->genome );
		$tmp = get_class ( $this->genome );
		$this->assertEquals ( $tmp, "bcGen\MainBundle\Entity\Genome" );
	}
	
	/**
	 * Test the getGeneLocus() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getGeneLocus()
	 */
	public function testGetGeneLocus() {
		echo ("\n********************Test GetGeneLocus()*****************************************************\n");
		
		$tmp = '';
		
		$this->stubedGene->method ( 'getGeneLocus' )->willReturn ( $this->locus );
		$tmp = get_class ( $this->locus );
		$this->assertEquals ( $tmp, "bcGen\MainBundle\Entity\Locus" );
	}
	
	/**
	 * Test the getGeneSources() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getGeneSources()
	 */
	public function testGetGeneSources() {
		echo ("\n********************Test GetGeneSources()***************************************************\n");
		
		$tmp = get_class ( $this->gene->getGeneSources () );
		$this->assertEquals ( $tmp, "Doctrine\Common\Collections\ArrayCollection" );
	}
	
	/**
	 * Test the getGeneProteins() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::getGeneProteins()
	 */
	public function testGetGeneProteins() {
		echo ("\n********************Test GetGeneProteins()**************************************************\n");
		
		$tmp = get_class ( $this->gene->getGeneProteins () );
		$this->assertEquals ( $tmp, "Doctrine\Common\Collections\ArrayCollection" );
	}
	
	/**
	 * Test the setGeneSeq() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::setGeneSeq()
	 */
	public function testSetGeneSeq() {
		echo ("\n********************Test SetGeneSeq()*******************************************************\n");
		
		$this->gene->setGeneSeq ( 'setGeneSeq' );
		$this->assertEquals ( 'setGeneSeq', $this->gene->getGeneSeq () );
	}
	
	/**
	 * Test the setGeneRef() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::setGeneRef()
	 */
	public function testSetGeneRef1() {
		echo ("\n********************Test SetGeneRef()*******************************************************\n");
		
		$this->gene->setGeneRef ( TRUE );
		$this->assertTrue( $this->gene->getGeneRef () );
	}
	
	/**
	 * Test the setGeneRef() method from the Gene class
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::setGeneRef()
	 */
	public function testSetGeneRef2() {
		echo ("\n********************Test SetGeneRef()*******************************************************\n");
	
		$this->gene->setGeneRef ( FALSE );
		$this->assertFalse( $this->gene->getGeneRef () );
	}
	
	/**
	 * Test the setGeneAccession() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::setGeneAccession()
	 */
	public function testSetGeneAccession() {
		echo ("\n********************Test SetGeneAccession()*************************************************\n");
		
		$this->gene->setGeneAccession ( 'setGeneAccession' );
		$this->assertEquals ( 'setGeneAccession', $this->gene->getGeneAccession () );
	}
	
	/**
	 * Test the setGeneContig() method from the Gene class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Gene::setGeneContig()
	 */
	public function testSetGeneContig() {
		echo ("\n********************Test SetGeneContig()****************************************************\n");
		
		$this->gene->setGeneContig ( 'setGeneContig' );
		$this->assertEquals ( 'setGeneContig', $this->gene->getGeneContig () );
	}
	
	/**
	 * Test the addGeneAnnotations() method from the Gene class
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::addGeneAnnotations()
	 */
	public function testAddGeneAnnotations() {
		echo ("\n********************Test AddGeneAnnotations()***********************************************\n");
	
		$result = - 1;
	
		$this->gene->addGeneAnnotations( $this->annotation );
		$result = $this->gene->getGeneAnnotations()->count ();
	
		$this->assertEquals ( 1, $result );
	}
	
	/**
	 * Test the addGeneSources() method from the Gene class
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::addGeneSources()
	 */
	public function testAddGeneSources() {
		echo ("\n********************Test AddGeneSources()***************************************************\n");
	
		$result = - 1;
	
		$this->gene->addGeneSources( $this->publication );
		$result = $this->gene->getGeneSources()->count ();
	
		$this->assertEquals ( 1, $result );
	}
	
	/**
	 * Test the addGeneProteins() method from the Gene class
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::addGeneProteins()
	 */
	public function testAddGeneProteins() {
		echo ("\n********************Test AddGeneProteins()**************************************************\n");
	
		$result = - 1;
	
		$this->gene->addGeneProteins( $this->protein );
		$result = $this->gene->getGeneProteins()->count ();
	
		$this->assertEquals ( 1, $result );
	}
	
	/**
	 * Test the removeGeneAnnotations() method from the Gene class
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::removeGeneAnnotations()
	 */
	public function testRemoveGeneAnnotations() {
		echo ("\n********************Test RemoveGeneAnnotations()********************************************\n");
	
		$result = - 1;
	
		$this->gene->addGeneAnnotations( $this->annotation );
		$this->gene->removeGeneAnnotations( $this->annotation );
	
		$result = $this->gene->getGeneAnnotations()->count ();
	
		$this->assertEquals ( 0, $result );
	}
	
	/**
	 * Test the removeGeneSources() method from the Gene class
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::removeGeneSources()
	 */
	public function testRemoveGeneSources() {
		echo ("\n********************Test RemoveGeneSources()************************************************\n");
	
		$result = - 1;
	
		$this->gene->addGeneSources( $this->publication );
		$this->gene->removeGeneSources( $this->publication );
	
		$result = $this->gene->getGeneSources()->count ();
	
		$this->assertEquals ( 0, $result );
	}
	
	/**
	 * Test the removeGeneProteins() method from the Gene class
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::removeGeneProteins()
	 */
	public function testRemoveGeneProteins() {
		echo ("\n********************Test RemoveGeneProteins()***********************************************\n");
	
		$result = - 1;
	
		$this->gene->addGeneProteins( $this->protein );
		$this->gene->removeGeneProteins( $this->protein );
	
		$result = $this->gene->getGeneProteins()->count ();
	
		$this->assertEquals ( 0, $result );
	}
	
	/**
	 * Test the geneAccessionComp() method from the Gene class
	 * 
	 * @todo Think to a new version of this test
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::geneAccessionComp()
	 */
	public function testGeneAccessionComp1() {
		echo ("\n********************Test GeneAccessionComp1()***********************************************\n");
		
		$result = 0;
			
		$result = \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[0], $this->genes[1] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[1], $this->genes[0] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[0], $this->genes[0] );
		
		$this->assertEquals ( 0, $result);		
		
	}
	
	/**
	 * Test the geneAccessionComp() method from the Gene class
	 *
	 * @todo Think to a new version of this test
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::geneAccessionComp()
	 */
	public function testGeneAccessionComp2() {
		echo ("\n********************Test GeneAccessionComp2()***********************************************\n");
	
		$result = 0;
			
		$result = \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[1], $this->genes[1] );
	
		$this->assertEquals ( 0, $result);
	
	}
	
	/**
	 * Test the geneAccessionComp() method from the Gene class
	 *
	 * @todo Think to a new version of this test
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::geneAccessionComp()
	 */
	public function testGeneAccessionComp3() {
		echo ("\n********************Test GeneAccessionComp3()***********************************************\n");
	
		$result = 0;
			
		$result = \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[1], $this->genes[2] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[1], $this->genes[3] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[1], $this->genes[4] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[1], $this->genes[5] );
	
		$this->assertEquals ( -4, $result);
	
	}
	
	/**
	 * Test the geneAccessionComp() method from the Gene class
	 *
	 * @todo Think to a new version of this test
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::geneAccessionComp()
	 */
	public function testGeneAccessionComp4() {
		echo ("\n********************Test GeneAccessionComp4()***********************************************\n");
	
		$result = 0;
			
		$result = \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[2], $this->genes[1] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[2], $this->genes[3] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[2], $this->genes[4] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[2], $this->genes[5] );
	
		$this->assertEquals ( -2, $result);
	
	}
	
	/**
	 * Test the geneAccessionComp() method from the Gene class
	 *
	 * @todo Think to a new version of this test
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::geneAccessionComp()
	 */
	public function testGeneAccessionComp5() {
		echo ("\n********************Test GeneAccessionComp5()***********************************************\n");
	
		$result = 0;
			
		$result = \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[3], $this->genes[1] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[3], $this->genes[2] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[3], $this->genes[4] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[3], $this->genes[5] );
	
		$this->assertEquals ( 0, $result);
	
	}
	
	/**
	 * Test the geneAccessionComp() method from the Gene class
	 *
	 * @todo Think to a new version of this test
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::geneAccessionComp()
	 */
	public function testGeneAccessionComp6() {
		echo ("\n********************Test GeneAccessionComp6()***********************************************\n");
	
		$result = 0;
			
		$result = \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[4], $this->genes[1] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[4], $this->genes[2] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[4], $this->genes[3] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[4], $this->genes[5] );
	
		$this->assertEquals ( 2, $result);
	
	}
	
	/**
	 * Test the geneAccessionComp() method from the Gene class
	 *
	 * @todo Think to a new version of this test
	 *
	 * @uses \bcGen\MainBundle\Entity\Gene::geneAccessionComp()
	 */
	public function testGeneAccessionComp7() {
		echo ("\n********************Test GeneAccessionComp7()***********************************************\n");
	
		$result = 0;
			
		$result = \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[5], $this->genes[1] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[5], $this->genes[2] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[5], $this->genes[3] );
		$result += \bcGen\MainBundle\Entity\Gene::geneAccessionComp( $this->genes[5], $this->genes[4] );
	
		$this->assertEquals ( 4, $result);
	
	}
	
	
} // CLASS END

?>
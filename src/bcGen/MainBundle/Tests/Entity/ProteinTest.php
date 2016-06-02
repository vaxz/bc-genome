<?php

/**
 * ProteinTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\Protein;
use bcGen\MainBundle\Entity\Gene;

/**
 * ProteinTest class gathers all the unit tests linked to the Protein class.
 *
 * @link https://phpunit.de/manual/current/en/index.html    This link gives details on how to use PHPunit
 * 
 * @see \bcGen\MainBundle\Entity\Protein                   Class Protein 
 * @see \bcGen\MainBundle\Entity\Gene                      Class Gene
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class ProteinTest extends \PHPUnit_Framework_TestCase {
	
	
	/**
	 * 
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedprotein
	 */
	private $stubedProtein;
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\Protein $protein
	 */
	private $protein;
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\Gene $gene
	 */
	private $gene;
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::setUp()
	 * @uses PHPUnit_Framework_TestCase::getMock()
	 */
	public function setUp() {
		$this->stubedProtein = $this->getMock ( "bcGen\MainBundle\Entity\Protein" );
		$this->protein = new Protein();
		$this->gene = new Gene ();		
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->stubedProtein  = null;
		$this->protein = null;
		$this->gene = null;		
	}
	
	/**
	 * Test the getId() method from the Protein class
	 *
	 * @uses \bcGen\MainBundle\Entity\Protein::getId()
	 */
	public function testGetId() {
		echo ("\n********************Test GetId()************************************************************\n");
	
		$this->stubedProtein->method ( 'getId' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedProtein->getId () );
	}
	
	/**
	 * Test the getProteinSeq() method from the Protein class
	 *
	 * @uses \bcGen\MainBundle\Entity\Protein::getProteinSeq()
	 */
	public function testGetProteinSeq() {
		echo ("\n********************Test GetProteinSeq()****************************************************\n");
	
		$this->stubedProtein->method ( 'getProteinSeq' )->willReturn ( 'getProteinSeq' );
		$this->assertEquals ( 'getProteinSeq', $this->stubedProtein->getProteinSeq() );
	}
	
	/**
	 * Test the getProteinAccession() method from the Protein class
	 *
	 * @uses \bcGen\MainBundle\Entity\Protein::getProteinAccession()
	 */
	public function testGetProteinAccession() {
		echo ("\n********************Test GetProteinAccession()**********************************************\n");
	
		$this->stubedProtein->method ( 'getProteinAccession' )->willReturn ( 'getProteinAccession' );
		$this->assertEquals ( 'getProteinAccession', $this->stubedProtein->getProteinAccession() );
	}
	
	/**
	 * Test the getProteinGene() method from the Protein class
	 *
	 * @uses \bcGen\MainBundle\Entity\Protein::getProteinGene()
	 */
	public function testGetProteinGene() {
		echo ("\n********************Test GetProteinGene()***************************************************\n");
	
		$this->stubedProtein->method ( 'getProteinGene' )->willReturn ( $this->gene );
		$this->assertEquals ( $this->gene, $this->stubedProtein->getProteinGene() );
	}
	
	/**
	 * Test the setProteinSeq method from the Protein class
	 *
	 * @uses \bcGen\MainBundle\Entity\Protein::setProteinSeq()
	 */
	public function testSetGeneSeq() {
		echo ("\n********************Test SetProteinSeq()****************************************************\n");
	
		$this->protein->setProteinSeq( 'setProteinSeq' );
		$this->assertEquals ( 'setProteinSeq', $this->protein->getProteinSeq() );
	}
	
	/**
	 * Test the setProteinAccession method from the Protein class
	 *
	 * @uses \bcGen\MainBundle\Entity\Protein::setProteinAccession()
	 */
	public function testSetProteinAccession() {
		echo ("\n********************Test SetProteinAccession()**********************************************\n");
	
		$this->protein->setProteinAccession( 'setProteinAccession' );
		$this->assertEquals ( 'setProteinAccession', $this->protein->getProteinAccession() );
	}
	
	/**
	 * Test the setProteinGene method from the Protein class
	 *
	 * @uses \bcGen\MainBundle\Entity\Protein::setProteinGene()
	 */
	public function testSetProteinGene() {
		echo ("\n********************Test SetProteinGene()***************************************************\n");
	
		$this->protein->setProteinGene( $this->gene );
		$this->assertEquals ( $this->gene, $this->protein->getProteinGene() );
	}
	
	
}// CLASS END

?>
<?php

/**
 * ChromosomeTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\Chromosome;
use bcGen\MainBundle\Entity\Publication;

/**
 * ChromosomeTest class gathers all the unit tests linked to the Chromosome class.
 *
 * @uses https://phpunit.de/manual/current/en/index.html This link gives details on how to use PHPunit
 * 
 * @see \bcGen\MainBundle\Entity\Chromosome       Class Chromosome
 * @see \bcGen\MainBundle\Entity\Publication      Class Publication
 *     
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 */
class ChromosomeTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedAnnotation
	 */
	private $stubedChromosome;
	
	/**
	 *
	 * @var \bcGen\MainBundle\Entity\Chromosome $chromosome
	 */
	private $chromosome;
	
	/**
	 *
	 * @var \bcGen\MainBundle\Entity\Publication $publication
	 */
	private $publication;
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::setUp()
	 * @uses PHPUnit_Framework_TestCase::getMock()
	 */
	public function setUp() {
		$this->chromosome = new Chromosome ();
		$this->publication = new Publication();
		$this->stubedChromosome = $this->getMock ( "bcGen\MainBundle\Entity\Chromosome" );
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->chromosome = null;
		$this->publication = null;
		$this->stubedChromosome = null;
	}
	
	/**
	 * Test the getId() method from the Chromosome class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Chromosome::getId()
	 */
	public function testGetId() {
		echo ("\n********************Test GetId()*********************************************************\n");
		
		$this->stubedChromosome->method ( 'getId' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedChromosome->getId () );
	}
	
	/**
	 * Test the getChromosomeSeq() method from the Chromosome class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Chromosome::getChromosomeSeq()
	 */
	public function testGetChromosomeSeq() {
		echo ("\n********************Test GetChromosomeSeq()**********************************************\n");
		
		$this->stubedChromosome->method ( 'getChromosomeSeq' )->willReturn ( "getChromosomeSeq" );
		$this->assertEquals ( "getChromosomeSeq", $this->stubedChromosome->getChromosomeSeq () );
	}
	
	/**
	 * Test the getChromosomeSource() method from the Chromosome class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Chromosome::getChromosomeSource()
	 */
	public function testGetChromosomeSource() {
		echo ("\n********************Test GetChromosomeSource()*******************************************\n");
		
		$tmp = '';
		
		$this->stubedChromosome->method ( 'getChromosomeSource' )->willReturn ( $this->publication );
		$tmp = get_class ( $this->stubedChromosome->getChromosomeSource () );
		$this->assertEquals ( $tmp, "bcGen\MainBundle\Entity\Publication" );
	}
	
	/**
	 * Test the setId() method from the Chromosome class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Chromosome::setId()
	 */
	public function testSetId() {
		echo ("\n********************Test SetId()*********************************************************\n");
		
		$this->chromosome->setId ( 2 );
		$this->assertEquals ( 2, $this->chromosome->getId () );
	}
	
	/**
	 * Test the setChromosomeSeq() method from the Chromosome class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Chromosome::getChromosomeSeq()
	 */
	public function testSetChromosomeSeq() {
		echo ("\n********************Test SetChromosomeSeq()**********************************************\n");
		
		$this->chromosome->setChromosomeSeq ( "setChromosomeSeq" );
		$this->assertEquals ( "setChromosomeSeq", $this->chromosome->getChromosomeSeq ( "setChromosomeSeq" ) );
	}
	
	/**
	 * Test the setChromosomeSource() method from the Chromosome class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Chromosome::setChromosomeSource()
	 * @uses \bcGen\MainBundle\Entity\Source Class Source
	 */
	public function testSetChromosomeSource() {
		echo ("\n********************Test SetChromosomeSource()*******************************************\n");
		
		$this->chromosome->setChromosomeSource ( $this->publication );
		$this->assertFalse ( empty ( $this->chromosome->getChromosomeSource () ) );
	}
} // END CLASS
?>
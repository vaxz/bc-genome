<?php

/**
 * LocusChromosomeTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\LocusChromosome;
use bcGen\MainBundle\Entity\Locus;
use bcGen\MainBundle\Entity\Chromosome;

/**
 * LocusChromosomeTest class gathers all the unit tests linked to the LocusChromosome class.
 *
 * @link https://phpunit.de/manual/current/en/index.html This link gives details on how to use PHPunit
 * 
 * @see \bcGen\MainBundle\Entity\LocusChromosome    Class LocusChromosome
 * @see \bcGen\MainBundle\Entity\Locus              Class Locus
 * @see \bcGen\MainBundle\Entity\Chromosome         Class Chromosome
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class LocusChromosomeTest extends \PHPUnit_Framework_TestCase {
	
	
	
	/**
	 * 
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedLocusChromosome
	 */
	private $stubedLocusChromosome;
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\LocusChromosome $locusChromosome
	 */
	private $locusChromosome;
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\Locus $locus
	 */
	private $locus;
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\Chromosome $chromosome
	 */
	private $chromosome;
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::setUp()
	 * @uses PHPUnit_Framework_TestCase::getMock()
	 */
	public function setUp() {
		$this->stubedLocusChromosome = $this->getMock ( "bcGen\MainBundle\Entity\LocusChromosome" );
		$this->locusChromosome = new LocusChromosome();
		$this->locus = new Locus();
		$this->chromosome = new Chromosome();
		
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->stubedLocusChromosome = null;
		$this->locusChromosome = null;
		$this->locus = null;
		$this->chromosome = null;
	}
	
	/**
	 * Test the getPositionLocusBp() method from the LocusChromosome class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromosome::getPositionLocusBp()
	 */
	public function testGetPositionLocusBp() {
		echo ("\n********************Test GetPositionLocusBp()**********************************************\n");
	
		$this->stubedLocusChromosome->method ( 'getPositionLocusBp' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedLocusChromosome->getPositionLocusBp() );
	}
	
	/**
	 * Test the getDirectStrand() method from the LocusChromosome class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromosome::getDirectStrand()
	 */
	public function testGetDirectStrand() {
		echo ("\n********************Test GetDirectStrand()*************************************************\n");
	
		$this->stubedLocusChromosome->method ( 'getDirectStrand' )->willReturn ( TRUE );
		$this->assertTrue( $this->stubedLocusChromosome->getDirectStrand() );
	}
	
	/**
	 * Test the getLocusChromosomeFkLocus() method from the LocusChromosome class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromosome::getLocusChromosomeFkLocus()
	 */
	public function testGetLocusChromosomeFkLocus() {
		echo ("\n********************Test GetLocusChromosomeFkLocus()***************************************\n");
	
		$this->stubedLocusChromosome->method ( 'getLocusChromosomeFkLocus' )->willReturn( $this->locus );
		$this->assertEquals ( $this->locus, $this->stubedLocusChromosome->getLocusChromosomeFkLocus() );
	}
	
	/**
	 * Test the getLocusChromosomeFkChromosome() method from the LocusChromosome class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromosome::getLocusChromosomeFkChromosome()
	 */
	public function testGetLocusChromosomeFkChromosome() {
		echo ("\n********************Test GetLocusChromosomeFkChromosome()**********************************\n");
	
		$this->stubedLocusChromosome->method( 'getLocusChromosomeFkChromosome' )->willReturn( $this->chromosome );
		$this->assertEquals ( $this->chromosome, $this->stubedLocusChromosome->getLocusChromosomeFkChromosome() );
	}
	
	/**
	 * Test the setPositionLocusBp() method from the LocusChromosome class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromosome::setPositionLocusBp()
	 */
	public function testSetPositionLocusBp() {
		echo ("\n********************Test SetPositionLocusBp()**********************************************\n");
	
		$this->locusChromosome->setPositionLocusBp( 1 );
		$this->assertEquals ( 1, $this->locusChromosome->getPositionLocusBp() );
	}
	
	/**
	 * Test the setDirectStrand() method from the LocusChromosome class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromosome::setDirectStrand()
	 */
	public function testSetDirectStrand1() {
		echo ("\n********************Test SetDirectStrand()*************************************************\n");
	
		$this->locusChromosome->setDirectStrand( TRUE );
		$this->assertTrue( $this->locusChromosome->getDirectStrand() );
	}
	
	/**
	 * Test the setDirectStrand() method from the LocusChromosome class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromosome::setDirectStrand()
	 */
	public function testSetDirectStrand2() {
		echo ("\n********************Test SetDirectStrand()*************************************************\n");
	
		$this->locusChromosome->setDirectStrand( FALSE );
		$this->assertFalse( $this->locusChromosome->getDirectStrand() );
	}
	
	/**
	 * Test the setLocusChromosomeFkChromosome() method from the LocusChromosome class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromosome::setLocusChromosomeFkChromosome()
	 */
	public function testSetLocusChromosomeFkChromosome() {
		echo ("\n********************Test SetLocusChromosomeFkChromosome()**********************************\n");
	
		$this->locusChromosome->setLocusChromosomeFkChromosome( $this->chromosome );
		$this->assertEquals ( $this->chromosome, $this->locusChromosome->getLocusChromosomeFkChromosome() );
	}
	
	/**
	 * Test the setLocusChromosomeFkLocus() method from the LocusChromosome class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromosome::setLocusChromosomeFkLocus()
	 */
	public function testSetLocusChromosomeFkLocus() {
		echo ("\n********************Test SetLocusChromosomeFkLocus()***************************************\n");
	
		$this->locusChromosome->setLocusChromosomeFkLocus( $this->locus );
		$this->assertEquals ( $this->locus, $this->locusChromosome->getLocusChromosomeFkLocus() );
	}
	
	
	
}//CLASS END

?>
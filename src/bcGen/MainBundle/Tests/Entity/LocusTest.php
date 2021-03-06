<?php

/**
 * LocusTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\Locus;
use bcGen\MainBundle\Entity\Gene;

/**
 * LocusTest class gathers all the unit tests linked to the Locus class.
 *
 * @uses https://phpunit.de/manual/current/en/index.html   This link gives details on how to use PHPunit
 * 
 * @see \bcGen\MainBundle\Entity\Locus                    Class Locus
 * @see \bcGen\MainBundle\Entity\Gene                     Class Gene
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class LocusTest extends \PHPUnit_Framework_TestCase {

	/**
	 * 
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedLocus
	 */
	private $stubedLocus;
	
	/**
	 *
	 * @var \bcGen\MainBundle\Entity\Locus $locus
	 */
	private $locus;

	
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
		$this->stubedLocus= $this->getMock ( "bcGen\MainBundle\Entity\Locus" );
		$this->locus = new Locus();
		$this->gene = new Gene();
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->stubedLocus = null;
		$this->locus = null;
		$this->gene = null;
	}
	
	/**
	 * Test the getId() method from the Locus class
	 *
	 * @uses \bcGen\MainBundle\Entity\Locus::getId()
	 */
	public function testGetId() {
		echo ("\n********************Test GetId()************************************************************\n");
	
		$this->stubedLocus->method( 'getId' )->willReturn ( 1 );
		$this->assertEquals( 1, $this->stubedLocus->getId() );
	}
	
	/**
	 * Test the getGeneName() method from the Locus class
	 *
	 * @uses \bcGen\MainBundle\Entity\Locus::getGeneName()
	 */
	public function testGetGeneName() {
		echo ("\n********************Test GetGeneName()******************************************************\n");
	
		$this->stubedLocus->method( 'getGeneName' )->willReturn ( 'getGeneName' );
		$this->assertEquals( 'getGeneName', $this->stubedLocus->getGeneName() );
	}
	
	/**
	 * Test the getLocusDesc() method from the Locus class
	 *
	 * @uses \bcGen\MainBundle\Entity\Locus::getLocusDesc()
	 */
	public function testGetLocusDesc() {
		echo ("\n********************Test GetLocusDesc()*****************************************************\n");
	
		$this->stubedLocus->method( 'getLocusDesc' )->willReturn ( 'getLocusDesc' );
		$this->assertEquals( 'getLocusDesc', $this->stubedLocus->getLocusDesc() );
	}
	
	/**
	 * Test the getLocusGenes() method from the Locus class
	 *
	 * @uses \bcGen\MainBundle\Entity\Locus::getLocusGenes()
	 */
	public function testGetLocusGenes() {
		echo ("\n********************Test GetLocusGenes()****************************************************\n");
	
		$this->stubedLocus->method( 'getLocusGenes' )->willReturn ( $this->gene );
		$tmp = get_class ( $this->gene );
		$this->assertEquals( $tmp, "bcGen\MainBundle\Entity\Gene" );
	}
	
	/**
	 * Test the setId() method from the Locus class
	 *
	 * @uses \bcGen\MainBundle\Entity\Locus::setId()
	 */
	public function testSetId() {
		echo ("\n********************Test SetId()************************************************************\n");
	
		$this->locus->setId( 120000 );
		$this->assertEquals ( 120000, $this->locus->getId() );
	}
	
	/**
	 * Test the setGeneName() method from the Locus class
	 *
	 * @uses \bcGen\MainBundle\Entity\Locus::setGeneName()
	 */
	public function testSetGeneName() {
		echo ("\n********************Test SetGeneName()******************************************************\n");
	
		$this->locus->setGeneName( 'setGeneName' );
		$this->assertEquals ( 'setGeneName', $this->locus->getGeneName() );
	}
	
	/**
	 * Test the setLocusDesc() method from the Locus class
	 *
	 * @uses \bcGen\MainBundle\Entity\Locus::setLocusDesc()
	 */
	public function testSetLocusDesc() {
		echo ("\n********************Test SetLocusDesc()*****************************************************\n");
	
		$this->locus->setLocusDesc( 'setLocusDesc' );
		$this->assertEquals ( 'setLocusDesc', $this->locus->getLocusDesc() );
	}
	
	/**
	 * Test the addLocusGenes() method from the Locus class
	 *
	 * @uses \bcGen\MainBundle\Entity\Locus::addLocusGenes()
	 */
	public function testAddLocusGenes() {
		echo ("\n********************Test AddLocusGenes()****************************************************\n");
	
		$result = - 1;
	
		$this->locus->addLocusGenes( $this->gene );
		$result = $this->locus->getLocusGenes()->count ();
	
		$this->assertEquals ( 1, $result );
	}
	
	/**
	 * Test the removeLocusGenes() method from the Locus class
	 *
	 * @uses \bcGen\MainBundle\Entity\Locus::removeLocusGenes()
	 */
	public function testRemoveLocusGenes() {
		echo ("\n********************Test RemoveLocusGenes()*************************************************\n");
	
		$result = - 1;
	
		$this->locus->addLocusGenes( $this->gene );
		$this->locus->removeLocusGenes( $this->gene );
		$result = $this->locus->getLocusGenes()->count();
	
		$this->assertEquals ( 0, $result );
	}
	
	
}//CLASS END

?>
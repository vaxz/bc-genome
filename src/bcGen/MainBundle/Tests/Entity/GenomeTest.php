<?php

/**
* GenomeTest.php
*
* @copyright --------
* @license   --------
* @link      --------
*
*/
namespace bcGen\MainBundle\Tests\Entity;


use bcGen\MainBundle\Entity\Genome;
use bcGen\MainBundle\Entity\Publication;

/**
 * GenomeTest class gathers all the unit tests linked to the Genome class.
 *
 * @link https://phpunit.de/manual/current/en/index.html    This link gives details on how to use PHPunit
 * 
 * @see \bcGen\MainBundle\Entity\Genome       Class Genome
 * @see \bcGen\MainBundle\Entity\Publication  Class Publication
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class GenomeTest extends \PHPUnit_Framework_TestCase {
	
	
	/**
	 *
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedGenome
	 */
	private $stubedGenome;
	
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
		$this->stubedGenome = $this->getMock ( "bcGen\MainBundle\Entity\Genome" );
		$this->genome = new Genome ();
		$this->publication = new Publication();
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->stubedGenome = null;
		$this->genome = null;
		$this->publication = null;
	}	
	
	/**
	 * Test the getId() method from the Genome class
	 *
	 * @uses \bcGen\MainBundle\Entity\Genome::getId()
	 */
	public function testGetId() {
		echo ("\n********************Test GetId()************************************************************\n");
	
		$this->stubedGenome->method ( 'getId' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedGenome->getId () );
	}
	
	/**
	 * Test the getGenomeDesc method from the Genome class
	 *
	 * @uses \bcGen\MainBundle\Entity\Genome::getGenomeDesc()
	 */
	public function testGetGenomeDesc() {
		echo ("\n********************Test GetGenomeDesc()****************************************************\n");
	
		$this->stubedGenome->method ( 'getGenomeDesc' )->willReturn ( 'getGenomeDesc' );
		$this->assertEquals ( 'getGenomeDesc', $this->stubedGenome->getGenomeDesc() );
	}
	
	/**
	 * Test the getGenomeSource method from the Genome class
	 *
	 * @uses \bcGen\MainBundle\Entity\Genome::getGenomeSource()
	 */
	public function testGetGenomeSource() {
		echo ("\n********************Test GenomeSource()*****************************************************\n");
	
		$this->stubedGenome->method ( 'getGenomeSource' )->willReturn ( $this->publication );
		$this->assertEquals ( $this->publication, $this->stubedGenome->getGenomeSource() );
	}
	
	/**
	 * Test the setGenomeDesc() method from the Genome class
	 *
	 * @uses \bcGen\MainBundle\Entity\Genome::setGenomeDesc()
	 */
	public function testSetGenomeDesc() {
		echo ("\n********************Test SetGenomeDesc()****************************************************\n");
	
		$this->genome->setGenomeDesc( 'setGenomeDesc' );
		$this->assertEquals ( 'setGenomeDesc', $this->genome->getGenomeDesc() );
	}
	
	/**
	 * Test the setGenomeSource() method from the Genome class
	 *
	 * @uses \bcGen\MainBundle\Entity\Genome::setGenomeSource()
	 */
	public function testSetGenomeSource() {
		echo ("\n********************Test SetGenomeSource()**************************************************\n");
	
		$this->genome->setGenomeSource( $this->publication );
		$this->assertEquals ( $this->publication, $this->genome->getGenomeSource() );
	}	
	
}//CLASS END   
?>
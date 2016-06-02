<?php
    
/**
 * PublicationTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\Publication;

/**
 * PublicationTest class gathers all the unit tests linked to the Publication class and the Source class.
 * The Source class is abstract
 *
 * @link https://phpunit.de/manual/current/en/index.html     This link gives details on how to use PHPunit
 *
 * @see \bcGen\MainBundle\Entity\Publication                Class Publication
 * @see \bcGen\MainBundle\Entity\Source                     Class Source 
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class PublicationTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 * 
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedPublication;
	 */
	private $stubedPublication;
	
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
		$this->stubedPublication = $this->getMock ( "bcGen\MainBundle\Entity\Publication" );
		$this->publication = new Publication();
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->stubedPublication = null;
		$this->publication = null;
	}
	
	/**
	 * Test the getPubHref() method from the Publication class
	 *
	 * @uses \bcGen\MainBundle\Entity\Publication::getPubHref()
	 */
	public function testGetPubHref() {
		echo ("\n********************Test GetPubHref()*******************************************************\n");
	
		$this->stubedPublication->method ( 'getPubHref' )->willReturn ( 'getPubHref' );
		$this->assertEquals ( 'getPubHref', $this->stubedPublication->getPubHref() );
	}
	
	/**
	 * Test the setPubHref() method from the Publication class
	 *
	 * @uses \bcGen\MainBundle\Entity\Publication::setPubHref()
	 */
	public function testSetPubHref() {
		echo ("\n********************Test SetPubHref()*******************************************************\n");
	
		$this->publication->setPubHref( 'setPubHref' );
		$this->assertEquals ( 'setPubHref', $this->publication->getPubHref() );
	}

	
/******************************************************************************************************************	
									Tests linked to the Source class                                              *
******************************************************************************************************************/	

	
	/**
	 * Test the getId() method from the Source class
	 *
	 * @uses \bcGen\MainBundle\Entity\Source::getId()
	 */
	public function testGetId() {
		echo ("\n********************Test GetId()************************************************************\n");
	
		$this->stubedPublication->method ( 'getId' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedPublication->getId () );
	}
	
	/**
	 * Test the getSourceTitle() method from the Source class
	 *
	 * @uses \bcGen\MainBundle\Entity\Source::getSourceTitle()
	 */
	public function testGetSourceTitle() {
		echo ("\n********************Test GetSourceTitle()***************************************************\n");
	
		$this->stubedPublication->method ( 'getSourceTitle' )->willReturn ( 'getSourceTitle' );
		$this->assertEquals ( 'getSourceTitle', $this->stubedPublication->getSourceTitle() );
	}
	
	/**
	 * Test the getSourceYear() method from the Source class
	 *
	 * @uses \bcGen\MainBundle\Entity\Source::getSourceYear()
	 */
	public function testGetSourceYear() {
		echo ("\n********************Test GetSourceYear()****************************************************\n");
	
		$tmp = new \DateTime();
		
		$this->stubedPublication->method ( 'getSourceYear' )->willReturn ( $tmp );
		$this->assertEquals ( $tmp, $this->stubedPublication->getSourceYear() );
	}
	
	/**
	 * Test the getSourceAuthor() method from the Source class
	 *
	 * @uses \bcGen\MainBundle\Entity\Source::getSourceAuthor()
	 */
	public function testGetSourceAuthor() {
		echo ("\n********************Test GetSourceAuthor()**************************************************\n");
	
		$this->stubedPublication->method ( 'getSourceAuthor' )->willReturn ( 'getSourceAuthor' );
		$this->assertEquals ( 'getSourceAuthor', $this->stubedPublication->getSourceAuthor() );
	}
	
	/**
	 * Test the setSourceTitle() method from the Source class
	 *
	 * @uses \bcGen\MainBundle\Entity\Source::setSourceTitle()
	 */
	public function testSetSourceTitle() {
		echo ("\n********************Test SetSourceTitle()****************************************************\n");
	
		$this->publication->setSourceTitle( 'setSourceTitle' );
		$this->assertEquals ( 'setSourceTitle', $this->publication->getSourceTitle() );
	}
	
	/**
	 * Test the setSourceYear() method from the Source class
	 *
	 * @uses \bcGen\MainBundle\Entity\Source::setSourceYear()
	 */
	public function testSetSourceYear() {
		echo ("\n********************Test SetSourceYear()****************************************************\n");
	
		$tmp = new \DateTime();
		
		$this->publication->setSourceYear( $tmp );
		$this->assertEquals ( $tmp, $this->publication->getSourceYear() );
	}
	
	/**
	 * Test the setSourceAuthor() method from the Source class
	 *
	 * @uses \bcGen\MainBundle\Entity\Source::setSourceAuthor()
	 */
	public function testSetSourceAuthor() {
		echo ("\n********************Test SetSourceAuthor()****************************************************\n");
	
		$this->publication->setSourceAuthor( 'setSourceAuthor' );
		$this->assertEquals ( 'setSourceAuthor', $this->publication->getSourceAuthor() );
	}
	
	
	
	
}//END CLASS
?>
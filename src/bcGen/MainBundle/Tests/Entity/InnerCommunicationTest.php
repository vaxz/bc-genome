<?php
/**
 * InnerCommunicationTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\InnerCommunication;

/**
 * InnerCommunicationTest class gathers all the unit tests linked to the InnerCommunication class.
 *
 * @link https://phpunit.de/manual/current/en/index.html     This link gives details on how to use PHPunit
 *
 * @see \bcGen\MainBundle\Entity\InnerCommunication         Class InnerCommunication
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class InnerCommunicationTest extends \PHPUnit_Framework_TestCase {

	/**
	 *
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedInnerCommunication
	 */
	private $stubedInnerCommunication;	
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\InnerCommunication $innerCommunication
	 */
	private $innerCommunication;	
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::setUp()
	 * @uses PHPUnit_Framework_TestCase::getMock()
	 */
	public function setUp() {
		$this->stubedInnerCommunication = $this->getMock ( "bcGen\MainBundle\Entity\InnerCommunication" );
		$this->innerCommunication = new InnerCommunication();
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->stubedInnnerCommunication = null;
		$this->innerCommunication = null;
	}
	
	/**
	 * Test the getInnerComDesc() method from the InnerCommunication class
	 *
	 * @uses \bcGen\MainBundle\Entity\InnerCommunication::getInnerComDesc()
	 */
	public function testGetInnerComDesc() {
		echo ("\n********************Test GetInnerComDesc()***************************************************\n");
	
		$this->stubedInnerCommunication->method ( 'getInnerComDesc' )->willReturn ( 'getInnerComDesc' );
		$this->assertEquals ( 'getInnerComDesc', $this->stubedInnerCommunication->getInnerComDesc() );
	}
	
	/**
	 * Test the setInnerComDesc() method from the InnerCommunication class
	 *
	 * @uses \bcGen\MainBundle\Entity\Condition::setInnerComDesc()
	 */
	public function testSetInnerComDesc() {
		echo ("\n********************Test SetInnerComDesc()***************************************************\n");
	
		$this->innerCommunication->setInnerComDesc( 'setInnerComDesc' );
		$this->assertEquals ( 'setInnerComDesc', $this->innerCommunication->getInnerComDesc() );
	}
	
	
}//CLASS END

?>
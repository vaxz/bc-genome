<?php
    
/**
 * ProteinAnnotationTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\ProteinAnnotation;
use bcGen\MainBundle\Entity\Annotation;
use bcGen\MainBundle\Entity\Protein;


/**
 * ProteinAnnotationTest class gathers all the unit tests linked to the ProteinAnnotation class.
 *
 * @link https://phpunit.de/manual/current/en/index.html      This link gives details on how to use PHPunit
 * 
 * @see \bcGen\MainBundle\Entity\ProteinAnnotation           Class ProteinAnnotation
 * @see \bcGen\MainBundle\Entity\Annotation                  Class Annotation
 * @see \bcGen\MainBundle\Entity\Protein                     Class Protein
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class ProteinAnnotationTest extends \PHPUnit_Framework_TestCase {

	/**
	 * 
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedProteinAnnotation
	 */
	private $stubedProteinAnnotation;
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\ProteinAnnotation $proteinAnnotation
	 */
	private $proteinAnnotation;
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\Annotation $annotation
	 */
	private $annotation;
	
	/**
	 * 
	 * @var \bcGen\MainBundle\Entity\Protein $protein
	 */
	private $protein;	
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::setUp()
	 * @uses PHPUnit_Framework_TestCase::getMock()
	 */
	public function setUp() {
		$this->stubedProteinAnnotation = $this->getMock ( "bcGen\MainBundle\Entity\ProteinAnnotation" );
		$this->proteinAnnotation = new ProteinAnnotation();
		$this->annotation = new Annotation();
		$this->protein = new Protein();
		
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->stubedProteinAnnotation = null;
		$this->proteinAnnotation = null;
		$this->annotation = null;
		$this->protein = null;
	}
	
	/**
	 * Test the getStartPosition() method from the ProteinAnnotation class
	 *
	 * @uses \bcGen\MainBundle\Entity\ProteinAnnotation::getStartPosition()
	 */
	public function testGetStartPosition() {
		echo ("\n********************Test GetStartPosition()***************************************************\n");
	
		$this->stubedProteinAnnotation->method ( 'getStartPosition' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedProteinAnnotation->getStartPosition() );
	}
	
	/**
	 * Test the getEndPosition() method from the ProteinAnnotation class
	 *
	 * @uses \bcGen\MainBundle\Entity\ProteinAnnotation::getEndPosition()
	 */
	public function testGetEndPosition() {
		echo ("\n********************Test GetEndPosition()*****************************************************\n");
	
		$this->stubedProteinAnnotation->method ( 'getEndPosition' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedProteinAnnotation->getEndPosition() );
	}
	
	/**
	 * Test the getProteinAnnotationFkProtein() method from the ProteinAnnotation class
	 *
	 * @uses \bcGen\MainBundle\Entity\ProteinAnnotation::getProteinAnnotationFkProtein()
	 */
	public function testGetProteinAnnotationFkProtein() {
		echo ("\n********************Test GetProteinAnnotationFkProtein()**************************************\n");
	
		$this->stubedProteinAnnotation->method ( 'getProteinAnnotationFkProtein' )->willReturn ( $this->protein );
		$this->assertEquals ( $this->protein, $this->stubedProteinAnnotation->getProteinAnnotationFkProtein() );
	}
	
	/**
	 * Test the getProteinAnnotationFkAnnotation() method from the ProteinAnnotation class
	 *
	 * @uses \bcGen\MainBundle\Entity\ProteinAnnotation::getProteinAnnotationFkAnnotation()
	 */
	public function testGetProteinAnnotationFkAnnotation() {
		echo ("\n********************Test GetProteinAnnotationFkAnnotation()***********************************\n");
	
		$this->stubedProteinAnnotation->method ( 'getProteinAnnotationFkAnnotation' )
									  ->willReturn ( $this->annotation );
		$this->assertEquals ( $this->annotation,
				              $this->stubedProteinAnnotation->getProteinAnnotationFkAnnotation() );
	}
	
	/**
	 * Test the setStartPosition() method from the ProteinAnnotation class
	 *
	 * @uses \bcGen\MainBundle\Entity\ProteinAnnotation::setStartPosition()
	 */
	public function testSetStartPosition() {
		echo ("\n********************Test SetStartPosition()***************************************************\n");
	
		$this->proteinAnnotation->setStartPosition(1);
		$this->assertEquals ( 1, $this->proteinAnnotation->getStartPosition() );
	}
	
	/**
	 * Test the setEndPosition() method from the ProteinAnnotation class
	 *
	 * @uses \bcGen\MainBundle\Entity\ProteinAnnotation::setEndPosition()
	 */
	public function testSetEndPosition() {
		echo ("\n********************Test SetEndPosition()*****************************************************\n");
	
		$this->proteinAnnotation->setEndPosition( 1 );
		$this->assertEquals ( 1, $this->proteinAnnotation->getEndPosition() );
	}
	
	/**
	 * Test the setProteinAnnotationFkProtein() method from the ProteinAnnotation class
	 *
	 * @uses \bcGen\MainBundle\Entity\ProteinAnnotation::setProteinAnnotationFkProtein()
	 */
	public function testSetProteinAnnotationFkProtein() {
		echo ("\n********************Test SetProteinAnnotationFkProtein()**************************************\n");
	
		$this->proteinAnnotation->setProteinAnnotationFkProtein( $this->protein );
		$this->assertEquals ( $this->protein, $this->proteinAnnotation->getProteinAnnotationFkProtein() );
	}
	
	/**
	 * Test the setProteinAnnotationFkAnnotation() method from the ProteinAnnotation class
	 *
	 * @uses \bcGen\MainBundle\Entity\ProteinAnnotation::setProteinAnnotationFkAnnotation()
	 */
	public function testSetProteinAnnotationFkAnnotation() {
		echo ("\n********************Test SetProteinAnnotationFkAnnotation()***********************************\n");
	
		$this->proteinAnnotation->setProteinAnnotationFkAnnotation( $this->annotation );
		$this->assertEquals ( $this->annotation, $this->proteinAnnotation->getProteinAnnotationFkAnnotation() );
	}
	
	
}//CLASS END

?>
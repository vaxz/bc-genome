<?php

/**
 * AnnotationTest.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\Annotation;
use bcGen\MainBundle\Entity\Publication;

/**
 * AnnotationTest class gathers all the unit tests linked to the Annotation class.
 *
 * @link https://phpunit.de/manual/current/en/index.html This link gives details on how to use PHPunit
 * 
 * @see \bcGen\MainBundle\Entity\Annotation       Class Annotation
 * @see \bcGen\MainBundle\Entity\Publication      Class Publication
 *     
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 */
class AnnotationTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedAnnotation
	 */
	private $stubedAnnotation;
	
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
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::setUp()
	 * @uses PHPUnit_Framework_TestCase::getMock()
	 */
	public function setUp() {
		$this->annotation = new Annotation ();
		$this->publication = new Publication();
		
		$this->stubedAnnotation = $this->getMock ( "bcGen\MainBundle\Entity\Annotation" );
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->stubedAnnotation = null;
		$this->annotation = null;
		$this->publication = null;
	}
	
	/**
	 * Test the getId() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::getId()
	 */
	public function testGetId() {
		echo ("\n********************Test GetId()**********************************************************\n");
		
		$this->stubedAnnotation->method ( 'getId' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedAnnotation->getId () );
	}
	
	/**
	 * Test the getAnnotationTitle() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::getTitle()
	 */
	public function testGetAnnotationTitle() {
		echo ("\n********************Test GetAnnotationTitle()*********************************************\n");
		
		$this->stubedAnnotation->method ( 'getAnnotationTitle' )->willReturn ( "Title" );
		$this->assertEquals ( "Title", $this->stubedAnnotation->getAnnotationTitle () );
	}
	
	/**
	 * Test the getAnnotationDesc() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::getDesc()
	 */
	public function testGetAnnotationDesc() {
		echo ("\n********************Test GetAnnotationDesc()**********************************************\n");
		
		$this->stubedAnnotation->method ( 'getAnnotationDesc' )->willReturn ( "Desc" );
		$this->assertEquals ( "Desc", $this->stubedAnnotation->getAnnotationDesc () );
	}
	
	/**
	 * Test the getAnnotationPublic() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::getAnnotationPublic()
	 */
	public function testGetAnnotationPublic() {
		echo ("\n********************Test GetAnnotationPublic()********************************************\n");
		
		$this->stubedAnnotation->method ( 'getAnnotationPublic' )->willReturn ( TRUE );
		$this->assertTrue( $this->stubedAnnotation->getAnnotationPublic () );
	}
	
	/**
	 * Test the getAnnotationType() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::getAnnotationType()
	 */
	public function testGetAnnotationType() {
		echo ("\n********************Test GetAnnotationType()**********************************************\n");
		
		$this->stubedAnnotation->method ( 'getAnnotationType' )->willReturn ( "Protein" );
		$this->assertEquals ( "Protein", $this->stubedAnnotation->getAnnotationType () );
	}
	
	/**
	 * Test the getAnnotationSources() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::getAnnotationSources()
	 */
	public function testGetAnnotationSources() {
		echo ("\n********************Test GetAnnotationSources()*******************************************\n");
		
		$tmp = get_class ( $this->annotation->getAnnotationSources () );
		$this->assertEquals ( $tmp, "Doctrine\Common\Collections\ArrayCollection" );
	}
	
	/**
	 * Test the setAnnotationTitle() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::setAnnotationTitle()
	 */
	public function testSetAnnotationTitle() {
		echo ("\n********************Test SetAnnotationTitle()*********************************************\n");
		
		$this->annotation->setAnnotationTitle ( "Test setAnnotationTitle()" );
		$this->assertEquals ( "Test setAnnotationTitle()", $this->annotation->getAnnotationTitle() );
	}
	
	/**
	 * Test the setAnnotationDesc() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::setAnnotationDesc()
	 */
	public function testSetAnnotationDesc() {
		echo ("\n********************Test SetAnnotationDesc()**********************************************\n");
		
		$this->annotation->setAnnotationDesc ( "Test setAnnotationDesc()" );
		$this->assertEquals ( "Test setAnnotationDesc()", $this->annotation->getAnnotationDesc () );
	}
	
	/**
	 * Test the setAnnotationPublic() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::setAnnotationPublic()
	 */
	public function testSetAnnotationPublic1() {
		echo ("\n********************Test SetAnnotationPublic1()********************************************\n");
		
		$this->annotation->setAnnotationPublic ( TRUE );
		$this->assertTRUE ( $this->annotation->getAnnotationPublic () );
	}
	
	/**
	 * Test the setAnnotationPublic() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::setAnnotationPublic()
	 */
	public function testSetAnnotationPublic2() {
		echo ("\n********************Test SetAnnotationPublic2()********************************************\n");
		
		$this->annotation->setAnnotationPublic ( FALSE );
		$this->assertFALSE ( $this->annotation->getAnnotationPublic () );
	}
	
	/**
	 * Test the setAnnotationType() method from the Annotation class
	 * with the following string : "PROTEIN"
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::setAnnotationType()
	 */
	public function testSetAnnotationType1() {
		echo ("\n********************Test SetAnnotationType1()*********************************************\n");
		
		$tmp = '';
		
		try {
			$this->annotation->setAnnotationType ( "PROTEIN" );
			// setAnnotationType() method uses strtolower() method
		} catch ( \Exception $e ) {
			$tmp = $e->getMessage ();
			echo ("tmp : " . $tmp);
		}
		
		$this->assertEquals ( "protein", $this->annotation->getAnnotationType () );
	}
	
	/**
	 * Test the setAnnotationDesc() method from the Annotation class
	 * with the following string : "GENE"
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::setAnnotationType()
	 */
	public function testSetAnnotationType2() {
		echo ("\n********************Test SetAnnotationType2()*********************************************\n");
		
		$tmp = '';
		
		try {
			$this->annotation->setAnnotationType ( "GENE" );
			// setAnnotationType() method uses strtolower() method
		} catch ( \Exception $e ) {
			$tmp = $e->getMessage ();
			echo ("tmp : " . $tmp);
		}
		
		$this->assertEquals ( "gene", $this->annotation->getAnnotationType () );
	}
	
	/**
	 * Test the setAnnotationDesc() method from the Annotation class
	 * with the following string : "other"
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::setAnnotationType()
	 */
	public function testSetAnnotationType3() {
		echo ("\n********************Test SetAnnotationType3()*********************************************\n");
		
		$tmp = "other";
		$message = '$annotationtype must be one of these types : ';
		$message .= 'gene or protein, not ' . $tmp;
		
		try {
			$this->annotation->setAnnotationType ( $tmp );
		} catch ( \Exception $e ) {
			$tmp = $e->getMessage ();
		}
		
		$this->assertEquals ( $message, $tmp );
	}
	
	/**
	 * Test the addAnnotationSources() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::addAnnotationSource()
	 */
	public function testAddAnnotationSource() {
		echo ("\n********************Test AddAnnotationSource()********************************************\n");
		
		$expectedResult = - 1;
		
		$this->annotation->addAnnotationSources ( $this->publication );
		$expectedResult = $this->annotation->getAnnotationSources ()->count ();
		
		$this->assertEquals ( 1, $expectedResult );
	}
	
	/**
	 * Test the removeAnnotationSources() method from the Annotation class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Annotation::removeAnnotationSource()
	 */
	public function testRemoveAnnotationSource() {
		echo ("\n********************Test RemoveAnnotationSources()*****************************************\n");
		
		$expectedResult = - 1;
		
		$this->annotation->addAnnotationSources ( $this->publication );
		$this->annotation->removeAnnotationSources ( $this->publication );
		
		$expectedResult = $this->annotation->getAnnotationSources ()->count ();
		
		$this->assertEquals ( 0, $expectedResult );
	}
} // CLASS END
?>
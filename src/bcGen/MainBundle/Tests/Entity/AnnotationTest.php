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
use bcGen\MainBundle\Entity\Source;
/**
 * AnnotationTest class gathers all the unit tests linked to the Annotation class.
 * 
 * @see https://phpunit.de/manual/current/en/test-doubles.html
 * This link gives details on the Class mock
 * @see \bcGen\MainBundle\Entity\Annotation Class Annotation
 * * @see \bcGen\MainBundle\Entity\Source Class Source
 * 
 * @author Xavier Sottiaux  
 * @version 0.1.0 0.1.0
 * 
 */ 
class AnnotationTest extends \PHPUnit_Framework_TestCase
{
	/**
	 *  Test the getId() method from the Annotation class
	 */
	public function testGetId()
	{
		echo ("\n********************Test GetId()**********************************************************\n");
		
		$stubedAnnotation = $this->getMock("bcGen\MainBundle\Entity\Annotation");
		$stubedAnnotation->method('getId')->willReturn(1);
		
		$this->assertEquals( 1, $stubedAnnotation->getId() );
	}
	
	/**
	 * Test the getAnnotationTitle() method from the Annotation class
	 */
	public function testGetAnnotationTitle()
	{
		echo ("\n********************Test GetAnnotationTitle()*********************************************\n");
		
		$stubedAnnotation = $this->getMock("bcGen\MainBundle\Entity\Annotation");
		$stubedAnnotation->method('getAnnotationTitle')->willReturn("Title");
		
		$this->assertEquals( "Title", $stubedAnnotation->getAnnotationTitle() );
	}
	
	/**
	 * Test the getAnnotationDesc() method from the Annotation class
	 */
	public function testGetAnnotationDesc()
	{
		echo ("\n********************Test GetAnnotationDesc()**********************************************\n");
		$stubedAnnotation = $this->getMock("bcGen\MainBundle\Entity\Annotation");
		$stubedAnnotation->method('getAnnotationDesc')->willReturn("Desc");
		
		$this->assertEquals( "Desc", $stubedAnnotation->getAnnotationDesc() );
	}
	
	/**
	 * Test the getAnnotationPublic() method from the Annotation class
	 */
	public function testGetAnnotationPublic()
	{
		echo ("\n********************Test GetAnnotationPublic()********************************************\n");
		$stubedAnnotation = $this->getMock("bcGen\MainBundle\Entity\Annotation");
		$stubedAnnotation->method('getAnnotationPublic')->willReturn(0);
		
		$this->assertEquals( 0, $stubedAnnotation->getAnnotationPublic() );
	
	}
	
	/**
	 * Test the getAnnotationType() method from the Annotation class
	 */
	public function testGetAnnotationType()
	{
		echo ("\n********************Test GetAnnotationType()**********************************************\n");
		$stubedAnnotation = $this->getMock("bcGen\MainBundle\Entity\Annotation");
		$stubedAnnotation->method('getAnnotationType')->willReturn("Protein");
		
		$this->assertEquals( "Protein", $stubedAnnotation->getAnnotationType() );
	}

	/**
	 * Test the getAnnotationSources() method from the Annotation class
	 */
	public function testGetAnnotationSources()
	{
		echo ("\n********************Test GetAnnotationSources()*******************************************\n");
	
		$annotation = new Annotation();
		$tmp= get_class($annotation->getAnnotationSources());
			
		$this->assertEquals($tmp, "Doctrine\Common\Collections\ArrayCollection");
	}
	
	/**
	 * Test the setAnnotationTitle() method from the Annotation class
	 */
	public function testSetAnnotationTitle() 
	{
		echo ("\n********************Test SetAnnotationTitle()*********************************************\n");
		
		$annotation = new Annotation();
		$annotation->setAnnotationTitle( "Test setAnnotationTitle()" );
		$this->assertEquals("Test setAnnotationTitle()", $annotation->getAnnotationTitle()  );
	}
	
	/**
	 * Test the setAnnotationDesc() method from the Annotation class
	 */
	public function testSetAnnotationDesc()
	{
		echo ("\n********************Test SetAnnotationDesc()**********************************************\n");
	
		$annotation = new Annotation();
		$annotation->setAnnotationDesc( "Test setAnnotationDesc()" );
		$this->assertEquals("Test setAnnotationDesc()", $annotation->getAnnotationDesc()  );
	}
	
	/**
	 * Test the setAnnotationPublic() method from the Annotation class
	 */
	public function testSetAnnotationPublic()
	{
		echo ("\n********************Test SetAnnotationPublic()********************************************\n");
	
		$annotation = new Annotation();
		$annotation->setAnnotationPublic( 1 );
		$this->assertEquals( 1, $annotation->getAnnotationPublic()  );
	}
	
	/**
	 * Test the setAnnotationType() method from the Annotation class
	 * with the following string : "PROTEIN"
	 */
	public function testSetAnnotationType1()
	{
		echo ("\n********************Test SetAnnotationType1() protein*************************************\n");
		
		$annotation = new Annotation();
		$tmp='';
		
		try {
			$annotation->setAnnotationType( "PROTEIN" );
			//setAnnotationType() method uses strtolower() method
		}
		catch (\Exception $e){
			$tmp = $e->getMessage();
			echo("tmp : ".$tmp);
		}
		
		$this->assertEquals("protein", $annotation->getAnnotationType()  );
	}
	
	/**
	 * Test the setAnnotationDesc() method from the Annotation class
	 * with the following string : "GENE"
	 */
	public function testSetAnnotationType2()
	{
		echo ("\n********************Test SetAnnotationType2() gene****************************************\n");
	
		$annotation = new Annotation();
		$tmp='';
		
		try {
			$annotation->setAnnotationType( "GENE" );
			//setAnnotationType() method uses strtolower() method
		}
		catch (\Exception $e){
			$tmp = $e->getMessage();
			echo("tmp : ".$tmp);
		}		
		
		$this->assertEquals("gene", $annotation->getAnnotationType()  );
	}
	
	/**
	 * Test the setAnnotationDesc() method from the Annotation class
	 * with the following string : "other"
	 */
	public function testSetAnnotationType3()
	{
		echo ("\n********************Test SetAnnotationType3() other***************************************\n");
	
		$annotation = new Annotation();
		$tmp='';
		
		try {
			$annotation->setAnnotationType( "other" );
		}
		catch (\Exception $e){
			$tmp = $e->getMessage();
		}		
			
		$this->assertEquals($tmp, '$annotationtype must be one of these types : 
												gene or protein, not other'  );
	}
	
	/**
	 * Test the setAnnotationDesc() method from the Annotation class
	 */
	public function testAddAnnotationSource()
	{
		echo ("\n********************Test AddAnnotationSource()********************************************\n");
	
		$source = new Source();
		$annotation = new Annotation();
		$expectedResult = -1;
		
		$annotation->addAnnotationSources($source);
		$expectedResult = $annotation->getAnnotationSources()->count(); 
			
		$this->assertEquals(1, $expectedResult);
	}

	/**
	 * Test the setAnnotationDesc() method from the Annotation class
	 */
	public function testRemoveAnnotationSource()
	{
		echo ("\n********************Test RemoveAnnotationSource()*****************************************\n");
	
		$source = new Source();
		$annotation = new Annotation();
		$expectedResult = -1;
		
		$annotation->addAnnotationSources($source);
		$annotation->removeAnnotationSources($source);		
		
		$expectedResult = $annotation->getAnnotationSources()->count();
			
		$this->assertEquals(0, $expectedResult);
	}
	
}//CLASS END
?>
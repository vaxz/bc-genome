<?php

/**
 * ConditionTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use bcGen\MainBundle\Entity\Condition;
use bcGen\MainBundle\Entity\Publication;

/**
 * ConditionTest class gathers all the unit tests linked to the Condition class.
 *
 * @link https://phpunit.de/manual/current/en/index.html This link gives details on how to use PHPunit
 * 
 * @see \bcGen\MainBundle\Entity\Condition            Class Condition
 * @see \bcGen\MainBundle\Entity\Publication          Class Publication
 *     
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 */
class ConditionTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var PHPUnit_Framework_MockObject_MockObject $stubedCondition
	 */
	private $stubedCondition;
	
	/**
	 *
	 * @var \bcGen\MainBundle\Entity\Condition $condition
	 */
	private $condition;
	
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
		$this->stubedCondition = $this->getMock ( "bcGen\MainBundle\Entity\Condition" );
		$this->condition = new Condition();
		$this->publication = new Publication();
	}
	
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @uses PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown() {
		$this->stubedCondition = null;
		$this->condition = null;
		$this->publication = null;
	}
	
	/**
	 * Test the getId() method from the Condition class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Condition::getId()
	 */
	public function testGetId() {
		echo ("\n********************Test GetId()**********************************************************\n");
		
		$this->stubedCondition->method ( 'getId' )->willReturn ( 1 );
		$this->assertEquals ( 1, $this->stubedCondition->getId () );
	}
	
	/**
	 * Test the getConditionDesc() method from the Condition class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Condition::getConditionDesc()
	 */
	public function testGetConditionDesc() {
		echo ("\n********************Test GetConditionDesc()***********************************************\n");
		
		$this->stubedCondition->method ( 'getConditionDesc' )->willReturn ( 'getConditionDesc' );
		$this->assertEquals ( 'getConditionDesc', $this->stubedCondition->getConditionDesc () );
	}
	
	/**
	 * Test the getPublicCond() method from the Condition class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Condition::getPublicCond()
	 */
	public function testGetPublicCond() {
		echo ("\n********************Test GetPublicCond()**************************************************\n");
		
		$this->stubedCondition->method ( 'getPublicCond' )->willReturn ( TRUE );
		$this->assertTrue( $this->stubedCondition->getPublicCond () );
	}
	
	/**
	 * Test the getConditionSources() method from the Condition class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Condition::getConditionSources()
	 */
	public function testGetConditionSources() {
		echo ("\n********************Test GetAnnotationSources()*******************************************\n");
		
		$tmp = get_class ( $this->condition->getConditionSources () );
		$this->assertEquals ( $tmp, "Doctrine\Common\Collections\ArrayCollection" );
	}
	
	/**
	 * Test the setConditionDesc() method from the Condition class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Condition::setConditionDesc()
	 */
	public function testSetConditionDesc() {
		echo ("\n********************Test SetConditionDesc()***********************************************\n");
		
		$this->condition->setConditionDesc ( 'setConditionDesc' );
		$this->assertEquals ( 'setConditionDesc', $this->condition->getConditionDesc () );
	}
	
	/**
	 * Test the setPublicCond() method from the Condition class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Condition::setPublicCond()
	 */
	public function testSetPublicCond1() {
		echo ("\n********************Test SetPublicCond3()*************************************************\n");
		
		$this->condition->setPublicCond ( TRUE );
		$this->assertTrue ( $this->condition->getPublicCond () );
	}
	
	/**
	 * Test the setPublicCond() method from the Condition class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Condition::setPublicCond()
	 */
	public function testSetPublicCond2() {
		echo ("\n********************Test SetPublicCond4()*************************************************\n");
		
		$this->condition->setPublicCond ( FALSE );
		$this->assertFalse ( $this->condition->getPublicCond () );
	}
	
	/**
	 * Test the addConditionSources() method from the Condition class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Condition::addConditionSources()
	 */
	public function testAddConditionSources() {
		echo ("\n********************Test AddConditionSources()********************************************\n");
		
		$result = - 1;
		
		$this->condition->addConditionSources ( $this->publication );
		$result = $this->condition->getConditionSources ()->count ();
		
		$this->assertEquals ( 1, $result );
	}
	
	/**
	 * Test the removeConditionSources() method from the Condition class
	 * 
	 * @uses \bcGen\MainBundle\Entity\Condition::removeConditionSource()
	 */
	public function testRemoveConditionSources() {
		echo ("\n********************Test RemoveConditionSources()*****************************************\n");
		
		$result = - 1;
		
		$this->condition->addConditionSources ( $this->publication );
		$this->condition->removeConditionSources ( $this->publication );
		
		$result = $this->condition->getConditionSources ()->count ();
		
		$this->assertEquals ( 0, $result );
	}
} // CLASS END
?>

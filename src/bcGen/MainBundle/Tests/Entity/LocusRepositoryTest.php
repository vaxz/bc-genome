<?php

/**
 * LocusRepositoryTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use bcGen\MainBundle\Entity\LocusRepository;
use bcGen\MainBundle\Entity\Locus;

/**
 * LocusRepositoryTest class gathers all the functional tests linked to the LocusRepository class.
 *
 * @uses https://phpunit.de/manual/current/en/index.html This link gives details on how to use PHPunit
 *
 * @see \bcGen\MainBundle\Entity\LocusRepository       Class LocusRepository
 * @see \bcGen\MainBundle\Entity\Locus                 Class Locus
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class LocusRepositoryTest extends KernelTestCase {

	/**
	 *
	 * @var Doctrine\ORM\EntityRepository $repository
	 */
	private static $repository;
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see PHPUnit_Framework_TestCase::setUpBeforeClass()
	 * 
	 * @uses KernelTestCase::bootKernel()
	 * 
	 */
	public static function setUpBeforeClass(){
		
		parent::bootKernel();
		
		static::$repository = static::$kernel->getContainer()
		                                     ->get('doctrine')
		                                     ->getManager()
		                                     ->getRepository('bcGenMainBundle:Locus');
	}	
	
	/**
	 * Test the findOneLocusFromAccessionNum() method from the LocusRepository class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusRepository::findOneLocusFromAccessionNum()
	 */
	public function testFindOneLocusFromAccessionNum()
	{
		echo ("\n*****************Test FindOneLocusFromAccessionNum()******************************************\n");		
		
		$expected = new Locus();
		
		$result = static::$repository->findOneLocusFromAccessionNum('GeneAccessionTU1');
		
		$this->assertInstanceOf( get_class($expected), $result);
		
	}
	
	/**
	 * Test the findAllLocusFromChromosomeId() method from the LocusRepository class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusRepository::findAllLocusFromChromosomeId()
	 */
	public function testfindAllLocusFromChromosomeId()
	{
		echo ("\n*****************Test FindAllLocusFromChromosomeId()*****************************************\n");
		
		$result = static::$repository->findAllLocusFromChromosomeId(1);
	
		$this->assertNotCount( 0, $result );	
	}
	
	/**
	 * Test the countLocus() method from the LocusRepository class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusRepository::countLocus()
	 */
	public function testCountLocus()
	{
		echo ("\n*****************Test CountLocus()**********************************************************\n");	
		
		$result = static::$repository->countLocus(99010);
	
		$this->assertEquals(10, $result);
	
	}
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see PHPUnit_Framework_TestCase::tearDownAfterClass()
	 * 
	 * @uses KernelTestCase::ensureKernelShutdown()
	 */
	public static function tearDownAfterClass(){
		
		parent::ensureKernelShutdown();
		
		static::$repository->clear();
		static::$repository = null; // avoid memory leaks
		
	}
	
}// END CLASS
?>
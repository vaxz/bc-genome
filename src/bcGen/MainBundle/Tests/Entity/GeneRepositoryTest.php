<?php

/**
 * GeneRepositoryTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use bcGen\MainBundle\Entity\GeneRepository;
use bcGen\MainBundle\Entity\Gene;

/**
 * GeneRepositoryTest class gathers all the functional tests linked to the GeneRepository class.
 *
 * @uses https://phpunit.de/manual/current/en/index.html This link gives details on how to use PHPunit
 *
 * @see \bcGen\MainBundle\Entity\GeneRepository       Class GeneRepository
 * @see \bcGen\MainBundle\Entity\Gene                 Class Gene
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class GeneRepositoryTest extends KernelTestCase {

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
		                                     ->getRepository('bcGenMainBundle:Gene');
	}		
	
	/**
	 * Test the findOneGeneIdFromAccessionNum method from the GeneRepository class
	 * 
	 * @uses \bcGen\MainBundle\Entity\GeneRepository::findOneGeneIdFromAccessionNum()
	 */
	public function testFindOneGeneIdFromAccessionNum()
	{
		echo ("\n******************Test FindOneGeneIdFromAccessionNum()***************************************\n");
		
		$result = static::$repository->findOneGeneIdFromAccessionNum('GeneAccessionTU1');
		
		$this->assertEquals( 11, $result);		
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
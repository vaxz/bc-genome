<?php

/**
 * LocusChromosomeRepositoryTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use bcGen\MainBundle\Entity\LocusChromosomeRepository;
use bcGen\MainBundle\Entity\LocusChromosome;

/**
 * LocusChromosomeRepositoryTest class gathers all the functional tests linked to the LocusChromosomeRepository class.
 *
 * @uses https://phpunit.de/manual/current/en/index.html    This link gives details on how to use PHPunit
 *
 * @see \bcGen\MainBundle\Entity\LocusChromosomeRepository       Class LocusChromosomeRepository
 * @see \bcGen\MainBundle\Entity\LocusChromosome                 Class LocusChromosome
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class LocusChromosomeRepositoryTest extends KernelTestCase {

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
		                                     ->getRepository('bcGenMainBundle:LocusChromosome');
	}	
	
	/**
	 * Test the findOneLocusChromosomeFromAccessionNum() method from the LocusChromsomeRepository class
	 *
	 * @uses \bcGen\MainBundle\Entity\LocusChromsomeRepository::findOneLocusChromosomeFromAccessionNum()
	 */
	public function testFindOneLocusChromosomeFromAccessionNum()
	{
		echo ("\n*****************Test FindOneLocusChromosomeFromAccessionNum()********************************\n");
		
		$expected = new LocusChromosome();
		$result = static::$repository->findOneLocusChromosomeFromAccessionNum('GeneAccessionTU1');
		
		$this->assertInstanceOf( get_class($expected), $result);
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
<?php

/**
 * ChromosomeRepositoryTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use bcGen\MainBundle\Entity\ChromosomeRepository;
use bcGen\MainBundle\Entity\Chromosome;

/**
 * ChromosomeRepositoryTest class gathers all the functional tests linked to the ChromosomeRepository class.
 *
 * @uses https://phpunit.de/manual/current/en/index.html This link gives details on how to use PHPunit
 *
 * @see \bcGen\MainBundle\Entity\ChromosomeRepository       Class ChromosomeRepository
 * @see \bcGen\MainBundle\Entity\Chromosome                 Class Chromosome
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class ChromosomeRepositoryTest extends KernelTestCase {

	/**
	 *
	 * @var \Doctrine\ORM\EntityManager $em
	 */
	private static $em;
	
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
		
		static::$em = static::$kernel->getContainer()
		                             ->get('doctrine')
		                             ->getManager();
		
		static::$repository = static::$em->getRepository('bcGenMainBundle:Chromosome');
	}	
	
	/**
	 * Test the findOneChromosomeFromAccessionNum() method from the ChromsomeRepository class
	 * 
	 * @uses \bcGen\MainBundle\Entity\ChromsomeRepository::findOneChromosomeFromAccessionNum()
	 */
	public function testFindOneChromosomeFromAccessionNum()
	{
		echo ("\n******************Test FindOneChromosomeFromAccessionNum()************************************\n");
		
		$expected = new Chromosome();
		
		$result = static::$repository->findOneChromosomeFromAccessionNum('GeneAccessionTU1');
		
		$this->assertInstanceOf( get_class($expected), $result);		
	}
	
	/**
	 * Test the findOneChromosomeIdFromAccessionNum() method from the ChromsomeRepository class
	 *
	 * @uses \bcGen\MainBundle\Entity\ChromsomeRepository::findOneChromosomeIdFromAccessionNum()
	 */
	public function testFindOneChromosomeIdFromAccessionNum()
	{
		echo ("\n******************Test FindOneChromosomeIdFromAccessionNum()**********************************\n");
		
		$result = static::$repository->findOneChromosomeIdFromAccessionNum('GeneAccessionTU1');
	
		$this->assertEquals( 1, $result );
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
		
		static::$em->close();
		static::$em = null; // avoid memory leaks
		
		static::$repository->clear();
		static::$repository = null;		
	}
}

// END CLASS
?>
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
use bcGen\MainBundle\Entity\Chromosome;
use bcGen\MainBundle\Entity\ChromosomeRepository;
use bcGen\MainBundle\Entity\Source;
/**
 * ChromosomeRepositoryTest class gathers all the functional tests linked to the ChromosomeRepository class.
 *
 * @see \bcGen\MainBundle\Entity\Chromosome Class Chromosome
 * @see \bcGen\MainBundle\Entity\ChromosomeRepository Class ChromosomeRepository
 * @see \bcGen\MainBundle\Entity\Source Class Source
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class ChromosomeRepositoryTest extends KernelTestCase {
	
	/**
	 * @var \Doctrine\ORM\EntityManager
	 */
	private $em;
	
	/**
	 * {@inheritDoc}
	 */
	protected function setUp()
	{
		self::bootKernel();
	
		$this->em = static::$kernel->getContainer()
		->get('doctrine')
		->getManager();
	}
	
	/**
	 *  Test the findOneChromosomeFromAccessionNum() method from the ChromosomeRepository class
	 */
	public function testFindOneChromosomeFromAccessionNum()
	{
		$products = $this->em->getRepository('bcGenMainBundle:ChromosomeRepository')
						 ->findOneChromosomeFromAccessionNum( $geneAccession );
	
		$this->assertCount(1, $products);
	}
	
	/**
	 *  Test the findOneChromosomeIdFromAccessionNum() method from the ChromosomeRepository class
	 */
	public function testFindOneChromosomeIdFromAccessionNum()
	{
		$products = $this->em->getRepository('bcGenMainBundle:ChromosomeRepository')
						 ->findOneChromosomeIdFromAccessionNum( $geneAccession );
	
		$this->assertCount(1, $products);
	}	
	
	/**
	 * {@inheritDoc}
	 */
	protected function tearDown()
	{
		parent::tearDown();
	
		$this->em->close();
	}
	
	
}//END CLASS
?>
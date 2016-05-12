<?php
/**
 * ChromosomeTest.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace bcGen\MainBundle\Tests\Entity;


use bcGen\MainBundle\Entity\Chromosome;
use bcGen\MainBundle\Entity\Source;
/**
 * ChromosomeTest class gathers all the unit tests linked to the Chromosome class.
 *
 * @see https://phpunit.de/manual/current/en/test-doubles.html
 * This link gives details on the Class mock
 * @see \bcGen\MainBundle\Entity\Chromosome Class Chromosome
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class ChromosomeTest extends \PHPUnit_Framework_TestCase {
	
	
	/**
	*  Test the getId() method from the Chromosome class
	*/
	public function testGetId()
	{
		echo ("\n********************Test GetId()*********************************************************\n");
	
		$stubedChromosome = $this->getMock("bcGen\MainBundle\Entity\Chromosome");
		$stubedChromosome->method('getId')->willReturn(1);
	
		$this->assertEquals( 1, $stubedChromosome->getId() );
	}
	
	/**
	 *  Test the getChromosomeSeq() method from the Chromosome class
	 */
	public function testGetChromosomeSeq()
	{
		echo ("\n********************Test GetChromosomeSeq()**********************************************\n");
	
		$stubedChromosome = $this->getMock("bcGen\MainBundle\Entity\Chromosome");
		$stubedChromosome->method('getChromosomeSeq')->willReturn("getChromosomeSeq");
	
		$this->assertEquals( "getChromosomeSeq", $stubedChromosome->getChromosomeSeq() );
	}
	
	/**
	 *  Test the getChromosomeSource() method from the Chromosome class
	 */
	public function testGetChromosomeSource()
	{
		echo ("\n********************Test GetChromosomeSource()*******************************************\n");
	
		$stubedChromosome = $this->getMock("bcGen\MainBundle\Entity\Chromosome");
		$stubedChromosome->method('getChromosomeSource')->willReturn("getChromosomeSource");
	
		$this->assertEquals( "getChromosomeSource", $stubedChromosome->getChromosomeSource() );
	}
	
	/**
	 * Test the setId() method from the Chromosome class
	 */
	public function testSetId()
	{
		echo ("\n********************Test SetId()*********************************************************\n");
	
		$chromosome = new Chromosome();
		$chromosome->setId( 2 );
		$this->assertEquals(2, $chromosome->getId() );
	}
	
	/**
	 * Test the setChromosomeSeq() method from the Chromosome class
	 */
	public function testSetChromosomeSeq()
	{
		echo ("\n********************Test SetChromosomeSeq()**********************************************\n");
	
		$chromosome = new Chromosome();
		$chromosome->setChromosomeSeq( "setChromosomeSeq" );
		$this->assertEquals( "setChromosomeSeq", $chromosome->getChromosomeSeq("setChromosomeSeq") );
	}
	
	/**
	 * Test the setChromosomeSource() method from the Chromosome class
	 */
	public function testSetChromosomeSource()
	{
		echo ("\n********************Test SetChromosomeSource()*******************************************\n");
	
		$chromosome = new Chromosome();
		$source = new Source();
		$chromosome->setChromosomeSource( $source );
		$this->assertFalse( empty($chromosome->getChromosomeSource()) );
	}	
	
}//END CLASS
?>
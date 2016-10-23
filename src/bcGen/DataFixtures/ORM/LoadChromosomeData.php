<?php
/**
 * LoadChromosomeData.php
 *
 * @copyright --------
 * @license   --------
 * @link      --------
 *
 */
namespace BcGen\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use bcGen\MainBundle\Entity\Chromosome;

/**
 * This class load data in the database equivalent to 2 Chromosome objects.
 *
 * @link http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *                                            This link gives details on how to use the Doctrine fixture bundle
 *
 * @see \bcGen\MainBundle\Entity\Chromosome         Class Chromsome
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class LoadChromosomeData extends AbstractFixture implements OrderedFixtureInterface
{
	/**
	 * 
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\FixtureInterface::load()
	 * 
	 * @param Doctrine\Common\Persistence\ObjectManager $manager
	 */
	public function load(ObjectManager $manager)
	{
		$chromosome1 = new Chromosome();
		$chromosome1->setId(1);
		$chromosome1->setChromosomeSeq('ChromosomeSeqTU1');
		$chromosome1->setChromosomeSource( $this->getReference('PublicationTU1') );
		$this->addReference('ChromosomeTU1', $chromosome1);
		$manager->persist($chromosome1);
		
		$chromosome2 = new Chromosome();
		$chromosome2->setId(2);
		$chromosome2->setChromosomeSeq('ChromosomeSeqTU2');
		$chromosome2->setChromosomeSource( $this->getReference('PublicationTU2') );
		$this->addReference('ChromosomeTU2', $chromosome2);
		$manager->persist($chromosome2);		
		
		$manager->flush();			
	}	
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 * 
	 * @return integer 2
	 */
	public function getOrder() {
		return 2;
	}

}// END CLASS
?>
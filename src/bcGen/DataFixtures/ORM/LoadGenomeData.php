<?php
/**
 * LoadGenomeData.php
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
use bcGen\MainBundle\Entity\Genome;

/**
 * This class load data in the database equivalent to 2 Genome objects.
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
class LoadGenomeData extends AbstractFixture implements OrderedFixtureInterface
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
		$genome1 = new Genome();
		$genome1->setGenomeDesc('GenomeDescTU1');
		$genome1->setGenomeSource($this->getReference('PublicationTU1') );
		$this->addReference('GenomeTU1', $genome1);
		$manager->persist($genome1);
		
		$genome2 = new Genome();
		$genome2->setGenomeDesc('GenomeDescTU2');
		$genome2->setGenomeSource($this->getReference('PublicationTU2') );
		$this->addReference('GenomeTU2', $genome2);
		$manager->persist($genome2);	
		
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
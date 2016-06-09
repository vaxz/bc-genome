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
use bcGen\MainBundle\Entity\InnerCommunication;

/**
 * GeneTest class gathers all the unit tests linked to the Gene class.
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
		
	}
	
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 */
	public function getOrder() {
		return 2;
	}

}// END CLASS
?>
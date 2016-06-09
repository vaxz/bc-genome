<?php
/**
 * LoadInnerCommunicationData.php
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
 * @see \bcGen\MainBundle\Entity\InnerCommunication         Class InnerCommunication
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class LoadInnerCommunicationData extends AbstractFixture implements OrderedFixtureInterface
{
	
	
	/**
	 * 
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\FixtureInterface::load()
	 * 
	 * @param Doctrine\Common\Persistence\ObjectManager $manager
	 * 
	 */
	public function load(ObjectManager $manager)
	{
		$innercommunicationTU1 = new InnerCommunication();
		$innercommunicationTU1->setInnerComDesc('InnerComDescTU1');
		$innercommunicationTU1->setSourceAuthor('AuthorTU1');
		$innercommunicationTU1->setSourceTitle('TitleTU1');
		$innercommunicationTU1->setSourceYear( new \DateTime() );
		$manager->persist($innercommunicationTU1);
		 
		$innerCommunicationTU2 = new InnerCommunication();
		$innerCommunicationTU2->setInnerComDesc('InnerComDescTU2');
		$innerCommunicationTU2->setSourceAuthor('AuthorTU2');
		$innerCommunicationTU2->setSourceTitle('TitleTU2');
		$innerCommunicationTU2->setSourceYear( new \DateTime() );
		$manager->persist($innerCommunicationTU2);
		 
		$manager->flush();
	}	
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 * 
	 */
	public function getOrder() {
		return 1;
	}

}// END CLASS
?>
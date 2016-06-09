<?php
/**
 * LoadPublicationData.php
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
use bcGen\MainBundle\Entity\Publication;

/**
 * GeneTest class gathers all the unit tests linked to the Gene class.
 *
 * @link http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *                                            This link gives details on how to use the Doctrine fixture bundle
 * 
 * @see \bcGen\MainBundle\Entity\Gene         Class Gene
 *     
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 */
class LoadPublicationData extends AbstractFixture implements OrderedFixtureInterface
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
	    $publicationTU1 = new Publication();
	    $publicationTU1->setPubHref('URLTU1');
	    $publicationTU1->setSourceAuthor('AuthorTU1');
	    $publicationTU1->setSourceTitle('TitleTU1');
	    $publicationTU1->setSourceYear( new \DateTime() );
	    $manager->persist($publicationTU1);
	    
	    $publicationTU2 = new Publication();
	    $publicationTU2->setPubHref('URLTU2');
	    $publicationTU2->setSourceAuthor('AuthorTU2');
	    $publicationTU2->setSourceTitle('TitleTU2');
	    $publicationTU2->setSourceYear( new \DateTime() );
	    $manager->persist($publicationTU2);
	    
	    $manager->flush();	    
	}
	
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 * 
	 * @return integer 1
	 * 
	 */
	public function getOrder() {
		return 1;
	}

}// CLASS END


?>
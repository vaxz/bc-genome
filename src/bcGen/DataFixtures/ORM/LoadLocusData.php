<?php
/**
 * LoadLocusData.php
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
use bcGen\MainBundle\Entity\Locus;

/**
 * This class load data in the database equivalent to 2 Locus objects.
 *
 * @link http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *                                            This link gives details on how to use the Doctrine fixture bundle
 * 
 * @see \bcGen\MainBundle\Entity\Locus         Class Locus
 *     
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 */
class LoadLocusData extends AbstractFixture implements OrderedFixtureInterface
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
	    $locus1 = new Locus();
	    $locus1->setId(99001);
	    $locus1->setLocusDesc('LocusDescTU1');
	    $locus1->setGeneName('GeneNameTU1');	    
	    $manager->persist($locus1);
	    $this->addReference('LocusTU1', $locus1);	    
	    
	    $locus2 = new Locus();
	    $locus2->setId(99002);
	    $locus2->setLocusDesc('LocusDescTU2');
	    $locus2->setGeneName('GeneNameTU2');
	    $manager->persist($locus2);
	    $this->addReference('LocusTU2', $locus2);
	    
	    $locus3 = new Locus();
	    $locus3->setId(99003);
	    $locus3->setLocusDesc('LocusDescTU3');
	    $locus3->setGeneName('GeneNameTU3');
	    $manager->persist($locus3);
	    $this->addReference('LocusTU3', $locus3);
	    
	    $locus4 = new Locus();
	    $locus4->setId(99004);
	    $locus4->setLocusDesc('LocusDescTU4');
	    $locus4->setGeneName('GeneNameTU4');
	    $manager->persist($locus4);
	    $this->addReference('LocusTU4', $locus4);
	    
	    $locus5 = new Locus();
	    $locus5->setId(99005);
	    $locus5->setLocusDesc('LocusDescTU5');
	    $locus5->setGeneName('GeneNameTU5');
	    $manager->persist($locus5);
	    $this->addReference('LocusTU5', $locus5);
	    
	    $locus6 = new Locus();
	    $locus6->setId(99006);
	    $locus6->setLocusDesc('LocusDescTU6');
	    $locus6->setGeneName('GeneNameTU6');
	    $manager->persist($locus6);
	    $this->addReference('LocusTU6', $locus6);
	    
	    $locus7 = new Locus();
	    $locus7->setId(99007);
	    $locus7->setLocusDesc('LocusDescTU7');
	    $locus7->setGeneName('GeneNameTU7');
	    $manager->persist($locus7);
	    $this->addReference('LocusTU7', $locus7);
	    
	    $locus8 = new Locus();
	    $locus8->setId(99008);
	    $locus8->setLocusDesc('LocusDescTU8');
	    $locus8->setGeneName('GeneNameTU8');
	    $manager->persist($locus8);
	    $this->addReference('LocusTU8', $locus8);
	    
	    $locus9 = new Locus();
	    $locus9->setId(99009);
	    $locus9->setLocusDesc('LocusDescTU9');
	    $locus9->setGeneName('GeneNameTU9');
	    $manager->persist($locus9);
	    $this->addReference('LocusTU9', $locus9);
	    
	    $locus10 = new Locus();
	    $locus10->setId(99010);
	    $locus10->setLocusDesc('LocusDescTU10');
	    $locus10->setGeneName('GeneNameTU10');
	    $manager->persist($locus10);
	    $this->addReference('LocusTU10', $locus10);	    
	    
	    $manager->flush();	   	    
	}//FUNCTION END
	
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 * 
	 * @return integer 2
	 * 
	 */
	public function getOrder() {
		return 2;
	}

}// CLASS END


?>
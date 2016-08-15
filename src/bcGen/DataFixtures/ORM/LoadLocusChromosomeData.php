<?php
/**
 * LoadLocusChromosomeData.php
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
use bcGen\MainBundle\Entity\LocusChromosome;

/**
 * This class load data in the database equivalent to 2 LocusChromsome objects.
 *
 * @link http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *                                            This link gives details on how to use the Doctrine fixture bundle
 * 
 * @see \bcGen\MainBundle\Entity\LocusChromosome        Class LocusChromosome
 *     
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 */
class LoadLocusChromosomeData extends AbstractFixture implements OrderedFixtureInterface
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
	    $locusChromosome1 = new LocusChromosome();
	    $locusChromosome1->setPositionLocusBp(1);
	    $locusChromosome1->setDirectStrand(1);
	    $locusChromosome1->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU1') );
	    $locusChromosome1->setLocusChromosomeFkLocus( $this->getReference('LocusTU1') );
	    $manager->persist($locusChromosome1);	    
	    
	    $locusChromosome2 = new LocusChromosome();
	    $locusChromosome2->setPositionLocusBp(2);
	    $locusChromosome2->setDirectStrand(1);
	    $locusChromosome2->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU1') );
	    $locusChromosome2->setLocusChromosomeFkLocus( $this->getReference('LocusTU2') );
	    $manager->persist($locusChromosome2);
	    	    
	    $locusChromosome3 = new LocusChromosome();
	    $locusChromosome3->setPositionLocusBp(3);
	    $locusChromosome3->setDirectStrand(0);
	    $locusChromosome3->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU1') );
	    $locusChromosome3->setLocusChromosomeFkLocus( $this->getReference('LocusTU3') );
	    $manager->persist($locusChromosome3);
	    	    
	    $locusChromosome4 = new LocusChromosome();
	    $locusChromosome4->setPositionLocusBp(4);
	    $locusChromosome4->setDirectStrand(0);
	    $locusChromosome4->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU1') );
	    $locusChromosome4->setLocusChromosomeFkLocus( $this->getReference('LocusTU4') );
	    $manager->persist($locusChromosome4);
	    	    
	    $locusChromosome5 = new LocusChromosome();
	    $locusChromosome5->setPositionLocusBp(5);
	    $locusChromosome5->setDirectStrand(0);
	    $locusChromosome5->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU1') );
	    $locusChromosome5->setLocusChromosomeFkLocus( $this->getReference('LocusTU5') );
	    $manager->persist($locusChromosome5);
	    
	    
	    $locusChromosome6 = new LocusChromosome();
	    $locusChromosome6->setPositionLocusBp(6);
	    $locusChromosome6->setDirectStrand(1);
	    $locusChromosome6->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU2') );
	    $locusChromosome6->setLocusChromosomeFkLocus( $this->getReference('LocusTU6') );
	    $manager->persist($locusChromosome6);
	    	    
	    $locusChromosome7 = new LocusChromosome();
	    $locusChromosome7->setPositionLocusBp(7);
	    $locusChromosome7->setDirectStrand(1);
	    $locusChromosome7->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU2') );
	    $locusChromosome7->setLocusChromosomeFkLocus( $this->getReference('LocusTU7') );
	    $manager->persist($locusChromosome7);
	    	    
	    $locusChromosome8 = new LocusChromosome();
	    $locusChromosome8->setPositionLocusBp(8);
	    $locusChromosome8->setDirectStrand(0);
	    $locusChromosome8->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU2') );
	    $locusChromosome8->setLocusChromosomeFkLocus( $this->getReference('LocusTU8') );
	    $manager->persist($locusChromosome8);
	    	    
	    $locusChromosome9 = new LocusChromosome();
	    $locusChromosome9->setPositionLocusBp(9);
	    $locusChromosome9->setDirectStrand(0);
	    $locusChromosome9->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU2') );
	    $locusChromosome9->setLocusChromosomeFkLocus( $this->getReference('LocusTU9') );
	    $manager->persist($locusChromosome9);
	    	    
	    $locusChromosome10 = new LocusChromosome();
	    $locusChromosome10->setPositionLocusBp(10);
	    $locusChromosome10->setDirectStrand(0);
	    $locusChromosome10->setLocusChromosomeFkChromosome( $this->getReference('ChromosomeTU2') );
	    $locusChromosome10->setLocusChromosomeFkLocus( $this->getReference('LocusTU10') );
	    $manager->persist($locusChromosome10);	      
	    
	    $manager->flush();	   	    
	}//FUNCTION END
	
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 * 
	 * @return integer 3
	 * 
	 */
	public function getOrder() {
		return 3;
	}

}// CLASS END


?>
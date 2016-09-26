<?php
/**
 * LoadProteinData.php
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
use bcGen\MainBundle\Entity\Protein;

/**
 * This class load data in the database equivalent to 15 Protein objects.
 *
 * @link http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *                                            This link gives details on how to use the Doctrine fixture bundle
 * 
 * @see \bcGen\MainBundle\Entity\Protein         Class Protein
 *     
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 */
class LoadProteinData extends AbstractFixture implements OrderedFixtureInterface
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
	    $protein1 = new Protein();
	    $protein1->setProteinAccession( 'ProteinAccessionTU1' );
	    $protein1->setProteinSeq( 'ProteinSeqTU1' );
	    $this->addReference( 'ProteinTU1', $protein1);
	    $manager->persist($protein1);
	    
	    $protein2 = new Protein();
	    $protein2->setProteinAccession( 'ProteinAccessionTU2' );
	    $protein2->setProteinSeq( 'ProteinSeqTU2' );
	    $this->addReference( 'ProteinTU2', $protein2);
	    $manager->persist($protein2);
	    
	    $protein3 = new Protein();
	    $protein3->setProteinAccession( 'ProteinAccessionTU3' );
	    $protein3->setProteinSeq( 'ProteinSeqTU3' );
	    $this->addReference( 'ProteinTU3', $protein3);
	    $manager->persist($protein3);
	    
	    $protein4 = new Protein();
	    $protein4->setProteinAccession( 'ProteinAccessionTU4' );
	    $protein4->setProteinSeq( 'ProteinSeqTU4' );
	    $this->addReference( 'ProteinTU4', $protein4);
	    $manager->persist($protein4);
		
	    $protein5 = new Protein();
	    $protein5->setProteinAccession( 'ProteinAccessionTU5' );
	    $protein5->setProteinSeq( 'ProteinSeqTU5' );
	    $this->addReference( 'ProteinTU5', $protein5);
	    $manager->persist($protein5);
	    
	    $protein6 = new Protein();
	    $protein6->setProteinAccession( 'ProteinAccessionTU6' );
	    $protein6->setProteinSeq( 'ProteinSeqTU6' );
	    $this->addReference( 'ProteinTU6', $protein6);
	    $manager->persist($protein6);
	    
	    $protein7 = new Protein();
	    $protein7->setProteinAccession( 'ProteinAccessionTU7' );
	    $protein7->setProteinSeq( 'ProteinSeqTU7' );
	    $this->addReference( 'ProteinTU7', $protein7);
	    $manager->persist($protein7);
		
	    $protein8 = new Protein();
	    $protein8->setProteinAccession( 'ProteinAccessionTU8' );
	    $protein8->setProteinSeq( 'ProteinSeqTU8' );
	    $this->addReference( 'ProteinTU8', $protein8);
	    $manager->persist($protein8);
	    
	    $protein9 = new Protein();
	    $protein9->setProteinAccession( 'ProteinAccessionTU9' );
	    $protein9->setProteinSeq( 'ProteinSeqTU9' );
	    $this->addReference( 'ProteinTU9', $protein9);
	    $manager->persist($protein9);
	    
	    $protein10 = new Protein();
	    $protein10->setProteinAccession( 'ProteinAccessionTU10' );
	    $protein10->setProteinSeq( 'ProteinSeqTU10' );
	    $this->addReference( 'ProteinTU10', $protein10);
	    $manager->persist($protein10);
	    
	    $protein11 = new Protein();
	    $protein11->setProteinAccession( 'ProteinAccessionTU11' );
	    $protein11->setProteinSeq( 'ProteinSeqTU11' );
	    $this->addReference( 'ProteinTU11', $protein11);
	    $manager->persist($protein11);
	    
	    $protein12 = new Protein();
	    $protein12->setProteinAccession( 'ProteinAccessionTU12' );
	    $protein12->setProteinSeq( 'ProteinSeqTU12' );
	    $this->addReference( 'ProteinTU12', $protein12);
	    $manager->persist($protein12);
	    
	    $protein13 = new Protein();
	    $protein13->setProteinAccession( 'ProteinAccessionTU13' );
	    $protein13->setProteinSeq( 'ProteinSeqTU13' );
	    $this->addReference( 'ProteinTU13', $protein13);
	    $manager->persist($protein13);
	    
	    $protein14 = new Protein();
	    $protein14->setProteinAccession( 'ProteinAccessionTU14' );
	    $protein14->setProteinSeq( 'ProteinSeqTU14' );
	    $this->addReference( 'ProteinTU14', $protein14);
	    $manager->persist($protein14);
	    
	    $protein15 = new Protein();
	    $protein15->setProteinAccession( 'ProteinAccessionTU15' );
	    $protein15->setProteinSeq( 'ProteinSeqTU15' );
	    $this->addReference( 'ProteinTU15', $protein15);
	    $manager->persist($protein15);
	    
	    $manager->flush();	    
	}	
	
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
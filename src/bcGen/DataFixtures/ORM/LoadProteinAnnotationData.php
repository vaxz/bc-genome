<?php
/**
 * LoadProteinAnnotationData.php
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
use bcGen\MainBundle\Entity\ProteinAnnotation;

/**
 * This class load data in the database equivalent to 15 ProteinAnnotation objects.
 *
 * @link http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *                                            This link gives details on how to use the Doctrine fixture bundle
 *
 * @see \bcGen\MainBundle\Entity\ProteinAnnotation         Class ProteinAnnotation
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class LoadProteinAnnotationData extends AbstractFixture implements OrderedFixtureInterface
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
		$proteinAnnotation1 = new ProteinAnnotation();
		$proteinAnnotation1->setStartPosition( 1 );
		$proteinAnnotation1->setEndPosition( 300 );
		$proteinAnnotation1->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU1' ) );
		$proteinAnnotation1->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU1' ) );
		$manager->persist( $proteinAnnotation1 );
		
		$proteinAnnotation2 = new ProteinAnnotation();
		$proteinAnnotation2->setStartPosition( 1 );
		$proteinAnnotation2->setEndPosition( 300 );
		$proteinAnnotation2->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU1' ) );
		$proteinAnnotation2->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU2' ) );
		$manager->persist( $proteinAnnotation2 );
		
		$proteinAnnotation3 = new ProteinAnnotation();
		$proteinAnnotation3->setStartPosition( 1 );
		$proteinAnnotation3->setEndPosition( 300 );
		$proteinAnnotation3->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU1' ) );
		$proteinAnnotation3->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU3' ) );
		$manager->persist( $proteinAnnotation3 );
		
		$proteinAnnotation4 = new ProteinAnnotation();
		$proteinAnnotation4->setStartPosition( 1 );
		$proteinAnnotation4->setEndPosition( 300 );
		$proteinAnnotation4->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU1' ) );
		$proteinAnnotation4->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU4' ) );
		$manager->persist( $proteinAnnotation4 );
		
		$proteinAnnotation5 = new ProteinAnnotation();
		$proteinAnnotation5->setStartPosition( 1 );
		$proteinAnnotation5->setEndPosition( 300 );
		$proteinAnnotation5->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU2' ) );
		$proteinAnnotation5->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU5' ) );
		$manager->persist( $proteinAnnotation5 );
		
		$proteinAnnotation6 = new ProteinAnnotation();
		$proteinAnnotation6->setStartPosition( 1 );
		$proteinAnnotation6->setEndPosition( 300 );
		$proteinAnnotation6->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU2' ) );
		$proteinAnnotation6->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU6' ) );
		$manager->persist( $proteinAnnotation6 );
		
		$proteinAnnotation7 = new ProteinAnnotation();
		$proteinAnnotation7->setStartPosition( 1 );
		$proteinAnnotation7->setEndPosition( 300 );
		$proteinAnnotation7->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU2' ) );
		$proteinAnnotation7->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU7' ) );
		$manager->persist( $proteinAnnotation7 );
		
		$proteinAnnotation8 = new ProteinAnnotation();
		$proteinAnnotation8->setStartPosition( 1 );
		$proteinAnnotation8->setEndPosition( 300 );
		$proteinAnnotation8->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU2' ) );
		$proteinAnnotation8->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU8' ) );
		$manager->persist( $proteinAnnotation8 );
		
		$proteinAnnotation9 = new ProteinAnnotation();
		$proteinAnnotation9->setStartPosition( 1 );
		$proteinAnnotation9->setEndPosition( 300 );
		$proteinAnnotation9->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU3' ) );
		$proteinAnnotation9->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU9' ) );
		$manager->persist( $proteinAnnotation9 );
		
		$proteinAnnotation10 = new ProteinAnnotation();
		$proteinAnnotation10->setStartPosition( 1 );
		$proteinAnnotation10->setEndPosition( 300 );
		$proteinAnnotation10->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU3' ) );
		$proteinAnnotation10->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU10' ) );
		$manager->persist( $proteinAnnotation10 );
		
		$proteinAnnotation11 = new ProteinAnnotation();
		$proteinAnnotation11->setStartPosition( 1 );
		$proteinAnnotation11->setEndPosition( 300 );
		$proteinAnnotation11->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU3' ) );
		$proteinAnnotation11->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU11' ) );
		$manager->persist( $proteinAnnotation11 );
		
		$proteinAnnotation12 = new ProteinAnnotation();
		$proteinAnnotation12->setStartPosition( 1 );
		$proteinAnnotation12->setEndPosition( 300 );
		$proteinAnnotation12->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU3' ) );
		$proteinAnnotation12->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU12' ) );
		$manager->persist( $proteinAnnotation12 );
		
		$proteinAnnotation13 = new ProteinAnnotation();
		$proteinAnnotation13->setStartPosition( 1 );
		$proteinAnnotation13->setEndPosition( 300 );
		$proteinAnnotation13->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU4' ) );
		$proteinAnnotation13->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU13' ) );
		$manager->persist( $proteinAnnotation13 );
		
		$proteinAnnotation14 = new ProteinAnnotation();
		$proteinAnnotation14->setStartPosition( 1 );
		$proteinAnnotation14->setEndPosition( 300 );
		$proteinAnnotation14->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU4' ) );
		$proteinAnnotation14->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU14' ) );
		$manager->persist( $proteinAnnotation14 );
		
		$proteinAnnotation15 = new ProteinAnnotation();
		$proteinAnnotation15->setStartPosition( 1 );
		$proteinAnnotation15->setEndPosition( 300 );
		$proteinAnnotation15->setProteinAnnotationFkAnnotation( $this->getReference( 'AnnotationTU4' ) );
		$proteinAnnotation15->setProteinAnnotationFkProtein( $this->getReference( 'ProteinTU15' ) );
		$manager->persist( $proteinAnnotation15 );		
		
		$manager->flush();			
	}	
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 * 
	 * @return integer 3
	 */
	public function getOrder() {
		return 3;
	}

}// END CLASS
?>
<?php
/**
 * LoadAnnotationData.php
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
use bcGen\MainBundle\Entity\Annotation;

/**
 * This class load data in the database equivalent to 4 Annotation objects.
 *
 * @link http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *                                            This link gives details on how to use the Doctrine fixture bundle
 *
 * @see \bcGen\MainBundle\Entity\Annotation         Class Annotation
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class LoadAnnotationData extends AbstractFixture implements OrderedFixtureInterface
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
		$annotation1 = new Annotation();
		$annotation1->setAnnotationTitle('AnnotationTitleTU1');
		$annotation1->setAnnotationDesc('AnnotationDescTU1');
		$annotation1->setPublic(1);
		$annotation1->setAnnotationType('Protein');
		$annotation1->addAnnotationSources( $this->getReference('InnerCommunicationTU1') );
		$this->addReference('AnnotationTU1', $annotation1);
		$manager->persist($annotation1);
		
		$annotation2 = new Annotation();
		$annotation2->setAnnotationTitle('AnnotationTitleTU2');
		$annotation2->setAnnotationDesc('AnnotationDescTU2');
		$annotation2->setPublic(1);
		$annotation2->setAnnotationType('Gene');
		$annotation2->addAnnotationSources( $this->getReference('PublicationTU1') );
		$this->addReference('AnnotationTU2', $annotation2);
		$manager->persist($annotation2);
		
		$annotation3 = new Annotation();
		$annotation3->setAnnotationTitle('AnnotationTitleTU3');
		$annotation3->setAnnotationDesc('AnnotationDescTU3');
		$annotation3->setPublic(0);
		$annotation3->setAnnotationType('Protein');
		$annotation3->addAnnotationSources( $this->getReference('InnerCommunicationTU2') );
		$this->addReference('AnnotationTU3', $annotation3);
		$manager->persist($annotation3);
		
		$annotation4 = new Annotation();
		$annotation4->setAnnotationTitle('AnnotationTitleTU4');
		$annotation4->setAnnotationDesc('AnnotationDescTU4');
		$annotation4->setPublic(0);
		$annotation4->setAnnotationType('Gene');
		$annotation4->addAnnotationSources( $this->getReference('PublicationTU2') );
		$this->addReference('AnnotationTU4', $annotation4);
		$manager->persist($annotation4);
		
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
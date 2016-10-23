<?php
/**
 * LoadConditionData.php
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
use bcGen\MainBundle\Entity\Condition;

/**
 * This class load data in the database equivalent to 4 Condition objects.
 *
 * @link http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *                                            This link gives details on how to use the Doctrine fixture bundle
 * 
 * @see \bcGen\MainBundle\Entity\Condition         Class Condition
 *     
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 */
class LoadConditionData extends AbstractFixture implements OrderedFixtureInterface
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
	    $condition1 = new Condition();
	    $condition1->setConditionDesc( 'ConditionDescTU1' );
	    $condition1->setPublicCond( 'PublicCondTU1' );
	    $condition1->addConditionSources( $this->getReference('InnerCommunicationTU1') );
	    $manager->persist($condition1);
	    $this->addReference( 'ConditionTU1', $condition1 );
	    
	    $condition2 = new Condition();
	    $condition2->setConditionDesc( 'ConditionDescTU2' );
	    $condition2->setPublicCond( 'PublicCondTU2' );
	    $condition2->addConditionSources( $this->getReference('PublicationTU1') );
	    $manager->persist($condition2);
	    $this->addReference( 'ConditionTU2', $condition2 );
	    
	    $condition3 = new Condition();
	    $condition3->setConditionDesc( 'ConditionDescTU3' );
	    $condition3->setPublicCond( 'PublicCondTU3' );
	    $condition3->addConditionSources( $this->getReference('InnerCommunicationTU2') );
	    $manager->persist($condition3);
	    $this->addReference( 'ConditionTU3', $condition3 );
	    
	    $condition4 = new Condition();
	    $condition4->setConditionDesc( 'ConditionDescTU4' );
	    $condition4->setPublicCond( 'PublicCondTU4' );
	    $condition4->addConditionSources( $this->getReference('PublicationTU2') );
	    $manager->persist($condition4);
	    $this->addReference( 'ConditionTU4', $condition4 );
	    
	    $condition5 = new Condition();
	    $condition5->setConditionDesc( 'ConditionDescTU5' );
	    $condition5->setPublicCond( 'PublicCondTU5' );
	    $condition5->addConditionSources( $this->getReference('PublicationTU2') );
	    $manager->persist($condition5);
	    $this->addReference( 'ConditionTU5', $condition5 );
	    
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
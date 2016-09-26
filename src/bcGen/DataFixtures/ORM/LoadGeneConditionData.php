<?php
/**
 * LoadGeneConditionData.php
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
use bcGen\MainBundle\Entity\GeneCondition;

/**
 * This class load data in the database equivalent to 5 GeneCondition objects.
 *
 * @link http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *                                            This link gives details on how to use the Doctrine fixture bundle
 *
 * @see \bcGen\MainBundle\Entity\GeneCondition         Class GeneCondition
 *
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 */
class LoadGeneConditionData extends AbstractFixture implements OrderedFixtureInterface
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
		$geneCondition1 = new GeneCondition();
		$geneCondition1->setExpressionRatio( 1 );
		$geneCondition1->setExpressionValue( 1 );
		$geneCondition1->setGeneConditionFkCondition( $this->getReference('ConditionTU1') );
		$geneCondition1->setGeneConditionFKGene( $this->getReference('GeneTU1') );
		$manager->persist( $geneCondition1 );
		
		$geneCondition2 = new GeneCondition();
		$geneCondition2->setExpressionRatio( 2 );
		$geneCondition2->setExpressionValue( 2 );
		$geneCondition2->setGeneConditionFkCondition( $this->getReference('ConditionTU2') );
		$geneCondition2->setGeneConditionFKGene( $this->getReference('GeneTU2') );
		$manager->persist( $geneCondition2 );
		

		$geneCondition3 = new GeneCondition();
		$geneCondition3->setExpressionRatio( 3 );
		$geneCondition3->setExpressionValue( 3 );
		$geneCondition3->setGeneConditionFkCondition( $this->getReference('ConditionTU3') );
		$geneCondition3->setGeneConditionFKGene( $this->getReference('GeneTU3') );
		$manager->persist( $geneCondition3 );
		

		$geneCondition4 = new GeneCondition();
		$geneCondition4->setExpressionRatio( 4 );
		$geneCondition4->setExpressionValue( 4 );
		$geneCondition4->setGeneConditionFkCondition( $this->getReference('ConditionTU4') );
		$geneCondition4->setGeneConditionFKGene( $this->getReference('GeneTU4') );
		$manager->persist( $geneCondition4 );
		

		$geneCondition5 = new GeneCondition();
		$geneCondition5->setExpressionRatio( 5 );
		$geneCondition5->setExpressionValue( 5 );
		$geneCondition5->setGeneConditionFkCondition( $this->getReference('ConditionTU5') );
		$geneCondition5->setGeneConditionFKGene( $this->getReference('GeneTU5') );
		$manager->persist( $geneCondition5 );
		
		$manager->flush();			
	}	
	
	/**
	 * {@inheritDoc}
	 * 
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 * 
	 * @return integer 4
	 */
	public function getOrder() {
		return 4;
	}

}// END CLASS
?>
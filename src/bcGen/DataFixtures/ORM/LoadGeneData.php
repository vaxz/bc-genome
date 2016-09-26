<?php
/**
 * LoadGeneData.php
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
use bcGen\MainBundle\Entity\Gene;

/**
 * This class load data in the database equivalent to 5 Gene objects.
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
class LoadGeneData extends AbstractFixture implements OrderedFixtureInterface
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
		$gene1 = new Gene();
		$gene1->setGeneAccession( 'GeneAccessionTU1' );
		$gene1->setGeneContig( 1 );
		$gene1->setGeneRef( TRUE );
		$gene1->setGeneSeq( 'GeneSeqTU1' );
		$gene1->setGeneGenome( $this->getReference( 'GenomeTU1' ) );
		$gene1->setGeneLocus( $this->getReference( 'LocusTU1' ) );
		$gene1->addGeneAnnotations( $this->getReference( 'AnnotationTU1' ) );
		$gene1->addGeneProteins( $this->getReference( 'ProteinTU1' ) );
		$gene1->addGeneProteins( $this->getReference( 'ProteinTU2' ) );
		$gene1->addGeneProteins( $this->getReference( 'ProteinTU3' ) );
		$gene1->addGeneSources( $this->getReference( 'PublicationTU1' ) );
		$manager->persist( $gene1 );
		$this->addReference( 'GeneTU1', $gene1 );
		
		
		$gene2 = new Gene();
		$gene2->setGeneAccession( 'GeneAccessionTU2' );
		$gene2->setGeneContig( 2 );
		$gene2->setGeneRef( FALSE );
		$gene2->setGeneSeq( 'GeneSeqTU2' );
		$gene2->setGeneGenome( $this->getReference( 'GenomeTU1' ) );
		$gene2->setGeneLocus( $this->getReference( 'LocusTU1' ) );
		$gene2->addGeneAnnotations( $this->getReference( 'AnnotationTU1' ) );
		$gene2->addGeneAnnotations( $this->getReference( 'AnnotationTU2' ) );
		$gene2->addGeneProteins( $this->getReference( 'ProteinTU4' ) );
		$gene2->addGeneProteins( $this->getReference( 'ProteinTU5' ) );
		$gene2->addGeneProteins( $this->getReference( 'ProteinTU6' ) );
		$gene2->addGeneSources( $this->getReference( 'PublicationTU1' ) );
		$manager->persist( $gene2 );
		$this->addReference( 'GeneTU2', $gene2 );
		
		
		$gene3 = new Gene();
		$gene3->setGeneAccession( 'GeneAccessionTU3' );
		$gene3->setGeneContig( 3 );
		$gene3->setGeneRef( TRUE );
		$gene3->setGeneSeq( 'GeneSeqTU3' );
		$gene2->setGeneGenome( $this->getReference( 'GenomeTU1' ) );
		$gene2->setGeneLocus( $this->getReference( 'LocusTU1' ) );
		$gene3->addGeneAnnotations( $this->getReference( 'AnnotationTU2' ) );
		$gene3->addGeneAnnotations( $this->getReference( 'AnnotationTU3' ) );
		$gene3->addGeneProteins( $this->getReference( 'ProteinTU7' ) );
		$gene3->addGeneProteins( $this->getReference( 'ProteinTU8' ) );
		$gene3->addGeneProteins( $this->getReference( 'ProteinTU9' ) );
		$gene3->addGeneSources( $this->getReference( 'PublicationTU1' ) );
		$manager->persist( $gene3 );
		$this->addReference( 'GeneTU3', $gene3 );
		
		
		$gene4 = new Gene();
		$gene4->setGeneAccession( 'GeneAccessionTU4' );
		$gene4->setGeneContig( 4 );
		$gene4->setGeneRef( FALSE );
		$gene4->setGeneSeq( 'GeneSeqTU4' );
		$gene4->setGeneGenome( $this->getReference( 'GenomeTU1' ) );
		$gene4->setGeneLocus( $this->getReference( 'LocusTU1' ) );
		$gene4->addGeneAnnotations( $this->getReference( 'AnnotationTU3' ) );
		$gene4->addGeneProteins( $this->getReference( 'ProteinTU10' ) );
		$gene4->addGeneProteins( $this->getReference( 'ProteinTU11' ) );
		$gene4->addGeneProteins( $this->getReference( 'ProteinTU12' ) );
		$gene4->addGeneSources( $this->getReference( 'PublicationTU1' ) );
		$manager->persist( $gene4 );
		$this->addReference( 'GeneTU4', $gene4 );
		
		
		$gene5 = new Gene();
		$gene5->setGeneAccession( 'GeneAccessionTU5' );
		$gene5->setGeneContig( 5 );
		$gene5->setGeneRef( TRUE );
		$gene5->setGeneSeq( 'GeneSeqTU5' );
		$gene5->setGeneGenome( $this->getReference( 'GenomeTU1' ) );
		$gene5->setGeneLocus( $this->getReference( 'LocusTU1' ) );
		$gene5->addGeneAnnotations( $this->getReference( 'AnnotationTU4' ) );
		$gene5->addGeneProteins( $this->getReference( 'ProteinTU13' ) );
		$gene5->addGeneProteins( $this->getReference( 'ProteinTU14' ) );
		$gene5->addGeneProteins( $this->getReference( 'ProteinTU15' ) );
		$gene5->addGeneSources( $this->getReference( 'PublicationTU1' ) );
		$manager->persist( $gene5 );
		$this->addReference( 'GeneTU5', $gene5 );		
		
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
<?php

/**
 * Gene.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */
namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Gene allows the creation of Gene object and correponds to a table in the database : bc_gen_db.
 * It's related to gene characteristics.
 *
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
 *                                                 Doctrine documentation on the class ArrayCollection
 * @see \bcGen\MainBundle\Entity\Source            Class Source
 * @see \bcGen\MainBundle\Entity\Genome            Class Genome
 * @see \bcGen\MainBundle\Entity\Locus             Class Locus
 * @see \bcGen\MainBundle\Entity\Annotation        Class Annotation
 * @see \bcGen\MainBundle\Entity\Protein           Class Protein
 *     
 * @ORM\Table( name="gene" )
 * @ORM\Entity(repositoryClass="bcGen\MainBundle\Entity\GeneRepository")
 */
class Gene {
	/**
	 * $id is a number which identifies a Gene object
	 * It's worth the chromosome number.
	 *
	 * @var integer
	 * 
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * $geneAccession is the code name of a Gene object
	 *
	 * @var string
	 * 
	 * @ORM\Column(name="gene_accession", type="string", length=255, nullable=TRUE)
	 */
	private $geneAccession;
	
	/**
	 *
	 * @todo ask for information to describe this attribute
	 * 
	 * @var integer
	 * 
	 * @ORM\Column(name="gene_contig", type="integer", nullable=TRUE)
	 */
	private $geneContig;
	
	/**
	 * $geneSeq is the DNA sequence of a Gene object
	 *
	 * @var string
	 * 
	 * @ORM\Column(name="gene_seq", type="text", nullable=TRUE)
	 */
	private $geneSeq;
	
	/**
	 * $geneRef indicates if the current Gene object is a reference gene
	 *
	 * @var boolean
	 * 
	 * @ORM\Column(name="gene_ref", type="boolean", nullable=TRUE)
	 */
	private $geneRef;
	
	/**
	 * $geneAnnotations gathers all the references of Annotation objects linked to the current Gene object
	 *
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 *                                                 Doctrine documentation on the class ArrayCollection
	 * @see \bcGen\MainBundle\Entity\Annotation        Class Annotation
	 * 
	 * @var \Doctrine\Common\Collections\ArrayCollection
	 * 
	 * @ORM\ManyToMany( targetEntity="bcGen\MainBundle\Entity\Annotation" )
	 * @ORM\JoinColumn( name="gene_annotation", nullable=TRUE )
	 */
	private $geneAnnotations;
	
	/**
	 * $geneGenome contains the Genome object reference linked to the current Gene object
	 *
	 * @see \bcGen\MainBundle\Entity\Genome             Class Genome
	 * 
	 * @var integer
	 * 
	 * @ORM\ManyToOne( targetEntity="bcGen\MainBundle\Entity\Genome" )
	 * @ORM\JoinColumn( name="gene_genome", nullable=TRUE )
	 */
	private $geneGenome;
	
	/**
	 * $geneLocus contains the Locus object reference linked to the current Gene object
	 *
	 * @see \bcGen\MainBundle\Entity\Locus         Class Locus
	 * 
	 * @var integer
	 * 
	 * @ORM\ManyToOne( targetEntity="bcGen\MainBundle\Entity\Locus", inversedBy="locusGenes" )
	 * @ORM\JoinColumn( name="gene_locus", nullable = TRUE )
	 */
	private $geneLocus;
	
	/**
	 * $geneSources gathers all the references of Source objects linked to the current Gene object
	 *
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 *                                              Doctrine documentation on the class ArrayCollection
	 * @see \bcGen\MainBundle\Entity\Source         Class Source
	 * 
	 * @var \Doctrine\Common\Collections\ArrayCollection
	 * 
	 * @ORM\ManyToMany( targetEntity="bcGen\MainBundle\Entity\Source" )
	 * @ORM\JoinColumn( name="gene_source", nullable=TRUE )
	 */
	private $geneSources;
	
	/**
	 * $geneProteins gathers all the references of Protein objects linked to the current Gene object
	 *
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 *                                                  Doctrine documentation on the class ArrayCollection
	 * @see \bcGen\MainBundle\Entity\Protein            Class Protein
	 * 
	 * @var \Doctrine\Common\Collections\ArrayCollection
	 * 
	 * @ORM\OneToMany( targetEntity="bcGen\MainBundle\Entity\Protein", mappedBy="proteinGene" )
	 */
	private $geneProteins;
	
	/**
	 * Constructor of the class Gene initializes the ArrayCollections :
	 * $geneAnnotations, $geneSources and geneProteins 
	 * 
	 */
	public function __construct() {
		$this->geneAnnotations = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->geneSources = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->geneProteins = new \Doctrine\Common\Collections\ArrayCollection ();
	}
	
	/**
	 * Get the id value of a Gene object
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set the geneSeq value of a Gene Object
	 *
	 * @param string $geneSeq
	 * 	
	 * @return Gene
	 */
	public function setGeneSeq($geneSeq) {
		$this->geneSeq = $geneSeq;
		return $this;
	}
	
	/**
	 * Get the geneSeq value of a Gene Object
	 *
	 * @return string
	 */
	public function getGeneSeq() {
		return $this->geneSeq;
	}
	
	/**
	 * Set the geneRef value of a Gene Object
	 *
	 * @param boolean $geneRef
	 *         	
	 * @return Gene
	 */
	public function setGeneRef($geneRef) {
		$this->geneRef = $geneRef;
		
		return $this;
	}
	
	/**
	 * Get the geneRef value of a Gene Object
	 *
	 * @return boolean True the Gene Object is a reference gene
	 *                 False if the Gene Object is not a reference gene
	 */
	public function getGeneRef() {
		return $this->geneRef;
	}
	
	/**
	 * Set the geneAccession value of a Gene Object
	 *
	 * @param string $geneAccession  
	 *       	
	 * @return Gene
	 */
	public function setGeneAccession($geneAccession) {
		$this->geneAccession = $geneAccession;
		
		return $this;
	}
	
	/**
	 * Get the geneAccession value of a Gene Object
	 *
	 * @return string
	 */
	public function getGeneAccession() {
		return $this->geneAccession;
	}
	
	/**
	 * Set the geneContig value of a Gene Object
	 *
	 * @param integer $geneContig
	 *         	
	 * @return Gene
	 */
	public function setGeneContig($geneContig) {
		$this->geneContig = $geneContig;
		
		return $this;
	}
	
	/**
	 * Get the geneContig value of a Gene Object
	 *
	 * @return integer
	 */
	public function getGeneContig() {
		return $this->geneContig;
	}
	
	/**
	 * Add an Annotation object reference to geneAnnotations
	 *                                            
	 * @param \bcGen\MainBundle\Entity\Annotation $annotation
	 *         	
	 * @return Gene
	 */
	public function addGeneAnnotations(\bcGen\MainBundle\Entity\Annotation $annotation) {
		$this->geneAnnotations[] = $annotation;
		
		return $this;
	}
	
	/**
	 * Remove an Annotation object reference from geneAnnotations
	 *
	 * @uses \Doctrine\Common\Collections\ArrayCollection::removeElement()
	 * 
	 * @param \bcGen\MainBundle\Entity\Annotation $annotation        	
	 */
	public function removeGeneAnnotations(\bcGen\MainBundle\Entity\Annotation $annotation) {
		$this->geneAnnotations->removeElement ( $annotation );
	}
	
	/**
	 * Get the ArrayCollection : geneAnnotations
	 *
	 * @return \Doctrine\Common\Collections\ArrayCollection
	 */
	public function getGeneAnnotations() {
		return $this->geneAnnotations;
	}
	
	/**
	 * Set the geneGenome value of a Gene Object
	 *
	 * @param \bcGen\MainBundle\Entity\Genome $genome
	 *         	
	 * @return Gene
	 */
	public function setGeneGenome(\bcGen\MainBundle\Entity\Genome $genome) {
		$this->geneGenome = $genome;
		return $this;
	}
	
	/**
	 * Get the geneGenome value of a Gene Object
	 *
	 * @return \bcGen\MainBundle\Entity\Genome
	 */
	public function getGeneGenome() {
		return $this->geneGenome;
	}
	
	/**
	 * Set the geneLocus value of a Gene Object
	 *
	 * @param \bcGen\MainBundle\Entity\Locus $locus
	 *         	
	 * @return Gene
	 */
	public function setGeneLocus(\bcGen\MainBundle\Entity\Locus $locus = null) {
		$this->geneLocus = $locus;
		
		return $this;
	}
	
	/**
	 * Get the geneLocus value of a Gene Object
	 *
	 * @return \bcGen\MainBundle\Entity\Locus
	 */
	public function getGeneLocus() {
		return $this->geneLocus;
	}
	
	/**
	 * Add a Source object reference to geneSources
	 *
	 * @param \bcGen\MainBundle\Entity\Source $source
	 *         	
	 * @return Gene
	 */
	public function addGeneSources(\bcGen\MainBundle\Entity\Source $source) {
		$this->geneSources [] = $source;
		return $this;
	}
	
	/**
	 * Remove a Source object reference from geneSources
	 *
	 * @uses \Doctrine\Common\Collections\ArrayCollection::removeElement()
	 * 
	 * @param \bcGen\MainBundle\Entity\Source $source        	
	 */
	public function removeGeneSources(\bcGen\MainBundle\Entity\Source $source) {
		$this->geneSources->removeElement ( $source );
	}
	
	/**
	 * Get the ArrayCollection : geneSources
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getGeneSources() {
		return $this->geneSources;
	}
	
	/**
	 * Add a protein object reference to geneProteins
	 *
	 * @uses \bcGen\MainBundle\Entity\Protein::setProteinGene()
	 * 
	 * @param \bcGen\MainBundle\Entity\Protein $protein
	 *         	
	 * @return Gene
	 */
	public function addGeneProteins(\bcGen\MainBundle\Entity\Protein $protein) {
		$this->geneProteins [] = $protein;
		$protein->setProteinGene ( $this );
		
		return $this;
	}
	
	/**
	 * Remove a protein object reference to geneProteins
	 *
	 * @uses \Doctrine\Common\Collections\ArrayCollection::removeElement()
	 * @uses \bcGen\MainBundle\Entity\Protein::setProteinGene()
	 * 
	 * @param \bcGen\MainBundle\Entity\Protein $protein        	
	 */
	public function removeGeneProteins(\bcGen\MainBundle\Entity\Protein $protein) {
		$this->geneProteins->removeElement ( $protein );
		$protein->setProteinGene ( NULL );
	}
	
	/**
	 * Get the ArrayCollection : geneProteins
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getGeneProteins() {
		return $this->geneProteins;
	}
	
	/**
	 * This method compares 2 Genes objects according to their accessionNum.
	 * Only the first four characters are used.
	 * The choosen order is : BCIN > B0510 > BC1G > BCT4 > BOFU
	 *
	 * @param Gene $gene1        	
	 * @param Gene $gene2
	 *         	
	 * @return integer    0 if the 2 Gene objects are the same
	 *                    1 if gene1 is superior to gene2
	 *                   -1 if gene1 is inferior to gene2
	 */
	public static function geneAccessionComp(Gene $gene1 = null, Gene $gene2 = null)
	{
		$tmp = 0;
		
		if ( empty ( $gene1 ) or empty ( $gene2 ) ) $tmp = 0;
		else
		{
			$accessionNum1 = substr ( $gene1->geneAccession, 0, 4 );
			$accessionNum2 = substr ( $gene2->geneAccession, 0, 4 );
			
			if (substr_compare ( $accessionNum1, $accessionNum2, 0, 4, true ) == 0)
			{
				$tmp = 0;
			}
			else if (substr_compare ( $accessionNum1, "BCIN", 0, 4, true ) == 0)
			{
				$tmp = -1;
			} 
			else if (substr_compare ( $accessionNum1, "B0510", 0, 4, true ) == 0) 
			{
				if (substr_compare ( $accessionNum2, "BCIN", 0, 4, true ) == 0)
				{
					$tmp = 1;
				}
				else
				{
					$tmp = -1;
				}					
			}
			else if (substr_compare ( $accessionNum1, "BC1G", 0, 4, true ) == 0)
			{
				if ( substr_compare ( $accessionNum2, "BCIN", 0, 4, true ) == 0
					 or substr_compare ( $accessionNum2, "B0510", 0, 4, true ) == 0 )
					$tmp = 1;
				else
					$tmp = -1;
			}
			else if (substr_compare ( $accessionNum1, "BCT4", 0, 4, true ) == 0)
			{
				if (substr_compare ( $accessionNum2, "BOFU", 0, 4, true ) == 0)
					$tmp = -1;
				else
					$tmp = 1;
			}
			else
			{
				$tmp = 1;
			}
		}
		
		return $tmp;
		
	} // FUNCTION END
	
}
?>

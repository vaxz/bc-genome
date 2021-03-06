<?php

/**
 * LocusChromosome.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */
namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocusChromosome class allows the creation of LocusChromosome object and correponds
 * to a table in the database : bc_gen_db.
 * It ensures the link between Locus and Chromosome entities
 * and gives information on both entities.
 *
 * @see \bcGen\MainBundle\Entity\Locus          Class Locus
 * @see \bcGen\MainBundle\Entity\Chromosome     Class Chromosome
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 * @ORM\Table(name="locus_chromosome")
 * @ORM\Entity(repositoryClass="bcGen\MainBundle\Entity\LocusChromosomeRepository")
 */
class LocusChromosome {
	/**
	 * $locusChromosomeFkLocus contains all the references of Locus objects associated
	 * to the current LocusChromosome object
	 *
	 * @todo define option on delete cascade
	 * 
	 * @see \bcGen\MainBundle\Entity\Locus Class Locus
	 * 
	 * @var integer
	 * 
	 * @ORM\Id
	 * @ORM\ManyToOne( targetEntity="bcGen\MainBundle\Entity\Locus" )
	 * @ORM\JoinColumn( name="locus_chromosome_fk_locus", nullable=FALSE )
	 */
	private $locusChromosomeFkLocus;
	
	/**
	 * $locusChromosomeFkChromosome contains the Chromosome object reference associated
	 * to the current LocusChromosome object
	 *
	 * @see \bcGen\MainBundle\Entity\Chromosome Class Chromosome
	 * 
	 * @var integer
	 * 
	 * @ORM\Id
	 * @ORM\OneToOne( targetEntity="bcGen\MainBundle\Entity\Chromosome" )
	 * @ORM\JoinColumn( name="locus_chromosome_fk_chromosome", nullable=FALSE )
	 */
	private $locusChromosomeFkChromosome;
	
	/**
	 * $positionLocusBp is the position (pair base) on the Chromosome of the first nucleotide owned by the Locus
	 *
	 * @var integer
	 * 
	 * @ORM\Column(name="position_locus_bp", type="integer", nullable=TRUE)
	 */
	private $positionLocusBp;
	
	/**
	 * $directStrand indicates if the strand is sense (direct) or antisense
	 *
	 * @var boolean
	 * 
	 * @ORM\Column(name="direct_strand", type="boolean", nullable=TRUE)
	 */
	private $directStrand;
	
	/**
	 * Set the positionLocusBp value of LocusChromosome object
	 *
	 * @param integer $positionLocusBp        	
	 * @return LocusChromosome
	 */
	public function setPositionLocusBp($positionLocusBp) {
		$this->positionLocusBp = $positionLocusBp;
		return $this;
	}
	
	/**
	 * Get the positionLocusBp value of a LocusChromosome object
	 *
	 * @return integer
	 */
	public function getPositionLocusBp() {
		return $this->positionLocusBp;
	}
	
	/**
	 * Set the directStrand value of a LocusChromosome object
	 *
	 * @param boolean $directStrand
	 *         	
	 * @return LocusChromosome
	 */
	public function setDirectStrand($directStrand) {
		$this->directStrand = $directStrand;
		return $this;
	}
	
	/**
	 * Get the directStrand value of a LocusChromosome object
	 *
	 * @return boolean  O if the sequence of the current Gene object is antisens
	 *                  1 if the sequence of the current Gene object is sens
	 */
	public function getDirectStrand() {
		return $this->directStrand;
	}
	
	/**
	 * Set the locusChromosomeFkChromosome value of a LocusChromosome object
	 *
	 * @param \bcGen\MainBundle\Entity\Locus $chromosome
	 *         	
	 * @return LocusChromosome
	 */
	public function setLocusChromosomeFkChromosome(\bcGen\MainBundle\Entity\Chromosome $chromosome) {
		$this->locusChromosomeFkChromosome = $chromosome;
		return $this;
	}
	
	/**
	 * Get the locusChromosomeFkChromosome value of a LocusChromosome object
	 *
	 * @return \bcGen\MainBundle\Entity\Locus
	 */
	public function getLocusChromosomeFkChromosome() {
		return $this->locusChromosomeFkChromosome;
	}
	
	/**
	 * Set the locusChromosomeFkLocus value of a LocusChromosome object
	 *
	 * @param \bcGen\MainBundle\Entity\Locus $locus
	 *         	
	 * @return LocusChromosome
	 */
	public function setLocusChromosomeFkLocus(\bcGen\MainBundle\Entity\Locus $locus) {
		$this->locusChromosomeFkLocus = $locus;
		return $this;
	}
	
	/**
	 * Get the locusChromosomeFkLocus value of a LocusChromosome object
	 *
	 * @return \bcGen\MainBundle\Entity\Locus
	 */
	public function getLocusChromosomeFkLocus() {
		return $this->locusChromosomeFkLocus;
	}
}// CLASS END

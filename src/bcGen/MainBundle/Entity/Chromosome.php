<?php

/**
 * Chromosome.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */
namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chromosome class allows the creation of Chromosome object and correponds to a table in the database : bc_gen_db.
 * It's related to chromsome characteristics
 *
 * @see \bcGen\MainBundle\Entity\Source Class Source
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 * @ORM\Table(name="chromosome")
 * @ORM\Entity(repositoryClass="bcGen\MainBundle\Entity\ChromosomeRepository")
 */
class Chromosome {
	/**
	 * $id is a number which identifies a Chromosome object
	 *
	 * @var integer
	 * 
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="NONE")
	 */
	private $id;
	
	/**
	 * $chromosomeSeq is the DNA sequence of a Chromosome object
	 *
	 * @var string
	 * 
	 * @ORM\Column(name="chromosome_seq", type="text", nullable=TRUE)
	 */
	private $chromosomeSeq;
	
	/**
	 * $chromosomeSource contains the Source object reference associated to the current Chromosome object
	 *
	 * @see \bcGen\MainBundle\Entity\Source Class Source
	 * @var integer
	 * 
	 * @ORM\ManyToOne( targetEntity="bcGen\MainBundle\Entity\Source" )
	 * @ORM\JoinColumn( name="chromosome_source", nullable=TRUE, unique=TRUE )
	 */
	private $chromosomeSource;
	
	/**
	 * Set the id value of a Chromosome object
	 *
	 * @param integer $id
	 *         	
	 * @return Chromosome
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * Get the id value of a Chromosome object
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set the chromosomeSeq value of a Chromosome object
	 *
	 * @param string $chromosomeSeq
	 *         	
	 * @return Chromosome
	 */
	public function setChromosomeSeq($chromosomeSeq) {
		$this->chromosomeSeq = $chromosomeSeq;
		return $this;
	}
	
	/**
	 * Get the chromosomeSeq value of a Chromosome object
	 *
	 * @return string
	 */
	public function getChromosomeSeq() {
		return $this->chromosomeSeq;
	}
	
	/**
	 * Set the chromosomeSource value of a Chromosome object
	 *
	 * @param \bcGen\MainBundle\Entity\Source $source
	 *         	
	 * @return Chromosome
	 */
	public function setChromosomeSource(\bcGen\MainBundle\Entity\Source $source) {
		$this->chromosomeSource = $source;
		return $this;
	}
	
	/**
	 * Get the chromosomeSource value of a Chromosome object
	 *
	 * @return \bcGen\MainBundle\Entity\Source
	 */
	public function getChromosomeSource() {
		return $this->chromosomeSource;
	}
}// CLASS END

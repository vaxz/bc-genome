<?php
/**
 * Genome.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */

namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genome class allows the creation of Genome object and correponds to a table in the database : bc_gen_db.
 * It's related to genome characteristics 
 *
 * @see \bcGen\MainBundle\Entity\Source Class Source
 * 
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux 
 * @version 0.1.0 0.1.0
 * 
 * @ORM\Table(name="genome")
 * @ORM\Entity(repositoryClass="bcGen\MainBundle\Entity\GenomeRepository")
 */
class Genome
{
    /**
     * id is a number which identifies a Genome object 
	 * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * genomeDesc is a description of a Genome object 
	 * @var string
     *
     * @ORM\Column(name="genome_desc", type="text", nullable=TRUE)
     */
    private $genomeDesc;
	
	/**
	 * genomeSource contains the Source object reference associated to the current Genome object
	 * @see \bcGen\MainBundle\Entity\Source class Source
	 * @var integer
	 * 
	 * @ORM\ManyToOne( targetEntity="bcGen\MainBundle\Entity\Source" )
	 * @ORM\JoinColumn( name="genome_source", nullable=TRUE, unique=TRUE )
	 */
	 private $genomeSource;


    /**
     * Get the id value of a Genome object
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the genomeDesc value of a Genome object
     * @param string $genomeDesc
     * @return Genome
     */
    public function setGenomeDesc($genomeDesc)
    {
        $this->genomeDesc = $genomeDesc;

        return $this;
    }

    /**
     * Get the genomeDesc value of a Genome object
     * @return string 
     */
    public function getGenomeDesc()
    {
        return $this->genomeDesc;
    }

    /**
     * Set the genomeSource value of a Genome object
     * @param \bcGen\MainBundle\Entity\Source $source
     * @return Genome
     */
    public function setGenomeSource(\bcGen\MainBundle\Entity\Source $source)
    {
        $this->genomeSource = $source;

        return $this;
    }

    /**
     * Get the genomeSource value of a Genome object
     * @return \bcGen\MainBundle\Entity\Source 
     */
    public function getGenomeSource()
    {
        return $this->genomeSource;
    }
}

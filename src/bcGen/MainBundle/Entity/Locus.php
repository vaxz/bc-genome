<?php
/**
 * Locus.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */

namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * Class Locus allows the creation of Locus object and correponds to a table in the database : bc_gen_db.
 * It's related to Locus characteristics 
 *
 * @see \bcGen\MainBundle\Entity\Gene Class Gene
 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
 * Doctrine documentation on the class ArrayCollection
 * 
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *
 * @ORM\Table( name="locus" )
 * @ORM\Entity(repositoryClass="bcGen\MainBundle\Entity\LocusRepository")
 */
class Locus
{
    /**
     * id is a number which identifies a Locus object
	 * id is established by this way:
	 * (chromosome number * 10000 + locus number )
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * geneName is the name of the gene located on a Locus object
     * @var string
     *
     * @ORM\Column( name="gene_name", type="string", length=255, nullable=TRUE )
     */
    private $geneName;


    /**
     * locusDesc is a description of a Locus Object
     * @var string
     *
     * @ORM\Column( name="locus_desc", type="text", nullable=TRUE )
     */
    private $locusDesc;
	
	/**
	 * locusGenes gathers all the references of Gene objects linked to the current Locus object
	 * @see \bcGen\MainBundle\Entity\Gene Class Gene
	 * @see http://www.doctrine-project.org/api/common/2.3/class-Doctrine.Common.Collections.ArrayCollection.html
	 * Doctrine documentation on the class ArrayCollection
	 * 
	 * @ORM\OneToMany( targetEntity="bcGen\MainBundle\Entity\Gene", mappedBy="geneLocus" )
	 */
	 private $locusGenes;
	 
   /**
     * Constructor initializes the ArrayCollections : locusGenes.
     */
    public function __construct()
    {
        $this->locusGenes = new \Doctrine\Common\Collections\ArrayCollection();
    }

   /**
     * Set the id value of a Locus object
     * @param integer $id
     * @return Locus
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the id value of a Locus object
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the geneName value of a Locus object
     * @param string $geneName
     * @return Locus
     */
    public function setGeneName($geneName)
    {
        $this->geneName = $geneName;

        return $this;
    }

    /**
     * Get the geneName value of a Locus object
     * @return string 
     */
    public function getGeneName()
    {
        return $this->geneName;
    }

    /**
     * Set the locusDesc value of a Locus object
     * @param string $locusDesc
     * @return Locus
     */
    public function setLocusDesc($locusDesc)
    {
        $this->locusDesc = $locusDesc;

        return $this;
    }

    /**
     * Get the locusDesc value of a Locus object
     * @return string 
     */
    public function getLocusDesc()
    {
        return $this->locusDesc;
    }

    /**
     * Add a Gene object reference to locusGenes
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 * Doctrine documentation on the class ArrayCollection
     * @param \bcGen\MainBundle\Entity\Gene $gene
     * @return Locus
     */
    public function addLocusGenes(\bcGen\MainBundle\Entity\Gene $gene)
    {
        $this->locusGenes[] = $locusGenes;
		$gene->setGeneLocus($this);
        return $this;
    }

    /**
     * Remove a Gene object reference to locusGenes
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 * Doctrine documentation on the class ArrayCollection
	 * @uses \Doctrine\Common\Collections\ArrayCollection::removeElement()
     * @param \bcGen\MainBundle\Entity\Gene $gene
     */
    public function removeLocusGenes(\bcGen\MainBundle\Entity\Gene $gene)
    {
        $this->locusGenes->removeElement($gene);
		$gene->setGeneLocus(NULL);
    }

    /**
     * Get the ArrayCollection : locusGenes 
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 * Doctrine documentation on the class ArrayCollection
	 * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocusGenes()
    {
        return $this->locusGenes;
    }
	
}// CLASS END

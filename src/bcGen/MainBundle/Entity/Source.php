<?php

/**
 * Source.php
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
 * Source class allows the creation of Source object and correponds to a table in the database : bc_gen_db.
 * It's related to documents (publication, inner communication) which give information on other objects
 * (gene, genome...). Publication and Innercommnication classes inherit from Source class.
 *
 * @see \bcGen\MainBundle\Entity\Publication          Class Publication
 * @see \bcGen\MainBundle\Entity\InnerCommunication   Class InnerCommunication
 * 
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * 
 * @version 0.1.0 0.1.0
 *         
 * @ORM\Table(name="source")
 * @ORM\Entity(repositoryClass="bcGen\MainBundle\Entity\SourceRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="source_type", type="string")
 * @ORM\DiscriminatorMap({"inner_communication" = "InnerCommunication", "publication" = "Publication"})
 */
abstract class Source {
	
	/**
	 * $id is a number which identifies a Source object
	 *
	 * @var integer
	 * 
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * $sourceTitle is the name of a Source object
	 *
	 * @var string
	 * 
	 * @ORM\Column(name="source_title", type="string", length=255, nullable=TRUE)
	 */
	private $sourceTitle;
	
	/**
	 * $sourceYear is the year when the Source object was published
	 *
	 * @var \DateTime
	 * 
	 * @ORM\Column(name="source_year", type="datetime", nullable=TRUE)
	 */
	private $sourceYear;
	
	/**
	 * $sourceAuthor is the personn who wrote the Source Object
	 *
	 * @var string
	 * 
	 * @ORM\Column(name="source_author", type="string", length=255, nullable=TRUE)
	 */
	private $sourceAuthor;
	
	/**
	 * Get the id value of a Source object
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set the title of a Source object
	 *
	 * @param string $sourceTitle
	 *         	
	 * @return Source
	 */
	public function setSourceTitle($sourceTitle) {
		$this->sourceTitle = $sourceTitle;
		
		return $this;
	}
	
	/**
	 * Get the title of a Source object
	 *
	 * @return string
	 */
	public function getSourceTitle() {
		return $this->sourceTitle;
	}
	
	/**
	 * Set the release year of a Source object
	 *
	 * @param \DateTime $sourceYear
	 *         	
	 * @return Source
	 */
	public function setSourceYear(\DateTime $sourceYear) {
		$this->sourceYear = $sourceYear;
		
		return $this;
	}
	
	/**
	 * Get the release year of a Source object
	 *
	 * @return \DateTime
	 */
	public function getSourceYear() {
		return $this->sourceYear;
	}
	
	/**
	 * Set the author of a Source object
	 *
	 * @param string $sourceAuthor
	 *         	
	 * @return Source
	 */
	public function setSourceAuthor($sourceAuthor) {
		$this->sourceAuthor = $sourceAuthor;
		
		return $this;
	}
	
	/**
	 * Get the author of a Source object
	 *
	 * @return string
	 */
	public function getSourceAuthor() {
		return $this->sourceAuthor;
	}
}// CLASS END

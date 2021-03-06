<?php

/**
 * Condition.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */
namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condition class allows the creation of Condition object and correponds to a table in the database : bc_gen_db.
 * It's related to experimental condition.
 *
 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
 *                                           Doctrine documentation on the ArrayCollection class
 * @see bcGen\MainBundle\Source              Class Source
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 * @ORM\Table( name="condition_T" )
 * @ORM\Entity(repositoryClass="bcGen\MainBundle\Entity\ConditionRepository")
 */
class Condition {
	/**
	 * $id is a number which identifies a Condition object
	 *
	 * @var integer
	 * 
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * $conditionDesc describes the different elements involved with a Condition object
	 *
	 * @var string
	 * 
	 * @ORM\Column(name="condition_desc", type="text", nullable=TRUE)
	 */
	private $conditionDesc;
	
	/**
	 * $publicCond specifies if a Condition object is available for everyone or the registered users
	 *
	 * @var boolean
	 * 
	 * @ORM\Column(name="public_cond", type="boolean", nullable=TRUE)
	 */
	private $publicCond;
	
	/**
	 * $conditionSources gathers all the references of Source objects linked to the current Condition object
	 *
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 *                                                        Doctrine documentation on the ArrayCollection class
	 * @var \Doctrine\Common\Collections\ArrayCollection
	 * 
	 * @ORM\ManyToMany( targetEntity="bcGen\MainBundle\Entity\Source")
	 * @ORM\JoinColumn( name="condition_source", nullable=TRUE )
	 */
	private $conditionSources;
	
	/**
	 * Constructor of the class Condition initializes the ArrayCollection : conditionSources.
	 */
	public function __construct() {
		$this->conditionSources = new \Doctrine\Common\Collections\ArrayCollection ();
	}
	
	/**
	 * Get the id value of a Condition object
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set the conditionDesc value of a Condition object
	 *
	 * @param string $conditionDesc
	 *         	
	 * @return Condition
	 */
	public function setConditionDesc($conditionDesc) {
		$this->conditionDesc = $conditionDesc;
		
		return $this;
	}
	
	/**
	 * Get the conditionDesc value of a Condition object
	 *
	 * @return string
	 */
	public function getConditionDesc() {
		return $this->conditionDesc;
	}
	
	/**
	 * Set the publicCond value of a Condition object
	 *
	 * @param boolean $publicCond
	 * 
	 * @return Condition
	 */
	public function setPublicCond($publicCond) {
		
		$this->publicCond = $publicCond;
		return $this;
	}
	
	/**
	 * Get the publicCond value of a Condition object
	 *
	 * @return boolean O if a Condition object is available for everyone
	 *                 1 if a Condition object is available for the registered users
	 */
	public function getPublicCond() {
		return $this->publicCond;
	}
	
	/**
	 * Add a Source object reference to conditionSources
	 *                                        
	 * @param \bcGen\MainBundle\Entity\Source $source
	 *   	
	 * @return Condition
	 */
	public function addConditionSources(\bcGen\MainBundle\Entity\Source $source) {
		$this->conditionSources [] = $source;
		
		return $this;
	}
	
	/**
	 * Remove a Source object reference from conditionSources
	 * 
	 * @uses \Doctrine\Common\Collections\ArrayCollection::removeElement()
	 * 
	 * @param \bcGen\MainBundle\Entity\Source $source        	
	 */
	public function removeConditionSources(\bcGen\MainBundle\Entity\Source $source) {
		$this->conditionSources->removeElement ( $source );
	}
	
	/**
	 * Get the ArrayCollection : conditionSources
	 *
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 *                                                           Doctrine documentation on the ArrayCollection class
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getConditionSources() {
		return $this->conditionSources;
	}
}// CLASS END

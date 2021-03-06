<?php

/**
 * Publication.php
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
 * Publication class allows the creation of Publication object and inherits of the Source class
 *
 * @see \bcGen\MainBundle\Entity\Source Class Source
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 *         
 * @ORM\Entity
 */
class Publication extends Source {
	
	/**
	 * $pubRef is an URL toward the original document
	 *
	 * @var string
	 * 
	 * @ORM\Column(name="pub_href", type="string", length=255, nullable=TRUE)
	 */
	private $pubHref;
	
	/**
	 * Set the pubHref value of a Publication object
	 *
	 * @param string $pubHref
	 *         	
	 * @return Publication
	 */
	public function setPubHref($pubHref) {
		$this->pubHref = $pubHref;
		return $this;
	}
	
	/**
	 * Get the pubHref value of a Publication object
	 *
	 * @return string
	 */
	public function getPubHref() {
		return $this->pubHref;
	}
}// CLASS END

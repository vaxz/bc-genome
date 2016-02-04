<?php
/**
 * Annotation.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */ 
namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Annotation class allows the creation of Annotation object and correponds to a table in the database : bc_gen_db.
 * It's related to features and functions linked to genes or proteins.
 * 
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux  
 * @version 0.1.0 0.1.0
 * 
 * @see \bcGen\MainBundle\Entity\Source Class Source
 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
 * Doctrine documentation on class ArrayCollection
 * 
 * @ORM\Table(name="annotation")
 * @ORM\Entity(repositoryClass="bcGen\MainBundle\Entity\AnnotationRepository")
 */
class Annotation
{
    /**
	 * id is a number which identifies a Annotation object
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * annotationTitle is the name of an Annotation object
	 * @var string
     *
     * @ORM\Column(name="annotation_title", type="string", length=255, nullable=TRUE)
     */
    private $annotationTitle;

    /**
     * annotationDesc is the description of an Annotation object
	 * @var string
     *
     * @ORM\Column(name="annotation_desc", type="string", length=255, nullable=TRUE)
     */
    private $annotationDesc;

    /**
	 * annotationPublic specifies if an Annotation object is available for everyone or the registered users
	 * @var boolean
     *
     * @ORM\Column(name="annotation_public", type="boolean", nullable=TRUE)
     */
    private $annotationPublic;

    /**
     * annotationType defines the kind (protein or gene) of an Annotation object
	 * @var string
     *
     * @ORM\Column(name="annotation_type", type="string", length=255, nullable=TRUE)
     */
    private $annotationType;
	
	/**
	 * annotationSources gathers all the references of Source objects linked to the current Annotation object
	 * @see \bcGen\MainBundle\Entity\Source Class Source
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 * Doctrine documentation on class ArrayCollection
	 * @var \Doctrine\Common\Collections\ArrayCollection
	 * 
	 * @ORM\ManyToMany( targetEntity="bcGen\MainBundle\Entity\Source" )
	 * @ORM\JoinColumn( name="annotation_sources", nullable=TRUE )
	 */
	 private $annotationSources;
	 
	/**
     * Constructor initializes the ArrayCollection : annotationSources.
     */
    public function __construct()
    {
        $this->annotationSources = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get the id value of an Annotation object
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the annotationTitle value of an Annotation object
     * @param string $annotationTitle
     * @return Annotation
     */
    public function setAnnotationTitle($annotationTitle)
    {
        $this->annotationTitle = $annotationTitle;

        return $this;
    }

    /**
     * Get the annotationTitle value of an Annotation object
     * @return string 
     */
    public function getAnnotationTitle()
    {
        return $this->annotationTitle;
    }

    /**
     * Set the annotationDesc value of an Annotation object
     * @param string $annotationDesc
     * @return Annotation
     */
    public function setAnnotationDesc($annotationDesc)
    {
        $this->annotationDesc = $annotationDesc;

        return $this;
    }

    /**
     * Get the annotationDesc value of an Annotation object
     * @return string 
     */
    public function getAnnotationDesc()
    {
        return $this->annotationDesc;
    }

    /**
     * Set the annotationPublic value of an Annotation object
     * @param boolean $annotationPublic
     * @return Annotation
     */
    public function setAnnotationPublic($annotationPublic)
    {
        $this->annotationPublic = $annotationPublic;

        return $this;
    }

    /**
     * Get the annotationPublic value of an Annotation object
     * @return boolean   O if the Annotation object is available only for the registered users
	 *                   1 if the Annotation object is available for everyone
     */
    public function getAnnotationPublic()
    {
        return $this->annotationPublic;
    }

    /**
     * Set the annotationType value of an Annotation object
     * @param string $annotationType
	 * @throws InvalidArgumentException if annotationtype is neither gene nor protein. 
     * @return Annotation
     */
    public function setAnnotationType($annotationType)
    {
    	$tmp = strtolower($annotationType);
		
        if( preg_match('#^protein$#', $annotationType) || preg_match('#^gene$#', $annotationType) )
		{
			$this->annotationType = $tmp;
            return $this;
		}
		else
		{
			throw new InvalidArgumentException( '$annotationtype must be one of these types : gene or protein
			                                     not'.$annotationType );
		}
    }

    /**
     * Get the annotationType value of an Annotation object
     * @return string 
     */
    public function getAnnotationType()
    {
        return $this->annotationType;
    }
    

    /**
     * Add a Source object reference to annotationSources
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 * Doctrine documentation on the class ArrayCollection
     * @param \bcGen\MainBundle\Entity\Source $source
     * @return Annotation
     */
    public function addAnnotationSources(\bcGen\MainBundle\Entity\Source $source)
    {
        $this->annotationSources[] = $source;

        return $this;
    }

    /**
     * Remove a Source object reference from annotationSources
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 * Doctrine documentation on the class ArrayCollection
	 * @uses \Doctrine\Common\Collections\ArrayCollection::removeElement()
     * @param \bcGen\MainBundle\Entity\Source $source
     */
    public function removeAnnotationSources(\bcGen\MainBundle\Entity\Source $source)
    {
        $this->annotationSources->removeElement($source);
    }

    /**
     * Get the ArrayCollection : annotationSources
	 * @see http://www.doctrine-project.org/api/common/2.5/class-Doctrine.Common.Collections.ArrayCollection.html
	 * Doctrine documentation on class ArrayCollection
	 * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAnnotationSources()
    {
        return $this->annotationSources;
    }
}// CLASS END

<?php
/**
 * InnerCommunication.php
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
 * InnerCommunication class allows the creation of InnerCommunication object and inherits of the Source class
 * 
 * @see \bcGen\MainBundle\Entity\Source Class Source
 * 
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux  
 * @version 0.1.0 0.1.0
 * 
 * @ORM\Entity
 */
class InnerCommunication extends Source
{
	
		
    /**
	 * Description of an InnerCommunication object 
     * @var string
     *
     * @ORM\Column(name="inner_com_cesc", type="text", nullable=TRUE)
     */
    private $innerComDesc;

    /**
     * Set the innerComDesc value of a Publication object
     * @param string $innerComDesc
     * @return InnerCommunication
     */
    public function setInnerComDesc($innerComDesc)
    {
        $this->innerComDesc = $innerComDesc;

        return $this;
    }

    /**
     * Get the innerComDesc value of a Publication object
     * @return string 
     */
    public function getInnerComDesc()
    {
        return $this->innerComDesc;
    }

}// CLASS END

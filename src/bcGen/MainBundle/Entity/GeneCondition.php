<?php
/**
 * GeneCondition.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */
namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeneCondition class allows the creation of GeneCondition object and correponds to a table in the database :
 * bc_gen_db. It ensures the link between Gene and Condition entities and gives information
 * on experimental expression results
 *
 * @see \bcGen\MainBundle\Entity\Gene Class Gene
 * @see \bcGen\MainBundle\Entity\Condition Class Condition
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 *        
 * @ORM\Table(name="gene_condition")
 * @ORM\Entity(repositoryClass="bcGen\MainBundle\Entity\GeneConditionRepository")
 */
class GeneCondition {
	/**
	 * $geneConditionFKGene is the gene id associated to a GeneCondition object
	 *
	 * @see \bcGen\MainBundle\Entity\Gene Class Gene
	 * 
	 * @var integer
	 * 
	 * @ORM\Id
	 * @ORM\ManyToOne( targetEntity="bcGen\MainBundle\Entity\Gene")
	 * @ORM\JoinColumn( name="gene_cond_fk_gene", nullable=TRUE )
	 */
	private $geneConditionFKGene;
	
	/**
	 * $geneConditionFkCondition is the condition id associated to a GeneCondition object
	 *
	 * @see \bcGen\MainBundle\Entity\Condition Class Condition
	 * 
	 * @var integer
	 * 
	 * @ORM\Id
	 * @ORM\ManyToOne( targetEntity="bcGen\MainBundle\Entity\Condition" )
	 * @ORM\JoinColumn( name="gene_cond_fk_condition", nullable=TRUE )
	 */
	private $geneConditionFkCondition;
	
	/**
	 * $expressionRatio is an index number about gene expression within a specific condition
	 *
	 * @var float
	 * 
	 * @ORM\Column(name="expressionRatio", type="float", nullable=TRUE)
	 */
	private $expressionRatio;
	
	/**
	 * $expressionValue is a number about gene expression within a specific condition
	 *
	 * @var float 
	 * 
	 * @ORM\Column(name="expressionValue", type="float", nullable=TRUE)
	 */
	private $expressionValue;
	
	/**
	 * Set the expressionRatio value of a GeneCondition object
	 *
	 * @param float $expressionRatio 
	 *        	
	 * @return GeneCondition
	 */
	public function setExpressionRatio($expressionRatio) {
		$this->expressionRatio = $expressionRatio;
		return $this;
	}
	
	/**
	 * Get the expressionRatio value of a GeneCondition object
	 *
	 * @return float
	 */
	public function getExpressionRatio() {
		return $this->expressionRatio;
	}
	
	/**
	 * Set the expressionValue value of a GeneCondition object
	 *
	 * @param float $expressionValue
       	
	 * @return GeneCondition
	 */
	public function setExpressionValue($expressionValue) {
		$this->expressionValue = $expressionValue;
		return $this;
	}
	
	/**
	 * Get the expressionValue value of a GeneCondition object
	 *
	 * @return float
	 */
	public function getExpressionValue() {
		return $this->expressionValue;
	}
	
	/**
	 * Set the geneConditionFKGene value of a GeneCondition object
	 *
	 * @param \bcGen\MainBundle\Entity\Gene $gene
	 *         	
	 * @return GeneCondition
	 */
	public function setGeneConditionFKGene(\bcGen\MainBundle\Entity\Gene $gene) {
		$this->geneConditionFKGene = $gene;
		return $this;
	}
	
	/**
	 * Get the geneConditionFKGene value of a GeneCondition object
	 *
	 * @return \bcGen\MainBundle\Entity\Gene
	 */
	public function getGeneConditionFKGene() {
		return $this->geneConditionFKGene;
	}
	
	/**
	 * Set the geneConditionFkCondition value of a GeneCondition object
	 *
	 * @param \bcGen\MainBundle\Entity\Condition $condition
	 *         	
	 * @return GeneCondition
	 */
	public function setGeneConditionFkCondition(\bcGen\MainBundle\Entity\Condition $condition) {
		$this->geneConditionFkCondition = $condition;
		return $this;
	}
	
	/**
	 * Get the geneConditionFkCondition value of a GeneCondition object
	 *
	 * @return \bcGen\MainBundle\Entity\Condition
	 */
	public function getGeneConditionFkCondition() {
		return $this->geneConditionFkCondition;
	}
	
}// CLASS END

<?php

/**
 * SearchGenesType.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */
namespace bcGen\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * SearchGeneType class gathers all the methods that manage a SearchGene form
 *
 * @see http://api.symfony.com/2.7/Symfony/Component/Form/AbstractType.html Symfony documentation on the AbstractType class
 * @see http://api.symfony.com/2.7/Symfony/Component/Form/FormBuilderInterface.html Symfony documentation on the FormBuilderInterface class
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 */
class SearchGeneType extends AbstractType {
	/**
	 * This method allows the creation of a SearchGene form
	 *
	 * @see http://api.symfony.com/2.7/Symfony/Component/Form/FormBuilderInterface.html Symfony documentation on the FormBuilderInterface class
	 * @param FormBuilderInterface $builder        	
	 * @param array $options        	
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add ( 'search', 'text' );
	}
	
	/**
	 * This method gets the form name
	 *
	 * @return string
	 */
	public function getName() {
		return 'bcgen_mainbundle_search_gene';
	}
}

<?php

/**
 * LocusChromosomeRepository.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 */
namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * LocusChromosomeRepository class allows the use of requests toward the database : bc_gen_db.
 *
 * @see http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
 *                                                    Doctrine Documentation on the EntityRepository class
 * @see \bcGen\MainBundle\Entity\LocusChromosome      Class LocusChromosome
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 */
class LocusChromosomeRepository extends EntityRepository {
	/**
	 * This method gets a LocusChromosome object from an accession number supposed to be linked to a Gene object
	 *
	 * @param  string The accession number of a Gene object
	 * 
	 * @return \bcGen\MainBundle\Entity\LocusChromsome|null   The reference of a LocusChromosome object
	 *                                                        or null if the query gets nothing from the database
	 */
	public function findOneLocusChromosomeFromAccessionNum($geneAccession) {
		
		$query = $this->createQueryBuilder ( 'lc' )
		              ->from ( 'bcGen\MainBundle\Entity\Gene', 'g' );
		
		$query->where( 'lc.locusChromosomeFkLocus = g.geneLocus' )
		      ->andWhere ( 'g.geneAccession = :geneAccession' )
		      ->setParameter ( 'geneAccession', $geneAccession );
		
		return $query->getQuery()->getOneOrNullResult ();
	}
}// CLASS END

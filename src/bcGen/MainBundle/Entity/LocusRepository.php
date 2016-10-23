<?php

/**
 * LocusRepository.php
 * 
 * @copyright --------
 * @license   --------
 * @link      --------
 * 
 */
namespace bcGen\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * LocusRepository class allows the use of requests toward the database : bc_gen_db.
 *
 * @see http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
 *                                            Doctrine Documentation on the EntityRepository class
 * @see \bcGen\MainBundle\Entity\Locus        Class Locus
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 */
class LocusRepository extends EntityRepository {
	/**
	 * This method gets a Locus object from an accession number supposed to be linked to a Gene object
	 *
	 * @param  string The accession number of a Gene object
	 * @return \bcGen\MainBundle\Entity\Locus|null  The reference of a Locus object
	 *                                              or null if the query gets nothing from the database
	 */
	public function findOneLocusFromAccessionNum($geneAccession) {
		
		$query = $this->createQueryBuilder ( 'l' )
		              ->from ( 'bcGen\MainBundle\Entity\Gene', 'g' );
		
		$query->where ( 'l.id = g.geneLocus' )
		      ->andWhere ( 'g.geneAccession = :geneAccession' )
		      ->setParameter ( 'geneAccession', $geneAccession );
		
		return $query->getQuery ()->getOneOrNullResult ();
	}
	
	/**
	 * This method gets all Locus objects linked to a single chromosome from its id.
	 *
	 * @param  integer The chromosome id
	 * 
	 * @return array   This array contains several Locus object references
	 *                 or is empty
	 */
	public function findAllLocusFromChromosomeId($chromosomeId) {
		
		$query = $this->createQueryBuilder ( 'l' )
					  ->from ( 'bcGen\MainBundle\Entity\LocusChromosome', 'lc' )
		              ->from ( 'bcGen\MainBundle\Entity\Gene', 'g' );
		
		$query->Where ( 'l.id = lc.locusChromosomeFkLocus' )
		      ->andwhere ( 'l.id = g.geneLocus' )
		      ->andWhere ( 'lc.locusChromosomeFkChromosome = :chromosomeId' )
		      ->setParameter ( 'chromosomeId', $chromosomeId )
		      ->orderBy ( 'l.id', 'ASC' );
		
		return $query->getQuery()->getResult();
		
	}
	
	/**
	 * This method count the Locus objects present in the database between the first one, according to its id,
	 * and the one with the given locusId
	 *
	 * @param  integer The chromosome id
	 * 
	 * @return integer The number of locus objects
	 */
	public function countLocus($locusId) {
		
		$query = $this->createQueryBuilder ( 'l' );
		
		$query->select ( 'count(l.id)' )
		      ->Where ( 'l.id <= :locusId' )
		      ->setParameter ( 'locusId', $locusId );
		
		return $query->getQuery()->getSingleScalarResult();
	}
}// CLASS END

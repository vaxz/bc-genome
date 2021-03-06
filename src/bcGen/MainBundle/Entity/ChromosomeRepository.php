<?php
/**
 * ChromosomeRepository.php
*
* @copyright --------
* @license   --------
* @link      --------
*
*/
namespace bcGen\MainBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 *
 * ChromosomeRepository class allows the use of requests toward the database : bc_gen_db.
 *
 * @see http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
 *                                                   Doctrine Documentation on the EntityRepository class
 * @see \bcGen\MainBundle\Entity\Chromosome          Class Chromosome
 *
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 */
class ChromosomeRepository extends EntityRepository {
	/**
	 * This method gets a Chromosome object from an accession number supposed to be linked to a Gene object
	 *
	 * @param  string The accession number of a Gene object
	 *
	 * @return \bcGen\MainBundle\Entity\Chromosome|null  The reference of a Chromosome object
	 *                                                   or null if the query gets nothing from the database
	 */
	public function findOneChromosomeFromAccessionNum($geneAccession) {

		$query = $this->createQueryBuilder ( 'c' )
		              ->from ( 'bcGen\MainBundle\Entity\LocusChromosome', 'lc' )
		              ->from ( 'bcGen\MainBundle\Entity\Gene', 'g' );

		$query->where ( 'c.id = lc.locusChromosomeFkChromosome' )
		      ->andwhere ( 'lc.locusChromosomeFkLocus = g.geneLocus' )
		      ->andWhere ( 'g.geneAccession = :geneAccession' )
		      ->setParameter ( 'geneAccession', $geneAccession );

		return $query->getQuery ()->getOneOrNullResult ();
	}

	/**
	 * This method gets the id of a Chromosome object from an accession number supposed to be linked to a Gene object
	 *
	 * @param  string The accession number of a Gene object
	 *
	 * @return integer The chromosome id
	 */
	public function findOneChromosomeIdFromAccessionNum($geneAccession) {

		$query = $this->createQueryBuilder ( 'c' )
		              ->from ( 'bcGen\MainBundle\Entity\LocusChromosome', 'lc' )
		              ->from ( 'bcGen\MainBundle\Entity\Gene', 'g' );

		$query->select ( 'c.id' )
		      ->where ( 'c.id = lc.locusChromosomeFkChromosome' )
		      ->andwhere ( 'lc.locusChromosomeFkLocus = g.geneLocus' )
		      ->andWhere ( 'g.geneAccession = :geneAccession' )
		      ->setParameter ( 'geneAccession', $geneAccession );

		return $query->getQuery ()->getSingleScalarResult ();
	}
}// CLASS END
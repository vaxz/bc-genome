<?php

/**
 * SourceRepository.php
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
 * SourceRepository class allows the use of requests toward the database : bc_gen_db.
 *
 * @see http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
 *                                            Doctrine Documentation on the EntityRepository class
 * @see \bcGen\MainBundle\Entity\Source       Class Source
 *     
 * @author Isabelle Gonçalves
 * @author Xavier Sottiaux
 * @version 0.1.0 0.1.0
 */
class SourceRepository extends EntityRepository {
}

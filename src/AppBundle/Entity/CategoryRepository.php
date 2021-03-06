<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{
    public function findAllOrdered(){
        //$query = $this->createQueryBuilder('SELECT cat FROM AppBundle\Entity\Category cat');
        $query = $this->getEntityManager()
            ->createQuery(
                "SELECT cat
                    FROM AppBundle\Entity\Category cat
                    ORDER BY cat.name DESC"
            );
        //var_dump($query->getSQL()); die;

        return $query->execute();
    }
}

<?php

namespace DirectoryPlatform\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function count(array $criteria)
    {
        $qb = $this->createQueryBuilder('user');

        return $qb
            ->select('count(user.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }    
}
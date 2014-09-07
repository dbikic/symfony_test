<?php


namespace Simple\ProfileBundle\Entity;

use Doctrine\ORM\EntityRepository;

class OsobaRepository extends EntityRepository
{
    /**
     * Get posts with comment count
     *
     * @return Simple\ProfileBundle\Entity\Post[]
     */
    public function getOsobe()
    {
        $dql = "SELECT
                p
            FROM
                Simple\ProfileBundle\Entity\Osoba p";

        $query = $this->getEntityManager()->createQuery($dql);

        return $query->getResult();
    }
}
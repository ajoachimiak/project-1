<?php

namespace App\Repository;

use App\Entity\ExportMade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;
use Exception;

/**
 * @extends ServiceEntityRepository<ExportMade>
 *
 * @method ExportMade|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExportMade|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExportMade[]    findAll()
 * @method ExportMade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExportMadeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExportMade::class);
    }

    public function add(ExportMade $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ExportMade $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @throws NonUniqueResultException
     * @throws Exception
     */
    public function filterData(string $place = null, $creationDateStart = null, $creationDateEnd = null) {

        $creationDateStart = (!is_null($creationDateStart)) ? $creationDateStart->getTimestamp() : 0;
        $from = new \DateTime(date('Y-m-d 00:00:00', $creationDateStart));

        $builder = $this->createQueryBuilder("e")
            ->where('e.creationDate >= :from')
            ->setParameter('from', $from);

        if(!empty($creationDateEnd)) {
            $to   = new \DateTime(date('Y-m-d 23:59:59', $creationDateEnd->getTimestamp()));
            $builder->andWhere('e.creationDate <= :to');
            $builder->setParameter('to', $to);
        }

        if(!empty($place)) {
            $builder->andWhere('e.place =:place');
            $builder->setParameter('place', $place);
        }

        $query = $builder->getQuery();
        return $query->getResult();
    }

    public function getPlaces() {
        return $this->createQueryBuilder('e')
            ->select('e.place')
            ->groupBy("e.place")
            ->addOrderBy('e.place', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
}

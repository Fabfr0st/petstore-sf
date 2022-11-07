<?php

namespace App\Repository;

use App\Entity\CommandesHasArticles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommandesHasArticles>
 *
 * @method CommandesHasArticles|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandesHasArticles|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandesHasArticles[]    findAll()
 * @method CommandesHasArticles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandesHasArticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandesHasArticles::class);
    }

    public function save(CommandesHasArticles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CommandesHasArticles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CommandesHasArticles[] Returns an array of CommandesHasArticles objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CommandesHasArticles
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Event>
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }
    // EventRepository.php
    public function searchEventsByTitleOrDescription(string $query)
    {
        return $this->createQueryBuilder('e')
            ->where('e.titreevents LIKE :query OR e.descriptionevents LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult();
    }
    
public function getEventCommentairesCount(): array
{
    return $this->createQueryBuilder('e')
        ->select('e.titreevents AS eventTitle, COUNT(c.id) AS commentCount')  // Changez `COUNT(c.id)` en fonction de ce que vous voulez compter (ex : participants ou commentaires)
        ->leftJoin('e.commentaires', 'c')  // Relation OneToMany avec Commentaire
        ->groupBy('e.id')
        ->orderBy('commentCount', 'DESC')  // Vous pouvez ordonner par le nombre de commentaires
        ->getQuery()
        ->getResult();
}



    //    /**
    //     * @return Event[] Returns an array of Event objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Event
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

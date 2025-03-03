<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    /**
     * Récupère toutes les réclamations avec leurs réponses associées
     * @return Reclamation[]
     */
    public function findAllWithResponses(): array
    {
        return $this->createQueryBuilder('r')
            ->leftJoin('r.reponses', 'rep')
            ->addSelect('rep')
            ->orderBy('r.dateRec', 'DESC') // Tri par date décroissante
            ->getQuery()
            ->getResult();
    }
    public function getcountByType()
    {
        // Utilisation du QueryBuilder pour récupérer les données par type
        return $this->createQueryBuilder('r')
            ->select('r.type, COUNT(r.id) as evaluationCount')
            ->groupBy('r.type')
            ->getQuery()
            ->getResult();
    }


    /**
     * Trouve les réclamations par statut
     * @param string $status
     * @return Reclamation[]
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.statRec = :status')
            ->setParameter('status', $status)
            ->orderBy('r.dateRec', 'DESC')
            ->getQuery()
            ->getResult();
    }
    public function getStats(): array
{
    return $this->createQueryBuilder('r')
        ->select('r.type AS type, COUNT(r.id) AS reclamationCount, COUNT(rep.id) AS responseCount')
        ->leftJoin('r.reponses', 'rep')
        ->groupBy('r.type')
        ->getQuery()
        ->getResult();
}

}

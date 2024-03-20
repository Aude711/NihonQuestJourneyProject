<?php

namespace App\Repository;

use App\Entity\Articles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Articles>
 *
 * @method Articles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Articles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Articles[]    findAll()
 * @method Articles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Articles::class);
    }

    // public function findLikeContentArticle(string $contentArticle): array
    // {
    //     // cette fonction est utilisé pour la recherche des articles.
    //     //Elle recherche les articles en fonction du contenu de l'article'
    //     $result = [];

    //     if (!empty($contentArticle)) {
    //         $result = $this->createQueryBuilder('a')
    //             ->andWhere('a.content LIKE :content')
    //             ->setParameter('content', '%' . $contentArticle . '%')
    //             ->orderBy('a.content', 'ASC')
    //             ->getQuery()
    //             ->getResult();
    //     }

    //     return $result;
    // }

    public function countArticles(): int
    {
        //cette fonction compte tout les articles
        $count = $this->createQueryBuilder('a')
        ->select('count(a.id)')
        ->getQuery()
        ->getSingleScalarResult();

        return $count;
    }
}

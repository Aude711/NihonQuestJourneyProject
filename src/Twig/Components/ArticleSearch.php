<?php

namespace App\Twig\Components;

use App\Repository\ArticlesRepository;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class ArticleSearch
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $query = '';

    public function __construct(private ArticlesRepository $articlesRepository)
    {
    }

    public function getArticles(): array
    {
        return $this->articlesRepository->findLikeContentArticle($this->query);
    }
}

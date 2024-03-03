<?php

namespace App\DataFixtures;

use App\Entity\Photo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PhotoFixtures extends Fixture
{
    public const PHOTOS = [
        [
            'cover' => 'himejicastle.jpg',
            'articles' => 'article_Le Château d\'Himeji : Une fenêtre sur le passé Japonais',
        ],
        [
             'cover' => 'hiroshima.jpg',
             'articles' => 'article_Exploration émouvante : Le Dôme d\'Hiroshima',
        ],
        [
            'cover' => 'nara.jpg',
            'articles' => 'article_Le Temple de Todai-ji à Nara',
        ],
        [
            'cover' => 'kyototemple.png',
            'articles' => 'article_Le Château d\'Himeji : Une fenêtre sur le passé Japonais',
        ],
        [
            'cover' => 'cerisier7.jpg',
            'articles' => 'article_Sous le Charme des Fleurs de Cerisier',
        ],
        [
            'cover' => 'tokyo2.jpg',
            'articles' => 'article_Tokyo en un Coup d\'oeil',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::PHOTOS as $photoFixture) {
            $photo = new Photo();
            $photo->setCover($photoFixture['cover']);
            $photo->setArticles($this->getReference($photoFixture['articles']));
            $manager->persist($photo);
            $this->addReference('photo_' . $photoFixture['cover'], $photo);
        }
        $manager->flush();
    }
}

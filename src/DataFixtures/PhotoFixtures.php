<?php

namespace App\DataFixtures;

use App\Entity\Photo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PhotoFixtures extends Fixture
{
    public const PHOTOS = [
        [
            'picture' => 'himejicastle.jpg',
            'articles' => 'article_Le Château d\'Himeji : Une fenêtre sur le passé Japonais',
        ],
        [
             'picture' => 'hiroshima.jpg',
             'articles' => 'article_Exploration émouvante : Le Dôme d\'Hiroshima',
        ],
        [
            'picture' => 'nara.jpg',
            'articles' => 'article_Le Temple de Todai-ji à Nara',
        ],
        [
            'picture' => 'kyototemple.png',
            'articles' => 'article_Le Château d\'Himeji : Une fenêtre sur le passé Japonais',
        ],
        [
            'picture' => 'cerisier7.jpg',
            'articles' => 'article_Sous le Charme des Fleurs de Cerisier',
        ],
        [
            'picture' => 'tokyo2.jpg',
            'articles' => 'article_Tokyo en un Coup d\'oeil',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::PHOTOS as $photoFixture) {
            $photo = new Photo();
            $photo->setPicture($photoFixture['picture']);
            $photo->setArticles($this->getReference($photoFixture['articles']));
            $manager->persist($photo);
            $this->addReference('photo_' . $photoFixture['picture'], $photo);
        }
        $manager->flush();
    }
}

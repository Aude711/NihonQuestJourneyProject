<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticlesFixtures extends Fixture
{
    public const ARTICLES = [
        [
            'title' => 'Le Château d\'Himeji : Une fenêtre sur le passé Japonais',
            'content' => 'Au cœur de la ville historique de Himeji, se dresse un symbole du passé glorieux du Japon : 
            le Château d\'Himeji. À travers ses murs imposants et ses jardins paisibles, 
            j\'ai été transportée dans une autre époque, où les samouraïs régnaient en maîtres 
            et où l\'architecture défensive était une œuvre d\'art. 
            De la vue imprenable depuis la tour principale à l\'atmosphère sereine des jardins, 
            chaque instant passé dans ce lieu empreint de tradition était une véritable immersion 
            dans l\'histoire et la culture japonaises.',
            'photo' => 'photo_templeosaka.jpg'
        ],
        // [
        //     'title' => 'Donnër Kebab',
        //     'content' => 45,
        //     'picture' => 'photo_redfeuille.jpg'
        // ],
        // [
        //     'title' => 'Gua Bao',
        //     'content' => 45,
        //     'picture' => 'photo_streetame.jpg'
        // ],
        // [
        //     'title' => 'poulet aux haricots blancs',
        //     'content' => 45,
        //     'picture' => 'photo_kyototemple.png'
        // ],
        // [
        //     'title' => 'sandwich au poulet',
        //     'content' => 15,
        //     'picture' => 'photo_kyotoinaka.jpg'
        // ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::ARTICLES as $articleFixture) {
            $article = new Articles();
            $article->setTitle($articleFixture['title']);
            // $slug = $this->slugger->slug($articleFixture['title']);
            // $article->setSlug($slug);
            $article->setContent($articleFixture['content']);
            // $article->setPicture($this->getReference($articleFixture['photo']));
            $manager->persist($article);
            $this->addReference('article_' . $articleFixture['title'], $article);
        }
        $manager->flush();
    }
}

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
            'photo' => 'photo_himejicastle.jpg'
        ],
        [
            'title' => 'Exploration émouvante : Le Dôme d\'Hiroshima',
            'content' => 'En voyage à Hiroshima, ma visite au Dôme d\'Hiroshima 
            a été profondément marquante. Ce monument emblématique, témoin du bombardement atomique 
            de 1945, est un rappel poignant des horreurs de la guerre. 
            J\'ai été imprégné d\'un sentiment de tristesse et de réflexion, 
            m\'engageant à œuvrer pour un avenir de paix et de compréhension mutuelle.',
            'picture' => 'photo_hiroshima.jpg'
        ],
        [
            'title' => 'Le Temple de Todai-ji à Nara',
            'content' => 'Au cœur de Nara, le Temple de Todai-ji m\'a offert une expérience spirituelle 
            inoubliable. Niché dans une forêt paisible, ce temple millénaire abrite le majestueux 
            Grand Bouddha de Nara, une œuvre d\'art impressionnante. 
            En explorant ses couloirs ancestraux et en contemplant sa magnificence, 
            j\'ai été profondément impréssioné par la sagesse et la tradition 
            qui imprègnent ce lieu sacré.',
            'picture' => 'photo_nara.jpg'
        ],
        [
            'title' => 'Sous le Charme des Fleurs de Cerisier',
            'content' => 'En voyage au Japon, j\'ai été ébloui par la beauté éphémère 
            des fleurs de cerisier. Chaque printemps, ces délicates fleurs transforment 
            le paysage en un spectacle enchanteur, attirant des foules de visiteurs 
            du monde entier. De Tokyo à Kyoto, j\'ai eu le privilège de me promener 
            sous les pétales roses et blancs, m\'imprégnant de la magie et du 
            symbolisme de ces fleurs emblématiques.',
            'picture' => 'photo_cerisier7.png'
        ],
        [
            'title' => 'Tokyo en un Coup d\'oeil',
            'content' => 'Tokyo, la capitale du Japon, est une métropole dynamique où l\'énergie est palpable 
            à chaque coin de rue. Des gratte-ciel imposants de Shinjuku aux temples 
            anciens de Asakusa, chaque quartier offre une expérience unique à découvrir. 
            Avec sa cuisine alléchante, sa culture vibrante et son accueil chaleureux, 
            Tokyo est une destination incontournable pour tout voyageur en quête d\'aventure.',
            'picture' => 'photo_tokyo2.jpg'
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::ARTICLES as $articleFixture) {
            $article = new Articles();
            $article->setTitle($articleFixture['title']);
            // $slug = $this->slugger->slug($articleFixture['title']);
            // $article->setSlug($slug);
            $article->setContent($articleFixture['content']);
            $manager->persist($article);
            $this->addReference('article_' . $articleFixture['title'], $article);
        }
        $manager->flush();
    }
}

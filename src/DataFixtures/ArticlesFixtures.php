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
        ],
        [
            'title' => 'Exploration émouvante : Le Dôme d\'Hiroshima',
            'content' => 'Dans l\'ombre des gratte-ciel modernes et de l\'animation urbaine 
            se cache une ville au passé poignant : Hiroshima. Lorsque j\'ai entrepris mon voyage 
            dans cette ville emblématique du Japon, 
            je savais que ce serait une expérience profondément émouvante, mais rien ne pouvait me préparer à 
            l\'impact de ce que j\'allais découvrir.
            Ma première étape m\'a conduit au Dôme de Genbaku, le Dôme d\'Hiroshima, un monument solitaire et 
            déchiré qui a survécu à l\'explosion atomique de 1945. En contemplant ses ruines déchiquetées, 
            j\'ai ressenti un mélange de tristesse et de respect, confronté à la réalité brutale des 
            conséquences de la guerre.
            Pourtant, au milieu de cette désolation, il y avait aussi un message d\'espoir. 
            Les musées et les mémoriaux qui parsèment la ville 
            racontent l\'histoire poignante des survivants, de leur résilience et de leur détermination à 
            reconstruire leur vie malgré les horreurs qu\'ils ont endurées.
            
            En parcourant les rues paisibles d\'Hiroshima, j\'ai été frappé par l\'atmosphère de paix 
            et de réconciliation qui règne dans cette ville autrefois dévastée par la guerre. 
            
            Mon exploration d\'Hiroshima a été bien plus qu\'une simple visite touristique ; c\'était un voyage au cœur 
            de l\'humanité, une expérience qui m\'a profondément touché et transformé. 
            En quittant la ville derrière moi, je suis parti avec un sentiment de gratitude pour la force et la 
            résilience 
            du peuple d\'Hiroshima, et avec un engagement renouvelé à œuvrer pour la paix et la 
            compréhension dans le monde.',
        ],
        [
            'title' => 'Le Temple de Todai-ji à Nara',
            'content' => 'Au cœur de Nara, le Temple de Todai-ji m\'a offert une expérience spirituelle 
            inoubliable. Niché dans une forêt paisible, ce temple millénaire abrite le majestueux 
            Grand Bouddha de Nara, une œuvre d\'art impressionnante. 
            En explorant ses couloirs ancestraux et en contemplant sa magnificence, 
            j\'ai été profondément impréssioné par la sagesse et la tradition 
            qui imprègnent ce lieu sacré.',
        ],
        [
            'title' => 'Sous le Charme des Fleurs de Cerisier',
            'content' => 'En voyage au Japon, j\'ai été ébloui par la beauté éphémère 
            des fleurs de cerisier. Chaque printemps, ces délicates fleurs transforment 
            le paysage en un spectacle enchanteur, attirant des foules de visiteurs 
            du monde entier. De Tokyo à Kyoto, j\'ai eu le privilège de me promener 
            sous les pétales roses et blancs, m\'imprégnant de la magie et du 
            symbolisme de ces fleurs emblématiques.',
        ],
        [
            'title' => 'Tokyo en un Coup d\'oeil',
            'content' => 'Tokyo, la capitale du Japon, est une métropole dynamique où l\'énergie est palpable 
            à chaque coin de rue. Des gratte-ciel imposants de Shinjuku aux temples 
            anciens de Asakusa, chaque quartier offre une expérience unique à découvrir. 
            Avec sa cuisine alléchante, sa culture vibrante et son accueil chaleureux, 
            Tokyo est une destination incontournable pour tout voyageur en quête d\'aventure.',
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

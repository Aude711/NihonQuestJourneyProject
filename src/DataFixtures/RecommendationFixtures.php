<?php

namespace App\DataFixtures;

use App\Entity\Recommendation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class RecommendationFixtures extends Fixture implements DependentFixtureInterface
{
    public const RECOMMENDATIONS = [
        [
            'title' => 'Lac Toya',
            'content' => 'Profitez de la vue sur le lac depuis le mont Usu.
            Visitez l\'île Nakajima pour ses magnifiques jardins et ses sources chaudes.',
            'picture' => '',
            'city' => 'city_Sapporo',
        ],
        [
            'title' => 'Le village historique de Sankaku',
            'content' => 'Un village préservé avec des maisons traditionnelles de l\'époque Edo.',
            'picture' => '',
            'city' => 'city_Sapporo',
        ],
        [
            'title' => 'Le musée Ainu',
            'content' => 'Découvrez la culture et l\'histoire du peuple autochtone de Hokkaido, les Aïnous',
            'city' => 'city_Sapporo',
        ],
        [
            'title' => 'Le sanctuaire de Sannai-Maruyama',
            'content' => 'Explorez les vestiges archéologiques de cette ancienne communauté Jomon, 
            datant de milliers d\'années.',
            'city' => 'city_Aomori',
        ],
        [
            'title' => 'Le parc de la forêt de Shirakami-Sanchi',
            'content' => 'Explorez cette forêt ancienne préservée, célèbre pour ses hêtres blancs et sa biodiversité.',
            'city' => 'city_Aomori',
        ],
        [
            'title' => 'Le musée de l\'architecture des anciennes résidences d\'Aomori',
            'content' => 'Découvrez les maisons traditionnelles et l\'architecture de la région.',
            'city' => 'city_Aomori',
        ],
        [
            'title' => 'Le château de Morioka',
            'content' => 'Découvrez l\'histoire et la culture de la région en visitant 
            les ruines du château de Morioka, qui offre également une belle vue sur la ville.',
            'city' => 'city_Iwate',
        ],
        [
            'title' => 'Le mont Iwate',
            'content' => 'Randonnez jusqu\'au sommet de cette montagne emblématique pour profiter 
            de vues spectaculaires sur la préfecture d\'Iwate et au-delà.',
            'city' => 'city_Iwate',
        ],
        [
            'title' => 'Le rocher de Jodogahama',
            'content' => 'Admirez les eaux cristallines et les formations rocheuses uniques 
            de cette plage pittoresque située dans le parc national de Sanriku.',
            'city' => 'city_Iwate',
        ],
        [
            'title' => 'Le festival de la lanterne de Sendai',
            'content' => 'Assistez à cet événement coloré en été, où les rues de Sendai 
            sont décorées de lanternes géantes et de décorations traditionnelles.',
            'city' => 'city_Miyagi',
        ],
        [
            'title' => 'La ville thermale d\'Akiu',
            'content' => 'Détendez-vous dans les onsens (sources chaudes) de cette ville réputée 
            pour ses eaux thermales revitalisantes.',
            'city' => 'city_Miyagi',
        ],
        [
            'title' => 'Le sanctuaire de Shiogama Jinja',
            'content' => 'Visitez ce sanctuaire shintoïste important dédié 
            à la déesse de la mer, situé sur une colline offrant une vue panoramique sur la baie.',
            'city' => 'city_Miyagi',
        ],
        [
            'title' => 'La cascade de Kameda',
            'content' => 'Admirez cette belle cascade entourée de forêts luxuriantes 
            et accessible par une courte randonnée.',
            'city' => 'city_Akita',
        ],
        [
            'title' => 'Le festival de Namahage à Oga',
            'content' => 'Assistez à ce festival hivernal où les "Namahage", 
            des démons légendaires, parcourent les rues pour chasser les mauvais esprits.',
            'city' => 'city_Akita',
        ],
        [
            'title' => 'Le lac Tazawa',
            'content' => 'Explorez le lac Tazawa, le plus profond du Japon, entouré de montagnes 
            verdoyantes offrant des vues spectaculaires.',
            'city' => 'city_Akita',
        ],
        [
            'title' => 'Le musée de l\'artisanat du papier de Tendo',
            'content' => 'Découvrez l\'art traditionnel de la fabrication du papier washi 
            dans cette ville renommée pour son artisanat.',
            'city' => 'city_Yamagata',
        ],
        [
            'title' => 'La gare de Tsuruoka',
            'content' => 'Visitez cette gare historique qui conserve son architecture 
            d\'origine de l\'ère Meiji et offre une expérience unique de voyage dans le temps.',
            'city' => 'city_Yamagata',
        ],
        [
            'title' => 'Le festival Hanagasa à Yamagata',
            'content' => 'Assistez à ce festival estival animé où les participants portent des chapeaux 
            de paille décorés de fleurs et dansent dans les rues.',
            'city' => 'city_Yamagata',
        ],
        [
            'title' => 'Le temple de Motsuji',
            'content' => 'Visitez ce temple bouddhiste historique, célèbre pour son jardin de mousse 
            paisible et ses bâtiments anciens.',
            'city' => 'city_Fukushima',
        ],
        [
            'title' => 'Le festival de Taimatsu à Aizu-Wakamatsu',
            'content' => 'Assistez à ce festival hivernal où des torches géantes 
            illuminent les rues de la ville pour célébrer la nouvelle année.',
            'city' => 'city_Fukushima',
        ],
        [
            'title' => 'Le parc national de Bandai-Asahi',
            'content' => 'Explorez ce parc national offrant une variété de paysages, 
            des montagnes escarpées aux forêts luxuriantes.',
            'city' => 'city_Fukushima',
        ],
        [
            'title' => 'Le parc aux rhododendrons de Mito Komon',
            'content' => 'Promenez-vous parmi des milliers de rhododendrons en fleurs 
            dans ce parc pittoresque, offrant une vue magnifique sur le mont Tsukuba.',
            'city' => 'city_Ibaraki',
        ],
        [
            'title' => 'Le temple de Kairakuen',
            'content' => 'Visitez l\'un des trois plus beaux jardins du Japon, 
            célèbre pour ses pruniers en fleurs au printemps et son festival annuel 
            de la floraison des pruniers.',
            'city' => 'city_Ibaraki',
        ],
        [
            'title' => 'Le parc aquatique Aqua World Oarai',
            'content' => 'Découvrez une variété d\'espèces marines dans cet aquarium, 
            notamment des requins, des otaries et des pingouins.',
            'city' => 'city_Ibaraki',
        ],
        [
            'title' => 'Le parc à thème Edo Wonderland',
            'content' => 'Voyagez dans le temps jusqu\'à l\'époque d\'Edo dans ce parc 
            à thème interactif où vous pourrez découvrir la vie et la culture de l\'ère samouraï.',
            'city' => 'city_Tochigi',
        ],
        [
            'title' => 'Le temple de Nikko Toshogu',
            'content' => 'Explorez ce complexe de temples magnifiquement décorés, 
            dédié au shogun Tokugawa Ieyasu, avec ses bâtiments ornés et ses sculptures détaillées.',
            'city' => 'city_Tochigi',
        ],
        [
            'title' => 'Le lac Chuzenji',
            'content' => 'Profitez des activités nautiques comme le bateau à moteur, le kayak ou la pêche 
            sur ce lac pittoresque, situé au pied du mont Nantai.',
            'city' => 'city_Tochigi',
        ],
        [
            'title' => 'Le parc national de Jigokudani Monkey',
            'content' => 'Observez les célèbres singes des neiges se baigner dans les sources chaudes 
            naturelles pendant les mois d\'hiver.',
            'city' => 'city_Gunma',
        ],
        [
            'title' => 'Le parc national de Nikko',
            'content' => 'Explorez ce parc national classé au patrimoine mondial de l\'UNESCO, 
            qui abrite des temples, des sanctuaires, des cascades et des forêts luxuriantes.',
            'city' => 'city_Gunma',
        ],
        [
            'title' => 'Le musée du kimono de Gunma',
            'content' => 'Découvrez l\'histoire et l\'artisanat du kimono, ainsi que des 
            expositions sur la culture traditionnelle japonaise.',
            'city' => 'city_Gunma',
        ],
        [
            'title' => 'Le mont Buko',
            'content' => 'Randonnez jusqu\'au sommet de cette montagne pour profiter 
            de vues panoramiques sur la préfecture de Saitama et au-delà.',
            'city' => 'city_Saitama',
        ],
        [
            'title' => 'Le parc commémoratif de la paix de Saitama',
            'content' => 'Visitez ce parc qui commémore les victimes de la Seconde Guerre mondiale 
            et offre un espace paisible pour la réflexion.',
            'city' => 'city_Saitama',
        ],
        [
            'title' => 'Le sanctuaire Hikawa',
            'content' => 'Visitez ce sanctuaire shintoïste réputé pour son ambiance paisible 
            et ses festivals colorés tout au long de l\'année.',
            'city' => 'city_Saitama',
        ],
        [
            'title' => 'Tokyo Disney Resort',
            'content' => 'Situé à Urayasu, ce complexe de parcs d\'attractions comprend 
            Tokyo Disneyland et Tokyo DisneySea, offrant des divertissements pour toute la famille.',
            'city' => 'city_Chiba',
        ],
        [
            'title' => 'La plage de Kujukuri',
            'content' => 'Profitez des longues étendues de sable doré de cette plage pittoresque, 
            idéale pour la baignade, le surf et les promenades au coucher du soleil.',
            'city' => 'city_Chiba',
        ],
        [
            'title' => 'La tour de Chiba Port Tower',
            'content' => 'Montez au sommet de cette tour d\'observation pour profiter d\'une vue 
            panoramique sur la baie de Tokyo et la ville de Chiba.',
            'city' => 'city_Chiba',
        ],
        [
            'title' => 'Le temple Senso-ji',
            'content' => 'Visitez le plus ancien temple bouddhiste de Tokyo, situé dans le 
            quartier historique d\'Asakusa, et explorez ses nombreuses boutiques traditionnelles.',
            'city' => 'city_Tokyo',
        ],
        [
            'title' => 'Le quartier de Shibuya',
            'content' => 'Traversez le célèbre passage pour piétons de Shibuya et explorez 
            les boutiques, les restaurants et les bars animés de ce quartier dynamique',
            'city' => 'city_Tokyo',
        ],
        [
            'title' => 'Le quartier d\'Akihabara',
            'content' => 'Plongez dans la culture otaku en explorant les boutiques 
            d\'électronique, les magasins de manga et les salles d\'arcade de ce quartier animé.',
            'city' => 'city_Tokyo',
        ],
        [
            'title' => 'Kamakura',
            'content' => 'Visitez le grand Bouddha de Kamakura (Kotoku-in) et explorez les 
            temples historiques tels que le temple Hasedera et le temple Tsurugaoka Hachimangu.',
            'city' => 'city_Kanagawa',
        ],
        [
            'title' => 'Hakone',
            'content' => 'Détendez-vous dans les onsens (sources chaudes) et profitez 
            des vues sur le mont Fuji depuis le lac Ashi.',
            'city' => 'city_Kanagawa',
        ],
        [
            'title' => 'Le quartier de Sankeien à Yokohama',
            'content' => 'Promenez-vous dans ce jardin japonais traditionnel comprenant 
            des temples, des ponts et des étangs.',
            'city' => 'city_Kanagawa',
        ],
        [
            'title' => 'Le musée des sciences de Niigata',
            'content' => 'Amusez-vous en apprenant à propos de divers sujets scientifiques 
            à travers des expositions interactives et des démonstrations.',
            'city' => 'city_Niigata',
        ],
        [
            'title' => 'Le festival de la neige de Murakami',
            'content' => 'Promenez-vous dans ce jardin japonais traditionnel comprenant 
            des temples, des ponts et des étangs.',
            'city' => 'city_Niigata',
        ],
        [
            'title' => 'Le parc Myoko Kogen',
            'content' => 'Explorez ce parc national offrant une variété d\'activités de plein air, 
            notamment le ski en hiver et la randonnée en été.',
            'city' => 'city_Niigata',
        ],
        [
            'title' => 'La gorge de Kurobe',
            'content' => 'Parcourez cette spectaculaire gorge creusée par la rivière Kurobe, 
            notamment en empruntant le téléphérique de Tateyama Kurobe pour des vues à couper le souffle.',
            'city' => 'city_Toyama',
        ],
        [
            'title' => 'Le village historique de Gokayama',
            'content' => 'Explorez ce village préservé, connu pour ses maisons de style 
            gassho-zukuri, des chaumières traditionnelles aux toits pentus.',
            'city' => 'city_Toyama',
        ],
        [
            'title' => 'Le château de Takaoka ',
            'content' => 'Visitez ce château historique, construit au XVIIe siècle, 
            qui abrite aujourd\'hui un musée d\'histoire locale',
            'city' => 'city_Toyama',
        ],
        [
            'title' => 'Le château de Kanazawa',
            'content' => 'Explorez ce château historique et son jardin, considéré comme 
            l\'un des trois plus beaux jardins du Japon.',
            'city' => 'city_Ishikawa',
        ],
        [
            'title' => 'Le quartier des geishas de Higashi Chaya',
            'content' => 'Promenez-vous dans ce quartier historique préservé où vous 
            pourrez voir les maisons de thé traditionnelles et rencontrer des geishas.',
            'city' => 'city_Ishikawa',
        ],
        [
            'title' => 'Le quartier des samouraïs de Teramachi',
            'content' => 'Visitez ce quartier historique moins fréquenté pour une 
            expérience plus authentique de l\'histoire des samouraïs.',
            'city' => 'city_Ishikawa',
        ],
        [
            'title' => 'Le musée des dinosaures de Fukui ',
            'content' => 'Découvrez une impressionnante collection de fossiles de 
            dinosaures, y compris le célèbre squelette de Fukuiraptor, dans ce musée réputé.',
            'city' => 'city_Fukui',
        ],
        [
            'title' => 'Les gorges de Tojinbo',
            'content' => 'Admirez les impressionnantes falaises de calcaire le long de la côte 
            de la mer du Japon, qui offrent des vues spectaculaires.',
            'city' => 'city_Fukui',
        ],
        [
            'title' => 'Le parc naturel de la mer du Japon',
            'content' => 'Profitez des plages de sable, des sentiers de randonnée et des vues 
            panoramiques sur la mer du Japon dans ce parc côtier.',
            'city' => 'city_Fukui',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::RECOMMENDATIONS as $adviceFixture) {
            $recommendation = new Recommendation();
            $recommendation->setTitle($adviceFixture['title']);
            $recommendation->setContent($adviceFixture['content']);
            $recommendation->setCity($this->getReference($adviceFixture['city']));
            $manager->persist($recommendation);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [CityFixtures::class,];
    }
}

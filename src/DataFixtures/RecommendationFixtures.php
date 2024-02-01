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
            'city' => 'city_Hokkaido',
        ],
        [
            'title' => 'Le village historique de Sankaku',
            'content' => 'Un village préservé avec des maisons traditionnelles de l\'époque Edo.',
            'picture' => '',
            'city' => 'city_Hokkaido',
        ],
        [
            'title' => 'Le musée Ainu',
            'content' => 'Découvrez la culture et l\'histoire du peuple autochtone de Hokkaido, les Aïnous',
            'picture' => '',
            'city' => 'city_Hokkaido',
        ],
        [
            'title' => 'Le sanctuaire de Sannai-Maruyama',
            'content' => 'Explorez les vestiges archéologiques de cette ancienne communauté Jomon, 
            datant de milliers d\'années.',
            'picture' => '',
            'city' => 'city_Aomori',
        ],
        [
            'title' => 'Le parc de la forêt de Shirakami-Sanchi',
            'content' => 'Explorez cette forêt ancienne préservée, célèbre pour ses hêtres blancs et sa biodiversité.',
            'picture' => '',
            'city' => 'city_Aomori',
        ],
        [
            'title' => 'Le musée de l\'architecture des anciennes résidences d\'Aomori',
            'content' => 'Découvrez les maisons traditionnelles et l\'architecture de la région.',
            'picture' => '',
            'city' => 'city_Aomori',
        ],
        [
            'title' => 'Le château de Morioka',
            'content' => 'Découvrez l\'histoire et la culture de la région en visitant 
            les ruines du château de Morioka, qui offre également une belle vue sur la ville.',
            'picture' => '',
            'city' => 'city_Iwate',
        ],
        [
            'title' => 'Le mont Iwate',
            'content' => 'Randonnez jusqu\'au sommet de cette montagne emblématique pour profiter 
            de vues spectaculaires sur la préfecture d\'Iwate et au-delà.',
            'picture' => '',
            'city' => 'city_Iwate',
        ],
        [
            'title' => 'Le rocher de Jodogahama',
            'content' => 'Admirez les eaux cristallines et les formations rocheuses uniques 
            de cette plage pittoresque située dans le parc national de Sanriku.',
            'picture' => '',
            'city' => 'city_Iwate',
        ],
        [
            'title' => 'Le festival de la lanterne de Sendai',
            'content' => 'Assistez à cet événement coloré en été, où les rues de Sendai 
            sont décorées de lanternes géantes et de décorations traditionnelles.',
            'picture' => '',
            'city' => 'city_Miyagi',
        ],
        [
            'title' => 'La ville thermale d\'Akiu',
            'content' => 'Détendez-vous dans les onsens (sources chaudes) de cette ville réputée 
            pour ses eaux thermales revitalisantes.',
            'picture' => '',
            'city' => 'city_Miyagi',
        ],
        [
            'title' => 'Le sanctuaire de Shiogama Jinja',
            'content' => 'Visitez ce sanctuaire shintoïste important dédié 
            à la déesse de la mer, situé sur une colline offrant une vue panoramique sur la baie.',
            'picture' => '',
            'city' => 'city_Miyagi',
        ],
        [
            'title' => 'La cascade de Kameda',
            'content' => 'Admirez cette belle cascade entourée de forêts luxuriantes 
            et accessible par une courte randonnée.',
            'picture' => '',
            'city' => 'city_Akita',
        ],
        [
            'title' => 'Le festival de Namahage à Oga',
            'content' => 'Assistez à ce festival hivernal où les "Namahage", 
            des démons légendaires, parcourent les rues pour chasser les mauvais esprits.',
            'picture' => '',
            'city' => 'city_Akita',
        ],
        [
            'title' => 'Le lac Tazawa',
            'content' => 'Explorez le lac Tazawa, le plus profond du Japon, entouré de montagnes 
            verdoyantes offrant des vues spectaculaires.',
            'picture' => '',
            'city' => 'city_Akita',
        ],
        [
            'title' => 'Le musée de l\'artisanat du papier de Tendo',
            'content' => 'Découvrez l\'art traditionnel de la fabrication du papier washi 
            dans cette ville renommée pour son artisanat.',
            'picture' => '',
            'city' => 'city_Yamagata',
        ],
        [
            'title' => 'La gare de Tsuruoka',
            'content' => 'Visitez cette gare historique qui conserve son architecture 
            d\'origine de l\'ère Meiji et offre une expérience unique de voyage dans le temps.',
            'picture' => '',
            'city' => 'city_Yamagata',
        ],
        [
            'title' => 'Le festival Hanagasa à Yamagata',
            'content' => 'Assistez à ce festival estival animé où les participants portent des chapeaux 
            de paille décorés de fleurs et dansent dans les rues.',
            'picture' => '',
            'city' => 'city_Yamagata',
        ],
        [
            'title' => 'Le temple de Motsuji',
            'content' => 'Visitez ce temple bouddhiste historique, célèbre pour son jardin de mousse 
            paisible et ses bâtiments anciens.',
            'picture' => '',
            'city' => 'city_Fukushima',
        ],
        [
            'title' => 'Le festival de Taimatsu à Aizu-Wakamatsu',
            'content' => 'Assistez à ce festival hivernal où des torches géantes 
            illuminent les rues de la ville pour célébrer la nouvelle année.',
            'picture' => '',
            'city' => 'city_Fukushima',
        ],
        [
            'title' => 'Le parc national de Bandai-Asahi',
            'content' => 'Explorez ce parc national offrant une variété de paysages, 
            des montagnes escarpées aux forêts luxuriantes.',
            'picture' => '',
            'city' => 'city_Fukushima',
        ],
        [
            'title' => 'Le parc aux rhododendrons de Mito Komon',
            'content' => 'Promenez-vous parmi des milliers de rhododendrons en fleurs 
            dans ce parc pittoresque, offrant une vue magnifique sur le mont Tsukuba.',
            'picture' => '',
            'city' => 'city_Ibaraki',
        ],
        [
            'title' => 'Le temple de Kairakuen',
            'content' => 'Visitez l\'un des trois plus beaux jardins du Japon, 
            célèbre pour ses pruniers en fleurs au printemps et son festival annuel 
            de la floraison des pruniers.',
            'picture' => '',
            'city' => 'city_Ibaraki',
        ],
        [
            'title' => 'Le parc aquatique Aqua World Oarai',
            'content' => 'Découvrez une variété d\'espèces marines dans cet aquarium, 
            notamment des requins, des otaries et des pingouins.',
            'picture' => '',
            'city' => 'city_Ibaraki',
        ],
        [
            'title' => 'Le parc à thème Edo Wonderland',
            'content' => 'Voyagez dans le temps jusqu\'à l\'époque d\'Edo dans ce parc 
            à thème interactif où vous pourrez découvrir la vie et la culture de l\'ère samouraï.',
            'picture' => '',
            'city' => 'city_Tochigi',
        ],
        [
            'title' => 'Le temple de Nikko Toshogu',
            'content' => 'Explorez ce complexe de temples magnifiquement décorés, 
            dédié au shogun Tokugawa Ieyasu, avec ses bâtiments ornés et ses sculptures détaillées.',
            'picture' => '',
            'city' => 'city_Tochigi',
        ],
        [
            'title' => 'Le lac Chuzenji',
            'content' => 'Profitez des activités nautiques comme le bateau à moteur, le kayak ou la pêche 
            sur ce lac pittoresque, situé au pied du mont Nantai.',
            'picture' => '',
            'city' => 'city_Tochigi',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::RECOMMENDATIONS as $adviceFixture) {
            $recommendation = new Recommendation();
            $recommendation->setTitle($adviceFixture['title']);
            $recommendation->setContent($adviceFixture['content']);
            $recommendation->setPicture($adviceFixture['picture']);
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

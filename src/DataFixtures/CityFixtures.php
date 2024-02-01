<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CityFixtures extends Fixture implements DependentFixtureInterface
{
    public const CITIES = [
        [
            'name' => 'Sapporo',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Hokkaido',
        ],
        [
            'name' => 'Aomori',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Iwate',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Miyagi',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Akita',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Yamagata',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Fukushima',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Ibaraki',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Tochigi',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Gunma',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Saitama',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Chiba',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Tokyo',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Kanagawa',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Niigata',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Toyama',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Ishikawa',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Fukui',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Yamanashi',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Nagano',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Gifu',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Shizuoka',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Aichi',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Mie',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Shiga',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Kyoto',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Osaka',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Hyogo',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Nara',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Wakayama',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Tottori',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Shimane',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Okayama',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Hiroshima',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Yamaguchi',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Tokushima',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Kagawa',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Ehime',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Kochi',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Fukuoka',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Saga',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Nagasaki',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Kumamoto',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Oita',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Miyazaki',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Kagoshima',
            'cover' => 'sapporo.jpeg',
            'description' => 'Sapporo, situé sur la plus grande île du Japon, 
            regorge de sites magnifiques et d\'activités intéressantes.',
            'region' => 'region_Kyushu',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::CITIES as $cityFixture) {
            $city = new City();
            $city->setName($cityFixture['name']);
            $city->setCover($cityFixture['cover']);
            $city->setDescription($cityFixture['description']);
            $city->setRegion($this->getReference($cityFixture['region']));
            $manager->persist($city);
            $this->addReference('city_' . $cityFixture['name'], $city);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [RegionFixtures::class,];
    }
}

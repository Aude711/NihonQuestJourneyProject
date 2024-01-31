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
            'name' => 'Hokkaido',
            'region' => 'region_Hokkaido',
        ],
        [
            'name' => 'Aomori',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Iwate',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Miyagi',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Akita',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Yamagata',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Fukushima',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Ibaraki',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Tochigi',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Gunma',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Saitama',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Chiba',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Tokyo',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Kanagawa',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Niigata',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Toyama',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Ishikawa',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Fukui',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Yamanashi',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Nagano',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Gifu',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Shizuoka',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Aichi',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Mie',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Shiga',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Kyoto',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Osaka',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Hyogo',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Nara',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Wakayama',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Tottori',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Shimane',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Okayama',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Hiroshima',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Yamaguchi',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Tokushima',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Kagawa',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Ehime',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Kochi',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Fukuoka',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Saga',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Nagasaki',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Kumamoto',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Oita',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Miyazaki',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Kagoshima',
            'region' => 'region_Kyushu',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::CITIES as $cityFixture) {
            $city = new City();
            $city->setName($cityFixture['name']);
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

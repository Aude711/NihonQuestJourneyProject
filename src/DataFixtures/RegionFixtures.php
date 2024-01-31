<?php

namespace App\DataFixtures;

use App\Entity\Region;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RegionFixtures extends Fixture
{
    public const REGIONS = [
        [
            'name' => 'Hokkaido',
            'cover' => 'hokkaido.jpeg',
        ],
        [
            'name' => 'Tohoku',
            'cover' => 'tohoku.jpeg',
        ],
        [
            'name' => 'Kanto',
            'cover' => 'kanto.jpg',
        ],
        [
            'name' => 'Chubu',
            'cover' => 'chubu.jpeg',
        ],
        [
            'name' => 'Kansai',
            'cover' => 'kansai.jpg',
        ],
        [
            'name' => 'Chuugoku',
            'cover' => 'chuugoku.jpeg',
        ],
        [
            'name' => 'Shikoku',
            'cover' => 'shikoku.jpeg',
        ],
        [
            'name' => 'Kyushu',
            'cover' => 'kyushu.jpg',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::REGIONS as $regionFixture) {
            $region = new Region();
            $region->setName($regionFixture['name']);
            $region->setCover($regionFixture['cover']);
            $manager->persist($region);
            $this->addReference('region_' . $regionFixture['name'], $region);
        }
        $manager->flush();
    }
}

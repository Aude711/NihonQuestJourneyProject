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
        ],
        [
            'name' => 'Tohoku',
        ],
        [
            'name' => 'Kanto',
        ],
        [
            'name' => 'Chubu',
        ],
        [
            'name' => 'Kansai',
        ],
        [
            'name' => 'Chugoku',
        ],
        [
            'name' => 'Shikoku',
        ],
        [
            'name' => 'Kyushu',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::REGIONS as $regionFixture) {
            $region = new Region();
            $region->setName($regionFixture['name']);
            $manager->persist($region);
            $this->addReference('region_' . $regionFixture['name'], $region);
        }
        $manager->flush();
    }
}

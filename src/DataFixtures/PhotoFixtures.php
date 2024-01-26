<?php

namespace App\DataFixtures;

use App\Entity\Photo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PhotoFixtures extends Fixture
{
    public const PHOTOS = [
        [
            'picture' => 'templeosaka.jpg',
        ],
        [
            'picture' => 'redfeuille.jpg',
        ],
        [
            'picture' => 'streetame.jpg',
        ],
        [
            'picture' => 'kyototemple.png',
        ],
        [
            'picture' => 'kyotoinaka.jpg',
        ],
        [
            'picture' => 'templewhite.jpg',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::PHOTOS as $photoFixture) {
            $photo = new Photo();
            $photo->setPicture($photoFixture['picture']);
            $manager->persist($photo);
            $this->addReference('photo_' . $photoFixture['picture'], $photo);
        }
        $manager->flush();
    }
}

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
            'cover' => 'aomori.jpg',
            'description' => 'Aomori et une destination célèbre pour sa nature spectaculaire, 
            ses festivals traditionnels et sa délicieuse cuisine régionale. 
            Connue pour ses hivers rigoureux et ses étés agréablement frais, 
            Aomori est entourée de montagnes majestueuses, de vastes forêts 
            et de côtes pittoresques bordées par la mer du Japon. ',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Iwate',
            'cover' => 'iwate.jpeg',
            'description' => 'Iwate est connue pour sa nature spectaculaire, 
            comprenant des montagnes majestueuses, des vallées profondes et des côtes pittoresques 
            le long de la mer du Japon. La préfecture abrite également des sites historiques 
            et culturels importants',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Miyagi',
            'cover' => 'miyagi.jpeg',
            'description' => 'Miyagi est célèbre pour ses rues animées, 
            ses centres commerciaux modernes et ses délicieuses spécialités culinaires 
            telles que le gyutan (langue de bœuf grillée).',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Akita',
            'cover' => 'akita.jpeg',
            'description' => 'Akita et une destination réputée pour son riche patrimoine 
            culturel et naturel. La ville est célèbre pour ses festivals traditionnels, 
            notamment le festival de Kanto, où des artistes jonglent 
            avec des lanternes de bambou',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Yamagata',
            'cover' => 'yamagata.jpeg',
            'description' => ', Yamagata offre aux visiteurs une expérience authentique 
            de la culture japonaise. La ville est célèbre pour ses cerisiers en fleurs 
            au printemps et ses magnifiques paysages montagneux.',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Fukushima',
            'cover' => 'fukushima.jpeg',
            'description' => 'Fukushima est connue pour son histoire riche, sa culture vibrante et 
            ses paysages naturels pittoresques',
            'region' => 'region_Tohoku',
        ],
        [
            'name' => 'Ibaraki',
            'cover' => 'ibaraki.jpeg',
            'description' => ' Ibaraki offre des paysages diversifiés, allant des magnifiques montagnes 
            aux vastes plaines et aux côtes pittoresques.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Tochigi',
            'cover' => 'tochigi.jpeg',
            'description' => 'Tochigi, au nord de Tokyo. Connue pour son histoire riche et sa culture traditionnelle, 
            elle est appréciée pour ses magnifiques paysages naturels, ses temples historiques 
            et ses sources thermales réputées.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Gunma',
            'cover' => 'gunma.webp',
            'description' => 'Gunma est une préfecture située dans la région de Kanto, au Japon. 
            Connu pour ses paysages naturels diversifiés, Gunma offre une combinaison 
            unique de montagnes, de vallées verdoyantes 
            et de sources thermales relaxantes.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Saitama',
            'cover' => 'saitama.jpeg',
            'description' => 'Connu pour son mélange de modernité et de tradition, 
            Saitama offre une ambiance urbaine dynamique avec ses gratte-ciel, 
            ses centres commerciaux et ses infrastructures modernes, tout en conservant 
            également des quartiers historiques et des sites culturels traditionnels.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Chiba',
            'cover' => 'chiba.webp',
            'description' => 'Chiba est une ville portuaire japonaise située sur l\'île de Honshu, 
            dans la région de Kanto. Elle fait partie de la grande région métropolitaine de Tokyo. 
            La ville est connue pour son développement urbain moderne, ses parcs verdoyants et 
            ses attractions touristiques variées. Elle abrite également plusieurs universités réputées 
            et des institutions de recherche. ',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Tokyo',
            'cover' => 'tokyo3.jpg',
            'description' => 'Tokyo, la capitale animée du Japon, est une métropole dynamique qui allie 
            tradition et modernité de manière fascinante. C\'est l\'une des plus grandes villes du monde, 
            célèbre pour ses gratte-ciels étincelants, ses quartiers animés, ses temples anciens et sa cuisine. 
            Tokyo est un carrefour de la culture, de la technologie et de l\'innovation, 
            offrant une expérience unique à chaque coin de rue.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Kanagawa',
            'cover' => 'kanagawa.jpeg',
            'description' => 'Kanagawa est une préfecture située dans la région de Kanto, 
            sur l\'île de Honshu au Japon. 
            Connu pour son mélange de modernité et de tradition, Kanagawa offre une richesse de paysages variés, 
            des montagnes aux plages en passant par les villes dynamiques. Yokohama, la capitale de la préfecture, 
            est l\'une des plus grandes villes du Japon et abrite le célèbre quartier portuaire de Minato Mirai.',
            'region' => 'region_Kanto',
        ],
        [
            'name' => 'Niigata',
            'cover' => 'niigata.jpeg',
            'description' => 'Niigata est une ville située sur la côte nord-ouest de l\'île de Honshu au Japon, 
            le long de la mer du Japon. Connue pour son riche patrimoine culturel et sa proximité avec les montagnes, 
            Niigata offre une combinaison unique de beauté naturelle et de modernité urbaine. 
            La ville est réputée pour son festival annuel de la neige, ses délicieux plats de fruits de mer frais 
            et son célèbre riz Koshihikari.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Toyama',
            'cover' => 'toyama.jpeg',
            'description' => 'Nichée entre les montagnes et la mer du Japon, Toyama offre un paysage spectaculaire 
            où se mêlent les montagnes enneigées des Alpes du Nord japonaises et les eaux cristallines de la baie 
            de Toyama. La ville est réputée pour sa nature préservée, ses rivières cristallines et ses parcs 
            nationaux pittoresques, offrant ainsi une multitude d\'activités de plein air 
            telles que la randonnée, le rafting et la pêche.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Ishikawa',
            'cover' => 'ishikawa.jpeg',
            'description' => 'Ishikawa est une préfecture située sur la côte ouest du Japon, sur l\'île de Honshu. 
            Elle est connue pour son mélange unique de culture traditionnelle et de modernité, ainsi que 
            pour sa beauté naturelle pittoresque. ',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Fukui',
            'cover' => 'fukui.jpeg',
            'description' => 'Fukui est une ville située sur la côte ouest du Japon, dans la préfecture du même nom. 
            Connue pour son riche patrimoine culturel et naturel, Fukui offre aux visiteurs une expérience unique.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Yamanashi',
            'cover' => 'yamanashi.jpeg',
            'description' => 'Yamanashi est une préfecture située dans la région de Chubu. Connue pour ses magnifiques
             paysages montagneux, Yamanashi abrite le mont Fuji, le plus haut sommet du Japon et un site 
             emblématique du pays. La préfecture est également réputée pour ses vignobles, en particulier 
             dans la région de Katsunuma, où les visiteurs peuvent déguster une variété de vins locaux.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Nagano',
            'cover' => 'nagano.jpeg',
            'description' => 'Nagano, située au cœur du Japon, est une ville réputée pour son histoire fascinante, 
            sa culture vibrante et sa nature pittoresque. Elle est surtout célèbre pour avoir accueilli les 
            Jeux olympiques d\'hiver en 1998, qui ont contribué à accroître sa renommée mondiale.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Gifu',
            'cover' => 'gifu.jpeg',
            'description' => 'Célèbre pour son château médiéval perché sur une colline, la ville 
            offre une riche histoire 
            et une beauté naturelle. Gifu est traversée par la rivière Nagara et 
            est entourée de montagnes pittoresques, 
            offrant des paysages époustouflants.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Shizuoka',
            'cover' => 'shizuoka.jpeg',
            'description' => 'Shizuoka est une ville située dans la région de Chūbu, sur la côte centrale 
            du Japon, célèbre 
            pour ses paysages pittoresques, ses traditions culturelles riches et son histoire fascinante. 
            Nichée entre les 
            majestueuses montagnes de Fuji et la magnifique baie de Suruga, 
            Shizuoka offre un mélange unique de beauté 
            naturelle et de développement urbain. La ville est réputée pour ses plantations de thé verdoyantes, 
            ses jardins traditionnels japonais et ses célèbres sources chaudes, offrant aux visiteurs une expérience 
            authentique de la culture japonaise. ',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Aichi',
            'cover' => 'aichi.jpeg',
            'description' => 'Connu pour sa combinaison de modernité et de tradition, Aichi abrite la ville 
            de Nagoya, l\'une des plus grandes villes du Japon et un important centre économique et 
            industriel. La préfecture est également célèbre pour son riche patrimoine culturel, avec des 
            sites historiques tels que le château de Nagoya et le sanctuaire d\'Atsuta.',
            'region' => 'region_Chubu',
        ],
        [
            'name' => 'Mie',
            'cover' => 'mie.jpeg',
            'description' => 'Mie est une préfecture située dans la région du Kansai au Japon, 
            réputée pour sa beauté naturelle, 
            son riche patrimoine culturel et ses attractions historiques. La ville est notamment 
            célèbre pour abriter le 
            sanctuaire d\'Ise, l\'un des sites les plus sacrés du shintoïsme, dédié à la déesse du soleil Amaterasu.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Shiga',
            'cover' => 'shiga.jpeg',
            'description' => 'Shiga est une préfecture située au centre du Japon, réputée pour son magnifique lac Biwa, 
            le plus grand lac du Japon. La préfecture de Shiga offre un mélange harmonieux de nature préservée et de 
            culture traditionnelle. ',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Kyoto',
            'cover' => 'kyoto.jpeg',
            'description' => 'Kyoto, une ville emblématique du Japon, est réputée pour sa richesse culturelle 
            et historique. Ancienne capitale impériale du pays, Kyoto regorge de temples bouddhistes, de 
            sanctuaires shintoïstes, de jardins zen et de palais traditionnels, qui témoignent de son 
            passé glorieux.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Osaka',
            'cover' => 'osaka.webp',
            'description' => 'Osaka, la troisième plus grande ville du Japon, est une métropole dynamique et animée 
            située sur l\'île de Honshu. Connu comme le cœur commercial du Japon, Osaka est réputé pour son 
            ambiance électrique, ses quartiers animés et sa cuisine délicieuse. La ville est un mélange 
            fascinant de tradition et de modernité, avec ses temples anciens et ses gratte-ciels étincelants. ',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Hyogo',
            'cover' => 'hyogo.jpeg',
            'description' => 'Hyogo est une préfecture située sur l\'île de Honshu, au Japon, dans la 
            région du Kansai. Sa capitale est la ville de Kobe, célèbre pour son port historique et 
            son délicieux bœuf de Kobe. ',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Nara',
            'cover' => 'nara.jpeg',
            'description' => 'Nara, située au cœur du Japon, est une ville emblématique réputée pour 
            son riche patrimoine historique et culturel. Ancienne capitale du Japon du VIIIe au 
            XIIe siècle, Nara abrite certains des sites les plus emblématiques du pays, notamment 
            le temple Todai-ji, qui abrite la grande statue de Bouddha en bronze, et le parc de Nara, 
            où les cerfs sika en liberté ajoutent une touche de charme unique à l\'expérience.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Wakayama',
            'cover' => 'wakayama.jpeg',
            'description' => 'Wakayama, située sur la côte ouest du Japon dans la région de Kansai, est une ville 
            portuaire pittoresque connue pour sa riche histoire, ses magnifiques paysages naturels et son 
            ambiance tranquille. La ville est entourée par les montagnes verdoyantes de la péninsule de 
            Kii et bordée par les eaux claires de l\'océan Pacifique.',
            'region' => 'region_Kansai',
        ],
        [
            'name' => 'Tottori',
            'cover' => 'tottori.jpeg',
            'description' => 'Tottori est une ville située dans la région de Chūgoku, au Japon, sur la côte nord-est 
            de l\'île de Honshū. Connu pour ses vastes dunes de sable, Tottori offre un paysage unique et pittoresque. 
            Les dunes de sable de Tottori, parmi les plus grandes du Japon, sont une attraction majeure, offrant aux 
            visiteurs l\'opportunité de faire du sandboarding, de se promener à dos de chameau, ou tout simplement de 
            profiter de la vue spectaculaire sur la mer du Japon.',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Shimane',
            'cover' => 'shimane.jpeg',
            'description' => 'Shimane est une préfecture située dans la région de Chūgoku, sur l\'île de Honshū 
            au Japon. Connue pour son riche patrimoine culturel et historique, Shimane est célèbre pour ses 
            sanctuaires shintoïstes et ses sites historiques tels que le sanctuaire Izumo Taisha, l\'un des 
            plus anciens et des plus importants du Japon. ',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Okayama',
            'cover' => 'okayama.jpeg',
            'description' => 'Okayama est une ville située sur l\'île principale du Japon, Honshu, dans la 
            région de Chugoku. Elle est réputée pour son histoire riche, sa beauté naturelle et son mélange 
            harmonieux de tradition et de modernité. La ville est célèbre pour son château historique, le 
            Château d\'Okayama, également connu sous le nom de "Ujo", qui surplombe la rivière Asahi et offre 
            une vue panoramique sur la ville. ',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Hiroshima',
            'cover' => 'hiroshima.jpeg',
            'description' => 'Hiroshima, située sur l\'île principale de Honshu au Japon, est une ville 
            emblématique, reconnue à la fois pour son histoire tragique et sa renaissance remarquable. 
            Elle est célèbre pour avoir été le site du premier bombardement atomique de l\'histoire, le 
            6 août 1945, pendant la Seconde Guerre mondiale. Aujourd\'hui, Hiroshima est une ville moderne 
            et dynamique, dotée de musées et de monuments dédiés à la paix, ainsi que de parcs paisibles 
            et de quartiers animés.',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Yamaguchi',
            'cover' => 'yamaguchi.jpeg',
            'description' => 'Yamaguchi est une ville japonaise située dans la préfecture de Yamaguchi, 
            dans la région de Chūgoku, sur l\'île de Honshū. C\'est une ville riche en histoire et en 
            culture, ayant été la capitale du clan Chōshū pendant la période féodale japonaise.',
            'region' => 'region_Chuugoku',
        ],
        [
            'name' => 'Tokushima',
            'cover' => 'tokushima.jpeg',
            'description' => 'okushima est une ville située sur l\'île de Shikoku au Japon, 
            capitale de la préfecture du même nom. Connue pour son riche patrimoine culturel 
            et naturel, Tokushima offre une combinaison unique de traditions ancestrales et 
            de modernité. La ville est célèbre pour son festival Awa Odori, l\'un des plus grands 
            festivals de danse du Japon, où des milliers de danseurs et de spectateurs se rassemblent 
            chaque année pour célébrer avec des danses traditionnelles.',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Kagawa',
            'cover' => 'kagawa.jpeg',
            'description' => 'Kagawa est une préfecture située sur l\'île de Shikoku au Japon. 
            Bien que relativement petite, elle est réputée pour ses paysages magnifiques, 
            ses traditions culturelles riches et sa délicieuse cuisine.',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Ehime',
            'cover' => 'ehime.jpeg',
            'description' => 'Ehime est une préfecture située dans la région de Shikoku, au Japon. 
            C\'est une région réputée pour sa nature abondante, ses sources chaudes, et son riche 
            patrimoine culturel. La préfecture d\'Ehime abrite la ville principale de Matsuyama, 
            célèbre pour son château historique et ses rues animées.',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Kochi',
            'cover' => 'kochi.jpeg',
            'description' => 'Kochi est une ville portuaire située sur l\'île de Shikoku au Japon, 
            connue pour son atmosphère pittoresque, son riche patrimoine culturel et son cadre 
            naturel spectaculaire. Nichée entre les montagnes et la mer, Kochi offre un mélange 
            unique de paysages côtiers, de forêts luxuriantes et de rivières sinueuses.',
            'region' => 'region_Shikoku',
        ],
        [
            'name' => 'Fukuoka',
            'cover' => 'fukuoka.webp',
            'description' => 'Fukuoka est une ville portuaire animée située sur l\'île de Kyushu au Japon. 
            Connue pour son mélange dynamique de modernité et de tradition, Fukuoka offre une atmosphère 
            cosmopolite avec ses gratte-ciel scintillants, ses quartiers commerçants animés et ses 
            délicieux plats de cuisine japonaise.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Saga',
            'cover' => 'saga.jpeg',
            'description' => 'Saga est une ville située dans la préfecture de Saga, sur l\'île de Kyushu au Japon. 
            Connue pour sa riche histoire et sa culture traditionnelle, Saga offre aux visiteurs une expérience 
            authentique de la vie japonaise. La ville est célèbre pour ses céramiques de haute qualité, notamment 
            la poterie d\'Arita, qui est réputée dans tout le pays.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Nagasaki',
            'cover' => 'nagasaki.jpeg',
            'description' => 'Nagasaki est une ville portuaire située sur la côte ouest de l\'île japonaise de Kyushu. 
            Célèbre pour son riche patrimoine historique et culturel, Nagasaki est surtout connue pour son rôle 
            tragique dans l\'histoire mondiale en tant que cible de la deuxième bombe atomique larguée par les 
            États-Unis à la fin de la Seconde Guerre mondiale en 1945. ',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Kumamoto',
            'cover' => 'kumamoto.jpeg',
            'description' => 'Kumamoto est une ville située sur l\'île de Kyushu, au Japon, réputée pour 
            son histoire riche, sa culture dynamique et ses paysages pittoresques. Elle abrite le célèbre 
            château de Kumamoto, l\'un des plus grands et des plus impressionnants châteaux du pays, qui 
            offre une vue magnifique sur la ville depuis ses remparts.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Oita',
            'cover' => 'oita.jpeg',
            'description' => 'Oita est une ville située sur l\'île de Kyushu, au Japon. Elle est réputée pour 
            ses sources chaudes naturelles et ses paysages pittoresques. La ville est entourée de montagnes 
            verdoyantes et bénéficie d\'un accès facile à la mer. ',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Miyazaki',
            'cover' => 'miyazaki.jpeg',
            'description' => 'Miyazaki est une ville côtière située sur l\'île de Kyushu au Japon. 
            C\'est la capitale de la préfecture de Miyazaki et est célèbre pour ses magnifiques 
            plages de sable fin, ses vues pittoresques sur l\'océan Pacifique et son climat subtropical doux.',
            'region' => 'region_Kyushu',
        ],
        [
            'name' => 'Kagoshima',
            'cover' => 'kagoshima.jpeg',
            'description' => 'Kagoshima, située sur la côte sud de l\'île de Kyushu au Japon, 
            est une ville dynamique et pittoresque réputée pour son mélange unique de beauté naturelle, 
            de richesse culturelle et d\'histoire fascinante. Nichée entre la baie de Kagoshima et les 
            majestueux pics du volcan Sakurajima, cette ville offre un panorama époustouflant sur la 
            mer et les montagnes, créant ainsi un cadre enchanteur pour les visiteurs.',
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

-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 21 mars 2018 à 15:08
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mrdomot`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`) VALUES
(1, 'Ambiance & Éclairage Connectés', 'Ampoules, lampes, kits...\r\n', ''),
(2, 'Sécurité et Alarmes Connectées', 'Caméra, capteurs de mouvements, alarmes...\r\n', ''),
(3, 'Box', 'Relier tout vos appareils entre eux\r\n', ''),
(4, 'Gadgets Connectés', 'Retrouvez vos gadgets favoris pour faciliter votre vie!', ''),
(5, 'Extérieur', 'Portails, arroseurs, tondeuses...', '');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `price` float NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `quantity`, `is_published`, `price`, `content`, `image`) VALUES
(1, 1, 'Panneau LED Connecté Rectangle 120 x 30 cm', 10, 1, 129.99, 'Ce panneau rectangulaire, 120 x 30 cm, vous offre un véritable puit de lumière et s\'adapte à vos envies : éclairage modulable blanc chaud, lumière du jour ou éclairage en couleurs. La puissance est réglable et pilotable par télécommande incluse ou par bluetooth depuis votre smartphone ou tablette. Idéal pour toutes les pièces (hors volume2 en salle de bains) et tous vos moments de vie : lumière du jour ou chaude, lumière vive ou tamisée, couleur intense ou pastelle, ambiance apaisante, studieuse ou festive. A vous de créer votre ambiance !', NULL),
(11, 1, 'Panneau LED Connecté Carré 60 x 60 cm', 7, 1, 119.99, 'Ce panneau carré, 59,5 x 59,5 cm, vous offre un véritable puit de lumière et s\'adapte à vos envies : éclairage modulable blanc chaud, lumière du jour ou éclairage en couleurs. La puissance est réglable et pilotable par télécommande incluse ou par bluetooth. Idéal pour toutes les pièces et tous vos moments de vie : lumière du jour ou chaude, lumière vive ou tamisée, couleur intense ou pastelle, ambiance apaisante, studieuse ou festive. A vous de créer votre ambiance !', NULL),
(12, 1, 'Panneau LED Connecté Carré 30 x 30 cm', 14, 1, 65.99, 'Ce panneau carré, 30 x 30 cm, vous offre un puit de lumière et s\'adapte à vos envies : éclairage modulable blanc chaud, lumière du jour ou éclairage en couleurs. La puissance est réglable et pilotable par télécommande incluse ou par bluetooth. Idéal pour toutes les pièces et tous vos moments de vie : lumière du jour ou chaude, lumière vive ou tamisée, couleur intense ou pastelle, ambiance apaisante, studieuse ou festive. A vous de créer votre ambiance !', NULL),
(13, 1, 'Miroir connecté lumineux avec éclairage intégré', 5, 1, 479, 'Eclairage LED : faible consommation et grande durée de vie Système antibuée : confort visuel dans la salle de bains Variateur d\'intensité lumineuse et de température de couleur : confort dans le choix de l\'éclairage Ecran 7\" connecté avec affichage heure, météo, horoscope, radio, trafic : facilite la vie dès le réveil !', NULL),
(14, 1, 'Plafonnier connecté bluetooth Music, 10 W, LED intégrée blanc froid', 23, 1, 69.99, 'Ce plafonnier LED intégrée, de diamètre 24 cm, peut s\'installer dans toutes vos pièces, y compris dans votre salle de bain. Très éclairant (1200 lumens). Sa fonction haut parleur (5 W) vous permettra d\'écouter la musique par bluetooth via votre smartphone (limité à 1 seul plafonnier par pièce) Pour une écoute de qualité optimale, nous vous conseillons l\'installation de ce plafonnier dans une pièce de 10m2 environ.', NULL),
(15, 1, 'Ampoule connectée à changement de couleur + télécommande', 49, 1, 29.99, 'Ampoule LED connectée, pilotée par télécommande ou smartphone ! Avec l\'application Smart Control by Awox, profitez de nombreuses fonctionnalités et contrôlez la lumière à distance !', NULL),
(16, 1, 'Kit ruban LED connecté bluetooth 10m Blanc froid', 9, 1, 149.99, 'Ce kit ruban LED MAXLED de 10 m, de rendu lumineux blanc froid 6500 K, est extensible jusqu\'à 20 m avec le ruban extension (ref LM 70395976). Très puissant, il éclaire vos pièces à vivre. Vous pouvez varier l\'intensité pour créer un éclairage d\'ambiance grâce à votre smartphone ou tablette (par Bluetooth via l\'application gratuite Paulmann Home pour iOS et Android), ou grâce à la télécommande (vendue séparément). Le ruban peut être raccourci en fonction de la longueur souhaitée et raccordable grâce à un système de connexion rapide par fiche pour un montage facilité. Pour une diffusion optimale et une protection de votre ruban, nous vous recommandons l\'utilisation d\'un profilé avec diffuseur pour ruban LED.', NULL),
(17, 1, 'Kit 1 spot à encastrer Eglo connect led, blanc / couleurs, diam 12cm, acier', 11, 1, 39.99, 'Ce kit de spot à encastrer, LED intégrée, extraplat, de diamètre 12 cm, peut s\'installer dans toutes vos pièces, hors salle de bains. Il est idéal dans les endroits à très faible encastrement. Grâce à la télécommande (vendue séparément) ou à sa technologie bluetooth, pilotez vos changements de couleurs, de blancs (couleur chaude à couleur froide) et d\'intensité à l\'aide de votre smartphone ou de votre tablette. Il s\'intègre dans le concept Connect d\'Eglo/Awox.', NULL),
(18, 1, 'Kit 3 spots à encastrer Eglo connect fixe led EGLO LED intégrée acier', 22, 1, 69.99, 'Ce kit de 3 spots encastrés, LED intégrée, extraplats, peut s\'installer dans toutes vos pièces, hors salle de bains. Il s\'adapte à vos envies : éclairage modulable blanc chaud, lumière du jour ou éclairage en couleurs. La puissance est réglable et pilotable par bluetooth via votre smartphone. A vous de créer votre ambiance !', NULL),
(19, 1, 'Enceinte de douche connectée bluetooth, blanc, GROHE Aquatunes', 10, 1, 69.99, 'Vraiment besoin d\'explication ? Profitez de vos meilleurs morceaux tout en vous relaxant sous la douche ! ', NULL),
(20, 1, 'Kit ruban LED connecté bluetooth 3m Multicolore 400 lumens EGLO Connect', 2, 1, 79, 'Ce kit ruban LED de 3 m s\'intègre dans le système Connect d\'Awox et s\'adapte à vos envies : éclairage modulable blanc chaud, lumière du jour ou éclairage en couleurs. La puissance est réglable et pilotable par télécommande (vendue séparement) ou par bluetooth depuis votre smartphone ou tablette. Il est vendu en kit complet avec son transformateur et son câble de raccordement.', NULL),
(21, 1, 'Ampoule LED musicale 21W = 475Lm (équiv 40W) E27 3000K Striimlight AWOX', 30, 1, 58, 'Ampoule musicale fonctionnant avec la technologie Bluetooth', NULL),
(22, 2, 'Caméra connectée Security camera SOMFY protect', 4, 1, 159, 'Votre vie privée est respectée. Un clic sur le smartphone et le volet mécanique motorisé se ferme pour recouvrir complètement l\'objectif. Restez connecté à votre foyer.', NULL),
(23, 2, 'Caméra connectée Presence NETATMO', 6, 1, 299, 'Caméra qui distingue les personnes, des animaux, des voitures. Enregistrement vidéo gratuit et protégé sur carte SD. Installation facile : remplace simplement un éclairage extérieur.', NULL),
(24, 2, 'Visiophone connecté sans fil RING Nickel', 20, 1, 119, 'Visiophone connecté pour répondre à vos visiteurs ou que vous soyez, grâce à votre smartphone. Recevez des notifications en cas de mouvement devant votre porte, idéal pour sécuriser l’accès au domicile.', NULL),
(25, 2, 'Caméra connectée Smartcam full hd snh-e6440 SAMSUNG', 10, 1, 169, 'Visualiser à distance depuis votre Smartphone avec une qualité haute définition. Ultra grand angle 128°.', NULL),
(26, 2, 'Caméra connectée Dsc 723s THOMSON', 8, 1, 99, 'Design compact pour une meilleure intégration sur le mur de la maison. Dotée d’une détection de mouvement, elle vous avertira du moindre mouvement dans votre propriété et vous permettra de faire une levée de doute en cas d’alerte. Application gratuite sur Smartphone et Tablette.', NULL),
(27, 2, 'Caméra connectée Smartcam full hd SAMSUNG', 9, 1, 138, 'Visualiser à distance depuis votre Smartphone avec une qualité haute définition. Ultra grand angle 128°.', NULL),
(28, 2, 'Caméra connectée Welcome NETATMO', 13, 1, 199, 'La caméra dispose d’une fonction « Détection d’alarme\" grâce à son micro. Alerte en cas d\'intrusion d\'un inconnu. Reconnaissance faciale. Désactivation possible de l\'enregistrement pour les membres de la famille. Pas d\'abonnement', NULL),
(29, 2, 'Visiophone connecté filaire CHACON Relais ip', 3, 1, 249, 'Commande du visiophone depuis le smartphone via internet pour ne manquer aucun visiteur.', NULL),
(30, 3, 'Zipamicro - Box domotique Z-Wave+ de Zipato', 30, 1, 89, 'Economique et compacte.\r\nCompatible avec de nombreux modules domotiques utilisant la technologie Z-Wave / Z-Wave+.\r\nSon système de création de scénarios évolués sous forme de puzzle simplifie sa programmation.\r\nSa consommation de 1,2 Watts en fait une box réellement écologique.\r\nFonctionne sans abonnement mensuel supplémentaire !*\r\nGarantie 2 ans (1 an par Zipato étendue à 2 ans par domotique-store.fr)', NULL),
(31, 3, 'VeraEdge - Box domotique ZWave Plus VeraEdge', 3, 1, 128, 'Le logiciel de la VeraEdge sert de base à celui de la Homelive d\'Orange mais est ici proposé sans les bridages imposés par Orange sur sa Homelive (accès aux paramètres Z-Wave, aux plugins, meilleure gestion des caméras, etc.) et ne nécessite aucun abonnement supplémentaire. ', NULL),
(32, 3, 'eedomus+, Box domotique ZWave+', 43, 1, 275, 'La eedomus+ est sans doute la box domotique la plus populaire du moment ! Fiable et ouverte à de nombreux protocoles domotiques et objets connectés, elle saura s\'adapter à vos besoins.', NULL),
(33, 3, 'ZIPATO ZipaTile - Écran de contrôle domotique tactile', 6, 1, 379, 'ZipaTile est un système domotique tout en un. Son écran tactile vous permet de commander l\'ensemble de votre installation domotique (sécurité, chauffage, ambiances d\'éclairage, automatismes, intercom, etc.). Ses contrôleurs Z-Wave+ et ZigBee intégrés permettent de l\'utiliser sans avoir besoin d\'une autre box domotique. ', NULL),
(34, 4, 'GOOGLE HOME', 99, 1, 149, 'Google Home est une enceinte à commande vocale fonctionnant avec l\'Assistant Google. Posez-lui des questions et donnez-lui des choses à faire : elle a été conçue spécialement pour vous aider. Il suffit de commencer votre phrase par \"Ok Google\".', NULL),
(35, 4, 'GOOGLE CHROMECAST', 76, 1, 39, 'Chromecast est une clé multimédia qui se branche sur un port HDMI de votre téléviseur. Elle vous permet d\'utiliser votre appareil mobile pour diffuser directement sur votre téléviseur, ou plus exactement \"caster\" des vidéos YouTube, des séries TV, des films, des clips musicaux, des événements sportifs, des jeux et d\'autres contenus. Chromecast est compatible avec iPhone®, iPad®, les téléphones et les tablettes Android, les ordinateurs portables Mac et Windows, ainsi que les Chromebooks.', NULL),
(36, 4, 'GOOGLE HOME MINI', 48, 1, 59, 'Google Home Mini est la version mini format de Google Home, la nouvelle enceinte à commande vocale de Google qui utilise l\'intelligence de l\'Assistant Google. N\'hésitez pas à poser vos questions à Google Home Mini et à lui donner des choses à faire : Google Home Mini a été conçue pour vous aider. Facile : il suffit de commencer votre phrase par \"Ok Google\".', NULL),
(37, 4, 'Linkoo Smart CUP / Mug connecté Gris anthracite', 14, 1, 58, 'Tasse connectée Bluetooth qui permet d\'être utilisée avec l\'application mobile ou de façon autonome sur l\'écran OLED. Cadeau idéal pour suivre sa consommation d\'eau et se fixer des objectifs de consommation d\'eau ou encore connaitre la température de sa boisson. BIP Sonore intégré pour le rappel de consommation d\'eau.', NULL),
(38, 4, 'LaMetric Time : horloge Wi-Fi avec applications', 10, 1, 176, 'Oubliez la solitude et égayez votre journée avec des icônes et des animations amusantes, ajoutez une identité d’entreprise aux horloges de bureau, rejoignez la communauté de créateurs et rendez votre horloge différente. Les informations utiles combinées à du pixel art donnent un charme unique à votre environnement. Contrôler les appareils domestiques depuis un smartphone est pratique, mais ce n’est pas idéal lorsque toute la famille a besoin d’accéder aux informations. LaMetric Time est un afficheur/contrôleur intelligent, très visible et actif en permanence pour les appareils de maison intelligente. Il affiche des informations des appareils Netatmo, Alexa, Nest, Sonos, Ring, SmartThings et contrôle Philips Hue, WeMo et d’autres dispositifs d’un simple clic.', NULL),
(39, 4, 'Motorola Connect Coin - Porte-clés connecté avec localisation, bouton selfie et SOS, blanc', 4, 1, 19, 'Localisateur de clé et de téléphone: attachez facilement le ConnectCoin à votre porte-clés et associez-le à vos clés avec l\'application smartphone. Appuyez sur le bouton pour localiser votre téléphone.\r\nCaméra à distance / bouton seflie sur le smartphone : sélectionnez sur votre ConnectCoin la fonction qui déclenche la caméra pour prendre une photo depuis votre smartphone', NULL),
(40, 4, 'Rokono® (B10) BASS+ Mini Enceinte Bluetooth', 8, 1, 19, 'Vous offrent des performances audio avancées et une expérience d\'écoute unique facilement partout où vous allez', NULL),
(41, 5, 'Tondeuse robot connectée WORX M800 wifi, 800 m²', 2, 1, 999, 'Robot connecté, programmable à distance.\r\n\r\n', NULL),
(42, 5, 'Tondeuse robot connectée WORX L1500 wifi, 1500 m²', 2, 1, 1399, 'Accessoires fournis : Câble 200m, 250 cavaliers, 9 lames, 2 gabarits distance câble.\r\nTerrain avec obstacle : Oui\r\nPente maximum conseillée (en %) : 35', NULL),
(43, 5, 'Tondeuse robot connectée AMBROGIO L300r elite 1db, 4000 m²', 1, 1, 3788, 'Moteur sans charbon : plus robuste et plus puissant. Jusqu’à 10h d\'utilisation consécutives', NULL),
(44, 5, 'Programmateur d\'arrosage connecté à piles JARDIBRIC Bl-ip6 multivoie', 6, 1, 178, 'Gestion sur smartphone ou tablette par connexion bluetooth smart. Etanche et complètement immergeable.', NULL),
(45, 5, 'Sonde d\'humidité connectée à piles GARDENA Smart sensor', 6, 1, 149, 'Mesure l\'humidité du sol, la luminosité et la température extérieure. Ces données sont transmises à l\'utilisateur via l\'application smart App. GARDENA. Contôle via l\'application/téléchargement gratuit', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `is_admin`, `image`) VALUES
(1, 'Quentin', 'De Andrade', 'deandradeq@gmail.com', 'aaa', 1, ''),
(2, 'Non Admin', 'test', 'nonadmin@gmail.com', 'aaa', 0, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

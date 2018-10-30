-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 23 oct. 2018 à 16:55
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alaska`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chapter_name` varchar(350) NOT NULL,
  `content_chapter` text NOT NULL,
  `creation_date_chapter` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapters`
--

INSERT INTO `chapters` (`id`, `chapter_name`, `content_chapter`, `creation_date_chapter`) VALUES
(1, 'Chapitre 1 - Le départ', '\r\n\r\nEtiam sagittis rhoncus ante vel viverra. Quisque facilisis eget nulla vitae tristique. Curabitur vulputate semper ex, nec imperdiet lectus pellentesque ac. Maecenas libero mauris, convallis quis lectus eget, fringilla iaculis nunc. Phasellus sit amet arcu et massa consequat consequat. Ut vel mi id ipsum porta sollicitudin non at ipsum. Nulla accumsan libero eget eros vehicula, ullamcorper accumsan turpis maximus.\r\n\r\nOrci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec gravida auctor magna, quis feugiat lacus laoreet ac. Nam tristique porta purus, vitae convallis nisl accumsan sit amet. Donec in pharetra nibh, tincidunt malesuada velit. Nulla molestie odio in nulla bibendum, ac venenatis metus pretium. Donec gravida finibus ante elementum efficitur. Duis hendrerit, odio ut convallis cursus, sapien dui volutpat nisl, nec sollicitudin nibh lacus nec turpis. Morbi justo est, hendrerit nec libero a, eleifend commodo nulla. Aliquam accumsan, nisl at molestie semper, sem nunc venenatis lectus, quis porttitor ex ligula ac velit. Donec cursus ante a tincidunt pharetra. ', '2018-10-23 14:15:40'),
(2, 'Chapitre 2 - Découverte de la vie sauvage', '\r\n\r\nNullam ligula quam, pretium eu risus quis, condimentum ornare odio. Fusce malesuada nulla eu est convallis facilisis. Mauris eu felis et nisl ultricies hendrerit. Praesent auctor sodales sodales. Nam pretium justo non suscipit bibendum. Sed lacinia nisl ut turpis ornare, sit amet laoreet ligula suscipit. Proin vulputate nulla quis purus tincidunt condimentum. Cras aliquet magna et magna viverra, quis hendrerit lorem mollis. Nunc tellus mauris, sagittis vitae cursus ut, feugiat ut nisl. Nam aliquet risus non semper tincidunt. In laoreet nisi at diam pretium, vitae cursus nisl venenatis.\r\n\r\nFusce volutpat ut massa a blandit. Nunc ultrices auctor auctor. Suspendisse in elementum massa. Nunc blandit justo massa, non volutpat tortor eleifend sed. In ipsum ex, posuere a aliquet quis, fermentum a sapien. Quisque id quam nunc. In facilisis, risus et tincidunt mattis, tellus ex tincidunt lorem, in porttitor nulla nisi ac orci.\r\n\r\nFusce lobortis nisl purus, in consectetur felis fermentum quis. Fusce sollicitudin aliquet dui. Proin lacus ligula, tempus id mollis vel, maximus eget ipsum. Nulla facilisi. Sed quis ligula eu nisi congue pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque scelerisque egestas varius. Fusce congue ullamcorper diam, id sagittis nibh dapibus sed. Quisque auctor vestibulum felis, condimentum auctor felis. Vivamus in nisi porta, consequat mauris et, ultricies lorem. Sed sed odio porta diam efficitur tempor. Integer vel velit erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis quis faucibus augue. Phasellus congue nulla a libero consequat finibus. Suspendisse ultricies eleifend erat a dignissim. ', '2018-10-23 14:16:19'),
(3, 'Chapitre 3 - ALASKA', '\r\n\r\nProin orci tellus, convallis at erat non, blandit dictum sapien. Suspendisse sed elementum urna. Aliquam nec nulla et ligula varius posuere sed at sem. Nullam rutrum facilisis tellus non pretium. Morbi fringilla sapien erat, nec iaculis nulla rutrum imperdiet. Duis placerat lacus quam, ultrices fermentum est porta eget. Vestibulum ac leo at ante tristique vulputate at eu risus. Ut auctor mattis convallis. Vestibulum elementum et ante ac scelerisque. Donec luctus nisi rhoncus vehicula mattis. Mauris erat ligula, aliquam ut est nec, bibendum gravida est. Nunc sed nisl maximus sapien dapibus dapibus et a tellus.\r\n\r\nCurabitur molestie nec lorem sit amet cursus. In posuere efficitur congue. Nunc eget sapien dictum, auctor odio quis, tincidunt libero. Nunc eget odio lacus. Praesent nisl libero, ultrices eu finibus et, consectetur congue nibh. Nunc at massa a augue fringilla gravida. Sed a feugiat dolor, sed ultrices dolor. Nunc lorem diam, euismod sit amet interdum sed, finibus ornare libero. In lobortis id risus laoreet pretium. Vivamus eget orci venenatis arcu finibus gravida. Morbi facilisis gravida metus, vel interdum magna malesuada at. Vestibulum tellus metus, feugiat a neque sed, luctus efficitur felis. Quisque et lacus volutpat, imperdiet nulla in, elementum metus. Donec vulputate arcu velit, sit amet ornare nibh lacinia faucibus. Sed venenatis cursus sollicitudin. Ut tincidunt odio ut mi auctor lobortis.\r\n\r\nIn ipsum velit, auctor placerat est sit amet, pulvinar iaculis eros. Sed vehicula ultrices sapien, non fermentum sapien accumsan ac. Etiam ultricies, risus sed accumsan semper, est erat aliquet risus, id fringilla turpis lacus id risus. Phasellus erat tortor, ullamcorper vel ante ut, sodales ultricies ligula. Donec aliquet ligula ipsum, eu rutrum leo sodales non. Aenean quis luctus enim. Fusce eget viverra nisl. Pellentesque laoreet libero nunc, vel malesuada mi pretium convallis. Quisque rutrum velit vitae ipsum tempus mattis. Vivamus bibendum lacus turpis, et facilisis justo pulvinar nec. Duis sit amet efficitur lacus. ', '2018-10-23 14:16:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

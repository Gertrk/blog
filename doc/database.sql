-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Aprill 07, 2014 kell 11:30 EL
-- Serveri versioon: 5.6.14
-- PHP versioon: 5.5.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Andmebaas: `blog`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post subject` varchar(255) NOT NULL,
  `post_text` text NOT NULL,
  `post created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Andmete tõmmistamine tabelile `post`
--

INSERT INTO `post` (`post_id`, `post subject`, `post_text`, `post created`, `user_id`) VALUES
(0, 'Eesti võib saada transpordiministri', 'Võimu- ja rahaküsimustega lõpusirgele jõudnud uue valitsusliidu läbirääkijad annavad täna õhtul teada ka ministriportfellide jaotamisest, Postimehe andmetel võib juurde tulla transpordiministri koht.\r\n\r\nSel juhul lüüakse majandus- ja kommunikatsiooniministeerium kaheks: majandusministeerium ja transpordi- ja kommunikatsiooni oma.\r\n\r\nHetkel istuvad tulevased võimupartnerid koos ja sätivad lõplikult kokku tulusid-kulusid. Seejärel jõutakse ministrikohtadeni.', '2014-01-26 17:29:36', 1),
(1, 'Uus võimuliit langetab tulumaksumäära ühe protsendi võrra', 'Sotsiaaldemokraatlik Erakond (SDE) ja Reformierakond jõudsid täna läbirääkimistel kokkuleppele, et tulumaks väheneb tulevast aastast ühe protsendi võrra 20 protsendile.\r\n\r\nSamuti jõudsid SDE ja Reformierakond kokkuleppele, et tulumaksuvaba määr tõuseb 144 eurolt 154 eurole ja töötuskindlustuse määr väheneb 0,6 protsendi võrra, teatas Reformierakonna pressiesindaja.\r\n\r\nSamuti leppisid pooled kokku, et  keskmine pension saab olema tulumaksuvaba, teatas sotside pressiesindaja.\r\n\r\n«Aastaid samal tasemel püsinud tulumaksuvaba määra tõstmine on hea uudis eelkõige väiksema ja keskmise sissetulekuga inimeste jaoks, kes maksukoormuse vähendamist oma rahakotis kõige rohkem tunnetavad,» ütles läbirääkimistel osalenud riigikogu SDE fraktsiooni liige Rannar Vassiljev.\r\n\r\nTema sõnul deklareerisid mõlemad osapooled, et eelarve tasakaalu põhimõte on koalitsioonipartnerite jaoks jätkuvalt oluline ning eelarve saab olema struktuurselt tasakaalus.\r\n\r\nReformierakondlasest peaministrikandidaadi Taavi Rõivase sõnul jääb tööjõumaksude langetamisega töötajatele ja ettevõtjatele järgmisel aastal rohkem kätte üle 100 miljonit euro.\r\n\r\nRahandusminister Jürgen Ligi sõnul näeb võimuliit maksulangetuste katteallikatena ette efektiivsemat ja paindlikumat finantsjuhtimist, alkoholi- ja tubakaaktsiisi kiiremat tõusu ning erimärgistatud kütuse maksuerandite, välja arvatud põllumajanduses ja väikelaevadel kasutava kütuse, asendamist täpsemalt suunatavate toetustega.\r\n\r\n«Katteallikatena näeme samuti Eesti Loto reklaamiõiguste laiendamisest tuleneva lisatulu ning maksupettuste vähendamise meetmetega ja salaturu vastase võitlusega,» sõnas Ligi.', '2014-01-26 17:29:59', 1);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
CREATE TABLE IF NOT EXISTS `post_tags` (
  `post_id` int(11) unsigned NOT NULL,
  `tag_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`post_id`,`tag_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`) VALUES
(3, 1),
(5, 2),
(3, 3),
(5, 3),
(6, 3);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(25) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Andmete tõmmistamine tabelile `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`) VALUES
(1, 'story 1'),
(2, 'blogi 2'),
(3, 'all');

--
-- Tabeli struktuur tabelile `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Andmete tõmmistamine tabelile `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `deleted`) VALUES
(1, 'demo', 'demo', 0);

--
-- Tõmmistatud tabelite piirangud
--

--
-- Piirangud tabelile `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Piirangud tabelile `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `post_tags_ibfk_4` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`);
SET FOREIGN_KEY_CHECKS=1;

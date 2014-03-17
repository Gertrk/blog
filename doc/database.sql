-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Märts 17, 2014 kell 01:54 PL
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
  `post text` text NOT NULL,
  `post created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user id` (`user id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Andmete tõmmistamine tabelile `post`
--

INSERT INTO `post` (`post_id`, `post subject`, `post text`, `post created`, `user id`) VALUES
(0, 'jaskb', 'asjfhbasjf', '2014-01-26 17:29:36', 1),
(1, 'ytjuty', 'awerawer', '2014-01-26 17:29:59', 1),
(24, '65454', 'afaskjdnaslkjd', '2014-03-17 11:38:14', 1);

-- --------------------------------------------------------

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
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user id`) REFERENCES `user` (`user_id`);
SET FOREIGN_KEY_CHECKS=1;

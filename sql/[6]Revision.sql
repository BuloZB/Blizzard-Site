DROP TABLE IF EXISTS `bs_news`;
CREATE TABLE `bs_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(128) CHARACTER SET utf8 NOT NULL,
  `title_es` varchar(128) CHARACTER SET utf8 NOT NULL,
  `text_es` text CHARACTER SET utf8 NOT NULL,
  `title_en` varchar(128) CHARACTER SET utf8 NOT NULL,
  `text_en` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
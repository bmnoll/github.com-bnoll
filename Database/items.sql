/*

MySQL Backup

Source Server Version: 5.5.5

Source Database: csc206

Date: 3/22/2020 13:07:45

*/



SET FOREIGN_KEY_CHECKS=0;



-- ----------------------------

--  Table structure for `resorts`

-- ----------------------------

DROP TABLE IF EXISTS `resorts`;

CREATE TABLE `resorts` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `title` varchar(64) NOT NULL,

  `content` varchar(2048) NOT NULL,

  `image` varchar(128) DEFAULT NULL,

  `featured` bit(1) NOT NULL DEFAULT b'0',

  `date_created` datetime DEFAULT NULL,

  `date_updated` datetime DEFAULT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



-- ----------------------------

--  Table structure for `users`

-- ----------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `firstname` varchar(50) NOT NULL,

  `lastname` varchar(50) NOT NULL,

  `username` varchar(50) NOT NULL,

  `password` varchar(255) NOT NULL,

  `email` varchar(128) NOT NULL,

  `date_created` datetime NOT NULL,

  `date_updated` datetime DEFAULT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;



-- ----------------------------

--  Records 

-- ----------------------------

INSERT INTO `resorts` VALUES ('1','Killington','Killington is known for its diversity of terrain and grooming expertise, providing skiers and riders of all ability levels a choice of wide-open groomed cruisers, narrow classic New England runs, moguls, steeps and gladed skiing areas. Killington also offers multiple terrain features for snowboarders and freeskiers, including Bear Mountain\'s signature terrain parks.','killington.jpg','','2020-02-11 11:52:11',NULL), ('2','Aspen','At Aspen Mountain you can ski down the same runs that hosted last year\'s World Cup finals, ride through gladed powder stashes, chase after the snowcat-towed Oasis Champagne Bar, or put together one quad-burning top-to-bottom after another. And all of this is just steps away from downtown Aspen. No wonder this mountain is a legend.','aspen.jpg','','2020-03-12 11:52:16',NULL), ('3','Whistler','There is an indisputable draw, an irresistible allure, a pull so strong that skiers and snowboarders the world over gravitate to these famed peaks.','whistler.jpg','','2020-03-21 11:52:19',NULL), ('4','Mount Snow','Mount Snow has a long and storied history that includes numerous crazy events, innovations and stories that took place over our nearly 64 years of skiing and riding in southern Vermont. A true visionary, Walt Schoenknecht made this place one of a kind. One of the very first ski resorts on the East Coast, Mount Snow is continuing to define the ski industry even today. ','mountsnow.jpg','\0','2020-03-10 12:02:26',NULL);

INSERT INTO `users` VALUES ('1','Scott','Madeira','scott','$2y$10$O6h45f5Y3v.rR1E5H0pLd.yWx6fM05.zoEm4.Eumo4DiWDPOhMgwG','gsmadeir@geneva.edu','2020-03-01 15:20:24',NULL), ('9','Billy Best','Buy','billy','$2y$10$aeiUUA9MuyYiMZJyxg7qEu5nc8nJPGUK3kufJwlEizuAW4/rNkLtS','scott@bestbuyy.com','2020-03-22 05:38:39',NULL), ('10','Gerald','Madeira','jerry','$2y$10$984rLadR5vEHdhafGwsK6.Dgd2JNRZoqA60vHov1zwy1xR9QQIB2y','scottmadeira@gmail.com','2020-03-22 05:38:58',NULL);
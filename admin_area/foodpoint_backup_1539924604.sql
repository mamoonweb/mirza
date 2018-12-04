

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("1","Mirza Mamoon Baig","","mamoon@yahoo.com","5d41402abc4b2a76b9719d911017c592","2017-05-04 00:00:00");



CREATE TABLE `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `day` varchar(50) NOT NULL,
  `people` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO booking VALUES("2","mamoon","mamoon@yahoo.com","03162200308","a-175","05/17/2017","4","dinner","2017-05-05 10:25:13");



CREATE TABLE `delifood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `foodn` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO delifood VALUES("2","g1.jpg","Zinger Burger","150","Taste Burger","2017-05-05 13:56:17");
INSERT INTO delifood VALUES("3","g6.jpg","Pizza","999","vIp","2017-05-05 14:05:54");
INSERT INTO delifood VALUES("5","g3.jpg","Special Pizza","1499","Lorem ipsum dolor sit amet, consectetur adipi est Itaque","2017-05-05 14:20:49");
INSERT INTO delifood VALUES("6","g5.jpg","Sikh Kabab","170","Lorem ipsum dolor sit amet, consectetur adipi est Itaque","2017-05-05 14:21:15");
INSERT INTO delifood VALUES("7","g2.jpg","Fish Fry","300","Lorem ipsum dolor sit amet, consectetur adipi est Itaque","2017-05-05 14:21:35");
INSERT INTO delifood VALUES("8","img3.jpg","Chicken Roast","180","Lorem ipsum dolor sit amet, consectetur adipi est Itaque","2017-05-05 14:22:18");



CREATE TABLE `morder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `tprice` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO morder VALUES("1","arqam","arqam@yahoo.com","03112281281","    korangi 6","7","Special Pizza","1499","10493","2017-05-06 13:39:48");



;




CREATE TABLE `specialfood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `foodn` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO specialfood VALUES("2","m3.jpg","Sikh","70","Lorem Ipsum is simply dummy text of the printing.","2017-05-05 02:31:34");
INSERT INTO specialfood VALUES("4","m4.jpg","Sikh Kabab","60","Lorem Ipsum is simply dummy text of the printing.","2017-05-05 02:33:17");
INSERT INTO specialfood VALUES("6","m5.jpg","Special Kabab","120","Lorem Ipsum is simply dummy text of the printing.","2017-05-05 02:36:46");
INSERT INTO specialfood VALUES("7","m2.jpg","Chicken Roast","150","Lorem Ipsum is simply dummy text of the printing.","2017-05-05 02:37:18");
INSERT INTO specialfood VALUES("8","m3.jpg","Hot Dog","130","Lorem Ipsum is simply dummy text of the printing.","2017-05-05 02:38:44");


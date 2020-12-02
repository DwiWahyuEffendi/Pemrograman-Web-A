CREATE TABLE `websitecv`.`biodata` ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`ttl` DATE NOT NULL , 
`kota` VARCHAR(50) NOT NULL , 
`telpon` VARCHAR(50) NOT NULL , 
`email` VARCHAR(50) NOT NULL , 
`github` VARCHAR(50) NOT NULL , 
`linkedin` VARCHAR(50) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `biodata` (`id`, `ttl`, `kota`, `telpon`, `email`, `github`, `linkedin`)
VALUES (NULL, '2000-05-31', 'Surabaya', '081234764444', 'dwe22@gmail.com', 'dwiwahyueffendi', 'dwiwahyueffendi')

CREATE TABLE `websitecv`.`edukasi` ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`jenjang` VARCHAR(50) NOT NULL , 
`tahun` VARCHAR(50) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `edukasi` (`id`, `jenjang`, `tahun`) VALUES 
('', 'SDN SIWALANKERTO III / 419', '2006 - 2012'), 
('', 'SMPN 36 SURABAYA', '2012 - 2015'), 
('', 'SMA KEMALA BHAYANGKARI 1 SURABAYA', '2015 - 2018'), 
('', 'UPN VETERAN JAWA TIMUR', '2018 - Now')

CREATE TABLE `websitecv`.`movie` ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`film` VARCHAR(50) NOT NULL , 
`rilis` INT NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `movie` (`id`, `film`, `rilis`) VALUES 
('', '3 Idiots', '2009'), 
('', 'Docter Strange', '2016'), 
('', 'Money Heist', '2019')

CREATE TABLE `websitecv`.`skill` ( 
`id` INT NOT NULL AUTO_INCREMENT , 
`jenis` VARCHAR(50) NOT NULL , 
`keterangan` VARCHAR(500) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `skill` (`id`, `jenis`, `keterangan`) VALUES 
(NULL, 'Linux Enthusiast', 'I am a big fan of the Linux operating system. Because of what? because Linux is open source and runs on any device. My laptop uses the Ubuntu distro that I use to work on projects. Because this OS is easier to use and I like it more than others.'), 
(NULL, 'Backend Developer', 'Back-end developers primarily develop and maintain the core functional logic and operations of a software application or information system. Typically, a back-end developer has expert programming skills in Java, Kotlin and other high-level programming languages.'), 
(NULL, 'Artificial Intelligence', 'Sometimes called machine intelligence, is intelligence demonstrated by machines, unlike the natural intelligence displayed by humans and animals. Colloquially, the term \"artificial intelligence\" is often used to describe machines (or computers) that mimic \"cognitive\" functions that humans associate with the human mind, such as \"learning\" and \"problem solving\".'), 
(NULL, ' Intelligence Mobile Developer', 'A mobile developer creates software for mobile devices and technology. Whether for an Android, Apple or Windows platform, a mobile developer must learn the software development environment and programming languages for their chosen platform.')


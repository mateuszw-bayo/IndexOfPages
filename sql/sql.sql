

CREATE TABLE `User` (
      `id_u` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
      `Login` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL UNIQUE,
      `Password` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL ,
      `Akt` int(13) NOT NULL default '0',
      PRIMARY KEY (`id_u`)
   )
   ENGINE=MyISAM DEFAULT CHARACTER SET latin1
    COLLATE latin1_general_cs AUTO_INCREMENT=0;



CREATE TABLE `User_dmin` (
      `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
      `id_u` int(13) NOT NULL default '0',
      `Ranga` int(13) NOT NULL default '0',
      PRIMARY KEY (`id`)
   )
   ENGINE=MyISAM DEFAULT CHARACTER SET latin1
    COLLATE latin1_general_cs AUTO_INCREMENT=0;



CREATE TABLE `Str_conf` (
      `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
      `typ_n` int(13) NOT NULL default '0',
      `typ_t` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `akcia` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `opis` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `tresc` text CHARACTER SET utf16 COLLATE utf16_polish_ci NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
   )
   ENGINE=MyISAM DEFAULT CHARACTER SET utf16
    COLLATE utf16_polish_ci AUTO_INCREMENT=0;





  CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(40) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
  );




CREATE TABLE `Str_kont` (
      `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
      `open` int(13) NOT NULL default '0',
      `kto` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `kont` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `ip` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `tresc` text CHARACTER SET utf16 COLLATE utf16_polish_ci NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
   )
   ENGINE=MyISAM DEFAULT CHARACTER SET utf16
    COLLATE utf16_polish_ci AUTO_INCREMENT=0;




CREATE TABLE `Url_link` (
      `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
      `open` int(13) NOT NULL default '0',
      `name` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `url` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `page` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `color` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `icone` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      `id_user` int(13) NOT NULL default '0',
      `apl` int(13) NOT NULL default '0',
      `age` int(13) NOT NULL default '0',
      `ip` VARCHAR(50) CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
      PRIMARY KEY (`id`)
   )
   ENGINE=MyISAM DEFAULT CHARACTER SET utf16
    COLLATE utf16_polish_ci AUTO_INCREMENT=0;




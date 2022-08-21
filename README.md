Есть DB	 db_test   login:'root' pass:''


DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `c_country_id` smallint(5) unsigned NOT NULL default '0',
  `c_region_id` smallint(5) unsigned NOT NULL default '0',
  `c_name_rus` varchar(20) NOT NULL default '',
  `c_name_eng` varchar(20) NOT NULL default '',
  `c_name_ger` varchar(20) NOT NULL default '',
  `c_descr_rus` varchar(50) NOT NULL default '',
  `c_descr_eng` varchar(50) NOT NULL default '',
  `c_descr_ger` varchar(50) NOT NULL default '',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` VALUES(1,  3, 0, 'Город 3_0_2', 'City 3_0_2 eng', 'City 3_0_2 ger', 'ГОРОД 3_0_2', 'CITY 3_0_2 ENG', 'CITY 3_0_2  GER');
INSERT INTO `city` VALUES(2,  2, 0, 'Город 2_0_1', 'City 2_0_1 eng', 'City 2_0_1 ger', 'ГОРОД 2_0_1', 'CITY 2_0_1 ENG', 'CITY 2_0_1  GER');
INSERT INTO `city` VALUES(3,  1, 0, 'Город 1_0_1', 'City 1_0_1 eng', 'City 1_0_1 ger', 'ГОРОД 1_0_1', 'CITY 1_0_1 ENG', 'CITY 1_0_1 GER');
INSERT INTO `city` VALUES(4,  4, 5, 'Город 4_5_2', 'City 4_5_2 eng', 'City 4_5_2 ger', 'ГОРОД 4_5_2', 'CITY 4_5_2 ENG', 'CITY 4_5_2 GER');
INSERT INTO `city` VALUES(5,  2, 0, 'Город 2_0_2', 'City 2_0_2 eng', 'City 2_0_2 ger', 'ГОРОД 2_0_2', 'CITY 2_0_2 ENG', 'CITY 2_0_2  GER');
INSERT INTO `city` VALUES(6,  4, 0, 'Город 4_0_2', 'City 4_0_2 eng', 'City 4_0_2 ger', 'ГОРОД 4_0_2', 'CITY 4_0_2 ENG', 'CITY 4_0_2 GER');
INSERT INTO `city` VALUES(7,  1, 3, 'Город 1_3_2', 'City 1_3_2 eng', 'City 1_3_2 ger', 'ГОРОД 1_3_2', 'CITY 1_3_2 ENG', 'CITY 1_3_2  GER');
INSERT INTO `city` VALUES(8,  2, 4, 'Город 2_4_3', 'City 2_4_3 eng', 'City 2_4_3 ger', 'ГОРОД 2_4_3', 'CITY 2_4_3 ENG', 'CITY 2_4_3  GER');
INSERT INTO `city` VALUES(9,  4, 5, 'Город 4_5_1', 'City 4_5_1 eng', 'City 4_5_1 ger', 'ГОРОД 4_5_1', 'CITY 4_5_1 ENG', 'CITY 4_5_1 GER');
INSERT INTO `city` VALUES(10, 3, 1, 'Город 3_1_2', 'City 3_1_2 eng', 'City 3_1_2 ger', 'ГОРОД 3_1_2', 'CITY 3_1_2 ENG', 'CITY 3_1_2  GER');
INSERT INTO `city` VALUES(11, 2, 2, 'Город 2_2_2', 'City 2_2_2 eng', 'City 2_2_2 ger', 'ГОРОД 2_2_2', 'CITY 2_2_2 ENG', 'CITY 2_2_2 GER');
INSERT INTO `city` VALUES(12, 2, 4, 'Город 2_4_1', 'City 2_4_1 eng', 'City 2_4_1 ger', 'ГОРОД 2_4_1', 'CITY 2_4_1 ENG', 'CITY 2_4_1  GER');
INSERT INTO `city` VALUES(13, 3, 0, 'Город 3_0_1', 'City 3_0_1 eng', 'City 3_0_1 ger', 'ГОРОД 3_0_1', 'CITY 3_0_1 ENG', 'CITY 3_0_1  GER');
INSERT INTO `city` VALUES(14, 1, 3, 'Город 1_3_1', 'City 1_3_1 eng', 'City 1_3_1 ger', 'ГОРОД 1_3_1', 'CITY 1_3_1 ENG', 'CITY 1_3_1  GER');
INSERT INTO `city` VALUES(15, 3, 1, 'Город 3_1_1', 'City 3_1_1 eng', 'City 3_1_1 ger', 'ГОРОД 3_1_1', 'CITY 3_1_1 ENG', 'CITY 3_1_1  GER');
INSERT INTO `city` VALUES(16, 2, 4, 'Город 2_4_2', 'City 2_4_2 eng', 'City 2_4_2 ger', 'ГОРОД 2_4_2', 'CITY 2_4_2 ENG', 'CITY 2_4_2  GER');
INSERT INTO `city` VALUES(17, 2, 2, 'Город 2_2_1', 'City 2_2_1 eng', 'City 2_2_1 ger', 'ГОРОД 2_2_1', 'CITY 2_2_1 ENG', 'CITY 2_2_1  GER');
INSERT INTO `city` VALUES(18, 3, 1, 'Город 3_1_5', 'City 3_1_5 eng', 'City 3_1_5 ger', 'ГОРОД 3_1_5', 'CITY 3_1_5 ENG', 'CITY 3_1_5  GER');
INSERT INTO `city` VALUES(19, 4, 0, 'Город 4_0_1', 'City 4_0_1 eng', 'City 4_0_1 ger', 'ГОРОД 4_0_1', 'CITY 4_0_1 ENG', 'CITY 4_0_1 GER');
INSERT INTO `city` VALUES(20, 1, 0, 'Город 1_0_2', 'City 1_0_2 eng', 'City 1_0_2 ger', 'ГОРОД 1_0_2', 'CITY 1_0_2 ENG', 'CITY 1_0_2  GER');
INSERT INTO `city` VALUES(21, 4, 0, 'Город 4_0_3', 'City 4_0_3 eng', 'City 4_0_3 ger', 'ГОРОД 4_0_3', 'CITY 4_0_3 ENG', 'CITY 4_0_3 GER');
INSERT INTO `city` VALUES(22, 3, 1, 'Город 3_1_4', 'City 3_1_4 eng', 'City 3_1_4 ger', 'ГОРОД 3_1_4', 'CITY 3_1_4 ENG', 'CITY 3_1_4  GER');
INSERT INTO `city` VALUES(23, 3, 1, 'Город 3_1_3', 'City 3_1_3 eng', 'City 3_1_3 ger', 'ГОРОД 3_1_3', 'CITY 3_1_3 ENG', 'CITY 3_1_3  GER');

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `glob_region_id` smallint(5) unsigned NOT NULL,
  `c_name_rus` varchar(20) NOT NULL default '',
  `c_name_eng` varchar(20) NOT NULL default '',
  `c_name_ger` varchar(20) NOT NULL default '',
  `c_descr_rus` varchar(50) NOT NULL default '',
  `c_descr_eng` varchar(50) NOT NULL default '',
  `c_descr_ger` varchar(50) NOT NULL default '',
  UNIQUE KEY `id` (`id`),
  KEY `glob_region_id` (`glob_region_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` VALUES(1, 1, 'Украина ID1', 'Ukraina eng ID1', 'Ukraina ger ID1', 'УКРАИНА', 'UKRAINA ENG', 'UKRAINA GER');
INSERT INTO `country` VALUES(2, 1, 'Россия ID2', 'Russia eng ID2', 'Rusland ger ID2', 'РОССИЯ', 'RUSSIA ENG', 'RUSLAND GER');
INSERT INTO `country` VALUES(3, 1, 'Белорусь ID3', 'Belorus eng ID3', 'Belorus ger ID3', 'БЕЛОРУСЬ', 'BELORUS ENG', 'BELORUS GER');
INSERT INTO `country` VALUES(4, 3, 'США ID4', 'USA eng ID4', 'USA ger ID4', 'СОЕД.ШТАТЫ АМЕРИКИ', 'USA ENG', 'USA GER');

-- --------------------------------------------------------

--
-- Структура таблицы `glob_region`
--

DROP TABLE IF EXISTS `glob_region`;
CREATE TABLE `glob_region` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `gr_name_rus` varchar(255) NOT NULL,
  `gr_name_eng` varchar(255) NOT NULL,
  `gr_name_ger` varchar(255) NOT NULL,
  `gr_descr_rus` varchar(255) NOT NULL,
  `gr_descr_eng` varchar(255) NOT NULL,
  `gr_descr_ger` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `glob_region`
--

INSERT INTO `glob_region` VALUES(1, 'Европа', 'Europe eng', 'Europe ger', 'ЕВРОПА', 'EUROPE ENG', 'EUROPE GER');
INSERT INTO `glob_region` VALUES(2, 'Азия', 'Asia eng', 'Asia ger', 'АЗИЯ', 'ASIA ENG', 'ASIA GER');
INSERT INTO `glob_region` VALUES(3, 'Северная Америка', 'Noth America eng', 'Noth America ger', 'СЕВЕРНАЯ АМЕРИКА', 'NOTH AMERICA ENG', 'NOTH AMERICA GER');

-- --------------------------------------------------------

--
-- Структура таблицы `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE `region` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `r_country_id` smallint(5) unsigned NOT NULL default '0',
  `r_name_rus` varchar(255) NOT NULL,
  `r_name_eng` varchar(255) NOT NULL,
  `r_name_ger` varchar(255) NOT NULL,
  `r_descr_rus` varchar(255) NOT NULL,
  `r_descr_eng` varchar(255) NOT NULL,
  `r_descr_ger` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `region`
--

INSERT INTO `region` VALUES(1, 3, 'Центральные области ID1', 'Central Region ID1', 'Central Region ID1', 'ЦЕНТРАЛЬНЫЕ ОБЛАСТИ', 'CENTRAL REGION ENG', 'CENTRAL REGION GER');
INSERT INTO `region` VALUES(2, 2, 'Центральная Россия ID2', 'Central Russia eng ID2', 'Central Russia ger ID2', 'ЦЕНТРАЛЬНАЯ РОССИЯ', 'CENTRAL RUSSIA ENG', 'CENTRAL RUSSIA GER');
INSERT INTO `region` VALUES(3, 1, 'Крым ID3', 'Creamea ID3', 'Creamea ID3', 'КРЫМ', 'CREAMEA ENG', 'CREAMEA GER');
INSERT INTO `region` VALUES(4, 2, 'Дальний восток ID4', 'Far East ID4', 'Far East ID4', 'ДАЛЬНИЙ ВОСТОК', 'FAR EAST ENG', 'FAR EAST GER');
INSERT INTO `region` VALUES(5, 4, 'Техас ID5', 'Texas ID5', 'Texas ID5', 'ТЕХАС', 'TEXAS ENG', 'TEXAS GER');
INSERT INTO `region` VALUES(6, 2, 'Урал ID6', 'Ural eng ID6', 'Ural ger ID6', 'УРАЛ', 'Ural ENG', 'Ural GER');
INSERT INTO `region` VALUES(7, 1, 'Донбас ID7', 'Donbas ID7', 'Donbas ID7', 'Донбас', 'DONBAS ENG', 'DONBAS GER');

Базу менять нельзя...
Город может принадлежать какому-то региону, а может и не принадлежать.
Страна у города и региона, ессно, есть всегда.

Необходимо вывести список городов только для _Европы_ в следующем формате:

Страна 1
  Город 1
  Город 2
  Город 3
  .....

   Регион 1
     Город 4
     Город 5
     Город 6
     ..........
   Регион 2
     Город 7
     Город 8
     Город 9
     ..........
   ........
Страна 2
  Город 10
  Город 11
  Город 12
  .....

   Регион 3
     Город 13
     Город 14
     Город 15
     ..........
   Регион 4
     Город 16
     Город 17
     Город 18
     ..........
   ........
........
и т.д.


Список должен выводиться на языке посетителя.
Переменная языка может принимать следующие значения - передается GET'ом из другого скрипта:
$user_lang = [ 'rus' 'eng' 'ger' ]  - по умолчанию 'rus'

При MouseOver на названии страны, региона, города должно появляться описание
на соответствующем языке.
Вот и все...

Скрипт должен быть работающим.
При размещении в папку и запуске скрипта (или основного скрипта при наличии нескольких файлов) должен выводиться указанный список -
без дополнительных доработок кода с нашей стороны.

Все можно сделать на классах ( их также прописать в скрипте ) или без оных.
Ваша свобода ничем кроме первичных условий не ограничивается.
Предлагается написать скрипт наиболее оптитмальным на ваш взгляд алгоритмом.





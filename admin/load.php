<?php
global $wpdb;
$user_count = $wpdb->get_var( "show tables like 'ind'");
if(count($user_count)==0){
  try {
    $con = new PDO("mysql:host=".$wpdb->dbhost.";dbname=".$wpdb->dbname,$wpdb->dbuser,$wpdb->dbpassword);
    $con->query("
    -- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ind_municipio`;
CREATE TABLE `ind_municipio` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL,
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL,
  `homicidio` int(11) NOT NULL,
  `total_homicidio_hombre` int(11) NOT NULL,
  `total_homicidio_mujer` int(11) NOT NULL,
  `suicidio` int(11) NOT NULL,
  `accidentes_transito` int(11) NOT NULL,
  `sin_cobertura_primaria` int(11) NOT NULL,
  `pobresa` int(11) NOT NULL,
  `desagrega` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
    ");
    $con = null;
  }catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
  }
      
}

?>

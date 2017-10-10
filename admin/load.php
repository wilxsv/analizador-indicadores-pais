<?php
global $wpdb;
$user_count = $wpdb->get_var( "show tables like 'ind'");
if(count($user_count)==0){
  try {
    $con = new PDO("mysql:host=".$wpdb->dbhost.";dbname=".$wpdb->dbname,$wpdb->dbuser,$wpdb->dbpassword);
    $con->query("
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';


DROP TABLE IF EXISTS `ind_municipio`;
CREATE TABLE `ind_municipio` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria',
  `codigo` varchar(15) COLLATE utf8_bin DEFAULT NULL COMMENT 'codigo departamento',
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de departamento',
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `homicidio` bigint(20) NOT NULL COMMENT 'cantidad total de homicidio',
  `total_homicidio_mujer` bigint(20) NOT NULL COMMENT 'cantidad total de homicidio en mujeres',
  `desaparecidos` bigint(20) NOT NULL COMMENT 'cantidad total de desaparecidos',
  `lesiones` bigint(20) NOT NULL COMMENT 'cantidad total de lesiones',
  `vif` bigint(20) NOT NULL COMMENT 'cantidad total de vif',
  `extorciones` bigint(20) NOT NULL COMMENT 'canntidad total de extorciones',
  `robo` bigint(20) NOT NULL COMMENT 'cantidad de total de robo',
  `hurto` bigint(20) NOT NULL COMMENT 'cantidad total de hurto',
  `robo_vehiculo` bigint(20) NOT NULL COMMENT 'cantidad total de robo de vehiculos',
  `hurto_vehiculo` bigint(20) NOT NULL COMMENT 'cantidad total de hurto de vehiculos',
  `r_h_conmercio` bigint(20) NOT NULL COMMENT 'cantidad total de r_h_conmercio',
  `ppl` bigint(20) NOT NULL COMMENT 'Cantidad total de ppl',
  `ppurb` double NOT NULL COMMENT 'Cantidad total de ppurb',
  `epp` bigint(20) NOT NULL COMMENT 'Cantidad total de epp',
  `veh` bigint(20) NOT NULL COMMENT 'Cantidad total de veh',
  `ipn` double DEFAULT NULL COMMENT '0',
  `vida` double DEFAULT NULL COMMENT '0',
  `integridad` double DEFAULT NULL COMMENT '0',
  `propiedad` double DEFAULT NULL COMMENT '0',
  `riesgo` double DEFAULT NULL COMMENT '0',
  `anyo` year(4) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuario` bigint(20) unsigned NOT NULL,
  `ip` varchar(15) COLLATE utf8_bin NOT NULL,
  `hash` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`),
  CONSTRAINT `ind_municipio_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `wp_users` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='indice de municipalidad';

    ");
    $con = null;
  }catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
  }
      
}

?>

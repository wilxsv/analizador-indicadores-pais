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

DROP TABLE IF EXISTS `ind_bnc_delito`;
CREATE TABLE `ind_bnc_delito` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria',
  `cuenta` bigint(20) NOT NULL COMMENT 'cuenta',
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de departamento',
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `espacio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `area` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `delito` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `dia` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `hora_rango` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `mes` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `anyo` bigint(20) NOT NULL,
  `victima_edad` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `victima_edad_rango_etario` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `victima_sexo` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `victima_ocupacion` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `agresor_relacion_victima` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `agresor_edad` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `agresor_sexo` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `agresor_tipo_arma` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `sector_policial` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `movil_hecho` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'fecha de registro del dato',
  `usuario` bigint(20) unsigned DEFAULT NULL COMMENT 'llave foranea de la tabla de usuarios',
  `ip` varchar(15) COLLATE utf8_bin DEFAULT NULL COMMENT 'ip origen donde se hace el registro de datos',
  `hash` text COLLATE utf8_bin COMMENT 'hash aleatorio de registro de datos',
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=21189 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='banco de datos de direccion general de centros penales';


DROP TABLE IF EXISTS `ind_bnc_dgcp`;
CREATE TABLE `ind_bnc_dgcp` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria',
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de departamento',
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `sipe` bigint(20) NOT NULL COMMENT 'fase del proyecto El Salvador seguro',
  `rango_edad` varchar(20) COLLATE utf8_bin NOT NULL COMMENT 'sector policial priorizado',
  `sexo` varchar(2) COLLATE utf8_bin NOT NULL COMMENT 'codigo de centro escolar priorizado',
  `nivel_educativo` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de centro escolar',
  `estado_civil` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de centro escolar',
  `sector_policial` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de centro escolar',
  `organizacion_delictiva` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de centro escolar',
  `deportado` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de centro escolar',
  `delito` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de centro escolar',
  `anyo` bigint(20) NOT NULL COMMENT 'fase del proyecto El Salvador seguro',
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'fecha de registro del dato',
  `usuario` bigint(20) unsigned NOT NULL COMMENT 'llave foranea de la tabla de usuarios',
  `ip` varchar(15) COLLATE utf8_bin NOT NULL COMMENT 'ip origen donde se hace el registro de datos',
  `hash` text COLLATE utf8_bin NOT NULL COMMENT 'hash aleatorio de registro de datos',
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=41776 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='banco de datos de direccion general de centros penales';


DROP TABLE IF EXISTS `ind_centro_escolar`;
CREATE TABLE `ind_centro_escolar` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria',
  `codigo` varchar(15) COLLATE utf8_bin NOT NULL COMMENT 'codigo centro escolar',
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de departamento',
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `nombre_ce` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de centro escolar',
  `lon` double NOT NULL COMMENT 'coordenada longitud de centro escolar',
  `lat` double NOT NULL COMMENT 'latitud de centro escolar',
  `sector` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'sector policial',
  `presencia_mara` tinyint(4) NOT NULL COMMENT 'presencia de maras ',
  `drogas` tinyint(4) NOT NULL COMMENT 'drogas',
  `violacion` tinyint(4) NOT NULL COMMENT 'violaciones',
  `armas` tinyint(4) NOT NULL COMMENT 'PORTACION DE ARMAS BLANCAS Y FUEGO',
  `robos` tinyint(4) NOT NULL COMMENT 'robos',
  `matricula` double NOT NULL COMMENT 'MATRICULA RELATIVA',
  `ipce` double NOT NULL COMMENT 'indice de seguridad',
  `anyo` year(4) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` bigint(20) unsigned NOT NULL,
  `ip` varchar(15) COLLATE utf8_bin NOT NULL,
  `hash` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=36450 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='indice de centros escolares';


DROP TABLE IF EXISTS `ind_ctl_departamento`;
CREATE TABLE `ind_ctl_departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_departamento` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `lat_departamento` double DEFAULT NULL,
  `lon_departamento` double DEFAULT NULL,
  `geojson_departamento` longtext COLLATE utf8_unicode_ci,
  `shape_leng_departamento` double DEFAULT NULL,
  `shape_area_departamento` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_departamento` (`nombre_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='catalogo de departamentos, geojson y centroides';


DROP TABLE IF EXISTS `ind_ctl_municipio`;
CREATE TABLE `ind_ctl_municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_municipio` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `lat_municipio` double DEFAULT NULL,
  `lon_municipio` double DEFAULT NULL,
  `geojson_municipio` longtext COLLATE utf8_unicode_ci,
  `shape_leng_municipio` double DEFAULT NULL,
  `shape_area_municipio` double DEFAULT NULL,
  `ctl_departamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ctl_departamento_id_nombre_municipio` (`ctl_departamento_id`,`nombre_municipio`),
  CONSTRAINT `ind_ctl_municipio_ibfk_1` FOREIGN KEY (`ctl_departamento_id`) REFERENCES `ind_ctl_departamento` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=401 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='catalogo de municipios, geojson y centroides';


DROP TABLE IF EXISTS `ind_ctl_sector_ppd`;
CREATE TABLE `ind_ctl_sector_ppd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctl_departamento_id` int(11) NOT NULL,
  `nombre_departamento_ppd` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ctl_municipio_id` int(11) NOT NULL,
  `nombre_municipio_ppd` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ctl_canton_id` int(11) NOT NULL,
  `nombre_canton_ppd` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ctl_delegacion_id` int(11) NOT NULL,
  `nombre_delegacion_ppd` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ctl_sub_delegacion_id` int(11) NOT NULL,
  `nombre_sub_delegacion_ppd` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ctl_puesto_id` int(11) NOT NULL,
  `codigo_puesto_ppd` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ctl_ppd_id` int(11) NOT NULL,
  `dsc_ppd` longtext COLLATE utf8_unicode_ci NOT NULL,
  `shape_area_ppd` double NOT NULL,
  `shape_len_ppd` double NOT NULL,
  `geojson_ppd` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4030 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `ind_focalizacion`;
CREATE TABLE `ind_focalizacion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria',
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de departamento',
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `fase_pess` varchar(15) COLLATE utf8_bin NOT NULL COMMENT 'fase del proyecto El Salvador seguro',
  `sector_policial` varchar(20) COLLATE utf8_bin NOT NULL COMMENT 'sector policial priorizado',
  `codigo_ce` bigint(20) DEFAULT NULL COMMENT 'codigo de centro escolar priorizado',
  `nombre_ce` varchar(150) COLLATE utf8_bin DEFAULT NULL COMMENT 'nombre de centro escolar',
  `lon` double DEFAULT NULL COMMENT 'longitud del centro escolar',
  `lat` double DEFAULT NULL COMMENT 'latitud del centro escolar',
  `sector` varchar(15) COLLATE utf8_bin DEFAULT NULL COMMENT 'sector policial donde se ubica el  centro escolar',
  `registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` bigint(20) unsigned DEFAULT NULL,
  `ip` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `hash` text COLLATE utf8_bin,
  PRIMARY KEY (`id`),
  UNIQUE KEY `departamento_municipio_fase_pess_sector_policial_codigo_ce` (`departamento`,`municipio`,`fase_pess`,`sector_policial`,`codigo_ce`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=442 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='focalizacion';


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
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` bigint(20) unsigned NOT NULL,
  `ip` varchar(15) COLLATE utf8_bin NOT NULL,
  `hash` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `departamento_municipio_anyo` (`departamento`,`municipio`,`anyo`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=525 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='indice de municipalidad';
    ");
    $con = null;
  }catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
  }
      
}

?>

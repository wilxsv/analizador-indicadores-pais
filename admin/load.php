<?php
global $wpdb;
$user_count = $wpdb->get_var( "show tables like 'ind'");
if(count($user_count)==0){
  try {
    $con = new PDO("mysql:host=".$wpdb->dbhost.";dbname=".$wpdb->dbname,$wpdb->dbuser,$wpdb->dbpassword);
    $con->query("-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ind_bnc_accidente_transito`;
CREATE TABLE `ind_bnc_accidente_transito` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria',
  `cuenta` bigint(20) NOT NULL,
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de departamento de retorno',
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio de retorno',
  `anyo` bigint(20) NOT NULL,
  `sexo` varchar(20) COLLATE utf8_bin NOT NULL COMMENT 'sexo de victima',
  `edad` bigint(20) NOT NULL,
  `edad_rango` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'rango de edad',
  `resultado` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'resultado de accidente',
  `calidad` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'calidad',
  `mes` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'mes del accidente',
  `dia` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'dia del accidente',
  `hora_rango` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'rango de hora',
  `tipo_accidente` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'tipo de accidente',
  `causa` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'causa',
  `direccion` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'direccion del accidente',
  `vehiculo` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'tipo vehivulo',
  `registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'fecha de registro del dato',
  `usuario` bigint(20) unsigned DEFAULT NULL COMMENT 'llave foranea de la tabla de usuarios',
  `ip` varchar(15) COLLATE utf8_bin DEFAULT NULL COMMENT 'ip origen donde se hace el registro de datos',
  `hash` text COLLATE utf8_bin COMMENT 'hash aleatorio de registro de datos',
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='banco de datos de accidentes de transito';


DROP TABLE IF EXISTS `ind_bnc_delito`;
CREATE TABLE `ind_bnc_delito` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria',
  `cuenta` bigint(20) NOT NULL COMMENT 'cuenta',
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de departamento',
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `espacio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'espacio del hecho',
  `area` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'area del hecho',
  `delito` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'delito',
  `dia` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'dia del hecho',
  `hora_rango` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'rango de hora',
  `mes` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'mes',
  `anyo` bigint(20) NOT NULL COMMENT 'año',
  `victima_edad` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'edad de la victima',
  `victima_edad_rango_etario` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'rango edad',
  `victima_sexo` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'sexo de la victima',
  `victima_ocupacion` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'ocupacion de la victima',
  `agresor_relacion_victima` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'relacion con el agresor',
  `agresor_edad` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'edad del agresor',
  `agresor_sexo` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'sexo del agresor',
  `agresor_tipo_arma` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'tipo de arma del agresor',
  `sector_policial` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'sectot policial',
  `movil_hecho` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'movil del hecho',
  `registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'fecha de registro del dato',
  `usuario` bigint(20) unsigned DEFAULT NULL COMMENT 'llave foranea de la tabla de usuarios',
  `ip` varchar(15) COLLATE utf8_bin DEFAULT NULL COMMENT 'ip origen donde se hace el registro de datos',
  `hash` text COLLATE utf8_bin COMMENT 'hash aleatorio de registro de datos',
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='banco de datos de direccion general de centros penales';


DROP TABLE IF EXISTS `ind_bnc_dgcp`;
CREATE TABLE `ind_bnc_dgcp` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria',
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de departamento',
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio',
  `sipe` bigint(20) NOT NULL COMMENT 'fase del proyecto El Salvador seguro',
  `rango_edad` varchar(20) COLLATE utf8_bin NOT NULL COMMENT 'rango de edad',
  `sexo` varchar(10) COLLATE utf8_bin NOT NULL COMMENT 'sexo',
  `nivel_educativo` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nivel educativo',
  `estado_civil` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'estado civil',
  `sector_policial` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'sector policial',
  `organizacion_delictiva` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'organizacion delictiva a la que pertenece ',
  `deportado` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'deportado',
  `delito` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombde del delito',
  `anyo` bigint(20) NOT NULL COMMENT 'año',
  `registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'fecha de registro del dato',
  `usuario` bigint(20) unsigned NOT NULL COMMENT 'llave foranea de la tabla de usuarios',
  `ip` varchar(15) COLLATE utf8_bin NOT NULL COMMENT 'ip origen donde se hace el registro de datos',
  `hash` text COLLATE utf8_bin NOT NULL COMMENT 'hash aleatorio de registro de datos',
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='banco de datos de direccion general de centros penales';


DROP TABLE IF EXISTS `ind_bnc_retornado`;
CREATE TABLE `ind_bnc_retornado` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria',
  `anyo` bigint(20) NOT NULL COMMENT 'año de retorno',
  `departamento` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de departamento de retorno',
  `municipio` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nombre de municipio de retorno',
  `mes` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'mes de retorno',
  `sexo` varchar(20) COLLATE utf8_bin NOT NULL COMMENT 'sexo',
  `edad_rango` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'edad',
  `estado_civil` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'estado civil',
  `persona_dependiente` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'personas que dependen del retornado',
  `tiempo_fuera` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'tiempo de permanencia en el exterior',
  `pais_repatriacion` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'pais del cual fue repatriado',
  `motivo` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'motivo del retorno',
  `nivel_educativo` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'nivel educativo',
  `consulado` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'consulado',
  `antecedentes_penales` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'posee antecedentes penales',
  `tipo_antecedente` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'tipo de antecedentes',
  `espectativa_migrante` varchar(150) COLLATE utf8_bin NOT NULL COMMENT 'espectativas del migrante',
  `registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'fecha de registro del dato',
  `usuario` bigint(20) unsigned DEFAULT NULL COMMENT 'llave foranea de la tabla de usuarios',
  `ip` varchar(15) COLLATE utf8_bin DEFAULT NULL COMMENT 'ip origen donde se hace el registro de datos',
  `hash` text COLLATE utf8_bin COMMENT 'hash aleatorio de registro de datos',
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='banco de datos de personas retornadas';


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='indice de centros escolares';


DROP TABLE IF EXISTS `ind_ctl_departamento`;
CREATE TABLE `ind_ctl_departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_departamento` varchar(75) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre del departamento',
  `lat_departamento` double DEFAULT NULL COMMENT 'latitud del departamento',
  `lon_departamento` double DEFAULT NULL COMMENT 'logitud del departamento',
  `geojson_departamento` longtext COLLATE utf8_unicode_ci COMMENT 'geojson del departamento',
  `shape_leng_departamento` double DEFAULT NULL COMMENT 'tamaño del geojson',
  `shape_area_departamento` double DEFAULT NULL COMMENT 'area',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_departamento` (`nombre_departamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='catalogo de departamentos, geojson y centroides';


DROP TABLE IF EXISTS `ind_ctl_municipio`;
CREATE TABLE `ind_ctl_municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_municipio` varchar(75) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre del municipio',
  `lat_municipio` double DEFAULT NULL COMMENT 'la titud del municipio',
  `lon_municipio` double DEFAULT NULL COMMENT 'logitud del municipio',
  `geojson_municipio` longtext COLLATE utf8_unicode_ci COMMENT 'geojson del municipio',
  `shape_leng_municipio` double DEFAULT NULL COMMENT 'tamaño del geojson',
  `shape_area_municipio` double DEFAULT NULL COMMENT 'area',
  `ctl_departamento_id` int(11) NOT NULL COMMENT 'id departamento',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ctl_departamento_id_nombre_municipio` (`ctl_departamento_id`,`nombre_municipio`),
  CONSTRAINT `ind_ctl_municipio_ibfk_1` FOREIGN KEY (`ctl_departamento_id`) REFERENCES `ind_ctl_departamento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='catalogo de municipios, geojson y centroides';


DROP TABLE IF EXISTS `ind_ctl_sector_ppd`;
CREATE TABLE `ind_ctl_sector_ppd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctl_departamento_id` int(11) NOT NULL COMMENT 'id departamento',
  `nombre_departamento_ppd` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre de departamento',
  `ctl_municipio_id` int(11) NOT NULL COMMENT 'id municipio',
  `nombre_municipio_ppd` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre de municipio',
  `ctl_canton_id` int(11) NOT NULL COMMENT 'id de canton',
  `nombre_canton_ppd` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre de canton',
  `ctl_delegacion_id` int(11) NOT NULL COMMENT 'id delegacion ',
  `nombre_delegacion_ppd` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre de delegacion',
  `ctl_sub_delegacion_id` int(11) NOT NULL COMMENT 'id de sub delegacion',
  `nombre_sub_delegacion_ppd` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre de sub delegacion',
  `ctl_puesto_id` int(11) NOT NULL COMMENT 'id de puesto policial',
  `codigo_puesto_ppd` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'codigo de puesto policial',
  `ctl_ppd_id` int(11) NOT NULL COMMENT 'id de puesto policial',
  `dsc_ppd` longtext COLLATE utf8_unicode_ci NOT NULL,
  `shape_area_ppd` double NOT NULL COMMENT 'shape de area geografica ppd',
  `shape_len_ppd` double NOT NULL COMMENT 'distancia de shape ',
  `geojson_ppd` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'datos geojson',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='banco de datos de sectores policiales';


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='focalizacion';


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
  `vif` bigint(20) NOT NULL COMMENT 'cantidad total de violiencia intrafamiliar',
  `extorciones` bigint(20) NOT NULL COMMENT 'canntidad total de extorciones',
  `robo` bigint(20) NOT NULL COMMENT 'cantidad de total de robo',
  `hurto` bigint(20) NOT NULL COMMENT 'cantidad total de hurto',
  `robo_vehiculo` bigint(20) NOT NULL COMMENT 'cantidad total de robo de vehiculos',
  `hurto_vehiculo` bigint(20) NOT NULL COMMENT 'cantidad total de hurto de vehiculos',
  `r_h_conmercio` bigint(20) NOT NULL COMMENT 'robo y hurto de vehiculos con mercaderia',
  `ppl` bigint(20) NOT NULL COMMENT 'Cantidad total de personas privadas de libertad',
  `ppurb` double NOT NULL COMMENT 'procentage de poblacion urbana',
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='indice de municipalidad';


DROP TABLE IF EXISTS `ind_seg_acceso`;
CREATE TABLE `ind_seg_acceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'fecha de acceso a la herramienta',
  `ip` varchar(18) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ip de acceso a la herramienta',
  `user` bigint(20) NOT NULL COMMENT 'usuario que accede',
  `login` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'resultado de login',
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  CONSTRAINT `ind_seg_acceso_ibfk_1` FOREIGN KEY (`user`) REFERENCES `ind_seg_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `ind_seg_herramienta`;
CREATE TABLE `ind_seg_herramienta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_herramienta` varchar(180) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre de herramienta',
  `enabled` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='catalogo de herramientas';


DROP TABLE IF EXISTS `ind_seg_permiso`;
CREATE TABLE `ind_seg_permiso` (
  `role_id` int(11) NOT NULL COMMENT 'llave foranea de roles',
  `herramienta_id` int(11) NOT NULL COMMENT 'llave foranea de herramientas',
  PRIMARY KEY (`role_id`,`herramienta_id`),
  KEY `herramienta_id` (`herramienta_id`),
  CONSTRAINT `ind_seg_permiso_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `ind_seg_rol` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `ind_seg_permiso_ibfk_4` FOREIGN KEY (`herramienta_id`) REFERENCES `ind_seg_herramienta` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='catalogo de permisos de roles hacia herramientas';


DROP TABLE IF EXISTS `ind_seg_rol`;
CREATE TABLE `ind_seg_rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(180) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre de rol',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='catalogo de roles';


DROP TABLE IF EXISTS `ind_seg_usuario`;
CREATE TABLE `ind_seg_usuario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'nombre de usuario',
  `email` varchar(180) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'correo de usuario',
  `salt` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'semilla para generar contraseñas',
  `password` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'clave de usuario',
  `active` tinyint(4) NOT NULL COMMENT 'esta activo?',
  `rol_id` int(11) NOT NULL,
  `last_access` timestamp NULL DEFAULT NULL COMMENT 'ultimo acceso',
  `create_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'fecha de creacion',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `rol_id` (`rol_id`),
  CONSTRAINT `ind_seg_usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `ind_seg_rol` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='catalogo de usuarios';


-- 2018-02-15 13:05:08
");
    $con = null;
  }catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
  }

}

?>

-- Adminer 4.2.1 MySQL dump

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
) ENGINE=InnoDB AUTO_INCREMENT=314 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='indice de municipalidad';


DELIMITER ;;

CREATE TRIGGER `tr_procesa_datos_municipalidad` BEFORE INSERT ON `ind_municipio` FOR EACH ROW
BEGIN
  /*
  Disparador para el calculo de los logaritmos naturales
  */
  -- Calculo de logaritmos naturales
  SET NEW.ln_homicidio = LN(NEW.homicidio);
  SET NEW.ln_homicidio_hombre = LN(NEW.total_homicidio_hombre);
  SET NEW.ln_homicidio_mujer = LN(NEW.total_homicidio_mujer);
  SET NEW.ln_suicidio = LN(NEW.suicidio);
  SET NEW.ln_transito = LN(NEW.accidentes_transito);
  SET NEW.ln_cobertura = LN(NEW.sin_cobertura_primaria);
  SET NEW.ln_pobresa = LN(NEW.pobresa);
  SET NEW.ln_desagrega = LN(NEW.desagrega);
  -- Calculo de logaritmos naturales normalizados
  --  6,69 	 6,62 	 4,33 	 3,00 	 5,05 	 3,64 	 4,55 	 4,69 
  -- Logaritmo natural normalizado de homicidios
  IF ( (NEW.ln_homicidio/6.69) > 1 ) THEN
    SET NEW.ln_nor_homicidio = 1;
  ELSE
    SET NEW.ln_nor_homicidio = NEW.ln_homicidio/6.69;
  END IF;
  -- Logaritmo natural normalizado de homicidios hombres
  IF ( (NEW.ln_homicidio_hombre/6.62) > 1 ) THEN
    SET NEW.ln_nor_homicidio_hombre = 1;
  ELSE
    SET NEW.ln_nor_homicidio_hombre = NEW.ln_homicidio_hombre/6.62;
  END IF;
  -- Logaritmo natural normalizado de homicidios mujer
  IF ( (NEW.ln_homicidio_mujer/4.33) > 1 ) THEN
    SET NEW.ln_nor_homicidio_mujer = 1;
  ELSE
    SET NEW.ln_nor_homicidio_mujer = NEW.ln_homicidio_mujer/4.33;
  END IF;
  -- Logaritmo natural normalizado de suicidios
  IF ( (NEW.ln_suicidio/3) > 1 ) THEN
    SET NEW.ln_nor_suicidio = 1;
  ELSE
    SET NEW.ln_nor_suicidio = NEW.ln_suicidio/3;
  END IF;
  -- Logaritmo natural normalizado de accidentes de transito
  IF ( (NEW.ln_transito/5.05) > 1 ) THEN
    SET NEW.ln_nor_transito = 1;
  ELSE
    SET NEW.ln_nor_transito = NEW.ln_transito/5.05;
  END IF;
  -- Logaritmo natural normalizado de sin convertura
  IF ( (NEW.ln_cobertura/3.64) > 1 ) THEN
    SET NEW.ln_nor_cobertura = 1;
  ELSE
    SET NEW.ln_nor_cobertura = NEW.ln_cobertura/3.64;
  END IF;
  -- Logaritmo natural normalizado de pobresa
  IF ( (NEW.ln_pobresa/4.55) > 1 ) THEN
    SET NEW.ln_nor_pobresa = 1;
  ELSE
    SET NEW.ln_nor_pobresa = NEW.ln_desagrega/4.55;
  END IF;
  -- Logaritmo natural normalizado de desagregacion
  IF ( (NEW.ln_desagrega/4.69) > 1 ) THEN
    SET NEW.ln_nor_desagrega = 1;
  ELSE
    SET NEW.ln_nor_desagrega = NEW.ln_desagrega/4.69;
  END IF;
END;;

DELIMITER ;

-- 2017-10-10 10:20:20

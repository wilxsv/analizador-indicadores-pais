delimiter |
CREATE TRIGGER tr_procesa_datos_municipalidad BEFORE INSERT ON ind_municipio
FOR EACH ROW
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
END;
|
-- delimiter;
-- DROP TRIGGER IF EXISTS tr_procesa_datos_municipalidad;
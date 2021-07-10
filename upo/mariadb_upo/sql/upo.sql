DROP DATABASE IF EXISTS upo;
CREATE DATABASE upo;

CREATE USER upousr IDENTIFIED BY 'upopass';
GRANT ALL privileges ON upo.* to upousr;

CREATE TABLE IF NOT EXISTS upo.alumnos (
  id INT NOT NULL AUTO_INCREMENT,
  identificador VARCHAR(45) NOT NULL,
  nombre VARCHAR(45) NULL,
  ape1 VARCHAR(45) NULL,
  ape2 VARCHAR(45) NULL,
  password VARCHAR(45) NULL,
  dni VARCHAR(45) NOT NULL,
  correo VARCHAR(45) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX username_UNIQUE (identificador ASC),
  UNIQUE INDEX legalid_UNIQUE (dni ASC),
  UNIQUE INDEX email_UNIQUE (correo ASC));

CREATE TABLE IF NOT EXISTS upo.asignaturas (
  id INT NOT NULL AUTO_INCREMENT,
  acod VARCHAR(45) NOT NULL,
  description VARCHAR(45) NULL,
  cod VARCHAR(45) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX cod_UNIQUE (cod ASC));

CREATE TABLE IF NOT EXISTS upo.matriculados (
  id INT NOT NULL AUTO_INCREMENT,
  id_alumno INT NULL,
  id_asignatura INT NULL,
  enabled INT NULL,
  PRIMARY KEY (id),
  INDEX fk_matriculados_1_idx (id_asignatura ASC),
  INDEX fk_matriculados_2_idx (id_alumno ASC),
  CONSTRAINT fk_matriculados_1
    FOREIGN KEY (id_asignatura)
    REFERENCES upo.asignaturas (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_matriculados_2
    FOREIGN KEY (id_alumno)
    REFERENCES upo.alumnos (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    


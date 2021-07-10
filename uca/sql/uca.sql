DROP DATABASE IF EXISTS uca;
CREATE DATABASE uca;

CREATE USER ucausr IDENTIFIED BY 'ucapass';
GRANT ALL privileges ON uca.* to ucausr;

CREATE TABLE IF NOT EXISTS uca.alumnos (
  id INT NOT NULL AUTO_INCREMENT,
  cod VARCHAR(45) NOT NULL,
  nombre VARCHAR(45) NULL,
  apellidos VARCHAR(45) NULL,
  password VARCHAR(45) NULL,
  dni VARCHAR(45) NOT NULL,
  letra VARCHAR(1) NOT NULL,
  correo VARCHAR(45) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX username_UNIQUE (cod ASC),
  UNIQUE INDEX legalid_UNIQUE (dni ASC),
  UNIQUE INDEX email_UNIQUE (correo ASC));

CREATE TABLE IF NOT EXISTS uca.asignaturas (
  id INT NOT NULL AUTO_INCREMENT,
  acod VARCHAR(45) NOT NULL,
  description VARCHAR(45) NULL,
  cod VARCHAR(45) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX cod_UNIQUE (cod ASC));

CREATE TABLE IF NOT EXISTS uca.matriculados (
  id INT NOT NULL AUTO_INCREMENT,
  id_alumno INT NULL,
  id_asignatura INT NULL,
  status char(1) DEFAULT NULL check (status IN ('a','d')),

  PRIMARY KEY (id),
  INDEX fk_matriculados_1_idx (id_asignatura ASC),
  INDEX fk_matriculados_2_idx (id_alumno ASC),
  CONSTRAINT fk_matriculados_1
    FOREIGN KEY (id_asignatura)
    REFERENCES uca.asignaturas (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_matriculados_2
    FOREIGN KEY (id_alumno)
    REFERENCES uca.alumnos (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

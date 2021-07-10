INSERT INTO uca.alumnos(cod, nombre, apellidos, password, dni, letra, correo)
        VALUES('juan.perez', 'Juan', 'Perez Martin', 'user1', '56128914', 'K', 'juan.perez@uca.es');

INSERT INTO uca.alumnos(cod, nombre, apellidos, password, dni, letra, correo)
        VALUES('alvaro.gomez', 'Alvaro', 'Gomez Martin', 'user2' , '23081274', 'L', 'alvaro.gomez@upo.es');
        
INSERT INTO uca.matriculados(id_alumno, status) VALUES (1, 'a');
INSERT INTO uca.matriculados(id_alumno, status) VALUES (2, 'a');

INSERT INTO uca.asignaturas(acod, cod) VALUES('5021339', '5021339');
INSERT INTO uca.asignaturas(acod, cod) VALUES('5021340', '5021340');
INSERT INTO uca.asignaturas(acod, cod) VALUES('5021341', '5021341');

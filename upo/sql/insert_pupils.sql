INSERT INTO upo.alumnos(identificador, nombre, ape1, ape2, password, dni, correo)
        VALUES('sara.marquez', 'Sara', 'Marquez', 'Lopez', 'user3', '12563108J', 'sara.marquez@upo.es');

INSERT INTO upo.alumnos(identificador, nombre, ape1, ape2, password, dni, correo)
        VALUES('marta.santos', 'Marta', 'Santos', 'Garcia', 'user4', '10437984H', 'marta.santos@upo.es');
        
INSERT INTO upo.matriculados(id_alumno, enabled) VALUES (1, 1);
INSERT INTO upo.matriculados(id_alumno, enabled) VALUES (2, 1);

INSERT INTO upo.asignaturas(acod, cod) VALUES('5021336', '5021336');
INSERT INTO upo.asignaturas(acod, cod) VALUES('5021337', '5021337');
INSERT INTO upo.asignaturas(acod, cod) VALUES('5021338', '5021338');

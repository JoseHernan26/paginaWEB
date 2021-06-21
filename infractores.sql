SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
DROP DATABASE IF EXISTS `infractores`;
CREATE DATABASE `infractores` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `infractores`;

-- Estructura de la tabla Personas:
CREATE TABLE Personas (
	P_Dni integer NOT NULL AUTO_INCREMENT,
    P_Nombre varchar(50) NOT NULL,
    P_Apellido varchar(50) NOT NULL,
    P_Sexo ENUM('M','F',' ') NOT NULL,
    P_CantDeudas integer NULL DEFAULT 0,
    P_IdDistrito integer NOT NULL,
    PRIMARY KEY (P_Dni,P_Sexo)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Estructura de la tabla Distritos:
--
CREATE TABLE Distritos (
	D_id integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
	D_Nombre varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Estructura de la tabla Mesa_Votacion:
--
CREATE TABLE Mesa_Votacion (
	Mv_id integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Mv_fecha date NOT NULL,
	Mv_Tipo varchar(50) NOT NULL,
	Mv_idDistrito integer NOT NULL,
FOREIGN KEY (Mv_idDistrito) REFERENCES Distritos (D_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Estructura de la tabla Mesa_Persona:
--
CREATE TABLE Mesa_Persona (
	Mp_Mv_id integer NOT NULL,
	Mp_P_Dni integer NOT NULL,
	Mp_Estado varchar(60) NOT NULL,
PRIMARY KEY (Mp_Mv_id, Mp_P_Dni),	
FOREIGN KEY (Mp_P_Dni) REFERENCES Personas (P_Dni),
FOREIGN KEY (Mp_Mv_id) REFERENCES Mesa_Votacion (Mv_id)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Estructura de la tabla Multas_Persona:
--
CREATE TABLE Multas_Persona (
	MuP_Mv_id integer AUTO_INCREMENT NOT NULL,
	MuP_P_Dni integer NOT NULL,
	MuP_Monto integer NOT NULL,
	MuP_Estado varchar(50) NULL DEFAULT NULL,
	PRIMARY KEY (MuP_Mv_id,MuP_P_Dni),
	FOREIGN KEY (MuP_P_Dni) REFERENCES Personas (P_Dni),
	FOREIGN KEY (MuP_Mv_id) REFERENCES Mesa_Votacion(Mv_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- inserts : INSERT INTO distritos VALUES (1,'capital')
--
INSERT INTO Distritos VALUES (1,'Capital Federal');
INSERT INTO Distritos VALUES (2,'Buenos Aires');
INSERT INTO Distritos VALUES (3,'Catamarca');
INSERT INTO Distritos VALUES (4, 'Cordoba');
INSERT INTO Distritos VALUES (5, 'Corrientes');
INSERT INTO Distritos VALUES (6,'Chaco');
INSERT INTO Distritos VALUES (7,'Chubut');
INSERT INTO Distritos VALUES (8,'Entre Rios');
INSERT INTO Distritos VALUES (9,'Formosa');
INSERT INTO Distritos VALUES (10, 'Jujuy');
INSERT INTO Distritos VALUES (11,'La Pampa');
INSERT INTO Distritos VALUES (12,'La Rioja');
INSERT INTO Distritos VALUES (13,'Mendoza');
INSERT INTO Distritos VALUES (14,'Misiones');
INSERT INTO Distritos VALUES (15,'Neuquen');
INSERT INTO Distritos VALUES (16,'Rio Negro');
INSERT INTO Distritos VALUES (17,'Salta');
INSERT INTO Distritos VALUES (18,'San Juan');
INSERT INTO Distritos VALUES (19, 'San Luis');
INSERT INTO Distritos VALUES (20, 'Santa Cruz');
INSERT INTO Distritos VALUES (21, 'Santa Fe');
INSERT INTO Distritos VALUES (22, 'Santiago del Estero');
INSERT INTO Distritos VALUES (23, 'Tucuman');
INSERT INTO Distritos VALUES (24, 'Tierra del Fuego');
INSERT INTO Distritos VALUES (25, 'Argentinos en el Exterior');

--
-- inserts into Personas
--
INSERT INTO Personas VALUES (11111111, 'Juana ','Primero', 'F',0 ,18);
INSERT INTO Personas VALUES (11111112, 'Juana ','Segundo','F',0,18);
INSERT INTO Personas VALUES (11111113, 'Juana' ,'Tercero','F',0,18);
INSERT INTO Personas VALUES (11111114, 'Juana', 'Cuarto','F',0,18);
INSERT INTO Personas VALUES (11111115,'Juana', 'Quinto','F',0,18);
INSERT INTO Personas VALUES (11111116,'Juan', 'Sexto', 'M',0,18);
INSERT INTO Personas VALUES (11111117,'Juan' , 'Septimo', 'M',0,18);
INSERT INTO Personas VALUES (11111118,'Juan', 'Octavo','M',0,18);
INSERT INTO Personas VALUES (11111119, 'Juan' ,'Noveno', 'M',0,18);

--
-- inserts into Mesa_Votacion
--
INSERT INTO Mesa_Votacion VALUES (1,'2019-10-27','Generales 2019',18);
INSERT INTO Mesa_Votacion VALUES (2,'2019-08-11','Primarias 2019',18);
INSERT INTO Mesa_Votacion VALUES (3,'2017-10-22','Generales 2017',18);
INSERT INTO Mesa_Votacion VALUES (4,'2017-08-13','Primarias 2017',18);
INSERT INTO Mesa_Votacion VALUES (5,'2015-11-22', 'Balotaje 2015',18);
INSERT INTO Mesa_Votacion VALUES (6,'2015-08-09','Generales Nacionales 2015',18);
INSERT INTO Mesa_Votacion VALUES (7,'2013-10-27','Primarias Nac. 2015',18);
INSERT INTO Mesa_Votacion VALUES (8,'2013-08-11','Generales 2013',18);

--
-- inserts into Mesa_Persona
--
INSERT INTO Mesa_Persona VALUES (1,11111111,'PRESENTE');
INSERT INTO Mesa_Persona VALUES (2,11111112,'PRESENTE');
INSERT INTO Mesa_Persona VALUES (3,11111113,'PRESENTE');
INSERT INTO Mesa_Persona VALUES (4,11111114,'PRESENTE');
INSERT INTO Mesa_Persona VALUES (5,11111115,'PRESENTE');
INSERT INTO Mesa_Persona VALUES (6,11111116,'PRESENTE');
INSERT INTO Mesa_Persona VALUES (7,11111117,'PRESENTE');
INSERT INTO Mesa_Persona VALUES (8,11111118,'PRESENTE');

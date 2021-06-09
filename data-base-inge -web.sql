SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
DROP DATABASE IF EXISTS `bd-base-datos-ing web-21`;
CREATE DATABASE `bd-base-datos-ing web-21` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd-base-datos-ing web-21`;

-- Estructura de la tabla Personas:
CREATE TABLE Personas (
	P_Dni integer NOT NULL,
    P_Nombre varchar(50) NOT NULL,
    P_Apellido varchar(50) NOT NULL,
    P_Sexo varchar(60) NOT NULL,
    P_CantDeudas integer NULL DEFAULT 0,
    P_IdDistrito integer NOT NULL,
    PRIMARY KEY (P_Dni,P_Sexo)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Estructura de la tabla Distritos:
--
CREATE TABLE Distritos (
	D_id integer NOT NULL PRIMARY KEY,
	D_Nombre varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Estructura de la tabla Mesa_Votacion:
--
CREATE TABLE Mesa_Votacion (
	Mv_id integer NOT NULL PRIMARY KEY,
	Mv_fecha timestamp NOT NULL,
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
	MP_Estado varchar(60) NOT NULL,
PRIMARY KEY (Mp_Mv_id, Mp_P_Dni),	
FOREIGN KEY (Mp_P_Dni) REFERENCES Personas (P_Dni),
FOREIGN KEY (Mp_Mv_id) REFERENCES Mesa_Votacion (Mv_id)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Estructura de la tabla Multas_Persona:
--
CREATE TABLE Multas_Persona (
	MuP_Mv_id integer NOT NULL,
	MuP_P_Dni integer NOT NULL,
	MuP_Monto integer NOT NULL,
	MuP_Estado varchar(50) NULL DEFAULT NULL,
	PRIMARY KEY (MuP_Mv_id,MuP_P_Dni),
	FOREIGN KEY (MuP_P_Dni) REFERENCES Personas (P_Dni),
	FOREIGN KEY (MuP_Mv_id) REFERENCES Mesa_Votacion(Mv_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


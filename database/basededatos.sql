CREATE DATABASE agenda;
USE dbagenda;

-- TABLAS AGENDAS
CREATE TABLE Contactos (
  id_contacto 	INT NOT NULL AUTO_INCREMENT,
  nombre 	VARCHAR(50) NOT NULL,
  apellido 	VARCHAR(50) NOT NULL,
  email 	VARCHAR(100) NOT NULL,
  telefono 	VARCHAR(20) NOT NULL,
  direccion 	VARCHAR(100) NOT NULL,
  ciudad        VARCHAR(50),
  id_Categoria 	INT,
  PRIMARY KEY (id_Contacto),
  FOREIGN KEY (id_Categoria) REFERENCES Categorias(id_Categoria)
)ENGINE = INNODB;
INSERT INTO Contactos (nombre, apellido, email, telefono, direccion, ciudad) VALUES 
('Tomas', 'Ortiz Loza', 'ortizl@gmail.com', '984453672', 'Centro Poblado La Victoria', 'sunampe', NULL),
('Fernado', 'Ortiz Marcelo', 'casper@gmail.com', '986473645', 'Calle Huascar', 'sunampe', NULL),
('Yohan', 'Sanchez Marcelo', 'cocan@gmail.com', '985423017',  'av Santa Rosa', 'sunampe', NULL),
('Didier', 'Huasasquiche Levano', 'dier@gmail.com','957436987', 'av Paraiso', 'sunampe', NULL),
('Emersson', 'Ortiz Jacobo', 'ortizjacobo25@gmail.com', '986143579', 'calle Miguel Grau', 'sunampe', NULL);
      
SELECT * FROM Contactos;
  
CREATE TABLE Compañias 
(
  id_Compañia   INT NOT NULL AUTO_INCREMENT,
  nombre        VARCHAR(50) NOT NULL,
  direccion     VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_Compañia)
)ENGINE = INNODB;

CREATE TABLE Categorias (
  id_Categoria           INT NOT NULL AUTO_INCREMENT,
  nombre_Categoria       VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_Categoria)
)ENGINE = INNODB;

CREATE TABLE notas
(
  id_nota           INT NOT NULL AUTO_INCREMENT,
  descripcion       TEXT NOT NULL,
  fecha             DATE,
  PRIMARY KEY (id_nota)
)ENGINE = INNODB;

CREATE TABLE Compañias_Contactos (
  id_Compañia 	INT NOT NULL,
  id_Contacto 	INT NOT NULL,
  id_categoria	INT NOT NULL

)ENGINE = INNODB;



-- //////////////////////////////////////////////////////////7
-- LISTAR REGISTAR Y ELIMINAR
DELIMITER $$
CREATE PROCEDURE spu_listar_Contactos(

      IN  _nombre          VARCHAR(50),
      IN _apellido         VARCHAR(50),
      IN _email            VARCHAR(100),
      IN _telefono          VARCHAR(20),
      IN _direccion         VARCHAR(100),
      IN _ciudad            VARCHAR(50)
)
BEGIN 
       INSERT INTO cursos (nombre, apellido, email, telefono, direccion, ciudad) VALUES
        (_nombre, _apellido, _email, _telefono, _direccion, _ciudad);

END $$

 DELIMITER $$
CREATE PROCEDURE spu_registrar_contactos(
      IN  _nombre          VARCHAR(50),
      IN _apellido         VARCHAR(50),
      IN _email            VARCHAR(100),
      IN _telefono          VARCHAR(20),
      IN _direccion         VARCHAR(100),
      IN _ciudad            VARCHAR(50)
)
BEGIN 
       INSERT INTO Contactos (nombre, apellido, email, telefono, direccion, ciudad) VALUES
        (_nombre, _apellido, _email, _telefono, _direccion, _ciudad);
END $$

CALL spu_listar_Contactos();
CALL spu_registrar_contactos('Tomas', 'Ortiz Loza', 'ortizl@gmail.com', '984453672', 'Centro Poblado La Victoria', 'sunampe');

DELIMITER $$
CREATE PROCEDURE spu_eliminar_Contacto(IN _id_contacto INT)
BEGIN
  DELETE FROM Contactos WHERE id_contacto = _id_contacto;
END $$

CALL spu_eliminar_Contacto(1);
-- /////////////////////////////////////////////////////////////////////////////////////////7
-- LISTAR REGISTAR ELIMINAR COMPAÑIA
DELIMITER $$
CREATE PROCEDURE spu_listar_compañias()
BEGIN
    SELECT * FROM Compañias;
END $$
CALL spu_listar_compañias();
-- //////////////////////////////////
DELIMITER $$
CREATE PROCEDURE spu_registrar_compañia(
  IN _nombre VARCHAR(50),
  IN _direccion VARCHAR(100)
)
BEGIN
  INSERT INTO Compañias(nombre, direccion)
  VALUES (_nombre, _direccion);
END $$
CALL spu_registrar_compañia('Entel', 'Calle Magnolias')
-- ///////////////////////////////////////////
DELIMITER $$
CREATE PROCEDURE spu_eliminar_Compañia(
    IN _id_Compania INT
)
BEGIN
    DELETE FROM Compañias WHERE id_Compañia = _id_Compania;
END $$
CALL spu_eliminar_Compañia()
-- ///////////////////////////////////////////////////////////////////////////////////
-- listar registrar y eliminar categorias
DELIMITER $$
CREATE PROCEDURE spu_listar_categorias()
BEGIN
    SELECT * FROM Categorias;
END $$
CALL spu_listar_categorias();


DELIMITER $$
CREATE PROCEDURE spu_registrar_categorias(

    IN _nombre VARCHAR(50)
)
BEGIN
    INSERT INTO Categorias(nombre_Categoria) VALUES (_nombre);
END $$
CALL spu_registrar_categorias('Llamadas frencuentes'
                               'llamadas pocos frencuentes');

DELIMITER $$
CREATE PROCEDURE sp_eliminar_categoria(
    IN _idCategoria INT
)
BEGIN
    DELETE FROM Categorias WHERE id_Categoria = _idCategoria;
END $$
CALL spu_eliminar_categoria();
-- ////////////////////////////////////////////////////////////7777
-- REGISTAR LISTAR Y ELIMINAR NOTAS
DELIMITER $$
CREATE PROCEDURE spu_listar_notas()
BEGIN
  SELECT * FROM notas;
END $$
CALL spu_listar_notas();

DELIMITER $$
CREATE PROCEDURE spu_registrar_nota(
    IN _descripcion TEXT,
    IN _fecha DATE
)
BEGIN
    INSERT INTO notas (descripcion, fecha)
    VALUES (_descripcion, _fecha);
END $$
CALL spu_registrar_nota('Esta es una nota de prueba', '2023-04-05');

DELIMITER $$
CREATE PROCEDURE spu_eliminar_nota()
BEGIN
  DELETE FROM notas WHERE id_nota = _id;
END $$
CALL spu_eliminar_nota(id_nota_a_eliminar);
-- /////////////////////////////////////////////////
-- LISTAR REGISTRA Y ELIMINAR
DELIMITER $$
CREATE PROCEDURE spu_listar_Compañias_Contactos()
BEGIN
    SELECT * FROM Compañias_Contactos;
END $$
CALL spu_listar_Compañias_Contactos();
-- 
DELIMITER $$
CREATE PROCEDURE spu_registrar_compañia_contacto(
      IN _id_Compania INT,
      IN _id_Contacto INT,
      IN _id_Categoria INT
)
BEGIN 
       INSERT INTO Compañias_Contactos (id_Compañia, id_Contacto, id_categoria) VALUES
        (_id_Compañia, _id_Contacto, _id_Categoria);
END $$
CALL spu_registrar_compañia_contacto(1, 2, 3);


DELIMITER $$
CREATE PROCEDURE spu_eliminar_Compañia_Contacto(
    IN _id_Compañia INT,
    IN _id_Contacto INT,
    IN _id_Categoria INT
)
BEGIN
    DELETE FROM Compañias_Contactos
    WHERE id_Compañia = _id_Compañia
      AND id_Contacto = _id_Contacto
      AND id_categoria = _id_Categoria;
END $$
CALL spu_eliminar_Compañia_Contacto();

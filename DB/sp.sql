USE `tienda`;
DROP procedure IF EXISTS `sp_insertarfabricante`;

USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_insertarfabricante`;
;

DELIMITER $$
USE `tienda`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertarfabricante`(
in nombreI varchar(100)
)
BEGIN
 INSERT INTO fabricante (nombre) VALUE (nombreI);
END$$

DELIMITER ;
;



/* ---------------------------------------------- */

USE `tienda`;
DROP procedure IF EXISTS `sp_insertarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_insertarProducto (
in nomProductoI varchar(100),
in costoProductoI double,
in codigoFabricanteI int
)
BEGIN
	INSERT INTO producto (nombre, precio, codigo_fabricante) 
    VALUE (nomProductoI, costoProductoI, codigoFabricanteI);
END$$

DELIMITER ;



/* ----------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_mostrarfabricantes`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE `sp_mostrarfabricantes`()
BEGIN
SELECT * FROM fabricante;
END$$

DELIMITER ;
/* --------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_eliminarFabricante`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_eliminarFabricante (
IN codigoD INT
)
BEGIN
DELETE FROM fabricante WHERE codigo = codigoD;

END$$

DELIMITER ;

/* --------------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_ediarFabricante`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_ediarFabricante (
IN nombreU VARCHAR(100),
IN codigoU INT
)
BEGIN
UPDATE fabricante 
                     SET nombre = nombreU
                     WHERE codigo = codigoU;
END$$

DELIMITER ;
/* --------------------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_edicionFabricante`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_edicionFabricante (
IN codigoW INT
)
BEGIN
SELECT * FROM fabricante WHERE codigo =codigoW ;
END$$

DELIMITER ;
/* ------------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_mostrarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_mostrarProducto ()
BEGIN
SELECT producto.codigo, producto.nombre, producto.precio, fabricante.nombre AS fabricante
      FROM producto
      INNER JOIN fabricante
      ON producto.codigo_fabricante = fabricante.codigo ORDER BY producto.codigo ASC;
END$$

DELIMITER ;
/* ---------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_eliminarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_eliminarProducto (
IN codigoProductoD INT
)
BEGIN
DELETE FROM producto WHERE codigo = codigoProductoD;
END$$

DELIMITER ;
/* ------------------------------------------------------ */
USE `tienda`;
DROP procedure IF EXISTS `sp_editarProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_editarProducto(
IN nombreP VARCHAR(100),
IN precioP VARCHAR(100),
IN codigo_fabricanteP VARCHAR(100),
IN codigoP INT
)
BEGIN
 UPDATE producto 
    SET nombre = nombreP, precio = precioP, codigo_fabricante = codigo_fabricanteP 
    WHERE codigo = codigoP;
END$$

DELIMITER ;
/* ---------------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_edicionProducto`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_edicionProducto (
IN codigoM int
)
BEGIN
SELECT * FROM producto WHERE codigo =codigoM;
END$$

DELIMITER ;



/* ------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_mostrarUsuario`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE  sp_mostrarUsuario(

)
BEGIN
SELECT * FROM form;
END$$

DELIMITER ;

/* ------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_insertarUsuario`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_insertarUsuario (
IN nombrEI VARCHAR(20),
IN apellidoPaternoI VARCHAR(20),
IN apellidoMaternoI VARCHAR(20),
IN telefonoI BIGINT(20),
IN correoI VARCHAR(20),
IN usuarioI VARCHAR(20),
IN passI VARCHAR(20)
)
BEGIN
 INSERT INTO form (nombre,apellidoPaterno,apellidoMaterno,telefono,correo,usuario,pass)
     VALUE (nombrEI,apellidoPaternoI, apellidoMaternoI, telefonoI, correoI,usuarioI,passI);
END$$

DELIMITER ;
/* ------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_eliminarUsuario`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_eliminarUsuario (
IN codigoUsuarioD INT
)
BEGIN
DELETE FROM form WHERE codigo = codigoUsuarioD;
END$$

DELIMITER ;


/* -------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_edicionUsuario`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_edicionUsuario (
IN codigoUsuarioW INT
)
BEGIN
 SELECT * FROM form WHERE codigo = codigoUsuarioW;
END$$

DELIMITER ;
/* ---------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_editarUsuario`;

DELIMITER $$
USE `tienda`$$
CREATE PROCEDURE sp_editarUsuario (
IN nomU varchar(20),
IN apellidopaU varchar(20),
IN apellidomaU varchar(20),
IN telefonoRegistroU bigint(10),
IN correoRegistroU varchar(30),
IN usuarioRegistroU varchar(20),
IN passRegistroU varchar(20),
IN codigoRrgistroU int
)
BEGIN
UPDATE form 
SET nombre = nomU, apellidoPaterno = apellidopaU,
apellidoMaterno = apellidomaU,
telefono =  telefonoRegistroU, correo = correoRegistroU, usuario = usuarioRegistroU, pass = passRegistroU
WHERE codigo = codigoRrgistroU;
END$$

DELIMITER ;

/* ---------------------------------------------------- */
USE `tienda`;
DROP procedure IF EXISTS `sp_login`;

USE `tienda`;
DROP procedure IF EXISTS `tienda`.`sp_login`;
;

DELIMITER $$
USE `tienda`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login`(
IN correoW varchar(100)
)
BEGIN
 SELECT * FROM form 
                 WHERE correo = correoW;
END$$

DELIMITER ;
;




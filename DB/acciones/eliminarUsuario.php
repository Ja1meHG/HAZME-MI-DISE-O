<?php

include('../conec.php');

$codigoUsuario = $_GET['id'];

/* $eliminarUsuario = "DELETE FROM form WHERE codigo = '$codigoUsuario'"; */

$eliminarUsuario = "CALL sp_eliminarUsuario('$codigoUsuario')";

$resultado = mysqli_query($conexion, $eliminarUsuario);

header('Location: ../usuario.php');

?>
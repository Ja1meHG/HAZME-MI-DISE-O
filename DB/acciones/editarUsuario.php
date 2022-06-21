<?php

include('../conec.php');
$codigo = $_POST['id'];
$nombrE = $_POST ['nombrE'];
$apellidoPaterno = $_POST ['apellidoPaterno'];
$apellidoMaterno = $_POST ['apellidoMaterno'];
$telefono = $_POST ['telefono'];
$correo = $_POST ['correo'];
$usuario = $_POST ['usuario'];
$pass = $_POST ['pass'];

print_r($_GET);

/* $editarUsuario = "UPDATE form 
                     SET nombre = '$nombrE', apellidoPaterno = '$apellidoPaterno',
                     apellidoMaterno = '$apellidoMaterno',
                     telefono = '$telefono' , correo = '$correo', usuario = '$usuario' , pass = '$pass'
                     WHERE codigo = '$codigo'";
 */

$editarUsuario = "CALL sp_editarUsuario('$nombrE','$apellidoPaterno','$apellidoMaterno','$telefono', '$correo','$usuario','$pass','$codigo')";

$resultado = mysqli_query($conexion, $editarUsuario);

header('Location: ../usuario.php');

?>
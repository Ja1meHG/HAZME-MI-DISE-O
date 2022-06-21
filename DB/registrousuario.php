<?php

include('conec.php');
if(isset($_POST['enviar'])){

   
    $nombrE = $_POST ['nombrE'];
    $apellidoPaterno = $_POST ['apellidoPaterno'];
    $apellidoMaterno = $_POST ['apellidoMaterno'];
    $telefono = $_POST ['telefono'];
    $correo = $_POST ['correo'];
    $usuario = $_POST ['usuario'];
    $pass = $_POST ['pass'];

   /*  $insertardatos = "INSERT INTO form (nombre,apellidoPaterno,apellidoMaterno,telefono,correo,usuario,pass)
     VALUE ('$nombrE','$apellidoPaterno', '$apellidoMaterno', '$telefono', '$correo','$usuario','$pass')"; */

     $insertardatos = "CALL sp_insertarUsuario('$nombrE','$apellidoPaterno', '$apellidoMaterno', '$telefono', '$correo','$usuario','$pass')";

    $resultado = mysqli_query ($conexion,$insertardatos);

    if(!$resultado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}   
header('Location: usuario.php');
?>  

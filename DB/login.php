<?php

    include('conec.php');

    //print_r($_POST);

    $email = $_POST["email"];
    $password = $_POST["password"];

   /*  $consulta = "SELECT * FROM form 
                 WHERE correo = '$email'"; */

                 $consulta = "CALL sp_login('$email')";

    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_array($resultado);

    $respuesta = ''; //variable de comprobación

    if(sizeof($fila) > 0){
        if($fila["pass"] == $password){
            $respuesta = 1;
        }else{
            $respuesta = "La contraseña no coincide";
        }
    }else{
        $respuesta = "Email no encontrado";  
    }

    if($respuesta==1){

        header('Location: dashboard.php');

    }else{

        header('Location: index.html');

    }

?>

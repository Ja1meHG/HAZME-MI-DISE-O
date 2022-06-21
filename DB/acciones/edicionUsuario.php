<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
    <title>Editar Usuario</title>
</head>
<body>

    <?php
        include('../conec.php');
        $id = $_GET['id'];
       /*  $consulta = "SELECT * FROM form WHERE codigo ='$id';"; */
       $consulta = "CALL sp_edicionUsuario('$id')";
        $resultado = mysqli_query($conexion, $consulta);
        $fila =  mysqli_fetch_array($resultado);
        print_r($_GET);
    ?>

   ;

    <form action="editarUsuario.php" method="POST">
        <div>
            <input type="hidden" class="form-control" name="id" value="<?php echo $fila["codigo"]?>">
            
        </div> 
        <div class="mb-3">
            <label class="from-lable">Ingrese su Nombre</label>
            <input type="text" class="form-control" name="nombrE" value="<?php echo $fila["nombre"]?>">
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su Apellido Paterno</label>
            <input type="text" class="form-control" name="apellidoPaterno" value="<?php echo $fila["apellidoPaterno"]?>">
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su Apellido Materno </label>
            <input type="text" class="form-control" name="apellidoMaterno" value="<?php echo $fila["apellidoMaterno"]?>">
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese un nuevo Numero Telefonico</label>
            <input type="number" class="form-control" name="telefono" value="<?php echo $fila["telefono"]?>">
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su nuevo Correo Electronico </label>
            <input type="text" class="form-control" name="correo" value="<?php echo $fila["correo"]?>">
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su nombre de usuario </label>
            <input type="text" class="form-control" name="usuario" value="<?php echo $fila["usuario"]?>">
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su nueva Contraseña</label>
            <input type="text" class="form-control" name="pass" value="<?php echo $fila["pass"]?>">
        </div>

        <div>
            <input type="hidden" class="form-control" name="id" value="<?php echo $fila["codigo"]?>"/>
            
        </div> 



        <button type="submit" name="enviar" class="btn btn-primary" value="Guardar cambios">
        Editar Usuario
        </button>
        
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
</body>
</html>
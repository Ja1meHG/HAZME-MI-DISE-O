<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
    <title>usuario</title>
</head>
<body>
    <h3>Registrar usuarios</h3>

    <a href="usuario.php">usuario</a>
  <a href="fabricantes.php">fabricantes</a>
  <a href="productos.php">productos</a>

    <form action="registrousuario.php" method="POST">

        <div class="mb-3">
            <label class="from-lable">Ingrese su Nombre</label>
            <input type="text" class="form-control" name="nombrE" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su apellido paterno</label>
            <input type="text" class="form-control" name="apellidoPaterno" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su apellido materno </label>
            <input type="text" class="form-control" name="apellidoMaterno" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su telefono</label>
            <input type="number" class="form-control" name="telefono" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su correo electronico </label>
            <input type="text" class="form-control" name="correo" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su nombre de usuario </label>
            <input type="text" class="form-control" name="usuario" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">*Ingrese su contraseña</label>
            <input type="text" class="form-control" name="pass" required/>
        </div>
        
        <input type="submit" name="enviar" value="Registrar Usuario" class="btn btn-primary">
    </form>





    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">apellidopaterno</th>
                <th scope="col">apellidomaterno</th>
                <th scope="col">telefono</th>
                <th scope="col">correo</th>
                <th scope="col">usuario</th>
                <th scope="col">constraseña</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>

        <!--aqui va la base de datos-->



        <tbody>
        <?php
            include('conec.php'); 
            /* $consulta = "SELECT * FROM form"; */
            $consulta = "CALL sp_mostrarUsuario";

            $resultado =mysqli_query($conexion,$consulta);

            while($fila =mysqli_fetch_array($resultado)){

            
            ?>
                <tr>
                <th scope="row"> <?php echo $fila["codigo"] ?></th>
                    <th> <?php echo $fila["nombre"] ?></th>
                    <td> <?php echo $fila["apellidoPaterno"] ?></td>
                    <td> <?php echo $fila["apellidoMaterno"] ?></td>
                    <td> <?php echo $fila["telefono"] ?></td>
                    <td> <?php echo $fila["correo"] ?></td>
                    <td> <?php echo $fila["usuario"] ?></td>
                    <td> <?php echo $fila["pass"] ?></td>


                    <td>
                        <a target="_self" href="acciones/eliminarUsuario.php?id=<?php echo $fila["codigo"]?>">
                        <i class="bi bi-trash text-danger">Eliminar</i>
                    </td>
                    <td>
                        <a target="_self" href="acciones/edicionUsuario.php?id=<?php echo $fila["codigo"]?>">
                        <i class="bi bi-pencil-square">Editar</i>
                    </td>
                <tr>
                    
            <?php } ?>
        </tbody>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
</body>
</html>
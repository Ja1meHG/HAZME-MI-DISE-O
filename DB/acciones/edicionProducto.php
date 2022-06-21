<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
    <title>Editar Producto</title>
</head>
<body>
    
    <?php
    
        include('../conec.php');
        $id = $_GET['id'];
       /*  $consulta = "SELECT * FROM producto WHERE codigo ='$id';"; */
        $consulta = "CALL sp_edicionProducto('$id')";
        $resultado = mysqli_query($conexion, $consulta);
        $fila =  mysqli_fetch_array($resultado);
        print_r($_GET);
    ?>







    <form action="editarProducto.php" method="POST">
        <div class="mb-3">
            <label class="from-lable">Ingresa el nuevo nombre</label>
            <input type="text" class="form-control" name="editarnombre" value="<?php echo $fila["nombre"]?>"/>
        </div>

        

        <div class="mb-3">
            <label class="from-lable">Ingresa el nuevo precio</label>
            <input type="text" class="form-control" name="editarprecio" value="<?php echo $fila["precio"]?>"/>
        </div>

        <div class="mb-3"> 
            <label class="from-lable">nuevo fabricante fabricante</label>
            <select class="form-select" aria-label="Default select example" name="F">



            <?php
            include('../conec.php');
            $consulta2 = "SELECT * FROM fabricante";
            $resultado2 = mysqli_query($conexion,$consulta2);
            while ($fila2 = mysqli_fetch_array($resultado2)) {
                print_r($_GET);
            ?>

            <option value="<?php echo $fila2["codigo"] ?>"><?php echo $fila2["nombre"]?></option>
            <?php } ?>




            </select>
        </div> 

        <div>
            <input type="hidden" class="form-control" name="id" value="<?php echo $fila["codigo"]?>"/>
            
        </div>

    



        <button type="submit" name="enviar" class="btn btn-primary" value="Insertar fabricante">
        Guardar cambios
        </button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</body>
</html>
<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumnos WHERE matricula='$id' ";
$query=mysqli_query($con, $sql);


$row=mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fo.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
     
<div class="container mt-5">
    <form action="update.php" method="POST">

    <input type="hidden" name="matricula" value=" <?php echo $row['matricula']?>" >

    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value=" <?php echo $row['nombre']?>" >
    <input type="text" class="form-control mb-3" name="grupo" placeholder="Grupo" value=" <?php echo $row['grupo']?>" >
    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value=" <?php echo $row['correo']?>" >
    <input type="text" class="form-control mb-3" name="contraseña" placeholder="Contraseña" value=" <?php echo $row['contraseña']?>" >
    <input type="text" class="form-control mb-3" name="comentarios" placeholder="Comentarios" value=" <?php echo $row['comentarios']?>" >

    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
</form>
</div>
</body>
</html>
<?php

include("conexion.php");
$con=conectar();

$sql="SELECT * FROM alumnos";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fo.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  
</head>
  <body>
        <div class="f">
        <div class="  mb-3" >
        <form action="insertar.php" method="POST" >
            <label for="formGroupExampleInput" class="form-label"> <b>Numero de registro:</b></label>
            <input type="text" class="form-control"  name="matricula" placeholder=" (Matricula)">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"><b> Nombre completo: </b></label>
            <input type="text" class="form-control"  name="nombre" placeholder="">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"> <b>Grupo: </b></label>
            <input type="text" class="form-control" name="grupo" placeholder="">
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> <b>Correo electronico:</b></label>
          <input type="email" class="form-control" name="correo" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"> Introduce tu correo electronico</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"> <b>Contraseña: </b></label>
          <input type="password" class="form-control" name="contraseña">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"> Comentarios</label>
            <textarea class="form-control"  name="comentarios" rows="3"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">Insertar</button>
        
    </div>
      </form>


      <div class="col-md-8">
<table class="table">
    <thead class="table-success table-striped">
        <tr>
        <th>matricula</th>
        <th>nombre</th>
        <th>grupo</th>
        <th>correo</th>
        <th>contraseña</th>  
        <th>comentarios</th>
        
        </tr>
       </thead>

       <tbody>

       <?php
       while($row=mysqli_fetch_array($query)){
           ?>

           <tr>
               <th> <?php echo $row ['matricula'] ?> </th>
               <th> <?php echo $row ['nombre'] ?> </th>
               <th> <?php echo $row ['grupo'] ?> </th>
               <th> <?php echo $row ['correo'] ?> </th>
               <th> <?php echo $row ['contraseña'] ?> </th>
               <th> <?php echo $row ['comentarios'] ?> </th>
               <th> <a href="actualizar.php?id=<?php echo $row['matricula']?>" class="btn btn-info" >Editar</a></th>
               <th> <a href="delete.php?id=<?php echo $row['matricula']?>" class="btn btn-danger" >Eliminar</a></th>
               </tr>
               <?php
               }
               ?>
         


</tbody>
</table>

</div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>
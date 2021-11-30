<?php

include("conexion.php");
$con=conectar();

$matricula=$_GET['id'];

$sql="DELETE FROM alumnos WHERE matricula= '$matricula'";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: alumno.php");

}

?>
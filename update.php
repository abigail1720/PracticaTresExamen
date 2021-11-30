<?php

include("conexion.php");
$con=conectar();

$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$grupo=$_POST['grupo'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$comentarios=$_POST['comentarios'];

$sql="UPDATE alumnos SET matricula='$matricula', nombre='$nombre', grupo='$grupo', correo='$correo', contraseña='$contraseña', comentarios='$comentarios'";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: alumno.php");
}

?>
<?php
include("conexion.php");
$con=conectar();

$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$grupo=$_POST['grupo'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$comentarios=$_POST['comentarios'];

$sql="INSERT INTO alumnos VALUES('$matricula','$nombre','$grupo','$correo','$contraseña','$comentarios')";
$query= mysqli_query($con,$sql);

if($query){
    header("Location: alumno.php");

}else{
}
?>

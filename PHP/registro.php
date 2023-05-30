<?php
include_once('database.php');
$N_usuario = $_POST['N_usuario'];
$dirrecion = $_POST['dirrecion'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$conn=conn();
$sql="INSERT INTO usuarios (N_usuario, dirrecion, correo, clave)
VALUES ('$N_usuario','$dirrecion','$correo','$clave')";
$resul = mysqli_query($conn, $sql)or trigger_error("Query Failed! SQL- Error:".mysqli_error($conn),E_USER_ERROR);
echo "$sql";
header("location: ../HTML/inicio.html");
?>
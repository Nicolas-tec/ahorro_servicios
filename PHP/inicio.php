<?php
$dbhost= "localhost:3310";
$dbuser= "root";
$dbpass= "";
$dbname= "ahorro";
$conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("no hay conexion: ".mysqli_connect_error());
}
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '".$correo."' and clave = '".$clave."'");
$nr = mysqli_num_rows($query);
if($nr == 1)
{
    header("location: ../HTML/pagina.html");
}
else if($nr == 0)
{
    echo "acceso denegado";
}
?>

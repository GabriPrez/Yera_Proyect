<?php 
include('conexion.php');
if(isset($_POST["submit"])){
    $nombre=$_POST["nombre"];
    $sql = "INSERT INTO tabla1 (nombre) VALUES ('$nombre')";
    $con->query($sql);
    echo "success";

    echo "<a href='index.php'>volver atrás</a>";
} 


?>


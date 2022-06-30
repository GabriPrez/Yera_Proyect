<?php
$conexion = include 'conexion.php';
function insertar($nombre){
    if(isset($_POST["submit"])){
    $nombre=$_POST["nombre"];
    $result = mysqli_query($conexion,"INSERT INTO table1 (nombre) VALUES ($nombre)");
    echo "success";}
    print_r($_POST);
}
?>
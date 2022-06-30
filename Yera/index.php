<!-- 1 conexion base de datos
2consulta base de datos
3insertar base de datos
4borrar base de datos
5modificar base de datos -->
<html lang="es">
<head>
<title>CRUD de PHP con MySQLi</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
        include("conexion.php");
        include("insert.php");
        include("update.php");
        include("delete.php");
        include("abm.php");

        $conexion = conectar();
        if(!$conexion){
            echo "<h1> error en la db </h1>";
            exit();
        }
        $result=mysqli_query($conexion,"select * from tabla1");
    ?>
    <!-- Escribimos título de las tablas --> 
    <table border=0 cellspacing=2 cellpadding=1> 
        <TR> 
            <TD><b>&nbsp;ID&nbsp;</b></TD> 
            <TD><b>&nbsp;Nombre&nbsp;</b></TD> 
        </TR>
    <?php
    // Escribimos los datos
        while($fila = mysqli_fetch_array($result)) { 
            echo "<TR>";
            echo "<TD>&nbsp;" . $fila["id"] . "</TD>"; 
            echo "<TD>&nbsp;" . $fila["nombre"] . "</TD>"; 
            echo "</TR>"; 
        } 
    //liberamos memoria que ocupa la consulta... 
    mysqli_free_result($result); 
    //cerramos la conexión con el motor de BD 
    mysqli_close($conexion);
    ?>
    </table>
    <a href="abm.php?accion=insert">[INSERTAR]</a>
    <a href="abm.php?accion=update">[MODIFICAR]</a>
    <a href="abm.php?accion=delete">[BORRAR]</a>

</body>
</html>

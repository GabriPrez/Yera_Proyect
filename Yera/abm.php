<?php
include 'insert.php';
// include 'update.php';
// include 'delete.php';
?>
<?php
if($_GET['accion'] == 'insert'){
    echo"<h3>Inserte nombre</h3>";
}
// if($_GET['accion'] == 'update'){
//     echo"<h3>Modifique nombre</h3>";
// }
// if($_GET['accion'] == 'delete'){
//     echo"<h3>Elimine usuario</h3>";
// }
?>

<?php
// Realizar alta
if($_GET['accion'] == 'insert'){
    echo "<form method='post' action=''>
    <input type='text' name='nombre'>
    <input type='submit' name='submit' value='Enviar'>
    </form>";
}
?>

<?php
// Modificar usuario
if($_GET['accion'] == 'update'){
    echo "<form method='post' action=''>
    <input type='text' name='nombre'>
    <input type='button' name='enviar' value='Enviar'>
    </form>";
}
?>
<?php
// Eliminar usuario
// if($_GET['accion'] == 'delete'){
    // echo "<form method='post' action=''>
    // <input type='text' name='nombre'>
    // <input type='button' name='enviar' value='Enviar'>
    // </form>";
}
?>
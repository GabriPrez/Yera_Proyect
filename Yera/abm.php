
<?php
if($_GET['accion'] == 'insert'){
    echo"<h3>Inserte nombre</h3>";
}
?>

<?php
// Realizar alta
if($_GET['accion'] == 'insert'){
    echo "<form method='post' action='insert.php'>
    <input type='text' name='nombre'>
    <input type='submit' name='submit' value='Enviar'>
    </form>";
}
?>

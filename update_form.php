<?php
$Id=$_GET['Id'];
$mysqli = new mysqli("localhost", "root", "", "test");
$resultado = $mysqli->query("select * from test where Id=" .$Id);

$usuario = $resultado->fetch_assoc();

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>

<body>
    <form action="update_test.php">
        <input type="number" name="Id" placeholder="Id" value="<?=$usuario['Id']?>" readonly>
        <input type="text" name="Nombre" placeholder="Nombre"  value="<?=$usuario['Nombre']?>">
        <input type="text" name="Contrasenia" placeholder="Contrasenia"  value="<?=$usuario['Contrasenia']?>">  
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
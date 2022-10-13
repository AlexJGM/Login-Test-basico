
<?php
$mysqli = new mysqli("localhost", "root", "", "test");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/* Sentencia no preparada */
$resultado = $mysqli->query("SELECT * FROM test");

// mostrar resultado
while ($row = $resultado->fetch_assoc()) {
    echo($row['Id'] . " - " . $row['Nombre']  . " - " . $row['Contrasenia']);
    echo '<a href="update_form.php?Id=' . $row['Id'] . '">Modificar</a>';
    echo ' - ';
    echo '<a href="delete_test.php?Id=' . $row['Id'] . '">Eliminar</a>';
    //printf("%s - %s\n", $row["id"], $row["nombre"]);
    echo "<br>";
    
}

/* se recomienda el cierre explícito */
$mysqli->close();

?>
<br>
<a href="insert_form.php">Anadir alumno</a>
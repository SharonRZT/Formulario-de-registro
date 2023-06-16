<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboratorio_3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    /*echo "<h2>Usuarios Registrados:</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["nombre"] . " " . $row["apellido1"] . " " . $row["apellido2"] . " - " . $row["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron usuarios registrados.";
}

$conn->close();*/

    echo "<h2>Usuarios Registrados:</h2>";    
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Primer apellido</th><th>Segundo apellido</th><th>Email</th><th>Login</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellido1"]. "</td><td>" . $row["apellido2"]. "</td><td>" . $row["email"]. "</td><td>" . $row["login"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
?>
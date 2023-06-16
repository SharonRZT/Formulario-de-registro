<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Laboratorio Samsung</title>
</head>
<body>
    <div class="container">
        <form id="form" class="form" action="formulario.php" method="post">

            <div class="header">
                 <h1> Formulario de Registro </h1>
            </div>

            <div class="form-control">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="" />
                <i class="icon-error bi bi-x-circle-fill"></i>
                <i class="icon-success bi bi-check-circle-fill"></i>
                <small></small>
            </div>

            <div class="form-control">
                <label for="apellido1">Primer Apellido</label>
                <input type="text" id="apellido1" name="apellido1" value="" />
                <i class="icon-error bi bi-x-circle-fill"></i>
                <i class="icon-success bi bi-check-circle-fill"></i>
                <small></small>
            </div>

            <div class="form-control">
                <label for="apellido2">Segundo Apellido</label>
                <input type="text" id="apellido2" name="apellido2" value="" />
                <i class="icon-error bi bi-x-circle-fill"></i>
                <i class="icon-success bi bi-check-circle-fill"></i>
                <small></small>
            </div>

            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="" />
                <i class="icon-error bi bi-x-circle-fill"></i>
                <i class="icon-success bi bi-check-circle-fill"></i>
                <small></small>
            </div>

            <div class="form-control">
                <label for="login">Login</label>
                <input type="text" id="login" name="login" value="" />
                <i class="icon-error bi bi-x-circle-fill"></i>
                <i class="icon-success bi bi-check-circle-fill"></i>
                <small></small>
            </div>

            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="" />
                <i class="icon-error bi bi-x-circle-fill"></i>
                <i class="icon-success bi bi-check-circle-fill"></i>
                <small></small>
            </div>

            <button name="submit" type="submit">ENVIAR</button>
            
        </form>
    </div>
    <br>
    <a href="consulta.php">Consulta</a>
    <script src="script.js"></script>
</body>
</html>

<?php

function validar_campos($nombre, $apellido1, $apellido2, $email, $login, $password)
{
    if (!preg_match("/^[a-zA-Z\s]*$/", $nombre) || !preg_match("/^[a-zA-Z\s]*$/", $apellido1) || !preg_match("/^[a-zA-Z\s]*$/", $apellido2)) {
        return "Nombre y apellidos deben contener solo letras y espacios.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "El formato de correo electrónico no es válido.";
    }

    if (strlen($password) < 4 || strlen($password) > 8) {
        return "La contraseña debe tener entre 4 y 8 caracteres.";
    }

    return "";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboratorio_3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$email = $_POST["email"];
$login = $_POST["login"];
$password = $_POST["password"];

$validacion = validar_campos($nombre, $apellido1, $apellido2, $email, $login, $password);

if ($validacion !== "") {
    echo $validacion;
    echo '<br><a href="index.html">Volver al registro</a>';
} else {
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "El email ya está registrado. Por favor, intente con otro email.";
        echo '<a href="index.html">Volver al registro</a>';
   
    } else {
        $sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, email, login, contraseña)
                VALUES ('$nombre', '$apellido1', '$apellido2', '$email', '$login', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro completado con éxito";
            echo '<br><a href="index.html">Volver al registro</a>';
            echo '<br><a href="consulta.php">Consulta</a>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

}

$conn->close();
?>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "datosusuarios";

 $conn = new mysqli($servername, $username, $passwprd, $dbname);

 if ($conn->connect_error) {
    die("Conexion fallida: ". $conn->connect_error);
 }

 $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

 if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. Usuario creado correctamente";
 }else {
    echo "Error al registrar usuario: " . $conn->error;
 }

 $conn->close();
?>

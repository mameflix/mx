<?php
// Datos de conexión a la base de datos
$servername = "fdb29.awardspace.net"; // Nombre del servidor MySQL (generalmente localhost)
$username = "4612609_gm";     // Tu nombre de usuario de MySQL
$password = "unoydos12";  // Tu contraseña de MySQL
$dbname = "4612609_gm";   // Nombre de tu base de datos

// Crear la conexión usando mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Establecer el conjunto de caracteres a utf8 (opcional pero recomendado)
$conn->set_charset("utf8");

echo "Conexión exitosa a la base de datos";



$conn->close();
?>
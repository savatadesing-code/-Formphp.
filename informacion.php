<?php
// Asegurar que el navegador use UTF-8
header("Content-Type: text/html; charset=UTF-8");

// Captura de datos desde el formulario con método POST
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$salario = $_POST['salario'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];

// Mostrar los datos en pantalla
echo "<h2>Información del Empleado</h2>";
echo "<p><strong>Nombre:</strong> $nombre</p>";
echo "<p><strong>Edad:</strong> $edad</p>";
echo "<p><strong>Dirección:</strong> $direccion</p>";
echo "<p><strong>Salario:</strong> $$salario</p>";
echo "<p><strong>Correo:</strong> $correo</p>";
echo "<p><strong>Cargo:</strong> $cargo</p>";
?>

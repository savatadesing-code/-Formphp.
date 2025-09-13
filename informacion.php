<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $correo = $_POST["correo"];
    $direccion = $_POST["direccion"];
    $cargo = $_POST["cargo"];
    $salario = $_POST["salario"];

    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Edad: " . htmlspecialchars($edad) . "<br>";
    echo "Correo: " . htmlspecialchars($correo) . "<br>";
    echo "Dirección: " . htmlspecialchars($direccion) . "<br>";
    echo "Cargo: " . htmlspecialchars($cargo) . "<br>";
    echo "Salario: " . htmlspecialchars($salario) . "<br>";
} else {
    echo "No se enviaron datos.";
}
?>

<?php
$servername = "localhost";
$username = "root"; // Cambia según tu configuración
$password = ""; // Cambia según tu configuración
$dbname = "inventario_db"; // Asegúrate de que esta base de datos existe

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $itbis = $_POST["itbis"];
    $Minimo = $_POST["Minimo"];
    $Maximo = $_POST["Maximo"];
    $Ubicacion = $_POST["Ubicacion"];


    $sql = "INSERT INTO productos (nombre, categoria, cantidad, precio, Itbis, ganancia, StockMaximo, StockMinimo, Ubicacion) 
    VALUES ('$nombre', '$categoria', '$cantidad', '$precio', '$Itbis', $precio * 1.35, '$Maximo', '$Minimo', '$Ubicacion')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../inventory.php"); // Redirige al inventario
        exit();
    } else {
        echo "Error al guardar: " . $conn->error;
    }
}

$conn->close();
?>

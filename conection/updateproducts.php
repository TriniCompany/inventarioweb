<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $itbis = $_POST["itbis"];

    $sql = "UPDATE productos SET nombre='$nombre', categoria='$categoria', cantidad='$cantidad', precio='$precio', itbis='$itbis' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../inventory.php");
        exit();
    } else {
        echo "Error al actualizar: " . $conn->error;
    }
}

$conn->close();
?>

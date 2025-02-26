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

    $sql = "DELETE FROM productos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../inventory.php");
        exit();
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
}

$conn->close();
?>

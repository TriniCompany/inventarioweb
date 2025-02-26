<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id = $_GET["id"];
$sql = "SELECT * FROM productos WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="css/editproducts.css">
</head>
<body>
    <div class="form-container">
        <h2>Editar Producto</h2>
        <form action="conection/updateproducts.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" value="<?= $row['nombre'] ?>" required>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="Grupo 1" <?= $row['categoria'] == 'Grupo 1' ? 'selected' : '' ?>>Grupo 1</option>
                <option value="Grupo 2" <?= $row['categoria'] == 'Grupo 2' ? 'selected' : '' ?>>Grupo 2</option>
                <option value="Grupo 3" <?= $row['categoria'] == 'Grupo 3' ? 'selected' : '' ?>>Grupo 3</option>
                <option value="Grupo 4" <?= $row['categoria'] == 'Grupo 4' ? 'selected' : '' ?>>Grupo 4</option>
                <option value="Grupo 5" <?= $row['categoria'] == 'Grupo 5' ? 'selected' : '' ?>>Grupo 5</option>
            </select>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" value="<?= $row['cantidad'] ?>" required>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" value="<?= $row['precio'] ?>" step="0.01" required>

            <label for="itbis">Itbis:</label>
            <input type="number" id="itbis" name="itbis" value="<?= $row['Itbis'] ?>" step="0.01" required>

            <button type="submit" class="submit-btn">Actualizar Producto</button>
            <a href="inventory.php">
                <button type="button" class="cancel-btn">Cancelar</button>
            </a>
        </form>
    </div>
</body>
</html>
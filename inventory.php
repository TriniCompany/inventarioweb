<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="css/inventory.css">
</head>
<body>
    <div class="container">
        <h1>Inventario</h1>
        <form action="addinventory.php">
            <button class="btn add">Añadir al Inventario</button>
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Categoría</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Itbis</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["nombre"] ?></td>
                        <td><?= $row["categoria"] ?></td>
                        <td><?= $row["cantidad"] ?></td>
                        <td><?= $row["precio"] ?></td>
                        <td><?= $row["Itbis"] ?></td>
                        <td>
                            <form action="editproducts.php" method="GET" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" class="btn edit">Editar</button>
                            </form>
                            <form action="conection/deleteproducts.php" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" class="btn delete" onclick="return confirm('¿Seguro que deseas eliminar este producto?'); ">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

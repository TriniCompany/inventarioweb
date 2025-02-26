<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/inventory.css">
</head>
<body>
<div class="form-container">
        <h2>Añadir Producto</h2>
        <form action="conection/saveinventory.php" method="POST">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="Grupo 1">Grupo 1</option>
                <option value="Grupo 2">Grupo 2</option>
                <option value="Grupo 3">Grupo 3</option>
                <option value="Grupo 4">Grupo 4</option>
                <option value="Grupo 5">Grupo 5</option>
            </select>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>

            <label for="itbis">Itbis</label>
            <input type="number" id="itbis" name="itbis" step="0.01">
            <button type="submit" class="submit-btn">Añadir Producto</button>
        </form>
        <form action="inventory.php">
            <button class="btn delete">Volver Atras</button>
        </form>
    </div>
</body>
</html>



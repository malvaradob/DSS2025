<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingrese texto</title>
</head>
<body>
    <h2>Ingrese su texto</h2>
    <form action="procesar.php" method="post">
        <label for="texto">Texto:</label>
        <textarea name="texto" id="text" cols="50" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
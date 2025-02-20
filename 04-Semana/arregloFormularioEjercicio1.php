<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Arreglos</title>
</head>

<body>
    <form action="ArregloEjercicio1.php" method="post">
        <table>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                ?>
                <tr>
                    <td>Estudiante <?php echo $i ?></td>
                    <td>
                        <input type="text" name="estudiante<?php echo $i ?>">
                    </td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Enviar" />
                </td>
            </tr>

        </table>
    </form>
</body>

</html>
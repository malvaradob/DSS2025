<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con modularidad</title>
    <link rel="stylesheet" href="page.css">
</head>

<body>

    <?php
    include("header.php");

    include("navegacion.php");

    include("body.php");
    ?>
    <main>
        <section>
            <?php echo $CURSO;
            ?>
        </section>
    </main>

    <?php
    include("footer.php");

    ?>


</body>

</html>
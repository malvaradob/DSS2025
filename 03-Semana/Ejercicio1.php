<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Semana 3</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navEjercicios"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navEjercicios">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="Ejercicio1.php">Ejercicio 1</a>
                        <a class="nav-link" href="Ejercicio2.php">Ejercicio 2</a>
                        <a class="nav-link" href="Ejercicio3.php">Ejercicio 3</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <h1>Ejercicio 1</h1>
                <p>
                    Utilizando HTML cree un formulario que solicite el nombre de un alumno
                    y la nota de un examen. Luego con PHP despliegue el mensaje Aprobado o Reprobado,
                    recuerde para aprobar un examen su nota debe ser mayor o igual a 6.0
                </p>

                <form class="row g-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="calificacion" class="form-label">Ingrese la calificacion final</label>
                        <input type="number" class="form-control" id="calificacion" name="calificacion">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="enviar">Enviar datos</button>
                    </div>
                </form>


                <?php
                // Definiendo validaciones
                if (isset($_POST["enviar"])) {
                    // Definicion de variables que permiten capturar los datos del formulario
                    $nombre = $_POST['nombre'];
                    $calificacion = $_POST['calificacion'];

                    // Validando que la calificacion este en el rango de 0 a 10
                    if ($calificacion >= 0 && $calificacion <= 10) {
                        // Validando el estado de la calificacion
                        if ($calificacion >= 6) {
                            echo "<p class='lead text-success fs-1'>El estudiante $nombre tiene una calificacion $calificacion, por lo tanto esta APROBADO</p>";
                        } else {
                            echo "<p class='lead text-danger fs-1'>El estudiante $nombre tiene una calificacion $calificacion, por lo tanto esta REPROBADO</p>";
                        }
                    } else {
                        echo "<p class='lead text-danger fs-1'>La calificacion ingresada es incorrecta</p>";
                    }

                    echo "VALORES DE LAS VARIABLES: $nombre , $calificacion";

                }


                ?>

            </div>

            <div class="col">

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
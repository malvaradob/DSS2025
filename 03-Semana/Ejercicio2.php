<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 2</title>
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
                        <a class="nav-link active"  href="Ejercicio1.php">Ejercicio 1</a>
                        <a class="nav-link" aria-current="page" href="Ejercicio2.php">Ejercicio 2</a>
                        <a class="nav-link" href="Ejercicio3.php">Ejercicio 3</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <h1>Ejercicio 2</h1>
                <p>
                En una tienda de verduras y frutas, quieren saber el precio final 
                que le cobraran al cliente. Por lo que se le ha pedido a usted 
                como desarrollador web, que diseñe un formulario donde seleccione 
                una fruta, solicite la cantidad a comprar y el precio del producto. 
                Luego calcule el IVA (13%) al producto y muestre el resultado total a pagar. 
                A continuación, se le muestra algunas de las frutas que venden: Manzana, 
                Uva, Pera, Naranja, Cebollas, Zanahorias, Pepino, Berenjena, Piña entre otras.

                </p>

                <form class="row g-3" action="procesar.php" method="post">
                    <div class="col-md-6">
                    <label for="producto" class="form-label">Seleccione un producto</label>    
                    <select name="producto" id="producto" class="form-control">
                            <option value="1">Manzana</option>
                            <option value="2">Uva</option>
                            <option value="3">Pera</option>
                            <option value="4">Naranja</option>
                            <option value="5">Cebolla</option>
                            <option value="6">Zanahorias</option>
                            <option value="7">Pepino</option>
                            <option value="8">Berenjena</option>
                            <option value="9">Piña</option>
                        </select>
                        
                        
                    </div>
                    <div class="col-md-12">
                        <label for="cantidad" class="form-label">Ingrese la cantidad a comprar</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad">
                    </div>
                    <div class="col-md-12">
                        <label for="precio" class="form-label">Ingrese el precio del producto</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="enviar">Enviar datos</button>
                    </div>
                </form>


                

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
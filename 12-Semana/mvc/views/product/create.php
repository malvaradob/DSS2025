<?php include '../views/layout/header.php';?>

<h2>Nuevo producto</h2>
<form action=" index.php?action=store" method="post">
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Precio</label>
        <input type="number" step="0.01" name="price" class="form-control" required>
    </div>
    <button class="btn btn-primary">Guardar Producto</button>
</form>

<?php include '../views/layout/footer.php';?>
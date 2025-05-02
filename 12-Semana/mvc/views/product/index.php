<?php include '../views/layout/header.php';?>
<h2>Listado de Productos</h2>
<a href="index.php?action=create" class="btn btn-success mb-3">Nuevo Producto</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>

    </thead>
    <tbody>

        <?php foreach($products as $p):?>
        <tr>
            <td><?=$p['id']; ?></td>
            <td><?=$p['name']; ?></td>
            <td>$ <?= number_format($p['price'],2) ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $p['id']?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="index.php?action=delete&id=<?= $p['id']?>" class="btn btn-danger btn-sm"
                    onclick="return confirm('¿Desea eliminar el registro?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>

<?php include '../views/layout/footer.php';?>
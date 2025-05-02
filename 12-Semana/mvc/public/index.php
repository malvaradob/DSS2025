<?php
require_once '../controllers/Product.Controller.php';

$controller = new ProductController();

$id = $_GET['id'] ?? null;
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;

    case 'edit':
        $controller->edit($id);
        break;

    case 'update':
        $controller->update($id);
        break;

    case 'delete':
        $controller->delete($id);
        break;

    default:
        $controller->index();
        break;
}

?>
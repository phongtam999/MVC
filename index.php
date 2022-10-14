<?php
// Include database connect
include_once 'db.php';

// Webclient

// echo '<pre>';
// print_r( $_REQUEST );
// die();
if( isset( $_REQUEST['controller'] ) ){
    $controller = $_REQUEST['controller'];
}else{
    $controller = 'product';
}
$controller = ucfirst($controller).'Controller';
// var_dump($controller);
// //ProductController



if( isset( $_REQUEST['page'] ) ){
    $page = $_REQUEST['page'];
}else{
    $page = 'index';
}
include_once "controllers/OrderController.php";
$objController = new OrderController();

switch ($page) {
    case 'index':
        $objController->index();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    case 'show':
        $objController->show();
        break;
    case 'store':
        $objController->store();
        break;
    case 'update':
        $objController->update();
        break;
    default:
        # code...
        break;
}
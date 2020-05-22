<?php

require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "products.php";
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "users.php";
require ENGINE_DIR . "cart.php";

$user = getUserBySession();
if($user) {
    $products = getAllProducts(md5($user['id']));
} else {
    redirect('/login.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = post('removeFromCart');
    if ($id) {
        removeFromCart(md5($user['id']), $id);
        redirect('/cart.php');
    }
}

include VIEWS_DIR . "cart.php";

?>
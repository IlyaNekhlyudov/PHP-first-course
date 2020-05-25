<?php

require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "products.php";
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "users.php";
require ENGINE_DIR . "cart.php";

$user = getUserBySession();
if($user) {
    $products = getProducts();
} else {
    redirect('/login.php');
}

$quantityCart = quantityProducts(md5($user['id']));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = post('addToCart');
    if ($id) {
        if (cookie('cart')) {
            checkProduct(md5($user['id']), $id);
            redirect('/index.php');
        } else {
            addToCart(md5($user['id']), $id);
            redirect('/index.php');
        }
    }
}

include VIEWS_DIR . "products.php";

?>
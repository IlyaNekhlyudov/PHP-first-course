<?php

$user = getUserBySession();
if($user) {
    $products = getProducts();
} else {
    redirect('/auth');
}

$quantityCart = quantityProducts(md5($user['id']));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = post('addToCart');
    if ($id) {
        if (cookie('cart')) {
            checkProduct(md5($user['id']), $id);
            redirect('/');
        } else {
            addToCart(md5($user['id']), $id);
            redirect('/');
        }
    }
}

echo render("products", ['products' => $products, 'quantityCart' => $quantityCart, 'user' => $user]);

?>
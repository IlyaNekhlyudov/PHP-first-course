<?php

$user = getUserBySession();
if($user) {
    $products = getAllProducts(md5($user['id']));
} else {
    redirect('/auth');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = post('removeFromCart');
    if ($id) {
        removeFromCart(md5($user['id']), $id);
        redirect('/cart');
    }
}

echo render("cart", ['products' => $products, 'user' => $user]);

?>
<?php

$user = getUserBySession();
if ($user['admin'] != 0) {
    $orders = getAllOrders();
    $parseProducts = parseProducts($orders);
    echo render("orders", ["orders" => $orders, "parseProducts" => $parseProducts]);
} else {
    redirect('/products');
}

?>
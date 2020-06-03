<?php

function getAllOrders() {
    return queryAll("SELECT * FROM orders WHERE status = 'processed'");
}

function parseProducts($orders) {
    foreach ($orders as $order) {
        $products = explode('|', $order['products']);
        array_pop($products);

        foreach($products as $product) {
            $productParse[] = explode('/', $product);
        }
        
        return $productParse;
    }
}

?>
<?php
require_once ENGINE_DIR . "db.php";

function getProducts() {
    $sql = "SELECT * FROM products ORDER BY popularity DESC";
    return queryAll($sql);
}

function addProduct(string $name, string $image, string $description) {
    $sql = "INSERT INTO products (name, image, description) VALUES ('{$name}', '{$image}', '{$description}')";
    return execute($sql);
}

function getProduct(int $id) {
    $sql = "SELECT * FROM products WHERE id = {$id}";
    return queryOne($sql);
}

function updatePopularity($id) {
    $sql = "UPDATE products SET popularity = popularity + 1 WHERE id = {$id}";
    return execute($sql);
}
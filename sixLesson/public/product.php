<?php

require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
require ENGINE_DIR . "products.php";
require ENGINE_DIR . "review.php";
require ENGINE_DIR . "users.php";

$user = getUserBySession();
if($user) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = post('name');
        $text = post('text');
        $productID = get('id');
        addReview($name, $text, $productID);
        redirect("/product.php?id=" . get('id'));
    }

    if (get('id')) {
        $id = get('id');
        $product = queryOne("SELECT name, image, description, popularity FROM products WHERE id = $id");
        if(isset($product)) {
            $reviews = queryAll("SELECT id, name, text, date FROM reviews WHERE productID = $id");
            updatePopularity($id);
            
            include VIEWS_DIR . "product.php";
            include VIEWS_DIR . "add_review.php";
            include VIEWS_DIR . "review.php";
        } else {
            echo 'Товар не найден.';
            exit();
        }
        
    } else {
        echo 'Товар не найден.';
        exit();
    }
} else {
    redirect('/login.php');
}

?>
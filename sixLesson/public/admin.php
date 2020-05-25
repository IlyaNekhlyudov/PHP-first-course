<?php

require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "upload_image.php";
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "files.php";
require ENGINE_DIR . "products.php";
require ENGINE_DIR . "users.php";
require VENDOR_DIR . "funcImgResize.php";

$user = getUserBySession();
if ($user['admin'] != 0) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $image = uploadImage($_FILES);
        $name = post('name');
        $description = post('description');
        addProduct($name, $image, $description);
        redirect("/admin.php");
    }
    
    include VIEWS_DIR . "addProduct.php";
} else {
    redirect('/index.php');
}


?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $image = uploadImage($_FILES);
        $name = post('name');
        $description = post('description');
        addProduct($name, $image, $description);
        redirect("/admin");
    }
?>
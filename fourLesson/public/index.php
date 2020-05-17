<?php
require_once __DIR__ . '\..\config\main.php';
require VENDOR_DIR . "funcImgResize.php";
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "files.php";
require ENGINE_DIR . "gallery.php";

$mysql = mysqli_connect("127.0.0.1", "root", "root", "gallery");

$menu = [
    "Главная",
    "Каталог",
    "Корзина",
];
$imagesDir = PUBLIC_DIR . "img/";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!file_exists($imagesDir)) {
        mkdir($imagesDir);
    }
    $filename = $imagesDir . $_FILES['my_file']['name'];
    if (uploadFile($filename, 'my_file')) {
        img_resize($filename, $imagesDir . "/small/" . $_FILES['my_file']['name'], 200, 150);

        $filename = addcslashes($filename, '\\');
        $query = "INSERT INTO `images`(`name`, `size`, `url`, `views`)
                VALUES(
                    '{$_FILES['my_file']['name']}',
                    '{$_FILES['my_file'] ['size']}',
                    '{$filename}',
                    '0'
                )";
        mysqli_query($mysql, $query);
    }

    redirect("/");
}
$files = getGalleryFiles($mysql);

//include VIEWS_DIR . "menu.php";
include VIEWS_DIR . "gallery.php";
include VIEWS_DIR . "upload_form.php";
mysqli_close($mysql);
?>
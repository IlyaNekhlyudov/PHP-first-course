<a href='/admin.php' style='color: red;'>Админка</a> <br><br>
<?php

require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "products.php";

$products = getProducts();

include VIEWS_DIR . "products.php";

?>


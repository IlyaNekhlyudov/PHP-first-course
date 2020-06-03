<?php

$user = getUserBySession();
if ($user['admin'] != 0) {
    echo render("admin", []);
} else {
    redirect('/products');
}

?>
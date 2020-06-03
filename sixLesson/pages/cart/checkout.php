<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = post('name');
    $phone = post('phone');
    $address = post('address');
    $email = post('email');
    $user = getUserBySession($login);

    if (orderCreate($user, $name, $email, $phone, $address)) {
        echo 'Заказ оформлен.';
    } else {
        echo 'Произошла ошибка.';
    }
} else {
    redirect('/');
}

?>
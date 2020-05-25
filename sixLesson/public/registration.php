<?php

require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
require ENGINE_DIR . "users.php";
require ENGINE_DIR . "hash.php";

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = post('password');
    $name = post('name');
    
    $login = mysqliEscapeString($login);
    $password = mysqliEscapeString($password);
    $name = mysqliEscapeString($name);
    
    if (!getUserByLogin($login)) {
        
        registrationUser($login, $password, $name);
        $user = getUserByLogin($login);
        session('user_id', $user['id']);
        redirect('/user.php');
    } else {
        echo 'Аккаунт с логином ' . $login . ' уже зарегистрирован. Выберите другой логин.';
    }
}

include VIEWS_DIR . 'registration.php';

?>

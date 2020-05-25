<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
require ENGINE_DIR . "users.php";
require ENGINE_DIR . "hash.php";

session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = post('password');

    $login = mysqliEscapeString($login);
    $user = getUserByLogin($login);

    if($user && $user['password'] == hashPasswd($password)){
        session('user_id', $user['id']);
    } else {
        echo "Пароль не подходит.";
    }
}

if (get('exit')) {
    session('user_id', 'none');
    redirect('/login.php');
}

include VIEWS_DIR . "auth.php";

?>


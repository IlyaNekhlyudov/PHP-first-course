<?php

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
    redirect('/auth');
}

echo render("auth", []);

?>


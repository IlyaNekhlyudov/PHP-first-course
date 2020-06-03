<?php

function getUserByLogin($login) {
    return queryOne("SELECT * FROM users WHERE login = '{$login}'");
}

function getUserLoginByID($id) {
    $login = queryOne("SELECT login FROM users WHERE id = '{$id}'");
    return $login['login'];
}

function getUserBySession() {
    $id = session('user_id');
    return queryOne("SELECT * FROM users WHERE id = '{$id}'");
}

function registrationUser($login, $password, $name) {
    $password = hashPasswd($password);
    return execute("INSERT INTO users (login, password, name) VALUES ('{$login}', '{$password}', '{$name}')");
}

?>
<?php
/**
 * @param string $url
 */

function redirect(string $url): void
{
    header("Location: {$url}");
    exit;
}

function get($name) {
    htmlspecialchars($name);
    return $_GET[$name];
}

function post($name) {
    htmlspecialchars($name);
    return $_POST[$name];
}

function session($name, $params = null) {
    session_start();
    htmlspecialchars($name);

    if (isset($params)) {
        if ($params == 'none') {
            $_SESSION[$name] = null;
        } else {
            $_SESSION[$name] = "{$params}";
        }
    } else {
        return $_SESSION[$name];
    }
}

function cookie($name, $params = null, $time = 86400) {
    htmlspecialchars($name);
    if (isset($params)) {
        return setcookie($name, $params, time() + $time);
    } else {
        return $_COOKIE[$name];
    }
}
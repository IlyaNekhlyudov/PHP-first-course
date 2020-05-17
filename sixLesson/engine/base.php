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
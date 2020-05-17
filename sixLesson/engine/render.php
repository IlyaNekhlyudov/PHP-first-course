<?php
function renderMenu(array $menu): string
{
    $result = "<ul>";
    foreach ($menu as $item) {
        $result .= "<li><a href='#'>{$item}</a></li>";
    }
    $result .= "</ul>";
    return $result;
}
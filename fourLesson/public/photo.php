<?php
require_once __DIR__ . '\..\config\main.php';

$id=(int)$_GET['id'];

$mysql = mysqli_connect("127.0.0.1", "root", "root", "gallery");
$query = "SELECT `name`, `url`, `views` FROM `images` WHERE `id` = '{$id}'";

mysqli_real_escape_string($mysql, $query);
$result = mysqli_query($mysql, $query) or die("Ошибка " . mysqli_error($mysql));
$result = mysqli_fetch_assoc($result);

$query = "UPDATE `images` SET `views`=views+1 WHERE `id` = '{$id}'";
mysqli_query($mysql, $query) or die("Ошибка " . mysqli_error($mysql));

include VIEWS_DIR . "photo.php";
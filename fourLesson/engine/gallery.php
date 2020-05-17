<?php
/**
 * @return array
 */

function getGalleryFiles($mysql) : array
{
    $query = "SELECT * FROM `images` ORDER BY `views` DESC";
    $result = mysqli_query($mysql, $query) or die("Ошибка " . mysqli_error($mysql));
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

?>
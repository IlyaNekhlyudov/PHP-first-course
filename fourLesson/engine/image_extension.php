<?php

function ImageExtension(string $file) : bool {
    preg_match("/.*?\.(jpg|png|jpeg|gif|tif|bmp)$/", $file, $array);
    if ($array) {
        return true;
    } else {
        return false;
    }
}

?>
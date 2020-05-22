<?php

function uploadImage(array $file) {
    $imagesDir = PUBLIC_DIR . "/img/";

    if (!file_exists($imagesDir)) {
        mkdir($imagesDir);
    }

    $originalName =  $file['my_file']['name'];
    $filename = $imagesDir . $originalName;
    
    if (uploadFile($filename, 'my_file')) {
        img_resize($filename, $imagesDir . "/small/" . $originalName, 200, 150);
    }
    return $originalName;    
}

?>
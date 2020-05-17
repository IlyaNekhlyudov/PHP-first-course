<?php
function uploadFile(string $destination, string $attributeName = 'file'): int
{
    if (isset($_FILES['my_file'])) {
        return move_uploaded_file(
            $_FILES[$attributeName]['tmp_name'],
            $destination
        );
    }
    return false;
}
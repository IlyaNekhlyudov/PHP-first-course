<h2><p><b> Форма для загрузки файлов </b></p></h2>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image"><br><br>
    <input type="submit" value="Загрузить"><br>
</form>

<?php
    require_once(ENGINE_DIR . 'image_extension.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        UploadImage();
    }

    function UploadImage() {
        if (isset($_FILES['image'])) {

            if (!file_exists(UPLOAD_IMG)) {
                mkdir(UPLOAD_IMG);
            }

            if ($_FILES['image']['size'] > 11000000) {
                echo 'Файл слишком большой';
                return false;
            }

            if (!ImageExtension($_FILES["image"]["name"])) {
                echo "Неверный формат файла.";
            } else {
                if (!move_uploaded_file(
                    $_FILES["image"]["name"],
                    UPLOAD_IMG . $_FILES["image"]["name"]
                )) {
                    echo 'ERROR!';
                } else {
                    echo 'Файл успешно загружен.';
                }
            }
        }
    }
?>
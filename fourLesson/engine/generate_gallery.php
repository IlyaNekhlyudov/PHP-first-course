<?php
    require_once(ENGINE_DIR . 'image_extension.php');
?>

<? if ($handle = opendir(DOCUMENT_ROOT . '/public/image/')) : ?>
    <div class='gallery' style='display: flex;'>
        <? while (false !== ($file = readdir($handle))) : ?>
            <? if (ImageExtension($file) == true) : ?>
                <a href='<?='/image/' . $file?>' target="_blank">
                    <img src='<?='/image/' . $file?>' alt='<?='/image/' . $file?>' style='width: 200px; height: 200px;'>
                </a>
            <? endif; ?>
        <? endwhile; ?>
    </div>
<? endif; ?>
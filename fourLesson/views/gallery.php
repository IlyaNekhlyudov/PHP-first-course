<?php
/** @var array $files */
?>

<?php foreach ($files as $image): ?>
    <a href="/photo.php?id=<?=$image['id']?>" target="_blank"><img width="200" src="/img/small/<?=$image['name']?>" alt=""></a>
<?php endforeach;?>

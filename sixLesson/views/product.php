<?php if ($user['admin'] > 0) : ?>
    <a href='/admin.php' style='color: red;'>Админка</a> <br><br>
<?php endif; ?>
<a href='/cart.php'>Корзина</a>
<center>
    <img src="/img/<?=$product['image']?>" alt="<?=$product['name']?>" style='width: 400px;'>
    <h2><?=$product['name']?></h2>
    <p><?=$product['description']?></p>
</center>
<div style='margin-left: 40px;'>
    <p>Количество просмотров товара - <?=$product['popularity']?>.</p>
</div>
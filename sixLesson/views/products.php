<a href='/cart'>Корзина (<?=$quantityCart['COUNT(1)']?>)</a>
<h2>Интернет-магазин</h2>
<?php if ($user['admin'] > 0) : ?>
    <a href='/admin' style='color: red;'>Админка</a> <br><br>
<?php endif; ?>
<div style='display: flex;'>
    <?php foreach ($products as $product): ?>
        <div style = 'margin-left: 20px;'>
                <a href="/products/card?id=<?=$product['id']?>" target="_blank">
                    <img width="200" src="/img/small/<?=$product['image']?>" alt="">
                    <h3><?=$product['name']?></h3>
                </a>
                <form>
                    <button formmethod="POST" name="addToCart" value="<?=$product['id']?>" type="submit">Добавить в корзину</button>
                </form>
        </div>
    <?php endforeach;?>
</div>
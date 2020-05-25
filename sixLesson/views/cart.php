<h2>Товары в корзине</h2>
<div style='display: flex;'>
    <?php if ($products) : ?>
        <?php foreach ($products as $product): ?>
            <div style = 'margin-left: 20px;'>
                    <a href="/product.php?id=<?=$product['id']?>" target="_blank">
                        <img width="200" src="/img/small/<?=$product['image']?>" alt="">
                        <h3><?=$product['name']?></h3>
                        <p>Количество - <?=$product['quantity']?></p>
                    </a>
                    <form>
                        <button formmethod="POST" name="removeFromCart" value="<?=$product['id']?>" type="submit">Удалить из корзины</button>
                    </form>
            </div>
        <?php endforeach;?>
    <?php else : ?>
        <p>Товаров в корзине нет.</p>
    <?php endif; ?>
</div>
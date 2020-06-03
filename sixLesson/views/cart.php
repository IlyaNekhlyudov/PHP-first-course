<h2>Товары в корзине</h2>
<div style='display: flex;'>
    <?php if ($products) : ?>
        <?php foreach ($products as $product): ?>
            <div style = 'margin-left: 20px;'>
                    <a href="/products/card?id=<?=$product['id']?>" target="_blank">
                        <img width="200" src="/img/small/<?=$product['image']?>" alt="">
                        <h3><?=$product['name']?></h3>
                        <p>Количество - <?=$product['quantity']?></p>
                    </a>
                    <form>
                        <button formmethod="POST" name="removeFromCart" value="<?=$product['id']?>" type="submit">Удалить из корзины</button>
                    </form>
            </div>
        <?php endforeach;?>
</div>
<div style='margin-top: 40px;'>
    <h2>Оформление заказа</h2>
    <form action='/cart/checkout' method='POST'>
        <p>Имя</p>
        <input name='name' type='text' placeholder='Введите имя' value="<?=$user['name']?>" required>
        <p>Номер телефона</p>
        <input name='phone' type='tel' placeholder='Введите ваш телефон' required>
        <p>Адрес</p>
        <input name='address' type='text' placeholder='Введите адрес' required>
        <p>E-mail</p>
        <input name='email' type='email' placeholder='Введите e-mail' required>
        <br>
        <input type='submit' value='Подтвердить заказ'>
    </form>
</div>
    <?php else : ?>
        <p>Товаров в корзине нет.</p>
    <?php endif; ?>
</div>
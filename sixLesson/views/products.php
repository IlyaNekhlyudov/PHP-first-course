<h2>Интернет-магазин</h2>
<div style='display: flex;'>
    <?php foreach ($products as $product): ?>
        <div style = 'margin-left: 20px;'>
                <a href="/product.php?id=<?=$product['id']?>" target="_blank">
                    <img width="200" src="/img/small/<?=$product['image']?>" alt="">
                    <h3><?=$product['name']?></h3>
                </a>
        </div>
    <?php endforeach;?>
</div>

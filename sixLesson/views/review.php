<div style='margin-left: 40px;'>
    <?php foreach ($reviews as $review): ?>
        <div style='border: 1px solid black; padding-left: 10px; margin-top: 10px;'>
            <p>#<?=$review['id']?> Дата: <?=$review['date']?> Автор: <?=$review['name']?></p>
            <p><?=$review['text']?>
        </div>
    <?php endforeach;?>
</div>
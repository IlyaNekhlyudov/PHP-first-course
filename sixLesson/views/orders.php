<table border='1px'>
    <tr>
        <td>Дата</td>
        <td>Пользователь</td>
        <td>Имя</td>
        <td>E-mail</td>
        <td>Телефон</td>
        <td>Товары</td>
        <td>Статус</td>
    </tr>
    <?php foreach ($orders as $order) : ?>
        <tr>
            <td><?=$order['date']?></td>
            <td><?=getUserLoginByID($order['userID'])?></td>
            <td><?=$order['name']?></td>
            <td><?=$order['email']?></td>
            <td><?=$order['phone']?></td>
            <td>
                <?php foreach ($parseProducts as $product) : ?>
                    <a href='/products/card?id=<?=$product[0]?>' style='margin-right: 5px;'>Товар (<?=$product[1]?> шт.)</a>
                <?php endforeach; ?>
            </td>
            <td><?=$order['status']?>
        </tr>
    <?php endforeach; ?>
<table>
<h2>Добавление товара</h2>

<form action="/admin/add_product" enctype="multipart/form-data" method="post">
    <input type='text' name='name' placeholder='Введите название товара'> <br>
    <textarea name="description" cols="40" rows="3" placeholder='Введите описание товара'></textarea> <br>
    <input type="file" name = 'my_file'>
    <input type="submit">
</form>
<br><br>
<a href='/admin/orders'>Заказы</a>


<h1>Регистрация</h1>
<?php if (!session('user_id')) : ?>
    <form action="" method="post">
        <p>Придумайте логин</p>
        <input type='text' name='login' placeholder='Введите логин' required>
        <p>Придумайте пароль</p>
        <input type='password' name='password' placeholder='Введите пароль' required>
        <p>Как вас зовут</p>
        <input type='text' name='name' placeholder='Введите ваше имя' required>
        <input type='submit' value='Зарегистрироваться'>
    </form>
<?php else : ?>
    <form action="/login.php" method='get'>
        <p>Вы уже залогинены. Хотите выйти?</p>
        <input type='submit' name='exit' value='Выйти'>
    </form>
<?php endif; ?>
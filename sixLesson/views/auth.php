<h1>Авторизация</h1>
<?php if (!session('user_id')) : ?>
    <form action="" method="post">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit" value="login">
    </form>
    <a href='/registration.php'>Регистрация</a>
<?php else : ?>
    <p>Вы уже залогинены. Хотите выйти?</p>
    <form>
        <button formmethod="GET" value="exit" name="exit" type="submit">Выйти из аккаунта</button>
    </form>
<?php endif; ?>
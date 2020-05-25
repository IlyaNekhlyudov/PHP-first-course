<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <ul style='display: flex;'>
        <li>
            <a href='/'>Главная</a>
        </li>
        <li style='margin-left: 30px'>
            <a href='/admin'>Админка</a>
        </li>
        <li style='margin-left: 30px'>
            <a href='/auth'>Авторизация</a>
        </li>
        <li style='margin-left: 30px'>
            <a href='/auth/registration'>Регистрация</a>
        </li>
    </ul>
</header>
<?=$content?>
<footer>
    <br>
    это футер
</footer>
</body>
</html>

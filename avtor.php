<?php
session_start();
require __DIR__ . '/ses.php';



?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>

<form action="/photo2.php" method="post">
    <input type="text" name="login">
    <input type="password" name="pass" >
    <button type="submit">Go</button>
</form>

</body>
</html>
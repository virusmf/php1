<?php
session_start();
require __DIR__ . '/ses.php';
if (isset($_SESSION['login'])){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pass'] = $_POST['pass'];
}
var_dump($_SESSION);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотогалерея 2</title>
</head>
<body>
<?php
if (isset($_SESSION)){
if (сheckPassword($_SESSION['login'],$_SESSION['pass'])){
?>
<form action="/add_photo.php" method="post" enctype="multipart/form-data">
    <input type="file" name="addphoto" accept="image/png,image/jpeg">
    <button type="submit">Загрузить фото</button>
</form>
<?php
} else {
echo 'Авторизуйтесь';
}
}
?>


<br>
<?php

$sd = scandir(__DIR__.'/img');

foreach ($sd as $fd){
    if (!is_dir($fd)){
        $fg[] = $fd;
    }
}

foreach ($fg as $pic){ ?>
    <img src="/img/<?php echo $pic ?>" height="10%" width="10%">
<?php
}

?>
</body>
</html>

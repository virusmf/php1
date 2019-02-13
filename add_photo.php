<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление фото</title>
</head>
<body>
<?php
if (isset($_FILES['addphoto'])){
    if (0 == $_FILES['addphoto']['error']){
        move_uploaded_file(
            $_FILES['addphoto']['tmp_name'],
            __DIR__ . '/img/' .  $_FILES['addphoto']['name']
        );
        ?>
        <p>Фото загружено.</p>
        <?php
    }
}
?>
<a href="photo2.php">Назад</a>
</body>
</html>



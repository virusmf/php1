<?php

$foto = $_GET['id'];

$name = [
    1 => 'foto1.jpg',
    'foto2.jpg',
    'foto3.jpg',
    'foto4.jpg'
];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фото <?php echo $name[$foto] ?></title>
</head>
<body>
 <img src="/img/<?php echo $name[$foto] ?>" width="50%" height="50%">
</body>
</html>

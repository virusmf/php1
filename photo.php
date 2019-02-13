<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотогалерея</title>
</head>
<body>
<?php
$foto = [
    1 => 'foto1.jpg',
    'foto2.jpg',
    'foto3.jpg',
    'foto4.jpg'];

foreach ($foto as $key => $pic){
?>
<a href="/image.php?id=<?php echo $key ?>"><img src="/img/<?php echo $pic ?>" height="10%" width="10%"></a>
<?php
}

?>




</body>
</html>

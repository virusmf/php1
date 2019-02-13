<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление записи</title>
<?php
$fn = __DIR__.'/guestbook.txt';
function records($fh)
{
    return file($fh);
}

$rec= str_replace(PHP_EOL,'',records($fn));

if ($_POST['TC'] != '') {
    $rec[] = $_POST['TC'] . '||' . $_POST['text'];
    if( file_put_contents($fn, implode(PHP_EOL, $rec)) ){
    ?>
    <h1>Запись добавлена</h1>
<?php
    }
}
?>


    <a href="guestbook.php">Назад</a>
</head>
<body>


</body>
</html>

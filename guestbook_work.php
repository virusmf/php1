
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>
<?php

function reccord($fh)
{
    return file($fh);
}
$rec = reccord(__DIR__.'/guestbook.txt');

var_dump($rec);

if ($_POST['TC'] != '') {

   # $fr = fopen(__DIR__ . '/guestbook.txt', 'r');

   $new_rec = $_POST['TC'] . '||' . $_POST['text'];

   # fwrite($fh, $recc);

    #fclose($fh);
}



foreach ($rec as $record){
    $rrec = explode('||',$record);
    ?>
    <br>
    Автор: <?php echo $rrec[0] ?>
    <br>
    Сообщение: <?php echo $rrec[1];
}
?>


<br>
<a href="/guestbookadd.php">Добавить запись</a>
</form>
</body>
</html>



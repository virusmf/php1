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

$fn = __DIR__.'/guestbook.txt';

function records($fh)
{
    return file($fh);
}

$rec= str_replace(PHP_EOL,'',records($fn));
?>


<table border="1" cellspacing="0">
<?php
foreach ($rec as $record){ ?>
    <tr bgcolor="aqua">
        <td>Имя:</td>
        <td>Сообщение:</td>
    </tr>


    <tr>
    <?php
    $rrec = explode('||',$record);
    ?>
    <td> <?php echo $rrec[0]; ?> </td>
    <td> <?php if (!empty($rrec)) {
            echo $rrec[1];
        } ?> </td>
    </tr>
    <?php
}
?>
</table>


<p>
<form action="/guestbook-add.php" method="post">
    Имя: <input type="text" name="TC">
    <br>
    Сообщение:<input type="text" name="text">
    <br>
    <button type="submit">Добавить запись</button>
</form>
</body>
</html>



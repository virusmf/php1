
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
    <script>
        function showForm() {
            document.getElementById("add").hidden = false;
            document.getElementById("link").hidden = true;
        }
    </script>
</head>
<body>
<?php

if ($_POST['TC'] != '') {

    $fh = fopen(__DIR__ . '/guestbook.txt', 'a');

    $recc = "\n" . $_POST['TC'] . '::' . $_POST['text'];

    fwrite($fh, $recc);

    fclose($fh);
}

$rec = file(__DIR__.'/guestbook.txt');

foreach ($rec as $record){
    $rrec = explode('::',$record);
    ?>
    <br>
    Автор: <?php echo $rrec[0] ?>
    <br>
    Сообщение: <?php echo $rrec[1];
}
?>
<p id="link" onclick="showForm()" >Добавить запись</p>
<form id="add" action="/guestbook.php" method="post" hidden>
    Автор: <input type="text" name="TC">
    <br>
    Сообщение:<input type="text" name="text">
    <br>
    <button type="submit">Отправить</button>
</form>

</body>
</html>



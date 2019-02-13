<?php
require_once __DIR__ . '/classes/GuestBook.php';

$fh =__DIR__ . '/guestbook.txt';
$guestbook = new GuestBook($fh);


$list = $guestbook->getData();
?>
<table border="1" cellspacing="0">
    <?php
    foreach ($list as $record){ ?>
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
<form action="/gbadd.php" method="post">
    Имя: <input type="text" name="TC">
    <br>
    Сообщение:<input type="text" name="text">
    <br>
    <button type="submit">Добавить запись</button>
</form>
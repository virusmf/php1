<?php
require __DIR__ . '/classes/GuestBook.php';
$fh =__DIR__ . '/guestbook.txt';
if ($_POST['TC'] != '') {
    $rec = $_POST['TC'] . '||' . $_POST['text'];
    var_dump($rec);
    $guestbook->append($rec);
    $guestbook->save($fh);

}

#header('Location: /');

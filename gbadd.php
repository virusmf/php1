<?php
require_once __DIR__ . '/classes/GuestBook.php';
$fh =__DIR__ . '/guestbook.txt';
$guestbook = new GuestBook($fh);
if ($_POST['TC'] != '' && $_POST['text'] != '') {
    $rec = $_POST['TC'] . '||' . $_POST['text'];
    $guestbook->append($rec);
    $guestbook->save($fh);

}

header('Location: /');

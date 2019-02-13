<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    var_dump($_GET);
    $a = $_GET['a'];
    $op = $_GET['op'];
    $b = $_GET['b'];
    $opr = [
        '+' => 1,
        '-' => 2,
        '*' => 3,
        '/' => 4,
    ];
    $c = $opr[$op];
echo '<br>';
    var_dump($c);
?>
<table>
    <tr>
        <td>

        </td>
    </tr>

</table>
<form action="/calcul.php" method="get">
    <input type="text" name="a" value="<?php echo $a ?>">


    <input type="text" name="b" value="<?php echo $b ?>">
    <button type="submit">Равно</button>
    <input type="text" name="result" value="<?php echo result() ?>" disabled>
</form>
<?php

require __DIR__.'/calc.php';


    switch ($c) {
        case 1:
            echo $a . ' + ' . $b . '=' . operations($a, $c, $b);
            break;
        case 2:
            echo $a . ' - ' . $b . '=' . operations($a, $c, $b);
            break;
        case 3:
            echo $a . ' * ' . $b . '=' . operations($a, $c, $b);
            break;
        case 4:
            echo $a . ' / ' . $b . '=' . operations($a, $c, $b);
            break;
    }

?>


<input type="text" name="result" value="<?php echo operations($a, $c, $b) ?>" disabled>
</body>
</html>
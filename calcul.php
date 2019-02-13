<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>
<?php

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

require __DIR__.'/calc.php';

?>

<form action="/calcul.php" method="get">
    <input type="text" name="a" value="<?php echo $a ?>">


    <select  name="op">
        <option <?php if (!in_array($c, $opr)){ echo 'selected';} ?>  disabled>Выберите Операцию</option>
        <option <?php if ($c == 1){ echo 'selected';} ?> value="+">+</option>
        <option <?php if ($c == 2){ echo 'selected';} ?> value="-">-</option>
        <option <?php if ($c == 3){ echo 'selected';} ?> value="*">*</option>
        <option <?php if ($c == 4){ echo 'selected';} ?> value="/">/</option>
    </select>

    <input type="text" name="b" value="<?php echo $b ?>">
    <button type="submit">=</button>
    <?php echo operations($a, $c, $b) ?>
</form>


</body>
</html>
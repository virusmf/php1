<?php
function operc($w)
{
    switch ($w) {
        case 1:
            return ('+');
            break;
        case 2:
            return ('-');
            break;
        case 3:
            return ('*');
            break;
        case 4:
            return ('/');
            break;
    }
}

assert( '+' === operc(1));
assert( '-' === operc(2));
assert( '*' === operc(3));
assert( '/' === operc(4));


<input type="text" list="operation" name="op" value="<?php echo $op ?>">
    <datalist id="operation">
        <option value="+">
        <option value="-">
        <option value="*">
        <option value="/">
    </datalist>


    <select id="operat" name="op" va>
        <option value="<?php echo $c ?>">+</option>
        <option value="<?php echo $c ?>">-</option>
        <option value="<?php echo $c ?>">*</option>
        <option value="<?php echo $c ?>">/</option>
    </select>
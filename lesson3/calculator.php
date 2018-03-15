<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>

<h2>Калькулятор</h2>

<?php

if ( isset($_GET['a'], $_GET['b'] )) {
    $a = $_GET['a'];
    $b = $_GET['b'];
} else {
    $a = null;
    $b = null;
};

$action = $_GET['action'];


function calc( $a, $b, $action )
{
    if ( '+' == $action ) {
        return $a + $b;
    } elseif ( '-' == $action ) {
        return $a - $b;
    } elseif ( '*' == $action ) {
        return $a * $b;
    } elseif ( '/' == $action ) {
        return $a / $b;
    } else {
        return null;
    }
}

assert(calc(9,3,'+') == 12);
assert(calc(9,3,'-') == 6);
assert(calc(9,3,'*') == 27);
assert(calc(9,3,'/') == 3);
?>

<form action="/lesson3/calculator.php" method="get">
    <input type="text" name="a" value="<?php echo $_GET['a']; ?>">
    <select name="action">
        <option value="+" <?php if ('+' == $action) { ?> selected <?php }; ?>> + </option>
        <option value="-" <?php if ('-' == $action) { ?> selected <?php }; ?>> - </option>
        <option value="*" <?php if ('*' == $action) { ?> selected <?php }; ?>> * </option>
        <option value="/" <?php if ('/' == $action) { ?> selected <?php }; ?>> / </option>
    </select>
    <input type="text" name="b" value="<?php echo $_GET['b']; ?>">
    <button> = </button>
    <?php echo calc($a, $b, $action); ?>
</form>



</body>
</html>
<?php
session_start();

$x = 0;
if (isset($_GET['x'])) {
    $x = (int)$_GET['x'];
}

$y = 0;
if (isset($_GET['y'])) {
    $y = (int)$_GET['y'];
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];

}

function calculate($x, $y, $action) {
    switch ($action) {
        case '+':
            return $x + $y;
            break;
        case '-':
            return $x - $y;
            break;
        case '*':
            return $x * $y;
            break;
        case '/':
            return $x / $y;
            break;
        default:
            return $x + $y;
    }
}
?>
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



<form action="/index.php" method="get">
    <input type="number" name="x" value="<?php echo $x; ?>">
    <select name="action">
        <option <?php if ($action == '+') {?> selected <?php } ?> value="+">+</option>
        <option <?php if ($action == '-') {?> selected <?php } ?> value="-">-</option>
        <option <?php if ($action == '*') {?> selected <?php } ?> value="*">*</option>
        <option <?php if ($action == '/') {?> selected <?php } ?> value="/">/</option>
    </select>
    <input type="number" name="y" value="<?php echo $y; ?>">
    <button type="submit">=</button>
    <?php echo calculate($x, $y, $action); ?>
</form>

<p>
<form action="/login.php" method="post">
    <button type="submit" name="exit">Выйти</button>
</form>
</p>

<p>
    <a href="/gallery/index.php">В галерею</a><br>
    <a href="/guestbook/book.php">Гостевая книга</a>
</p>

</body>
</html>
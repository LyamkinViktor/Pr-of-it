<!doctype html>
<html lang="en">
<head>
    <title>Lesson 2</title>
    <link rel="stylesheet" type="text/css" href="/lesson2/style.css">
</head>

<body>

<h1>Задание 1</h1>
<h2>Таблица истинности</h2>

<p>
    <table>
        <tr>
            <th class="column1">&&</th>
            <th>0</th>
            <th>1</th>
        </tr>
        <tr>
            <th>0</th>
            <td><?php echo (int) (false && false);?></td>
            <td><?php echo (int) (false && true);?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php echo (int) (true && false);?></td>
            <td><?php echo (int) (true && true);?></td>
        </tr>
    </table>

</p>

<p>
    <table>
        <tr>
            <th class="column1">||</th>
            <th>0</th>
            <th>1</th>
        </tr>
        <tr>
            <th>0</th>
            <td><?php echo (int) (false || false);?></td>
            <td><?php echo (int) (false || true);?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php echo (int) (true || false);?></td>
            <td><?php echo (int) (true || true);?></td>
        </tr>
    </table>

</p>

<p>
    <table>
        <tr>
            <th class="column1">xor</th>
            <th>0</th>
            <th>1</th>
        </tr>
        <tr>
            <th>0</th>
            <td><?php echo (int) (false xor false);?></td>
            <td><?php echo (int) (false xor true);?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php echo (int) (true xor false);?></td>
            <td><?php echo (int) (true xor true);?></td>
        </tr>
    </table>

</p>

<hr>

<h1>Задание 2</h1>

<?php

function discriminant ($a, $b, $c)
{
    return $b ** 2 - 4 * $a * $c;
}

assert ( 0 == discriminant(0,0,0));
assert ( -8 == discriminant(1,2,3));
assert ( 60 == discriminant(5,10,2));

$a = 1;
$b = 25;
$c = 3;

$d = discriminant($a, $b, $c);

if  ($d > 0) {
    echo $x1 = ((-$b) + sqrt($d)) / (2 * $a); ?><br><?php
    echo $x2 = ((-$b) - sqrt($d)) / (2 * $a);
} elseif ( 0 == $d ) {
    echo $x = -($b / (2 * $a));
} else {
    echo 'D < 0, нет корней!';
};

?>

<hr>

<h1>Задание 3</h1>

<p>
    include включает файл и выполняет его, к примеру, если в файл test.php записать функцию, которая высчитывает сумму
    двух чисел то результат работы этой функции будет доступен на странице включения:<br>
    <?php
    include __DIR__ . '/test.php';
    echo $total;
    ?>
</p>
<p>
    include можно записать в переменную - в  таком случае переменная будет содержать значение файла test1:<br>
    <?php
    $c = include __DIR__ . '/test1.php';
    var_dump($c);
    ?>
</p>
<p>
    В случае, если файл будет включен внутри функции включающего файла, то весь код включаемого файла будет
    виден только внутри этой функции, за исключением магических констант:<br>
    <?php

    function foo()
    {
        include __DIR__ . '/test2.php';
        return $a;
    }

    echo foo(); // Результат работы функции - значение переменной $a, включенной в функцию

    ?>
</p>

<p>
    include можно записать как функцию и присвоить его значение переменной:
    <?php
    $x = include ( __DIR__ . '/test3.php');
    var_dump($x);
    ?><br>
    в таком случае, если файл существует, то var_dump вернёт int(1), то есть файл существует
    <?php
    $x = include ( __DIR__ . '/test5.php');
    var_dump($x);
    ?><br>
    в ином случае вернёт bool(false) и ряд ошибок
</p>

<p>
    include, используемый как функция, на вход которой задан файл, будет возвращать значение этого файла:
    <?php

    $x = include( __DIR__ . '/test4.php');

    var_dump($x)

    ?>
</p>


<hr>
<h1>Задание 4</h1>

<?php function gender($name)
{
    $a = substr($name, strlen($name) -2);

    if ($a  == 'а' || $a == 'я') {
    return 'женский пол';
    }   elseif ($a == 'р' || $a == 'й' || $a == 'л' || $a == 'с'){
    return 'мужской пол';
    }
    else {
    return null;
    }
}

assert( gender('Виктор') == 'мужской пол');
assert( gender('Елена') == 'женский пол');
assert( gender('Тигран') == null);

echo gender( 'Елена');

?>

</p>



</body>
</html>
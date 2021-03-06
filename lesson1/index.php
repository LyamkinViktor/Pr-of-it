<?php
// Задание 3:

    var_dump(2 * 2); // выводит тип int (целое число) и значение выражения 4
    var_dump(3 / 1); // выводит тип int (целое число) и значение выражения 3
    var_dump(1 / 3); // выводит тип float (дробное число) и значение 0.33333333333333
    var_dump('20cats' + 40); /* выводит Notice (предупреждение) о том,что на строке 6
                                          в вашем файле некорректное числовое значение, следом
                                          выводит значение int(60), поскольку значение выражения
                                          оператора сложения всегда производят числа */
    var_dump(18 % 4); // выводит целочисленный остаток от деления 18 на 4 - int(2)

// Задание 4:

    echo ($a = 2); // вывод этого выражения будет равен значению переменной $a

    $x = ($y = 12) - 8;
    echo $x; // вывод этой переменной  будет равен значению выражения ($y = 12) - 8, т.е. 4

    // значением выражения присваивания является само присвоенное значение

// Задание 5:

    var_dump(1 == 1.0); // булево значение true, по скольку сравнение числового значения верно
    var_dump(1 === 1.0); /* булево значение false, т.к. это строгое сравнение, а типы у аргументов
                                      разные - int и float */
    var_dump('02' == 2); // true, строка приводится к числу, числа равны
    var_dump('02' === 2); // false, по скольку это строгое сравнение, типы str и int разные
    var_dump('02' == '2'); // true, по скольку при привидении типов числовые значения в строках равны

// Задание 6:

    $d = true xor true;
    var_dump($d); // bool(true)
    /* xor это булев оператор, который проверяет на то, что значения разные, в данном случае, по логике
       должно быть значение false, но по скольку в выражении  $d = true xor true  оператор присваивания
       в интерпритаторе имеет бОльший приоритет, нежели оператор сравнения, то var_dump выводит именно
       присвоенное значение, правильно это выглядит так - ($d = true) xor true. Чтобы избежать данной
       ошибки, нужно самостоятельно расставить скобки так, чтобы переменной $d присваивалось именно значение
       выражения сравнения (true xor true). Таким образом выражение $d = (true xor true) выдаст ожидаемое false.
    p.s. до сути приоритетов не додумался, нашел на просторах интернета. Выводы сделал сам =) */
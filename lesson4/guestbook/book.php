<?php include __DIR__ . '/functions.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>

    <div>
        <?php
        $data = getData();

        foreach ($data as $str) {
            echo $str; ?> <br> <?php
        };?>
    </div>

    <div>
        <form action="/lesson4/guestbook/add.php" method="post">
            <p><textarea name="text"></textarea></p>
            <p><button type="submit">Отправить</button></p>
        </form>
    </div>



    </body>



</html>
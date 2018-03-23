<?
require __DIR__ . '/classes/GuestBook.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>

   <div>
       <?php
       $book = new GuestBook(__DIR__ . '/db.txt');

       foreach ($book->getData() as $str) {
           echo $str; ?> <br> <?php
       };
       ?>
   </div>

    <div>
        <form action="/lesson6/guestbook/add.php" method="post">
            <p><textarea name="text"></textarea></p>
            <p><button type="submit">Отправить</button></p>
        </form>
    </div>
</body>
</html>
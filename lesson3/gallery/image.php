<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
</head>
<body>


<?php

$id = $_GET['id'];

$pictures = include __DIR__ . '/data.php';

?>

<div>
    <img src="/lesson3/gallery/images/<?php echo $pictures[$id]; ?>">
</div>




</body>
</html>


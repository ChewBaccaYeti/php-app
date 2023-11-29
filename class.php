<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require './classes/point.php';

    $point1 = new Point;
    $point1->x = 13;
    $point1->y = 8;
    echo $point1->x = 13;
    echo $point1->y = 8;

    $point2 = new Point;
    $point2->x = 19;
    $point2->y = 5;
    echo $point2->x = 19;
    echo $point2->y = 5;

    unset($point2);
    echo $point2->x;
    ?>
</body>

</html>
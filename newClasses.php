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
    echo "x: {$point1->x}, y: {$point1->y}";

    $point2 = new Point;
    $point2->x = 19;
    $point2->y = 5;
    echo "x: {$point2->x}, y: {$point2->y}";

    unset($point2);
    // echo $point2->y; // Warning: Attempt to read property "y" on null
    ?>


    <br>

    <?php
    require './classes/nums.php';

    $first = new Nums;
    $first->z = 3;
    $first->v = 3;

    $second = clone $first;
    $second->z = 5;
    $second->v = 5;

    echo "z: {$first->z}, v: {$first->v}";

    echo "<br>";

    echo pow(2, 8); // 256

    echo "<br>";

    echo sqrt(16); // 4

    echo "<br>";

    $p1 = new Point;
    $p1->x = 3;
    $p1->y = 5;

    $p2 = new Point;
    $p2->x = 7;
    $p2->y = 12;

    $distance = sqrt((pow(($p2->x - $p1->x), 2) + pow(($p2->y - $p1->y), 2)));
    echo $distance; // distance between two points;
    ?>

</body>

</html>
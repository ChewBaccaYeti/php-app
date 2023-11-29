<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str = '45.38string';
    $num = $str - 15;
    echo $num;
    ?>

    <br>

    <?php
    $num = 24;
    $f = (float)($num / 2) - (int)($num / 2);
    if ($f) {
        echo "Число нечетное";
    } else {
        echo "Число четное";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?=
        "Sassy page"
        ?>
    </title>
</head>

<body>
    <p>Select your birth year</p>
    <select>
        <?php
        for ($i = 1970; $i <= 2005; $i++) {
            echo "<option>$i</option>";
        }
        ?>
    </select>

    <br>

    <p>
        <?php $sus = "SuS";
        echo $sus;
        ?>
    </p>

    <br>

    <?php
    echo "Current time and date.";
    echo date(DATE_RSS);
    ?>

    <br>

    <?php
    echo 9 + 5 + 11 - 13;
    echo 'Some text, whatever.';
    ?>

    <br>

    <?php
    if (mt_rand(0, 1)) {
    ?>
        <div style="color: green">Green text</div>
    <?php
    } else {
    ?>
        <div style="color: red">Red text</div>
    <?php
    }
    ?>

    <?php
    echo "Main script <br>";
    include "include.php";
    require "require.php";
    echo "Main script <br>";
    ?>

</body>

</html>
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
    include "./child/include.php";
    require "./child/require.php";
    echo "Main script <br>";
    ?>

    <?php
    $user = "Wazowski";
    if (isset($user))
        echo "Wazowski is here";
    else
        echo "Wazowski was compromised";
    ?>

    <?php
    $user = "Wazowski";
    echo gettype($user);
    ?>
    <br>
    <?php
    $num = 963874;
    echo gettype($num);
    ?>
    <br>
    <?php
    $float = 96.3874; // double
    echo gettype($float);
    ?>
    <br>
    <?php
    if (is_int(1.25))
        echo "integer";
    else
        echo "float";
    ?>

    <br>

    <?php
    echo
    include "./child/equal-type.php";
    ?>

    <br>

    <?php
    echo
    require "./class.php";
    ?>

</body>

</html>
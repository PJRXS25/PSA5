<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .box {
            width: 400px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border: 1px solid black;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>My Favorite Colors</h2>

    <?php
    echo "My Favorite Color 1: " . $_SESSION["color1"] . "<br>";
    echo "My Favorite Color 2: " . $_SESSION["color2"] . "<br>";
    echo "My Favorite Color 3: " . $_SESSION["color3"] . "<br>";
    echo "My Favorite Color 4: " . $_SESSION["color4"] . "<br>";
    echo "My Favorite Color 5: " . $_SESSION["color5"] . "<br>";
    ?>

    <br>
    <a href="FavoriteColor.php">Go Back</a>
</div>

</body>
</html>
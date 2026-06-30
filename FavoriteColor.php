<?php
session_start();

if (isset($_POST["submit"])) {
    $_SESSION["color1"] = $_POST["color1"];
    $_SESSION["color2"] = $_POST["color2"];
    $_SESSION["color3"] = $_POST["color3"];
    $_SESSION["color4"] = $_POST["color4"];
    $_SESSION["color5"] = $_POST["color5"];

    header("Location: ResultColors.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>

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

        input {
            width: 200px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Enter Your Favorite Colors</h2>

    <form method="post" action="FavoriteColor.php">
        Favorite Color 1: <input type="text" name="color1"><br><br>
        Favorite Color 2: <input type="text" name="color2"><br><br>
        Favorite Color 3: <input type="text" name="color3"><br><br>
        Favorite Color 4: <input type="text" name="color4"><br><br>
        Favorite Color 5: <input type="text" name="color5"><br><br>

        <input type="submit" name="submit" value="Send Colors">
    </form>
</div>

</body>
</html>
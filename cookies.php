<?php
if (isset($_POST["submit"])) {
    setcookie("firstname", $_POST["firstname"], time() + 10);
    setcookie("middlename", $_POST["middlename"], time() + 20);
    setcookie("lastname", $_POST["lastname"], time() + 30);

    header("Location: cookies.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies Example</title>
    <meta http-equiv="refresh" content="5">
</head>
<body>

<h2>Personal Information Using Cookies</h2>

<form method="post" action="cookies.php">
    First Name: <input type="text" name="firstname"><br><br>
    Middle Name: <input type="text" name="middlename"><br><br>
    Last Name: <input type="text" name="lastname"><br><br>

    <input type="submit" name="submit" value="Create Cookies">
</form>

<br>

<h3>Cookie Values:</h3>

<?php
if (isset($_COOKIE["firstname"])) {
    echo "First Name Cookie: " . $_COOKIE["firstname"] . "<br>";
} else {
    echo "First Name Cookie: Not set or expired<br>";
}

if (isset($_COOKIE["middlename"])) {
    echo "Middle Name Cookie: " . $_COOKIE["middlename"] . "<br>";
} else {
    echo "Middle Name Cookie: Not set or expired<br>";
}

if (isset($_COOKIE["lastname"])) {
    echo "Last Name Cookie: " . $_COOKIE["lastname"] . "<br>";
} else {
    echo "Last Name Cookie: Not set or expired<br>";
}
?>

<p>The page refreshes every 5 seconds. The cookies will expire after 10, 20, and 30 seconds.</p>

</body>
</html>
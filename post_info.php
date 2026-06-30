<!DOCTYPE html>
<html>
<head>
    <title>Personal Information - POST</title>
</head>
<body>

<h2>Personal Information Using POST</h2>

<form method="post" action="post_info.php">
    First Name: <input type="text" name="firstname"><br><br>
    Middle Name: <input type="text" name="middlename"><br><br>
    Last Name: <input type="text" name="lastname"><br><br>
    Date of Birth: <input type="text" name="dob"><br><br>
    Address: <input type="text" name="address"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<br>

<?php
if (isset($_POST["submit"])) {
    echo "<h3>Submitted Information:</h3>";
    echo "First Name: " . $_POST["firstname"] . "<br>";
    echo "Middle Name: " . $_POST["middlename"] . "<br>";
    echo "Last Name: " . $_POST["lastname"] . "<br>";
    echo "Date of Birth: " . $_POST["dob"] . "<br>";
    echo "Address: " . $_POST["address"] . "<br>";
}
?>

</body>
</html>
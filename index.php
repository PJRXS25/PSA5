<!DOCTYPE html>
<html>
<head>
    <title>PHP Activity Homepage</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
        }

        .container {
            width: 500px;
            margin: auto;
            background-color: white;
            padding: 25px;
            margin-top: 60px;
            border: 1px solid #ccc;
        }

        h1 {
            color: #006400;
        }

        a {
            display: block;
            background-color: #006400;
            color: white;
            text-decoration: none;
            padding: 12px;
            margin: 10px;
            border-radius: 5px;
        }

        a:hover {
            background-color: #008000;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>PHP Web Forms Activity</h1>
    <p>Select an activity below:</p>

    <a href="get_info.php">Personal Information using GET</a>
    <a href="post_info.php">Personal Information using POST</a>
    <a href="cookies.php">Personal Information using Cookies</a>
    <a href="FavoriteColor.php">Favorite Colors using Session</a>
</div>

</body>
</html>
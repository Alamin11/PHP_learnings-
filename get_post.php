<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post Method</title>
</head>

<body>
    <!-- //for get method -->
    <form action="get_post.php" method="get">
        <label for="fname">First name:</label><br>
        <input type="text" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" name="lname"><br>
        <input type="submit" value="Sign in">
    </form>
    <!-- //for post method -->
    <!-- aa -->
</body>

</html>


<?php
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$fulName = "{$fname} {$lname}";
echo "your ful name is {$fulName}<br>";
$name = $_POST["name"];
$email = $_POST["email"];
echo "{$name}<br>";
echo $email;
?>
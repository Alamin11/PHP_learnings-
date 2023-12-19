<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset or empty functions</title>
</head>

<body>
    <form action="empty.php" method="post">
        <label for="name">Username:</label>
        <input type="text" name="name"> <br>
        <label for="pass">Password:</label>
        <input type="password" name="pass"><br>
        <input type="submit" value="Log in">
    </form>
</body>

<?php
//isset(); returns true if the variable is declared and value is set
//empty(); returns true if the variable is not declared, null, false
$userName = $_POST("name");
echo "{$userName}";
// if (isset($userName)) {
//     echo "The value is set";
// } else {
//     echo "Please set the value properly";
// }
?>

</html>
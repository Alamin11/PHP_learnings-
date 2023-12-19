<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset or empty functions in php</title>
</head>

<body>
    <form action="issetOremptyFunction.php" method="post">
        <label for="userName">Username: </label>
        <input type="text" name="username"><br>
        <label for="password">Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>
<?php
// foreach ($_POST as $key => $value) {
//     echo "{$key} = {$value} <br>";
// }
$userName = $_POST["username"];
$password = $_POST["password"];
$login = $_POST["login"];
// $isset = isset($userName);
// // echo "{$isset}";
// // echo isset($userName);
// echo empty($userName);
//      

if (isset($login)) {
    if (empty($userName)) {
        echo "Please enter your name";
    } elseif (empty($password)) {
        echo "Enter the password correctly";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize or validate input </title>
</head>

<body>
    <form action="sanitizeOrValidate.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username"><br>
        <label for="email">Email:</label>
        <input type="email" name="email"><br>
        <label for="email">Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($email)) {
        echo "Input correct email";
    } else {
        echo $email;
    }
    // echo $username . "<br>";
    echo $email . "<br>";
    // echo $pass;
}
?>
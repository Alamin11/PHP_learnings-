<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session login</title>
</head>

<body>
    <h2>This is session login page</h2>
    <form action="session.php" method="post">
        Username: <br>
        <input type="text" name="username"><br>
        Password: <br>
        <input type="password" name="password"><br>
        <input type="submit" value="Login" name="login">
    </form>
</body>

</html>
<?php
// $_SESSION["username"] = "Imtinan Ariz";
// $_SESSION["password"] = "123456";
// echo $_SESSION["username"] . "<br>";
// echo $_SESSION["password"];
if (isset($_POST["login"])) {

    if (
        !empty($_POST["username"]) &&
        !empty($_POST["password"])
    ) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        echo $_SESSION["username"];
        echo $_SESSION["password"];

        header("location: home.php");
    } else {
        echo "Missing your username/password";
    }
}

?>
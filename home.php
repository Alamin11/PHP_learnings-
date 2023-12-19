<?php
session_start();
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <h2>This is session home page</h2>
    <p>You will be redirected frome here to <a href="session.php">login page</a></p>
    <form action="home.php" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
</body>

</html>
<?php
if (isset($_POST["logout"])) {
    session_destroy();
    header("location:session.php");
}
?>
<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to fakebook</h2>
        Username:<br>
        <input type="text" name="username" id=""><br>
        Password:<br>
        <input type="password" name="pass" id=""><br>
        <input type="submit" value="Register" name="register"><br>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($username)) {
        echo "Enter a username please";
    } elseif (empty($password)) {
        echo "Please enter a password";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, password) VALUES('$username', '$hash')";
        try {
            mysqli_query($conn, $sql);
            echo "Successfully registered!";
        } catch (mysqli_sql_exception) {
            echo "The name is already taken";
        }
    }
}
mysqli_close($conn);
?>
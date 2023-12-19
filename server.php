<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGB variable - _SERVER</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        Username:<br>
        <input type="text" name="username" id="">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>
<?php
// foreach ($_SERVER as $key => $value) {
//     echo "{$key} = {$value}<br>";
// }
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    echo $username . "<br>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "hello";
}

?>
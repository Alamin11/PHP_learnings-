<?php
include("database.php");
$username = "Farhan Imtinan";
$pass = "ariz2";
$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql1 = "ALTER TABLE users MODIFY password VARCHAR";
$sql = "INSERT INTO users(name, password) VALUES('$username', '$hash')";
try {
    mysqli_query($conn,$sql1);
    mysqli_query($conn, $sql);
} catch (mysqli_sql_exception) {
    echo "Input valid name / password";
}

mysqli_close($conn);

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>

<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="foods[]" id="" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" id="" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" id="" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="foods[]" id="" value="Noodles">Noodles<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    // if (isset($_POST["foods"])) {
    $foods = $_POST["foods"];
    foreach ($foods as $food) {
        echo $food . "<br>";
    }
}
?>
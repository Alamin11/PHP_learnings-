<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math functions</title>
</head>

<body>
    <form action="math_functions.php" method="post">
        <label for="x">x:</label><br>
        <input type="text" name="x"><br>
        <label for="x">y:</label><br>
        <input type="text" name="y"><br>
        <label for="x">z:</label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="calculate">
    </form>
    <?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    $solution = null;
    ///finding absolute value of a given number 
    // $solution = abs($x); 
    ///Rounding a fractional number
    // $solution = round($x);
    ///floor function to round a number to a lower number
    // $solution = floor($x);
    ///Ceil function to round a number to upper limit
    // $solution = ceil($x);
    /// finding a square root of a number
    // $solution = sqrt($x);
    ///Power of a number
    // $solution = pow($x, $y);
    ///Finding maximum value among few number
    // $solution = max($x, $y, $z);
    ///Finding minimum value among few number
    // $solution = min($x, $y, $z);
    ///value of pi
    // $solution = pi();
    /// Random number generating
    $solution = rand(1, 6);





    echo $solution;
    ?>
</body>

</html>
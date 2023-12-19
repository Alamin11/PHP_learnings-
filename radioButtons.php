<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>

<body>
    <form action="radioButtons.php" method="post">
        <input type="radio" value="visa" name="credit-card">Visa<br>
        <input type="radio" value="american-express" name="credit-card">American Express<br>
        <input type="radio" value="paypall" name="credit-card">Paypall<br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>

</html>
<?php
if (isset($_POST["confirm"])) {
    $credit_card = null;
    if (isset($_POST["credit-card"])) {
        $credit_card = $_POST["credit-card"];
        // echo $credit_card;
    }
    // if ($credit_card == "visa") {
    //     echo "You have selected {$credit_card}";
    // } else if ($credit_card == "american-express") {
    //     echo "You have selected {$credit_card}";
    // } else if ($credit_card == "paypall") {
    //     echo "You have selected {$credit_card}";
    // }else{
    //     echo "Please make a selection first";
    // }
    switch ($credit_card) {
        case "visa":
            echo "You have selected {$credit_card}";
            break;
        case "american-express":
            echo "You have selected {$credit_card}";
            break;
        case "paypall":
            echo "You have selected {$credit_card}";
            break;
        default:
            echo "make a selection first";
    }
}

?>
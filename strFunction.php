<?php
$username = array("Farhan", "Imtinan", "Ariz");
$phoneNumber = "123-456-7890";
$ucUsername = "Farhan Imtinan";
// make lowercase
// $lcUsername = strtolower($ucUsername);
// echo $lcUsername, "<br>";
// $ucUsername = strtoupper($lcUsername);
// echo $ucUsername, "<br>";
// remove white space from string
// echo trim($ucUsername);
// add any character of specified amount after a string
// $ucUsername = str_pad($ucUsername, 32, ".:.", STR_PAD_BOTH);
// $phoneNumber = str_replace("-", "", $phoneNumber);
// $phoneNumber = strrev($phoneNumber);
// $ucUsername = explode(" ", $ucUsername);
// foreach ($ucUsername as $name) {
//     echo $name . "<br>";
// }
$username = implode(" ", $username);
echo $username;

<?php
$assArray = array("element1" => 1, "element2" => 2, "element3" => 3);
// for ($i = 1; $i < 4; $i++) {
//     echo "{$assArray["element$i"]} <br>";
// }
// foreach ($assArray as $key => $value) {
//     echo "{$key} - {$value} <br>";
// }

$capitals = array("Bangladesh" => "Dhaka", "India" => "new Deli", "Pakisthan" => "Islamabad", "Srilanka" => "Kalombo", "Nepal" => "Kathmundu", "Vutan" => "Thimpu", "Mayanmar" => "Naypyidaw");

foreach ($capitals as $country => $capital) {
    echo "Capital of {$country} is {$capital}.<br>";
}
// Getting the key of an associative array using array_keys() function
$keys = array_keys($capitals);
foreach ($keys as $key) {
    echo "{$key} <br>";
}
// Getting the value of an associative array using array_values() function
$values = array_values($capitals);
foreach ($values as $value) {
    echo "{$value} <br>";
}
// array_flip() is used to flip the keys and values
// array_reverse() is used to reverse the array
// count() to calculate the number of elements in an array
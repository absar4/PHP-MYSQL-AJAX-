An array stores multiple values in one single variable:
Indexed arrays - Arrays with a numeric index
Example
<?php
$fruits = array("apple", "mange", "cherry");
echo "I love to eat " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";
?>

OR

<?php
$fruits = ["apple", "mange", "cherry"];
echo "I love to eat " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";
?>


In PHP, there are three types of arrays:

Associative arrays - Arrays with named keys
has key value
<?php
$fruits = [
    1=>"apple",
    2=>"apple",
    4=>"apple",
    "apple",
];
var_dump($fruits);
$fruits = [
    "first"=>"apple",
    "second"=>"apple",
    "third"=>"apple",
    "apple",
];
var_dump($fruits);
var_dump($fruits["third"]);
?>


Multidimensional arrays - Arrays containing one or more arrays

<?php
echo "<br>";
$fruits = [
    ["first"=>"apple", "qty"=>2],
    "myfruit"=>["second"=>"mango", "qty"=>5],
    ["third"=>"grapes", "qty"=>100],
];
var_dump($fruits["myfruit"]["qty"]);
?>





<?php

$fruits = [
    "first"=>"apple",
    "second"=>"mango",
    "third"=>"banana",
    "grapes"
];



foreach ($fruits as $value) {
    echo "$value ";
}

echo "<br><br>";
echo "<br><br>";


$fruits = [
    "first"=>"apple",
    "second"=>"mango",
    "third"=>"banana",
    "grapes",
];



foreach ($fruits as $key => $value) {
    echo "$key = $value, ";
}



echo "<br><br>";
echo "<br><br>";
echo "<br><br>";










$fruits = [
    ["first"=>"apple", "qty"=>2],
    "myfruit"=>["second"=>"mango", "qty"=>5],
    ["third"=>"grapes", "qty"=>100],
];


foreach ($fruits as $values) {
    foreach ($values as $value) {
        echo "$value,";
    }
}
?>
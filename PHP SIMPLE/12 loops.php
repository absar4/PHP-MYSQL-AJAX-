<!-- PHP Loops -->
Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.

Loops are used to execute the same block of code again and again, as long as a certain condition is true.

In PHP, we have the following loop types:

1. while - loops through a block of code as long as the specified condition is true
2. do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
3. for - loops through a block of code a specified number of times
4. foreach - loops through a block of code for each element in an array

=================================================================================


while loop

syntax
while (condition is true) {
  code to be executed;
}


<?php
// $x = 1;

// while($x <= 5) {
//   echo "The number is: $x <br>";
//   $x++;
// }
?>

👀=> Challange to make mathematics tables 

<?php
$tableOf = 2;
echo "$tableOf x 1 = " . $tableOf * 1;
echo "$tableOf x 2 = " . $tableOf * 2;
echo "$tableOf x 3 = " . $tableOf * 3;
echo "$tableOf x 4 = " . $tableOf * 4;
echo "$tableOf x 5 = " . $tableOf * 5;
echo "$tableOf x 6 = " . $tableOf * 6;
echo "$tableOf x 7 = " . $tableOf * 7;
echo "$tableOf x 8 = " . $tableOf * 8;
echo "$tableOf x 9 = " . $tableOf * 9;
echo "$tableOf x 10 = " . $tableOf * 10;
?>

👀=> Challange to make mathematics tables with loop




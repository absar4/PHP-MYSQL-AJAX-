<!-- Conditional statements are used to perform different actions based on different conditions. -->
<!-- PHP Conditional Statements -->
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

1. if statement - executes some code if one condition is true
2. if...else statement - executes some code if a condition is true and another code if that condition is false
3. if...elseif...else statement - executes different codes for more than two conditions
4. switch statement - selects one of many blocks of code to be executed

if (condition) {
  code to be executed if condition is true;
}

<?php
$age = 20;

if ($age >= 18) {
  echo "You can go to the Cinema";
}
?>
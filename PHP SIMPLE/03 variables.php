<!-- 
    In PHP, a variable starts with the $ sign, followed by the name of the variable:

 -->
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?>

<!-- 
    Rules for PHP variables:

        A variable starts with the $ sign, followed by the name of the variable
        A variable name must start with a letter or the underscore character
        A variable name cannot start with a number
        A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
        Variable names are case-sensitive ($age and $AGE are two different variables)
 -->

<!-- Using Variables with 2 methods -->
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>

<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>


<!-- variables scope  -->

<!-- In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local
global
static
Global and Local Scope
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

Example
Variable with global scope: -->

<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<!-- 
A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
Example
Variable with local scope: -->

<?php
function myTest1() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

NOTE : You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.

<!-- PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):

Example -->
<?php
$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
}

myTest2();
echo $y; // outputs 15
?>


<!-- PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

The example above can be rewritten like this:

Example -->
<?php
$x = 5;
$y = 10;

function myTest3() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest3();
echo $y; // outputs 15
?>

AND LAST BUT NOT LEAST


<!-- PHP The static Keyword

Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:

Example -->
<?php
function myTest4() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest4();
myTest4();
myTest4();
?>
<!-- Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.

Note: The variable is still local to the function. -->




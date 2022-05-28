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
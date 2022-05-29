<!-- PHP Operators
Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators 
PHP Arithmetic Operators
The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

Operator	Name	        Example	    Result
+	        Addition	    $x + $y	    Sum of $x and $y	
-	        Subtraction	    $x - $y	    Difference of $x and $y	
*	        Multiplication	$x * $y	    Product of $x and $y	
/	        Division	    $x / $y	    Quotient of $x and $y	
%	        Modulus	        $x % $y	    Remainder of $x divided by $y	
**	        Exponentiation	$x ** $y	Result of raising $x to the $y'th power

-->

<!-- 
PHP Assignment Operators
The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.

Assignment	    Same as...	    Description	Show it
x = y	        x = y	        The left operand gets set to the value of the expression on the right	
x += y	        x = x + y	    Addition	
x -= y	        x = x - y	    Subtraction	
x *= y	        x = x * y	    Multiplication	
x /= y	        x = x / y	    Division	
x %= y	        x = x % y	    Modulus 

-->

<!-- 
    PHP Comparison Operators:
The PHP comparison operators are used to compare two values (number or string):

Operator    Name	                    Example	        Result	Show it
==	        Equal	                    $x == $y	    Returns true if $x is equal to $y	
===	        Identical	                $x === $y	    Returns true if $x is equal to $y, and they are of the same type	
!=	        Not equal	                $x != $y	    Returns true if $x is not equal to $y	
<>	        Not equal	                $x <> $y	    Returns true if $x is not equal to $y	
!==	        Not identical	            $x !== $y	    Returns true if $x is not equal to $y, or they are not of the same type	
>	        Greater than	            $x > $y	        Returns true if $x is greater than $y	
<	        Less than	                $x < $y	        Returns true if $x is less than $y	
>=	        Greater than or equal to	$x >= $y	    Returns true if $x is greater than or equal to $y	
<=	        Less than or equal to	    $x <= $y	    Returns true if $x is less than or equal to $y 

-->
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>  
<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>  
<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>  
<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
?>  
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>  
<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?>  

<?php
$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y
?>  


<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?>  


<?php
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
?> 

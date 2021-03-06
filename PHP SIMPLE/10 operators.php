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


    PHP Comparison Operators:
The PHP comparison operators are used to compare two values (number or string):

Operator    Name	                    Example	        Result	Show it
==	        Equal	                    $x == $y	    Returns true if $x is equal to $y	
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?> 

===	        Identical	                $x === $y	    Returns true if $x is equal to $y, and they are of the same type	
<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>

!=	        Not equal	                $x != $y	    Returns true if $x is not equal to $y	
<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>  

<>	        Not equal	                $x <> $y	    Returns true if $x is not equal to $y	
<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
?>  

!==	        Not identical	            $x !== $y	    Returns true if $x is not equal to $y, or they are not of the same type	
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>  

>	        Greater than	            $x > $y	        Returns true if $x is greater than $y	
<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?>  

<	        Less than	                $x < $y	        Returns true if $x is less than $y	
<?php
$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y
?>  

>=	        Greater than or equal to	$x >= $y	    Returns true if $x is greater than or equal to $y	
<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?>  


<=	        Less than or equal to	    $x <= $y	    Returns true if $x is less than or equal to $y 
<?php
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
?> 




PHP Logical Operators
The PHP logical operators are used to combine conditional statements.

Operator	Name	    Result	Show it
and	And	    $x and $y	True if both $x and $y are true	
<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>  
or	Or	    $x or $y	True if either $x or $y is true	
<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?>  

xor	Xor	    $x xor $y	True if either $x or $y is true, but not both	

<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>  

&&	And	    $x && $y	True if both $x and $y are true	
<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?>  

||	Or	    $x || $y	True if either $x or $y is true	
<?php
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?> 

!	Not	    !$x	        True if $x is not true	
<?php
$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
}
?>      




PHP String Operators
PHP has two operators that are specially designed for strings.

Operator	Name	                    Result
.	        Concatenation	            $txt1 . $txt2	Concatenation of $txt1 and $txt2	

<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>  

.=	      Concatenation assignment	    $txt1 .= $txt2	Appends $txt2 to $txt1

<?php
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
?>  








PHP Array Operators
The PHP array operators are used to compare arrays.

Operator	Name	        Result	
+	        Union	        $x + $y	    Union of $x and $y	

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
?>  

==	        Equality	    $x == $y	Returns true if $x and $y have the same key/value pairs	

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
?>  
===	        Identity	    $x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	    
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?>  

!=	        Inequality	    $x != $y	Returns true if $x is not equal to $y	
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);
?>  


<>	        Inequality	    $x <> $y	Returns true if $x is not equal to $y	

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);
?>  

!==	        Non-identity	$x !== $y	Returns true if $x is not identical to $y	

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
?>  

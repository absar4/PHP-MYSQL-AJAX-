<!-- strlen() - Return the Length of a String
The PHP strlen() function returns the length of a string.
Example
Return the length of the string "thequickcode": -->
<?php
echo strlen("thequickcode"); // outputs 12
?>



<!-- str_word_count() - Count Words in a String
The PHP str_word_count() function counts the number of words in a string.
Example
Count the number of word in the string "thequickcode": -->
<?php
echo str_word_count("thequickcode"); // outputs 2
?>



<!-- strrev() - Reverse a String
The PHP strrev() function reverses a string.
Example
Reverse the string "thequickcode": -->
<?php
echo strrev("thequickcode"); // outputs !dlrow olleH
?>


<!-- 
strpos() - Search For a Text Within a String
The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

Example
Search for the text "world" in the string "Hello world!": 
Tip: The first character position in a string is 0 (not 1).
-->

<?php
echo strpos("Hello world!", "world"); // outputs 6
?>



<!-- str_replace() - Replace Text Within a String
The PHP str_replace() function replaces some characters with some other characters in a string.

Example
Replace the text "theslow" with "thequickcode": -->
<?php
$string_to_change = "this is youtube channel theslowcode";
echo str_replace("theslowcode", "thequickcode", $string_to_change);
?>

<?php
//reference:-https://www.toptal.com/php/interview-questions

// 1) Consider the following code:
/* 
$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2)) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
} 
*/

//The problem here is that strpos() returns the starting position index of $str2 in $str1 (if found), otherwise it returns false. So in this example, strpos() returns 0 (which is then coerced to false when referenced in the if statement). That’s why the code doesn’t work properly
//-----------------------------------------------------------------------------------------

// 2)What will be the output of the code below and why?
/* 
$x = 5;
echo $x;
echo "<br />";
echo $x+++$x++;//or $x++ + $x++//5(next time 6)+6//(next time 7)
echo "<br />";
echo $x;
echo "<br />";
echo $x---$x--;// or $x-- - $x-- //7(next time 6)-6 (next time 5)
echo "<br />";
echo $x;
*/

//=====================================================================================
// 3)What will be the values of $a and $b after the code below is executed? Explain your answer.
/* 
$a = '1';
$b = &$a;
$b = "2$b";
echo $a.",".$b; 
*/

//=====================================================================================
//4)What will be the output of each of the statements below and why?
/* var_dump(0123 == 123);
var_dump('0123' == 123);
var_dump('0123' === 123); */

/* var_dump(0123 == 123) will output bool(false) because the leading 0 in 0123 tells the PHP interpreter to treat the value as octal (rather than decimal) value, and 123 octal is equal to 83 decimal, so the values are not equal.

var_dump('0123' == 123) will output bool(true) since the string 0123 will automatically be coerced to an integer when being compared with an integer value. Interestingly, when this conversion is performed, the leading 0 is ignored and the value is treated as a decimal (rather than octal) value, so the values are bother 123 (decimal) and are therefore equal.

var_dump('0123' === 123) outputs bool(false) since it performs a more strict comparison and does not do the automatic type coercion of the string to an integer. */

//====================================================================================

// 5)What will this code output and why?
/* $x = true and false;
var_dump($x); */


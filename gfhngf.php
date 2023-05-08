<!DOCTYPE html>
<html>
<body>

<?php
echo "Q1";
echo strtoupper("Hello WORLD!");
echo "<br>";

echo strtolower("Hello WORLD.");
echo "<br>";


echo ucfirst("hello world!");
echo "<br>";


echo ucwords("hello world");
echo "<br>";

echo "Q2";
$DATE = "20091231190903";

echo date("Y-m-d H:i:s",(strtotime($DATE)));
echo "<br>";

echo "Q3";
$string = 'The lazy fox jumped over the fence';

if (str_contains($string, 'lazy')) {
    echo "The string 'lazy' was found in the string\n";
}
echo "<br>";

echo "Q4";
$url = "https://remote-url-path/filename.jpg";
echo basename($url);
echo "<br>";

 // Define Email Address

 echo "Q5";
 $email  = 'info@orange.com';
  
 // Get the username by slicing string
 $username = strstr($email, '@', true);
 
 // Display the username
 echo $username."\n";
 echo "<br>";

 echo "Q6";
 $email = substr($email, -3);

echo  $email;

echo "<br>";

echo "Q7";
?>
<?php

function rand_string( $length ) {

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
return substr(str_shuffle($chars),0,$length);

}

echo rand_string(8);
echo "<br>";

?>

<?php
echo "Q8";
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 2)."\n"; 
?>
<?php
echo "Q9";
echo "<br>";
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>
<!-- 10. 

 Sample Output: "Twinkle, twinkle, little star." Expected Result: array (4) ([0]=> string (30) "Twinkle, " [1]=> string (26) twinkle," [2] => string (27) twinkle" [3]=> string (26) little star.") -->


 <?php
  echo "<br>";
 echo "Q10";

$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
?>
<?php

echo "<br>";
echo "Q11";
$str = 'a';
echo ++$str; // prints 'b'

$str = 'z';
echo ++$str; // prints 'aa' 
?>
<?php
echo "<br>";
echo "Q12";
$str = "I am feeling lucky today";

$new_str = substr_replace($str, "very ", 13,0);

print $new_str; // I am feeling very lucky today
?>
<?php
  echo "<br>";
  echo "Q13";
  // Store the number string with
  // leading zeros into variable
  $str = "00775505";
    
  // Passing the string as first
  // argument and the character
  // to be removed as second
  // parameter
  $str = ltrim($str, "0"); 
            
  // Display the result
  echo $str;
  echo "<br>";
$str1 = "200543012";
$x = str_replace( '0', '', $str1);

  echo $x."\n";
   
  ?>
  <?php
  echo "<br>";
  echo "Q14";
  $string = 'Hello World';
$newString = str_replace('Hello ', '', $string); // $newString is now 'World'

echo $newString;
?>
<!-- 15. Write a PHP script to remove trailing dashes from a string.

 Original String: 'The quick brown fox jumps over the lazy dog---' Expected Output: 'The quick brown fox jumps over the lazy dog' -->

 <?php
 echo "<br>";
 echo "Q15";
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
?>
<?php
echo "<br>";
echo "Q16";
  // PHP program to Remove
  // Special Character From String
 
  // Function to remove the special
  function RemoveSpecialChar($str) {
 
      // Using str_replace() function
      // to replace the word
      $res = str_replace( array( '\'', '"',
      ',' , ';', '<', '>' ), ' ', $str);
 
      // Returning the result
      return $res;
      }
 
  // Given string
  $str = "Example,to remove<the>Special'Char;";
 
  // Function calling
  $str1 = RemoveSpecialChar($str);
 
  // Printing the result
  echo $str1;
?>
<?php
echo "<br>";
echo "Q17";
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>
<?php
echo "<br>";
echo "Q18";
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>
<?php
echo "<br>";
echo "Q19";
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>
<?php
function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 47;
$flag_val = check_prime($num);
if ($flag_val == 1)
   echo "It is a prime number";
else
   echo "It is a non-prime number"
?>

</body>
</html>

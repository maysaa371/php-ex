<html>
    <body>
<form method="post">
  <input type="number" name="num1" required>
  <select name="op" required>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" name="num2" required>
  <input type="submit" name="submit" value="Calculate">
</form>

<?php
  echo "<h2> Q1</h2> <br>";
   function year_check($my_year){
      if ($my_year % 400 == 0)

         print("It is a leap year");
      else if ($my_year % 100 == 0)
         print("It is not a leap year");
      else if ($my_year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   $my_year = 2024;
   year_check($my_year);

?>
<?php
  echo "<h2> Q2</h2> <br>";
function checkTemp($temp){
if($temp>20){
    echo "The season is summer ";
}
else{
    echo "The season is winter ";
}
}
checkTemp(50);
echo "<br>";
?>
<?php
  echo "<h2> Q3</h2> <br>";
function sumNum($num1,$num2){
    $sum=0;
if($num1===$num2){
   $sum=($num1+$num2)*3;
   echo $sum;
}
else{
    $sum=$num1+$num2;
    echo $sum;
}
}
sumNum(20,20);
echo "<br>";
?>
<?php
  echo "<h2> Q4</h2> <br>";
function sumNum2($num1,$num2){
    $sum=0;
    $sum=$num1+$num2;
if($sum=30){
  echo $sum;
  
}
else{
   return false;
   
}
}
sumNum2(10,20);
echo "<br>";
?>
<?php
  echo "<h2> Q5</h2> <br>";
function muliplyThree($num1){
  
if($num1%3==0){

 echo "true";


  
}
else{
   echo "false";
   
}
}
muliplyThree(50);
echo "<br>";
?>
<?php 
  echo "<h2> Q6</h2> <br>";
?>
<?php
  echo "<h2> Q7</h2> <br>";
$num1=20;
$num2=15;
$num3=22;
if($num1>$num2 && $num1>$num3){
  echo $num1;
}
else{
  if($num2>$num1 && $num2>$num3){
    echo $num2;
  }
  else
    echo $num3;
} 
echo "<br>";
?>
?>
<!-- 8. Write PHP script to calculate the monthly electricity bill according to these rules

a. For first 50 units -2.50 JOD/Unit b. For next 100 units -5.00 JOD/Unit

c. For next 100 units - 6.20 JOD/Unit

d. For units above 250-7.50 JOD/Unit -->
<?php
   echo "<h2> Q8</h2> <br>";

$units = 300; 

if ($units <= 50) {
  $bill = $units * 2.5;
} elseif ($units <= 150) {
  $bill = 50 * 2.5 + ($units - 50) * 5;
} elseif ($units <= 250) {
  $bill = 50 * 2.5 + 100 * 5 + ($units - 150) * 6.2;
} else {
  $bill = 50 * 2.5 + 100 * 5 + 100 * 6.2 + ($units - 250) * 7.5;
}

echo "Your electricity bill for $units units is: $bill JOD";
?>
<!-- 9. Write php script to make a calculator, the calculator should contain the four main operations

e. Addition

f. Subtraction g. Multiplication

h. Division. -->
<?php
   echo "<h1> Q9</h1> <br>";

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the values entered by the user
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $op = $_POST['op'];

  // Perform the selected operation
  switch ($op) {
    case '+':
      $result = $num1 + $num2;
      break;
    case '-':
      $result = $num1 - $num2;
      break;
    case '*':
      $result = $num1 * $num2;
      break;
    case '/':
      $result = $num1 / $num2;
      break;
    default:
      $result = 0;
      break;
  }
}
?>
<?php
if (isset($result)) {
  echo "The result is: " . $result;
}
?>
<!-- 10. Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

 Sample Input: 15

 Sample Output: 'is no eligible to vote! -->
 <?php
   echo "<h2> Q10</h2> <br>";

  $age =15;
  // Check if the person is eligible to vote
  if ($age >= 18) {
    echo "This person is eligible to vote!";
  } else {
    echo "This person is not eligible to vote!";
  }

?>
<!-- 
11. Write php script to check whether a number is positive, negative or zero

 Sample Input: -60

 Sample Output: 'Negative' -->
 <?php
    echo "<h2> Q11</h2> <br>";

$num = -10;

// Check if the number is positive, negative, or zero
if ($num > 0) {
  echo "Positive";
} else if ($num < 0) {
  echo "Negative";
} else {
  echo "Zero";
}
?>
<!-- 12. Write a PHP to find the grade for the student, after calculating the average of his score in all the subject

Sample Inputs: [60,86,95,63,55,74,79,62,50] Sample Output: 'D' -->

<?php
    echo "<h2> Q12</h2> <br>";


$scores = array(90, 86, 95, 90, 55, 74, 79, 62, 99);


$average = array_sum($scores) / count($scores);

switch (true) {
  case ($average >= 90):
    $grade = 'A';
    break;
  case ($average >= 80):
    $grade = 'B';
    break;
  case ($average >= 70):
    $grade = 'C';
    break;
  case ($average >= 60):
    $grade = 'D';
    break;
  case ($average >= 50):
    $grade = 'E';
    break;
  default:
    $grade = 'F';
}

// Output the grade
echo "The student's grade is: " . $grade;
?>
</body>
</html>
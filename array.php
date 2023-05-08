<?php

//Question  1
// 1. Write a script to generate the following paragraph
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red
// carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. -
// Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from the $colors array.
echo "Q1:---------------------------------------------------------- <br>";
echo '<br>';
$color=array('red','green','white');

function arrayTest($color){
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0]
    carpet, the $color[1] lawn, the $color[2] house, the leaden sky. The new president and his first lady. -
    Richard M. Nixon";
    
}
arrayTest($color);
echo '<br>';

// . $colors = array('white', 'green', 'red')
// Write a PHP script that will display the colors as unordered list :
// Expected Output:
// ● green
// ● red
// ● white
echo "Q2:---------------------------------------------------------- <br>";
echo '<br>';

$color=array('white','green','red');
function arrayTest2($color){
    echo "<ul>";
    foreach($color as $colors){
        echo "<li>".$colors."</li>";
    }
}
sort($color);
arrayTest2($color);
echo '<br>';
?>
<?php
// 3. $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
// "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
// "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
// "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
// "Spain"=>"Madrid" );
// Create a PHP script to displays the capital and country name from the above array $cities. Sort
// the list by the capital of the country.

echo "Q3:---------------------------------------------------------- <br>";
echo '<br>';
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid" );
function city($cities){
    foreach($cities as $country => $capital){
        echo 'The capital of '  . $country. ' is '  . $capital;
        echo '<br>';
    }
}

asort($cities);
city($cities);
echo '<br>';
?>
<?php
// $color = array (4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to display the first element of the above array.
echo "Q4:---------------------------------------------------------- <br>";
echo '<br>';
$color=array(4 => 'white', 6 => 'green', 11 =>'red');
echo $color[4];
?>
<?php 

// 5. Write a PHP script that inserts a specific new item in an array in any position.
// Sample Input:
// Array 1 2 3 4 5
// Location: 4
// New Item: $
// Expected Output: 1 2 3 $ 4 5
echo "Q5:---------------------------------------------------------- <br>";
echo '<br>';
$numbers = array(1, 2, 3, 4, 5);

// define the position where the new item should be inserted
$position = 3;

// define the new item to be inserted
$newItem = '$';

// insert the new item at the specified position in the array
array_splice($numbers, $position, 0, $newItem);

// print out the modified array
foreach ($numbers as $number) {
    echo $number . ' ';
}
echo '<br>';
?>
<?php
// 6. Write a PHP script to sort the following associative array depending on the key value [asc] :
// Sample Input:
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"
// );
// Expected Output:
// c = apple
// b = banana
// d = lemon
// a = orange
echo "Q6:---------------------------------------------------------- <br>";
echo '<br>';
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $x => $fruit ){

echo $x. '=' .$fruit .'<br>';
}
?>

<?php
// rite a PHP script to calculate and display the average temperature for the recorded reads, also
// the script should display the list of the five lowest and the five highest temperatures
// Sample Input: 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
// 65, 64, 68, 73, 75, 79, 73
// Expected Output:
// Average Temperature is: 70.6
// List of seven lowest temperatures: 60, 62, 63, 63, 64,
// List of seven highest temperatures: 76, 78, 79, 81, 85,
echo "Q7:---------------------------------------------------------- <br>";
echo '<br>';
$temp=array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73);
$avg=array_sum($temp)/count($temp);
echo $avg;
asort($temp);
echo '<br>';
print_r ($temp);
$first = array_slice($temp , 0 ,5);
$last= array_slice($temp , -5);

echo"Average Temperature is:".$avg."<br>";
// print_r($first);
echo'List of five lowest temperatures: ' . implode(', ', $first) . '<br>';
echo 'List of five highest temperatures: ' . implode(', ', $last). '<br>';
echo '<br>';
?>

<?php
// Write a PHP program to merge the following two arrays.
echo "Q8:---------------------------------------------------------- <br>";
echo '<br>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo "<pre>";
print_r(array_merge($array1,$array2));
echo '<br>';
?>
<?php
// 9. Write a PHP function to change the following array's and convert all the strings to upper case.
// Sample Input:
// $colors = array("red","blue", "white","yellow");
// Expected Output :
// Array
// (
// RED
// BLUE
// WHITE
// YELLOW
// )
echo "Q9:---------------------------------------------------------- <br>";
echo '<br>';
function upperCase($colors){

$upper =array_map('strtoupper',$colors);
foreach($upper as $uppers => $x){
echo($x);
echo '<br>';
}
}
$colors = array("red","blue", "white","yellow");
upperCase($colors);
echo '<br>';
?>
<?php
// 9. Write a PHP function to change the following array's and convert all the strings to upper case.
// Sample Input:
// $colors = array("red","blue", "white","yellow");
// Expected Output :
// Array
// (
// RED
// BLUE
// WHITE
// YELLOW
// )
echo "Q10:---------------------------------------------------------- <br>";
echo '<br>';
function lowerCase($colors){

$upper =array_map('strtolower',$colors);
foreach($upper as $uppers => $x){
echo($x);
echo '<br>';
}
}
$colors = array("RED","BLUE", "WHITE","YELLOW");
lowerCase($colors);
echo '<br>';
?>
<?PHP
// 11. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248
echo "Q11:---------------------------------------------------------- <br>";
echo '<br>';
$Output=array( 200,204,208,212,216,220,224,228,232,236,240,244,248);
function output($Output){
    foreach($Output as $value){
    if ($value%4==0){
        echo $value .'  ';
       
    }
    }
}
output($Output);
echo "<br>";
?>
<?PHP
// 12. Write a PHP script to get the shortest/longest string length from an array.
// Sample Input:
// $words = array("abcd","abc","de","hjjj","g","wer")
// Expected Output :
// The shortest array length is 1. The longest array length is 4.
echo "Q12:---------------------------------------------------------- <br>";
echo '<br>';
$words = array("abcd","abc","de","hjjj","g","wer");
function lengthArray($word){
   foreach($word as $value){
    $shortest=min(array_map('strlen',$word));
    $longest=max(array_map('strlen',$word));
   
   }
   echo 'The shortest array length is  '. $shortest .'<br>';
   echo 'The longest array length is  '. $longest;
    }

lengthArray($words);
echo "<br>";
?>
<?php
echo "Q13:---------------------------------------------------------- <br>";
echo '<br>';
// 13. Write a PHP script to generate unique random 10 numbers within a specific range.
// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12
$array=range(11,20);
function randomArray($array){

shuffle($array);
foreach($array as $value){
echo $value .'   ';
}
}
randomArray($array);
echo '<br>';
?>
<?php 
echo "Q14:---------------------------------------------------------- <br>";
echo '<br>';
// 14. Write a PHP script that returns the lowest integer in the array that is not 0.
$array1 = array( 2, 0, 10, 12, 6);

function lowestInt($array1){
    // $smallest=0;
    sort($array1);
foreach($array1 as $x=>$v){

$len=count($array1);
 if ($v != 0) { // Check if the current value is not 0
        echo $v;
        break; // Stop iterating once the lowest non-zero value is found
    }

    

}

}

lowestInt($array1);
echo '<br>';
?>
<?php
echo "Q15:---------------------------------------------------------- <br>";
echo '<br>';
// Write a PHP program to sort an array of positive integers using the any Sort Algorithm.
function arraySort(&$arr) {
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $max_index = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$j] > $arr[$max_index]) {
                $max_index = $j;
            }
        }
        // Swap the minimum element with the first element of unsorted subarray
        $temp = $arr[$i];
        $arr[$i] = $arr[$max_index];
        $arr[$max_index] = $temp;
    }
}

// Test the selectionSort function with the given input array
$array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
arraySort($array);
print_r($array);
echo '<br>';

?>
<?php 

echo "Q16:---------------------------------------------------------- <br>";
echo '<br>';
function floorDecimal($number, $precision, $separator) {
    $multiplier = pow(10, $precision);
    $number *= $multiplier;
    $number = floor($number);
    $number /= $multiplier;
    return number_format($number, $precision, $separator, '');
}

// Test the floorDecimal function with the given sample data
echo floorDecimal(1.155, 2, ".");
echo "<br>";
echo floorDecimal(100.25781, 4, ".");
echo "<br>";
echo floorDecimal(-2.9636, 3, ".");
echo "<br>";
?>
<?php 

echo "Q17:---------------------------------------------------------- <br>";
echo '<br>';
$list1='4,5,6,7';
$list2="4,5,6,8";
$list=implode(",",array_unique(array_merge(explode(',',$list1) ,explode(',', $list2))));
echo $list;
echo "<br>";
?>
<?php 
// 18. Write a PHP function to remove the duplicate entry from an array.
echo "Q18:---------------------------------------------------------- <br>";
echo '<br>';
$input1 = array(4, 5, 6, 7, 4, 7, 8);

$output=array_unique($input1);
print_r( $output);
echo "<br>";
?>

<?php
echo "Q19:---------------------------------------------------------- <br>";
echo '<br>';
// 9. Write a PHP Program to find if an array is a subset of another.
// sample input:
$array1 = array('a' ,'1','2','3','4');
$array2 = array('a','3');
 if (array_diff($array2,$array1)==array()){
    echo "array2 is a subset array from array1";
} else {
    echo "array2 is not a subset array from array1";
 }
 echo '<br>';

?>
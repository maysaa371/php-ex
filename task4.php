<?php
echo "Q1:---------------------------------------------------------- <br>";
echo '<br>';
$colors = array('red', 'green', 'white');
// $random_keys = array_rand($colors, 3);

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $colors[0] . " carpet, the " . $colors[1] . " lawn, the " . $colors[2] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $paragraph;
echo '<br>';

?>
<?php

echo "Q2:---------------------------------------------------------- <br>";
echo '<br>';
$colors1 = array('red', 'green', 'white');

echo "<ul>";
foreach ($colors1 as $color) {
    echo "<li> " . $color . "</li>";
}
echo "</ul>";

?>
<?php
echo "Q3:---------------------------------------------------------- <br>";
echo '<br>';
$cities= array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);
asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of " . $country . " is " . $capital . "<br>";
}
echo '<br>';
echo "Q4:---------------------------------------------------------- <br>";
echo '<br>';
?>
<?php
$color = array (4 => 'white', 6 => 'green', 11=> 'red');



echo $color[4];

?>
<?php
echo '<br>';
echo "Q5:---------------------------------------------------------- <br>";
echo '<br>';
// define an array
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

?>
<?php
echo '<br>';
echo "Q6:---------------------------------------------------------- <br>";
echo '<br>';
// define an array
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"
);
asort($fruits);
foreach ($fruits as $fruites => $word){
    echo  $fruites . "=". $word ."<br>";
}



?>
<?php
echo '<br>';
echo "Q7:---------------------------------------------------------- <br>";
echo '<br>';
// define an array
$number = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73);
$average =  array_sum($number)/count($number);
sort($number);
$first = array_slice($number , 0 ,5);
$last= array_slice($number , -5);

echo"Average Temperature is:".$average."<br>";
echo'List of five lowest temperatures: ' . implode(', ', $first) . '<br>';
echo 'List of five highest temperatures: ' . implode(', ', $last). '<br>';
?>
<?php
echo '<br>';
echo "Q8:---------------------------------------------------------- <br>";
echo '<br>';
// define an array
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo"<pre>";
print_r(array_merge($array1,$array2));
?>
<?php
echo '<br>';
echo "Q9:---------------------------------------------------------- <br>";
echo '<br>';
function uppercaseArray($array) {
    $uppercaseArray = array_map('strtoupper', $array);
    return $uppercaseArray;
}

$colors = array("red", "blue", "white", "yellow");
$uppercaseColors = uppercaseArray($colors);
print_r($uppercaseColors);




?>
<?php
echo '<br>';
echo "Q10:---------------------------------------------------------- <br>";
echo '<br>';
function lowercassarray($array) {
    $uppercaseArray = array_map('strtolower', $array);
    return $uppercaseArray;
}

$colors = array("RED","BLUE", "WHITE","YELLOW");
$lowercassarrays = lowercassarray($colors);
print_r($lowercassarrays);

?>

<?php
echo '<br>';
echo "Q11:---------------------------------------------------------- <br>";
echo '<br>';
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ", ";
    }
}

?>
<?php

//Question no.1

$color = array('white' , 'green' ,'red','blue' ,'black');

function textDisplay($color){
 echo "The memory of the scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet , the {$color[1]} lawn , the {$color[0]} house , the leaden sky. The new president and his lady
 .- Richard M. Nixon "."<br>";
}
textDisplay($color);
echo "<br>".str_repeat("*",30)."<br>";


//Question 2


$color2 = array('white' , 'green' ,'red');

function colorDisplay($color2){
"<ul>";
  for($i=0 ; $i< 3 ; $i++)
  echo "<li>".($color2[$i])."</li>";
  
  "</ul>"
  
  ;
 }
 sort($color2);
 colorDisplay($color2);
 echo "<br>".str_repeat("*",30)."<br>";
 

//Question 3

$cities = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest") ;

function cityDisplay($cities){

  foreach($cities as $x => $x_value) {
    echo "The capital of " . $x . " is " . $x_value;
    echo "<br>";
  }
  ;
 }
asort($cities);
 cityDisplay($cities);
 echo "<br>".str_repeat("*",30)."<br>";
 

//Question no.4

$x = array(1,2,3,4,5);

function deleteArray($x , $position){
for($i=0 ; $i< count($x) ; $i++){
  if($i == $position)
  unset($x[$i]);
}
print_r( $x) ;
echo "<br>"."The length of array become ".count($x)."<br>";
}
deleteArray($x ,2);
echo "<br>".str_repeat("*",30)."<br>";

 
//Question no.5
$color3 = array(4=>'white' ,6=> 'green' ,11=>'red');
function firstColor($color3){
 $first=array_key_first($color3);
 echo $color3[$first];
}
firstColor($color3);
echo "<br>".str_repeat("*",30)."<br>";


//Question no.7

function insertArray($x , $position ,$newItem){
 $before=$x[$position];
//  print_r($before) ;
  array_push($x ,$newItem);
  $Item=array_key_last($x) ;
 // print_r( $Item) ;

  $replace=$x[$Item];
// print_r($replace) ;
  
  for($i=0 ; $i< count($x) ; $i++){
    if($i == $position)
    {$x[$i]= $replace;
      $x[count($x)-1]= $before;
     continue;
    }
  }
  print_r( $x) ;
  echo "<br>"."The length of array become ".count($x)."<br>";
  }
insertArray($x ,4,"R");
echo "<br>".str_repeat("*",30)."<br>";
  




//Question no.8
$string7 = array("Sophia"=>'31' ,"Jacob"=>"41" ,"William"=>"39" , "Ramesh" =>"40");

function SortingArray($string7){

  foreach( $string7 as $x => $x_value) {
    echo "Sorting ascending key : " . $x."<br>";
  }
  echo  "<br>";
  foreach( $string7 as $x => $x_value) {
    echo "  Sorting ascending value : ". $x_value."<br>";
  
  }

  echo  "<br>";

  $string7edited =array_reverse($string7);

  foreach( $string7edited as $x => $x_value) {

    echo "  Sorting descending Keys : ". $x."<br>";
  }

  echo  "<br>";
  foreach( $string7edited as $x => $x_value) {
    echo "  Sorting descending value : ".$x_value."<br>";
  }

}

asort($string7 ); 
 SortingArray($string7);
 echo "<br>".str_repeat("*",30)."<br>";


//Question no.9

$Recorded_temperatures =array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
 
$Recorded_temperatures_max = array();
$Recorded_temperatures_min = array();

$avrg = 1;
function AvgTemp($Recorded_temperatures){

 $length =count($Recorded_temperatures);
 $avrg = (array_sum($Recorded_temperatures))/$length ;
  echo $avrg;

  echo "<br>"."the smallest Recorded_temperatures :    ";
  for($i=0 ; $i< 5 ; $i ++)
  echo $Recorded_temperatures[$i]."  ";



  echo "<br>"."the Largest Recorded_temperatures :    ";
  for($j = $length-1 ; $j > 24  ; $j -- )
  echo $Recorded_temperatures[$j]."  ";


}

sort($Recorded_temperatures);
AvgTemp($Recorded_temperatures);
 echo "<br>".str_repeat("*",30)."<br>";




//Question no.7

function insert_Array($x , $position ,$newItem){
  $before=$x[$position];
  array_push($x ,$newItem);

   $Item=array_key_last($x) ;
   $replace=$x[$Item];

   for($i=0 ; $i< count($x) ; $i++){
     if($i == $position)
     {$x[$i]= $replace;
       $x[count($x)-1]= $before;
      continue;
     }
   }
   print_r( $x) ;
   echo "<br>"."The length of array become ".count($x)."<br>";
   }
 insert_Array($x ,4,"R");
 echo "<br>".str_repeat("*",30)."<br>";
 

 //Question no.12
 $arr12 = array('A'=>'Blue' ,'B'=>'Green' ,'C'=>'Red');
function caseSensitive_Array($arr12 ,$case){

  foreach($arr12 as $a => $a_value) {
    if($case == CASE_UPPER) {
        $arr12[$a] = strtoupper($a_value);
    } elseif($case == CASE_LOWER) {
        $arr12[$a] = strtolower($a_value);
    }
}
print_r($arr12);


 }
 caseSensitive_Array($arr12,CASE_LOWER);
 echo "<br>";
 caseSensitive_Array($arr12,CASE_UPPER);
 echo "<br>".str_repeat("*",30)."<br>";


//Question 13


function RangeNumber($start,$end,$step){
foreach (range($start,$end,$step) as $number) {
  echo $number." ";
}
}

RangeNumber(200, 250, 4);
echo "<br>".str_repeat("*",30)."<br>";


//Question 14

$array13 = array("abcd" , "abc" , "de" ,"hjjj" ,"g" , "wer");

function short_long($array13 ){
  $longtest=max(array_map('strlen',$array13));
   $shortest = min(array_map('strlen',$array13));
 
   echo "The shortest array length is $shortest. The longest array length is $longtest.";
}

short_long($array13 );
echo "<br>".str_repeat("*",30)."<br>";



 //Question 15
function randomArray(){
  $numbers = range(11, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
}

randomArray();
echo "<br>".str_repeat("*",30)."<br>";


//Question 16
$arr16 = array( 'a' => '7892',
                'U' => '7892',
                'z' => '7892'
);

function maxKey($arr16) {
  $max_Key = max(array_keys($arr16));
  echo "The largest key in the Array : ".$max_Key;
}
maxKey($arr16);
echo "<br>".str_repeat("*",30)."<br>";




//Question 17

$intArray = [5 ,2,8,10,3];

function lowestArray($intArray ){
  
  $smallest = $intArray[0];

 foreach ($intArray  as $k => $v) {

  $count_array =count($intArray);

  for($i =0 ; $i<  $count_array  ; $i++){

   if( $smallest > $intArray[$i] ) 

   $smallest = $intArray[$i];
 
  }
 }
 
 echo $smallest;

}

lowestArray($intArray );
echo "<br>".str_repeat("*",30)."<br>";



//Question 18
function Change_Array($num ,$precision,$separator ){
  $input = explode($separator ,$num );
  $input1 = $input[0]; 
  $input2 = $input[1]; 

  $input2 =substr_replace( $input2 ,$separator,$precision,0);
 
  if( $input1 >=0)
      { $input2 =floor ($input2);}
else
    { $input2 =ceil( $input2);}

  $newArray= array( $input1 ,$input2);

  return implode($separator,$newArray);

}

print_r(Change_Array(1.155 , 2, '.' ));
echo '<br>';
print_r(Change_Array(100.25781, 4, "."));
echo '<br>';
print_r(Change_Array(-2.9636, 3, "."));
echo "<br>".str_repeat("*",30)."<br>";





//Question 19
$color19 =array("color"   => array("a" => "Red",
                                   "b" => "Green" ,
                                   "c" => "White"),
                "numbers" => array(1,2,3,4,5,6),
                "holes"   => array("First" , 
                                    5  => "Second",
                                   "Third" )
);

function printColor($color19){

  foreach( $color19 as $k => $v){
   
    if( $k == 'color' || $k == 'holes' )
     {
       $Red = $color19["color"]['a'];
       $holes = $color19["holes"][5];
     }
   
  }

  print_r( $Red );
  echo '<br>';
  print_r( $holes);
}

printColor($color19);
echo "<br>".str_repeat("*",30)."<br>";



//Question 20

$array_1 = array(1,2,6,4,5);
$array_2 = array("a","e","v","o","d");
$a=array_flip($array_1);

foreach ($a as $k => $v ) {
  for ($i=0 ; $i <count( $array_2) ; $i++){
    $v = $array_2;
    

}}

print_r(array_replace($a,$v));
echo "<br>".str_repeat("*",30)."<br>";



 //Question 24
$array1 = $array2 = array('Cat', 'elephant', 'Dog', 'lion', 'Fish');

sort($array1);
echo "Standard sorting"."<br>";
print_r($array1);
echo "<br>";
natcasesort($array2);
echo "Natural order sorting (case-insensitive)"."<br>";
print_r($array2);
echo "<br>".str_repeat("*",30)."<br>";












?>
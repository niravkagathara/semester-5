<!-- WAP to demonstrate the use of various array function on an array. -->
<?php
$arr = array(13, 24, 63, 84, 52, 26, 17, 68, 90, 4);
// asending order maintain index
echo "<br>asending order";
asort($arr);
print_r($arr);
// asending order not maintain index
echo "<br>asending order";
sort($arr);
print_r($arr);

// element count
echo "<br>element count".count($arr);


$fruits = array(
    "d" => "lemon", 
    "a" => "orange", 
    "b" => "banana", 
    "c" => "apple"
);
// value desending order maintain index
echo "<br>desending order";
arsort($fruits);
print_r($fruits);

// value desending order index not maintain
echo "<br>desending order";
rsort($fruits);
print_r($fruits);


// key desending order maintain index
echo "<br>desending order";
krsort($fruits);
print_r($fruits);

// key desending order index not maintain
echo "<br>desending order";
ksort($fruits);
print_r($fruits);

?>
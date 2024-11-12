<!-- . WAP to sort given array in descending order. -->
<?php 
    $arr = array(5,32,67,3,30,4,1);
    foreach ($arr as $k) {
        echo $k." ";
    }
    echo "<br>";
    for($i=count($arr)-1;$i>=0;$i--){
        $reverse[$i-count($arr)] = $arr[$i];
    }
    foreach ($reverse as $k) {
        echo $k." ";
    }
?>
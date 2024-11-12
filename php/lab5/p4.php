<!-- WAP to create user define function for adding two numbers and return answer and 
use it to find addition of two numbers and print answer -->
<?php 

    function addition($a,$b){
        return $a + $b;
    }
    $a=10;
    $b=20;
    $c=addition($a,$b);
    echo $c;
?>
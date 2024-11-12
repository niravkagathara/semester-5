<!-- WAP to print Fibonacci series up to n number. -->
<?php 
    $no=0;
    $a=0;
    $b= 1;
    $c= 0;
    echo $a." ".$b." ";
    while ($no<10) {
        $c=$a+$b;
        echo $c." ";
        $a=$b;
        $b=$c;
        $no++;
        
    }
?>
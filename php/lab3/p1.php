<!-- WAP to print table of 10 using for loop -->
<?php 
    $no =10;
    for ($i = 1; $i <= $no; $i++) {
        echo $no."&nbsp;&nbsp;&nbsp;".$i."&nbsp;&nbsp;&nbsp;".$i*$no;
        echo "<br>";
    }
?>
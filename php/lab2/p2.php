<!-- WAP to print first n numbers using for, while and do while loop. -->
<?php 
    $no=10;
    for($i= 1;$i<=$no;$i++){
        print("$i");
    }
    $temp=1;
    echo "<br>";
    while($temp<=10){
        print("$temp");
        $temp=$temp+1;
    }
    echo "<br>";
    $temp=1;
    do{
        print("$temp");
        $temp=$temp+1;
    }
    while($temp<=10);
?>
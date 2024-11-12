<!-- WAP to print first n odd numbers using for, while and do while loop -->
<?php 
    $no=10;
    for($i= 1;$i<=$no;$i++){
        if($i%2!= 0){
        print("$i");
        }
    }
    $temp=1;
    echo "<br>";
    while($temp<=10){
        if($temp%2!= 0){
            print("$temp");
            }
        $temp=$temp+1;
    }
    echo "<br>";
    $temp=1;
    do{
        if($temp%2!= 0){
            print("$temp");
            }
        $temp=$temp+1;
    }
    while($temp<=10);
?>
<!-- WAP to find greatest number from 3 number. -->
<?php 
    $no1=5;
    $no2= 3;
    $no3= 1;
    if($no1>$no2){
        if($no1>$no3){
            print("no1 is big");
        }
        else{
            print("no3 is big");
        }
    }
    else{
        if($no2>$no3){
            print("no2 is big");
        }else{
            print("no3 is big");
        }
    }
?>
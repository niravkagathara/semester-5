<!-- WAP to print all Armstrong number between two given numbers. -->
<?php 

    function armstronge($no){
        $temp =$no;
        $sum=0;
        $count=strlen($temp);
        while($temp>0){
            $digit=$temp%10;
            $sum+=pow($digit,$count);
            $temp=(int) $temp/10;
        }
        if($sum==$no){
            return true;
        }
    }
    function printNo($a, $b){
        for($i = $a; $i < $b; $i++){
            if(armstronge($i)){
                echo "$i ";
            }
        }
    }

    $a=1;
    $b=3000;
    printNo($a, $b);
?>
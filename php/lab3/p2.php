<!-- 
*
**
***
****

-->

<?php 
    $no=4;
    for($i= 0;$i<$no;$i++){
        for($j= 0;$j<=$i;$j++){
            echo "*";
        }
        echo"<br>";
    }
?>

<!-- 
    *
   * *
  * * *
* * * * *
 -->

<?php 
    $no=5;
    for($i= 0;$i<$no;$i++){
        for($j= $no-1;$j>=$i;$j--){
            echo "&nbsp";
        }
        for($k=0;$k<=$i;$k++){
            echo "* ";
        }
        echo "<br>";
    }
?>

<!-- 
1
2 3
4 5 6
7 8 9 10
 -->

<?php 
    $no=5;
    $num=1;
    for($i= 0;$i<$no;$i++){
        for($k=0;$k<=$i;$k++){
            echo "$num ";
            $num++;
        }
        echo "<br>";
    }
?>

<!-- 
1
2 2
3 3 3
4 4 4 4
 -->

<?php 
    $no=5;
    for($i= 1;$i<=$no;$i++){
        for($k=0;$k<$i;$k++){
            echo "$i ";
        }
        echo "<br>";
    }
?>
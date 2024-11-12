<!-- WAP to create multidimensional array and print it. -->
<?php 
    $arr = array(
        "one"=>array("stu1","java","app"),
        "two"=>array("stu2","python","ML"),
    );
    foreach ($arr as $k => $v) {
        foreach ($v as $key => $value) {
            echo "$k like $value <br>";
        }
    }
?>
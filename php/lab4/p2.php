<!-- WAP to create associative array and print it. -->
<?php 
    $arr = array(
        "stu1"=> "java",
        "stu2"=> "python",
        "stu4"=> "php",
        "stu3"=> "javascript"
    );
    foreach ($arr as $k => $v) {
        echo $k." : ".$v;
    }
?>
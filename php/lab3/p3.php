<!-- WAP to print the elements of an array using foreach loop. -->
<?php 
    $arr = array(
        "student1"=> "java",
        "student2"=> "javaScript",
        "student3"=> "python",
        "student4"=> "c++"
    );
    foreach ($arr as $key => $value) {
        echo $key." like to code in ".$value."<br>";
    }
?>
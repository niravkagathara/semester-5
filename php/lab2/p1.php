<!-- . WAP to print class of result based on percentage using switch statement (i.e. less 
than 40% -> Fail, 40% to 50% -> Pass Class, 50% to 60% -> Second Class, 60% to 
70% -> First Class, above 70% -> Distinction). -->

<?php 
    $per = 60;
    switch ($per) {
        case $per<40:
            print("fail");
            break;
        case $per<50:
            print("pass class");
            break;
        case $per<60:
            print("second class");
            break;
        case $per<70:
            print("first classs");
            break;
        case $per>=70:
            print("distict class");
            break;
        default:
            print("enter corect persentage");
            break;
    }
?>
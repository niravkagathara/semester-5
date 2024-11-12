<!-- WAP to check given number is palindrome or not -->
<?php 
    $no=1010101;
    $ans=0;
    $temp=$no;
    while ($temp>=1) {
        $ans=($ans*10)+$temp%10;
        $temp=$temp/10;
    }
    if($ans==$no){
        print("no is pelindrome");
    }
    else{
        print("NO is not pelindrome");
    }
?>
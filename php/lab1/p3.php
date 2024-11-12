<!-- WAP to print name of month based on given number of month (i.e. 1 -> January, 2 
-> February…). -->
<?php 
    $no=0;
    switch ($no) {
        case 1:
            print("january");
            break;
            
        case 2:
            print("february");
            break;
        
        case 3:
            print("march");
            break;
        
        case 4:
            print("april");
            break;
        case 5:
            print("may");
            break;
        case 6:
            print("june");
            break;
        case 7:
            print("july");
            break;
        case 8:
            print("aug");
            break;
        case 9:
            print("september");
            break;
        case 10:
            print("octomber");
            break;
        case 11:
            print("nevember");
            break;
        case 12:
            print("december");
            break;
        default:
            print("entered wronge month");
            break;
    }
?>
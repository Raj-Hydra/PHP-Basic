<?php  
     
     for($a = 1; $a <=10; $a++){
        if($a == 5){
            // echo "No." .$a;
            continue;   // when get 5 
        }

        echo "Number :" .$a. "<br>";
     }
   
    ?>

<!-- in this code trying to write numbers in reverse form using with for loop -->
<!-- use if inside break to break loop after get 0 -->
<?php  
 
 
     for($b = 10; $b > 0; $b--){

        echo $b . " ";
        if ($b == 0) {
            break;
        }
     };
    
     
     ?>



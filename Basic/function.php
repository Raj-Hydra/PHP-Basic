<?php 
// Define a function named "Bug" that takes two parameters, $a and $b
function Bug($a , $b){
    // Return the sum of $a and $b
    return $a + $b;
}

// Print the string "Bug: " followed by the result of calling the "Bug" function with arguments 10 and 5
// echo "Bug: " . Bug(10, 5);
?>



<?php
      
      function hello($fname="first" , $lname="lastname"){
        $v = "$fname $lname";
        return $v;

      }
      $name = hello("yahoo" , "Baba");  // second method
    //    echo hello("yahoo" , "Baba");//one method to print

    //  echo $name;   //second method to print     
      ?>






<!-- calculate the percentage -->


<!-- <?php  
    // Step 1: Define the function "sum" to calculate the total sum of marks for three subjects.
    function sum($math , $eng, $sc){
        // Step 2: Calculate the total sum of marks by adding the marks obtained in math, English, and science.
        $s = $math + $eng + $sc;
        
        // Step 3: Return the total sum of marks.
        return $s;
    };

    // Step 4: Define the function "percentage" to calculate the average percentage of marks.
    function percantage($st){
        // Step 5: Calculate the average percentage by dividing the total sum of marks by 3.
        $per = $st / 3;
        
        // Step 6: Echo the average percentage.
        echo $per."%";
    }

    // Step 7: Call the "sum" function with marks obtained in math, English, and science and store the result in the variable "$total".
    $total = sum(55, 65, 88);

    // Step 8: Call the "percentage" function with the total sum of marks and calculate the average percentage.
    percantage($total);
?> -->

<!-- doing in function not in second -->
<?php 


     function calculatepercantage($math , $eng ,$sc){
       $totalper = $math + $eng + $sc;
       $per = $totalper / 3 ;
       return $per; 
     }
     
     $total = calculatepercantage(55 , 65 , 88);
     echo "Average Perchantage : " . $total 
     
     ?>
<!-- this statement prove which var value is greater. -->
<!-- <?php
$a = 37;
$b = 5;
 if($a >$b)
 {
  echo "A is greater Than B....";
} else {
    echo " A is not greater than B";
}
?> -->


<!-- this if-else statement prove a & and B is equal and datatype is same. -->
<!-- <?php
$a = 37;
$b = 37;
 if($a === $b)
 {
  echo "A is greater Than B.....";
} else {
    echo " A is not greater than B";
}
?> -->

<!-- if elseif  short program-->

<?php 
      $per = 39;
      if($per >= 80 && $per <=100){
        echo "your are in merit";
      }
      elseif($per >= 60 && $per <=80){
        echo "You are in Ist devision";
      }
      elseif($per >= 45 && $per <=60){
        echo "You are in IInd devision";
      }
      elseif($per >= 33 && $per <=45){
        echo "You are in IIIrd devision";
      }
      elseif ($per <33) {
        echo "You are fail";
      }
      else {
        echo "Please enter the valid Perchantage";
      }
      ?>
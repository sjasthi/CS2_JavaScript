
<?php
function array81($array){
    $sum=0;
    for($i=0; $i<sizeof($array); $i++){
        $sum = $sum + $array[$i];
    }
    return $sum;
}

$marks = array(80, 86, 81, 99, 88, 83, 82);
echo "<br>Assignment 8.1";
echo "<br>Marks = ";
print_r ($marks);
echo "<br>Sum of marks = ".array81($marks);
echo "<br>-------------------------------";





function array825($array){
  echo "<br>Value, Frequency"; 
   $counter=0;
    
    for($i=$counter; $i<sizeof($array); $i++){
        $frequencyCounter=0;
        for($j=0; $j<sizeof($array); $j++){
            if($array[$i]==$array[$j]){
                $frequencyCounter++;
            }
        }
        $counter++;
        echo "<br>".$array[$i]." ".$frequencyCounter;
    }    
}



$array_25 = $array824();
//$array_25 = array(1,5,6,4,3,2,1,5,6,9,4,3,2,1,4,1,4,1,1);
echo "<br> Assignment 8.25";
array825($array_25);
echo "<br>------------";

?>


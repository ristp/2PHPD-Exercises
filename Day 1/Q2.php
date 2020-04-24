<?php
$arrayChar = Array();
for ($i = 65; $i < 91; $i++) { 
    $arrayChar[] = chr($i); 
}
// Loop to display the array elements 
foreach ($arrayChar as $key => $value) { 
    // Display the keys & values of $arrayChar
    echo $key . " => " . $value . ","; 
} 
?>
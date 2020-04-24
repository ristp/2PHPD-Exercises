<?php
$age = 21;
$gender = "Male";
if($age >= 31 && $age <= 50){
  if($gender = "Male"){
    echo("Hello man!");
  }
  elseif($gender = "Female"){
    echo("Hello woman!");
  }
}
else{
  echo("Please enter proper age/gender");
}
?>
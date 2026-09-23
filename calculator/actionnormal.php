<?php
session_start();

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$symbol=$_POST['symbol'];
$result;

switch($symbol){
    case "+":
        $result = $fname+$sname;
      
        break;
    case "-":
        $result = $fname-$sname;
       
        break;
    case "*":
        $result = $fname*$sname;
        
        break;
    case "/":
        $result = $fname/$sname;
        
        break;
    case "%":
        $result = $fname%$sname;
        
        break;
    default;
        echo "Select a symbol";



}

$_SESSION['value']=$result;
header("Location:normalcalculator.php");
exit();



?>
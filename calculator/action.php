<?php

if(isset($_POST)){
    if($_POST['calculator']=="normalcalculator")
        {
            header('location:normalcalculator.php');
        }
         else if($_POST['calculator']=="areacalculator")
        {
            header('location:areacalculator.php');
        }
        else{
             header('location:index.php');
        }
}
?>
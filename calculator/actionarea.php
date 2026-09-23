<?php

if(isset($_POST))
    {
        if($_POST['area']=="traingel"){

        header('location:traingel.php');

        }else if($_POST['area']=="rectangle"){
            header('location:rectangle.php');

        }else if($_POST['area']=="circle"){
            header('location:circle.php');

        }else{
            header('location:index.php');
        } 

    }



?>
<?php
session_start();
if(isset($_POST))
    {
        if($_POST['traingel'])
        {
            $base = $_POST['base'];
            $height = $_POST['height'];
            $result = 0.5*$base*$height;
            $_SESSION['traingelResult'] = $result;
            header('location:traingel.php');
            exit();
        }
        else if($_POST['rectangle'])
            {
                $height = $_POST['height'];
                $width = $_POST['width'];
                $result = $height*$width;
                $_SESSION['rectangleResult']=$result;
                header('location:rectangle.php');
                exit();

            }
            else if($_POST['circle'])
                {
                    $radius = $_POST['radius'];
                    $result = 3.1416*$radius*$radius;
                    $_SESSION['circleResult']=$result;
                    header('location:circle.php');
                    exit();
                }
    }

?>
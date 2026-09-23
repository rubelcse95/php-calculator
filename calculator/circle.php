<?php

session_start();
$circleResult = $_SESSION['circleResult']??"";
unset($_SESSION['circleResult']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 bg-light mx-auto text-center my-4 py-2 border rounded-3 shadow-sm">
            <h2 class="fw-semibold">Md. Rubel Mahmud</h2>
            <p class="fs-5">Circle</p>
            <hr>
              <form action="area.php" method="post">
                <div class="result text-start mt-3">
                        <label>Result</label>
                        <input class="form-control" type="number" name="result" value="<?= $circleResult; ?>">
                    </div>
                    <div class="radius text-start mt-3">
                        <label>Radius</label>
                        <input class="form-control" type="number" name="radius">
                    </div>
                    <div class="radius-button text-start mt-3">
                        <input class="btn btn-primary w-25" type="submit" name="circle" value="submit">
                    </div>
           </form>
          
        </div>
    </div>
</div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

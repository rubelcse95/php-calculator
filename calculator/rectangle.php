<?php
session_start();
$rectangleResult = $_SESSION['rectangleResult']??"";
unset($_SESSION['rectangleResult']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 bg-light mx-auto text-center my-4 py-2 border rounded-3 shadow-sm">
            <h2 class="fw-semibold">Md. Rubel Mahmud</h2>
            <p class="fs-5">Rectangle</p>
            <hr>
              <form action="area.php" method="post">
                 <div class="result text-start mt-3">
                        <label>Result</label>
                        <input class="form-control" type="number" name="result" value="<?= $rectangleResult; ?>">
                    </div>
            <div class="height text-start mt-3">
                <label>Height</label>
                <input class="form-control" type="number" name="height">
            </div>
            <div class="width text-start mt-3">
                <label>Width</label>
                <input class="form-control" type="number" name="width">
            </div>
             <div class="rectangle-button text-start mt-3">
                <input class="btn btn-primary w-25" type="submit" name="rectangle" value="submit">
            </div>
        

           </form>
           
        </div>
    </div>
</div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
session_start();
$traingelResult = $_SESSION['traingelResult']??"";
unset($_SESSION['traingelResult']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traingel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 bg-light mx-auto text-center my-4 py-2 border rounded-3 shadow-sm">
            <h2 class="fw-semibold">Md. Rubel Mahmud</h2>
            <p class="fs-5">Traingel</p>
            <hr>
           <form action="area.php" method="post">
             <div class="result text-start mt-3">
                 <label>Result</label>
                 <input class="form-control" type="number" name="result" value="<?= $traingelResult; ?>">
             </div>
            <div class="base text-start mt-3">
                <label>Base</label>
                <input class="form-control" type="number" name="base">
            </div>
            <div class="height text-start mt-3">
                <label>Height</label>
                <input class="form-control" type="number" name="height">
            </div>
             <div class="traingel-button text-start mt-3">
                <input class="btn btn-primary w-25" type="submit" name="traingel" value="submit">
            </div>
        

           </form>
        </div>
    </div>
</div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

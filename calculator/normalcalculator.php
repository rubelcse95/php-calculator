<?php
session_start();
$indexResult = $_SESSION['value']?? '';
unset ($_SESSION['value']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-light text-center">
                        <h3 class="fw-bold">This is my Normal calculator</h3>
                    </div>
                    <div class="card-body">
                        <form action="actionnormal.php" method="post" class="form-group">
                             <div class="row my-3">
                                
                                <input class="form-control" type="text" name="result" value="<?= $indexResult; ?>" id="">
                            </div>
                            <div class="row my-3">
                                <label for="">First Number</label>
                                <input class="form-control" type="number" name="fname" value="" id="">
                            </div>
                            <div class="row my-3">
                                <label for="">Second Number</label>
                                <input class="form-control" type="number" name="sname" value="" id="">
                            </div>
                             <div class="row my-3">
                                <label for="">Select Symbol</label>
                                <div class="col-md-2">
                                    <input class="form-check-input col-md-2" type="radio" name="symbol" id="" value="+"><label class="form-check-label" for="">+</label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-check-input col-md-2" type="radio" name="symbol" id="" value="-">
                                <label class="form-check-label" for="">-</label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-check-input col-md-2" type="radio" name="symbol" id="" value="*">
                                <label class="form-check-label" for="">*</label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-check-input col-md-2" type="radio" name="symbol" id="" value="/">
                                <label class="form-check-label" for="">/</label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-check-input col-md-2" type="radio" name="symbol" id="" value="%">
                                <label class="form-check-label" for="">%</label>
                                </div>
                                <input type="submit" name="submit" value="submit" class="btn btn-success mt-4">
                               
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
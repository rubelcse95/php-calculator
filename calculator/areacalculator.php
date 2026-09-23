<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 bg-light mx-auto text-center my-4 py-2 border rounded-3 shadow-sm">
            <h2 class="fw-semibold">Md. Rubel Mahmud</h2>
            <p class="fs-5">My area Calculator using PHP</p>
            <hr>
            <form action="actionarea.php" method="post" class="text-start p-3">
                <div class="my-option text-start">
                    <label>Choose Your Any Select Field</label>
                    <select class="form-select" name="area">
                        <option selected>Choose..</option>
                        <option value="traingel">Triangle</option>
                        <option value="rectangle">Rectangle</option>
                        <option value="circle">Circle</option>
                    </select>
                    
                </div>
                <input class="btn btn-primary mt-3 w-25" type="submit" name="mainsubmit" value="Submit">
            </form>
        </div>
    </div>
</div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login aplikasi</title>
</head>
<body class="h-100 bg-info d-flex align-items-center">
    <div class="container">
        <div class ="row">
            <div class="col-sm-6 col-md-auto bg-light p-4">
                <h3 class="text-center text-info pb-3 mb-3 border-bottom">login aplikasi</h3>
                <form class="d-grid gap-3" method="post" action="ceklogin.php">
                    <input class="form-control form-control-lg" type="text" placeholder="Username" name="username">
                    <input class="form-control form-control-lg" type="Password" placeholder="Password" name="Password">
                    <input class="btn btn-info btn-lg" type="submit" value="Login">
                </form>
                    
            </div>    
        </div>
        
    </div>

    
</body>
</html>
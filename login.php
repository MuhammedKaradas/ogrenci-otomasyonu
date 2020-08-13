<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O.B.S Giriş</title>
    <!-- BOOTSTRAP frameworkünü import ediyoruz-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- Fontawesome(iconlar) frameworkünü import ediyoruz-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Google Fontlarını dahil ediyoruz-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body style="background-color:lightblue;">
<div class="container">
    <center>    
    <!--Logo-->
    <div class="row text-center " style="padding-top:150px;">
            <div class="col-md-12">
                <img src="assets/img/logo.png" />
            </div>
    </div>
    
    <div class="row ">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel-body">
            <form action="security/db_op.php" method="post">
            <div class="form-group input-group">
                <label for="studentNumber">Öğrenci Numarası:</label><br>
                <input type="text" id="studentNumber" name="studentNumber" required class="form-control" placeholder="Öğrenci Numaranız"><br>
            </div>
            <div class="form-group input-group">
                <label for="password">Parola:</label><br>
                <input type="password" id="password" name="password" required class="form-control" placeholder="Parolanız"><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </form>
            </div>
        </div>
    </div>
    </center>
</div>
</body>
</html>            
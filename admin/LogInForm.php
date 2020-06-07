<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLoginForm</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/StylingForLogInForm.css">
</head>

<body>    
<div>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-success font-weight-light mb-5" ><b style="font-family:monospace;">Mobile Shop</b></h2>
                    <form action="AdminChecker.php" method="post">
                        <div class="form-group"><input class="form-control" type="text" name="Username" placeholder="Username" required></div>
                        <div class="form-group"><input class="form-control" type="password" name="Password" placeholder="Password" required></div><button class="btn btn-success mt-2" type="submit" name="submit">Log In</button></form>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;../assets/img/Screen-Shot-2014-02-11-at-6.02.35-AM.png&quot;);background-size:cover;background-position:center center;">
            </div>
        </div>
    </div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

   
</body>

</html>
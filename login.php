<html>
<head>
    <title> Login or Register</title>

    <script src="/js/bootStrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/js/bootStrap/css/bootstrap.css">
</head>

<body>
<div class="">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"> LogIn</h2>
            <form method="post" action="check-login.php">
                <input type="text" placeholder="user name" name="ckname" style="width: 100%"><br>
                <input type="password" placeholder="password" name="ckpassword" style="width: 100%"><br>
                <input type="submit" value="Login">
                <h4 class="text-right"> OR <a href="register.php">Register</a> </h4>
            </form>
        </div>
    </div>
</div>
</body>
</html>
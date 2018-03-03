<html>
<head>
    <title>Register</title>

    <script src="/js/bootStrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/js/bootStrap/css/bootstrap.css">
</head>

<body>
<div class="">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"> Register</h2>
            <form method="post" action="insert-register.php">
                <input type="text" placeholder="Login Name" name="logname" style="width: 100%"><br>
                <input type="text" placeholder="Email" name="logemail" style="width: 100%"><br>
                <input type="password" placeholder="password" name="log-pass" style="width: 100%"><br>
                <input type="password" placeholder="confirm password" name="con-pass" style="width: 100%"><br>
                <input class="pull-right" type="submit" value="Register"><br>
            </form>
        </div>
    </div>
</div>
</body>
</html>
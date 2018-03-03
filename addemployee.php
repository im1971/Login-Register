<html>
<head>
    <title>Employee info</title>

    <script src="/js/bootStrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/js/bootStrap/css/bootstrap.css">
</head>

<body>
<div class="">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center"> Add Employee Information </h2>
            <form method="post" action="insert-employee.php" >

                <table style="width: 100%">
                    <tbody>
                    <tr>
                        <td>Full Name :</td>
                        <td><input type="text" name="empname" style="width: 100%"><br></td>
                    </tr>
                    <tr>
                        <td>Address :</td>
                        <td><input type="text" name="empaddress" style="width: 100%"><br></td>
                    </tr>
                    <tr>
                        <td>Phone :</td>
                        <td><input type="text" name="empphone" style="width: 100%"><br></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="text" name="empemail" style="width: 100%"><br></td>
                    </tr>
                    <tr>
                        <td>National ID :</td>
                        <td><input type="text" name="empnid" style="width: 100%"><br></td>
                    </tr>
                    </tbody>
                </table>

                <td><input class="pull-right" type="submit" value="Add Employee"></td>

            </form>
        </div>
    </div>
</div>
</body>
</html>
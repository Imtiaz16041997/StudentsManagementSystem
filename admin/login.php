<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">


</head>
<body style="background: #f5f5f5">


<div class="container ">
    <br />
    <h1 style="font-family:'Lucida Console'" class="text-center container animate__animated animate__bounce"> UAP Students Management System </h1>
    <hr/>
    <br/>
    <div class="row">

        <div class="col-md-4 mr-auto col-md-4 ml-auto">
            <h3 style="font-family:'Lucida Console'" class="text-center container animate__animated animate__bounce">Admin Login Form </h3>
            <br/>
            <form action="login.php" method="POST">

                <div>
                    <input type="text" placeholder="Username" required="" class="form-control"/>
                </div>
                <br/>
                <br/>
                <div>
                    <input type="password" placeholder="Password" required="" class="form-control"/>
                </div>
                <br/>
                <div>
                    <input type="submit" colspan="2" value="Login" name="login" class=" text-center btn btn-outline-info float-right "/>
                </div><a class="btn btn-outline-dark" href="../">Back</a>

            </form>
        </div>
    </div>
</div>



</body>
</html>
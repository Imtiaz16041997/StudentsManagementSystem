<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>UAP Students Management System</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">


</head>
<body>

        <div class=" text-center container animate__animated animate__bounceInDown" >
            <h1 class="text-center">User Registration Form</h1>
            <hr/>
            <div class="row text-center">
                <div class="text-center col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">


                        <div class="form-group row">
                            <label for="name" class="text-center control-label col-sm-1">NAME</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter your Name"/>

                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="username" class="text-center control-label col-sm-1">USERNAME</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="username" type="text" name="username" placeholder="Enter your UserName"/>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reg_id" class="text-center control-label col-sm-1">REG_ID</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="reg_id" type="number" pattern="[0-9]{8}" name="reg_id" placeholder="Enter your Reg_ID"/>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="text-center control-label col-sm-1">DEPT</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="department" type="text" name="department" placeholder="Enter your Department"/>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="text-center control-label col-sm-1">YEAR</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="year" type="text" name="year" placeholder="Enter your Year"/>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="semester" class="text-center control-label col-sm-1">SEMESTER</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="semester" type="text" name="semester" placeholder="Enter your Semester"/>

                            </div>
                        </div>

                        <div class="form-group row">
                            <Label for="label" class="text-center control-label col-sm-1">E-MAIL</Label>
                            <div class="col-sm-4">
                                <input class="form-control" id="label" type="email" name="label" placeholder="Enter your E-mail"/>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="text-center control-label col-sm-1">PASSWORD</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="password" type="password" name="password" placeholder="Enter your Password"/>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="c_password" class="text-center control-label col-sm-1">CONFIRM PASSWORD</label>
                            <div class="col-sm-4">
                                <input class="form-control" id="c_password" type="password" name="c_password" placeholder="Enter your Confirm_Password"/>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="text-center control-label col-sm-1">PHOTO</label>
                            <div class="col-sm-4">
                                <input id="photo" type="file" name="photo" />

                            </div>
                        </div>


                        <div class="col-sm-5 col-sm-offset-5" >
                            <input class=" text-center btn btn-outline-success float-center" type="submit" colspan="2" value="Registration" name="registration"/>
                        </div>


                    </form>
                </div>
            </div>
            <br/>
            <p class="text-left float-left" >If You have an account? then please Login</p>
            <br/>
            <hr/>
            <footer>
                <p>Copyright &copy; <?php echo date('Y') ?> All Rights Reserved By Ibnul Imtiaz </p>
            </footer>
        </div>

</body>
</html>
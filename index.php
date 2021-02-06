<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <title>Uap Students Management System</title>
</head>
<body>

<div class="container animate__animated animate__bounceInDown">
    <br />
    <a class="btn btn-outline-primary float-right"  href="admin/login.php">Login</a>
    <br />
    <br />
    <h1 class="text-center"> Welcome to UAP Students Management System </h1>
    <hr/>
    <br>
    <div class="row">
        <br/>
        <div class="col-md-4 mr-auto col-md-4 ml-auto">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="2" class="text-center"><label>UAP Students Information</label></td>
                    </tr>
                    <tr>
                        <td><label class="text-center" for="choose">Choose Department </label></td>
                        <td>
                            <select class="form-control" id="choose" name="choose">
                                <option value=""> Select </option>
                                <option value="1"> Pharmacy </option>
                                <option value="2"> CE </option>
                                <option value="3"> Architecture </option>
                                <option value="4"> CSE </option>
                                <option value="5"> EEE </option>
                                <option value="6"> English </option>
                                <option value="7"> BBA </option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="text-center" for="choose">Choose Semester </label></td>
                        <td>
                            <select class="form-control" id="choose" name="choose">
                                <option value=""> Select </option>
                                <option value="1"> 1st </option>
                                <option value="2"> 2nd </option>
                                <option value="3"> 3rd </option>
                                <option value="4"> 4th </option>
                                <option value="5"> 5th </option>
                                <option value="6"> 6th </option>
                                <option value="7"> 7th </option>
                                <option value="8"> 8th </option>

                            </select>
                        </td>
                    </tr>
                    <tr>

                        <td><label class="text-center" for="rId">Registration ID</label>  </td>
                        <td><input class="form-control" type="text" name="rId" pattern="[0-9]{8}" placeholder="Type Registration ID" /> </td>

                    </tr>
                    <tr>
                        <td class="text-center" colspan="2"><input class="btn btn-info" type="submit" value="Show Info" name="show_info"/> </td>

                    </tr>
                </table>
            </form>
        </div>
    </div>



</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>
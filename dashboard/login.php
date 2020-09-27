<?php
/**
 * Created by PhpStorm.
 * User: Modried De Young
 * Date: 13/09/2020
 * Time: 13:35
 */

require_once ('../controller/Controller.php');
//$_SESSION['login_user_id'] = 1;
//$_SESSION['user_type'] = 'admin';

$main->user_login('.');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Top Grace Gas</title>
    <link rel="stylesheet" href="../login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../login/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../login/css/unix.css">
    <link rel="stylesheet" href="../login/css/custom.css">

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
            <div class="panel panel-primary" style="margin-top: 40%;">
                <div class="panel-heading">
                    <h3 class="panel-title"> Admin Login Form</h3>
                </div>
                <div class="panel-body">
                    <form class="center-block">
                        <div id="msg"></div>
                        <div class="col-md-12 form-group">
                            <label class="col-md-12"><i class="fa fa-user"></i>&nbsp; Username</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="col-md-12"><i class="fa fa-key"></i>&nbsp; Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="col-lg-12 form-group">
                            <button class="btn btn-success btn-block" id="btn_login" type="button">Sign In<i class="fa fa-sign-in"></i></button>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">

                </div>
            </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</div>
<?php //echo //sha1("as");  ?>
<script type="text/javascript" src="../assets/customJs/jquery2.1.4.js"></script>
<script type="text/javascript" src="../assets/customJs/login.js"></script>
<script type="text/javascript" src="../assets/customJs/custom.js"></script>
<script type="text/javascript" src="../assets/customJs/jquery.backstretch.min.js"></script>

<script type="text/javascript">
    // $.backstretch([
    //"images/head.JPG",
    // "images/e.JPG",
    //"images/bg.jpg"
    // ], {duration: 2000, fade: 750});
</script>

</body>
</html>




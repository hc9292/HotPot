<?php
@session_start();
require_once 'database.php';

if ($user->is_loggedin() != "") {
    $user->redirect('index.php');
}
//when user is entering in login system before pressing button will be required to put username or email and password
if (isset($_POST['btn-login'])) {
    $uname = $_POST['txt_uname_email'];
    $umail = $_POST['txt_uname_email'];
    $upass = $_POST['txt_password'];
    //if credentials does not match it will display "wrong details"
    if ($user->login($uname, $umail, $upass)) {



        $user->redirect('index.php');
    } else {
        $error = "Wrong Details !";
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
    
    <link rel="stylesheet" href="./css/main.css" type="text/css" />
</head>

<body id="forms">
    <div class="container">
        <div class="form-container">
            <form method="post">
                <h2 class="note">Log in User</h2>

                <?php
                if (isset($error)) {
                    ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                    </div>
                <?php
                }
                ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or E mail ID" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="txt_password" placeholder="Your Password" required />
                </div>
                <div class="clearfix"></div>

                <div class="form-group">

                    <button type="submit" name="btn-login" class="btn btn-block btn-primary BG">
                        <i class="glyphicon glyphicon-log-in"></i>&nbsp;Log in
                    </button>
                </div>
                <br>
                <label>Don't have account yet ! <a href="register.php">Register here</a></label>
            </form>
        </div>
    </div>

</body>

</html>
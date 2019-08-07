<?php
@session_start();
require_once '../database.php';

if (isset($_SESSION['admin_session'])) {
    $user->redirect('index.php');
}
//when admin is entering in login system before pressing button will be required to put username or email and password
if (isset($_POST['btn-login'])) {
    $amail = $_POST['txt_aname_mail'];
    $apass = $_POST['txt_password'];
    //if credentials does not match it will display "wrong details"
    if ($user->loginAdmin($amail, $apass)) {



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
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
</head>

<body id="forms">
    
    <div class="container">
        <div class="form-container">
            <form method="post">
                <h2 class="note">Log in Admin</h2>

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
                    <input type="text" class="form-control" name="txt_aname_mail" placeholder="Admin Email" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="txt_password" placeholder="Admin Password" required />
                </div>
                <div class="clearfix"></div>

                <div class="form-group">

                    <button type="submit" name="btn-login" class="btn btn-block btn-primary BG">
                        <i class="glyphicon glyphicon-log-in"></i>&nbsp;Log in
                    </button>
                </div>
                <br>

            </form>
        </div>
    </div>

</body>

</html>
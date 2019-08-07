<?php
@session_start();
require_once 'database.php';

if ($user->is_loggedin() != "") {
   $user->redirect('index.php');
}

if (isset($_POST['btn-signup'])) {
   $uname = trim($_POST['txt_uname']);
   $umail = trim($_POST['txt_umail']);
   $upass = trim($_POST['txt_upass']);
   $uaddress = trim($_POST['txt_uaddress']);
   $uphone = $_POST['uphone'];




   if ($uname == "") {
      $error[] = "provide username !";
   } else if ($umail == "") {
      $error[] = "provide email id !";
   } else if (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
   } else if ($upass == "") {
      $error[] = "provide password !";
   } else if (strlen($upass) < 6) {
      $error[] = "Password must be atleast 6 characters";
   } else if ($uaddress == "") {
      $error[] = "provide your address !";
   } else if ($uphone == "") {
      $error[] = "provide your cell phone !";
   } else {
      try {
         $stmt = $DB_con->prepare("SELECT user_name,user_email FROM users WHERE user_name=:uname OR user_email=:umail");
         $stmt->execute(array(':uname' => $uname, ':umail' => $umail));
         $row = $stmt->fetch(PDO::FETCH_ASSOC);

         if ($row['user_name'] == $uname) {
            $error[] = "Sorry username already taken !";
         } else if ($row['user_email'] == $umail) {
            $error[] = "Sorry email id already taken !";
         } else {
            if ($user->register($uname, $umail, $upass, $uaddress, $uphone)) {
               $user->redirect('register.php?joined');
            }
         }
      } catch (PDOException $e) {
         echo $e->getMessage();
      }
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Sign up</title>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
   <link rel="stylesheet" href="./css/main.css" type="text/css" />
</head>

<body id="forms">
  

   <div class="container">

      </nav>
      <div class="form-container register">

         <form method="post">
            <h2 class="note">Let's start cooking together</h2>

            <?php
            if (isset($error)) {
               foreach ($error as $error) {
                  ?>
                  <div class="alert alert-danger">
                     <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                  </div>
               <?php
               }
            } else if (isset($_GET['joined'])) {
               ?>
               <div class="alert alert-info">
                  <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
               </div>
            <?php
            }
            ?>
            <div class="form-group">
               <input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" value="<?php if (isset($error)) {
                                                                                                               echo $uname;
                                                                                                            } ?>" />
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="txt_umail" placeholder="Enter E-Mail ID" required pattern="[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,4}" value="<?php if (isset($error)) {
                                                                                                                                                                                    echo $umail;
                                                                                                                                                                                 } ?>" />
            </div>


            <div class="form-group">
               <input type="password" class="form-control" name="txt_upass" placeholder="Enter Password" />
            </div>
            <div class="form-group">
               <input type="password" class="form-control" name="txt_upass" placeholder="Confirm Password" />
            </div>



            <div class="form-group">
               <input type="text" class="form-control" name="txt_uaddress" placeholder="Provide your City, ZIP Code and Address" />
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="uphone" placeholder="Your cell phone number in Format: 123-456-7890" required pattern=[0-9]{3}-[0-9]{3}-[0-9]{3,4} />
            </div>


            <div class="form-group">

               <button type="submit" class="btn btn-block btn-primary BG" name="btn-signup">
                  <i class="glyphicon glyphicon-open-file"></i>&nbsp;Register
               </button>
            </div>
            <br>
            <label>Have an account ! <a href="index.php">Login</a></label>
         </form>
      </div>
      <div>
         <!-- svg -->

         <img src="images/group-3.svg" class="Group-3">
         <h1 class="app-about">About App<h1>
               <p class="p-one">If you want to cook your meal from scratch, <br>but too busy to go shopping ingredients for the recipe.<br>
                  Do not worry we are here to do that for you, <br>but first register your account for free of course to enjoy <br>all the benefits of this application </p>


      </div>
   </div>

</body>

</html>
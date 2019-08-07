<?php
 @session_start();
class USER
{
    public $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
  
    public function register($uname,$umail,$upass,$uaddress,$uphone)
    {
       try
       {
          //hashing password
           $new_password = password_hash($upass, PASSWORD_BCRYPT);
   
           $stmt = $this->db->prepare("INSERT INTO users(user_name,user_email,user_pass,user_address,user_phone) 
                                                       VALUES(:uname, :umail, :upass, :uaddress, :uphone)");
              
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $new_password);
           $stmt->bindparam(":uaddress",$uaddress);
           $stmt->bindparam(":uphone" ,$uphone);     
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function login($uname,$umail,$upass)
    {
       try
       //verification of password
       {
          $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail LIMIT 1");
          $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($upass, $userRow['user_pass']))
             {
                $_SESSION['user_session'] = $userRow['user_id'];
                $_SESSION['user_name'] = $userRow['user_name'];
                $_SESSION['user_address'] = $userRow['user_address'];
                $_SESSION['user_phone'] = $userRow['user_phone'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }

   
    // login for admin

     public function loginAdmin($amail,$apass)
    {
       try
       //verification of password
       {
          $stmt = $this->db->prepare("SELECT * FROM admin WHERE admin_mail=:amail LIMIT 1");
          $stmt->execute(array(':amail'=>$amail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          $newPass= md5($apass);
          if($stmt->rowCount() > 0)
          {
             if($newPass == $userRow['admin_pass'])
             {
                $_SESSION['admin_session'] = $userRow['admin_id'];
             
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }




 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
   //logout function where user will have option to logout by pressing button
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }

   public function logoutAdmin()
   {
      session_destroy();
      unset($_SESSION['admin_session']);
      return true;
   }
   
   

}

?>

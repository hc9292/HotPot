<?php

@session_start();



Class Recipe{

   //function for showing recipes on main view with image, title and subtitle
    public function allRecipes(){
    require 'database.php';
    $sql = "SELECT * from recipe";
    $output = $DB_con->query($sql);
    foreach ($output as $outputs) {
         /*
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
   

    // set records or rows of data per page
    $recordsPerPage = 10;

    // calculate for the query LIMIT clause
    $fromRecordNum = ($recordsPerPage * $page) - $recordsPerPage;
    $sql = "SELECT * from recipe  LIMIT 
            {$fromRecordNum}, {$recordsPerPage}";


    // ********** show the number paging
     
    // find out total pages
    $query = "SELECT COUNT(*) as total_rows FROM recipe";
    $stmt = $DB_con->prepare($query);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_rows = $row['total_rows'];

    $total_pages = ceil($total_rows / $recordsPerPage);

    // range of num links to show
    $range = 3;

    // display links to 'range of pages' around 'current page'
    $initial_num = $page - $range;
    $condition_limit_num = ($page + $range)  + 1;

    for ($x = $initial_num; $x < $condition_limit_num; $x++) {

      // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
      if (($x > 0) && ($x <= $total_pages)) {

        // current page
        if ($x == $page) {

          //echo "<button class='pagination' style='background: #87D37C;'>$x</button>";
        }

        // not current page
        else {
          //echo " <button class='pagination' style='background: #87D37C';'><a href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a></button> ";
        }
      }
    }
 

 */
      echo "<body id='all-recipes'>";
      echo "<div class='flex-container'>";
 
      echo "<div class='card2'>";
      echo "<div class='image_wrapper'>";
      echo "<img src=" . $outputs['img_src'] . ">";
      echo "</div>";
      echo "<div class='card_body'>";
      echo "<h5>" . $outputs['title'] . "</h5>";
      echo "<h6>" . $outputs['subtitle'] . "</h6>";
      echo "<a href=./viewRecipe.php?id=" . $outputs['recipe_id'] . ">";
      echo "<button class ='view-recipe' >" . "View more" . "</button>";
      echo "</a>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</body>";
      

      
       
      
       }
    }


  public function searchRecipes($search)
  {
    require 'database.php';

    $sql = "SELECT * from recipe WHERE `title` LIKE '%$search%'";

    $output = $DB_con->query($sql);
    foreach ($output as $outputs) {

      echo "<body id= 'all-recipes'>";
      echo "<div class='flex-container'>";

      echo "<div class='card2'>";
      echo "<div class='image_wrapper'>";
      echo "<img src=" . $outputs['img_src'] . ">";
      echo "</div>";
      echo "<div class='card_body'>";
      echo "<h5>" . $outputs['title'] . "</h5>";
      echo "<h6>" . $outputs['subtitle'] . "</h6>";
      echo "<a href=./viewRecipe.php?id=" . $outputs['recipe_id'] . ">";
      echo "<button class ='view-recipe'>" . "View more" . "</button>";
      echo "</a>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</body>";
    }
  }

    

    // Function to getting recipe by id from database and displaying it on detailed view page
    public function getRecipeById($r_id){
    require 'database.php';
    $sql = "SELECT * from recipe WHERE recipe_id = $r_id";
    $output = $DB_con->query($sql);
    foreach ($output as $outputs) {
      echo "<div class='container'>";
      echo "<div class='row cardView'>";
  
      echo "<div class='image_enlarged'>";
      echo "<img src=" . $outputs['img_src'] . ">";
      echo "</div>";

      echo "<div class='description'>";
      echo "<h3>" . $outputs['title'] . "</h3>";
      echo "<h5>" . $outputs['subtitle'] . "</h5>";
      echo "<h5> Serving size  " . $outputs['serving_size'] . "</h5>";
      //function getIngredientsById has purpose to display ingredients 
      $this->getIngredientsById($r_id);
      echo "<h3 class='price'>  " . $outputs['price'] . "</h3>";
      echo "<a href='./recipeapp/confirm.php?id="  . $r_id . "'><button class='order'>" . "Order Ingredients"  . "</button></a>";
            

    
      echo "</div>";
      echo "</div>";
      echo "</div>";
      
    }
  }

 //getting ingredients from database with left join to display ingredients, amount and measurements
  public function getIngredientsById($r_id)
  {
    require 'database.php';
    $sql = "SELECT i.ingredient, i.amount, m.measurements FROM `ingredients` AS i LEFT JOIN measurement AS m ON m.id = i.measurement WHERE i.recipe_id = $r_id";
    $output = $DB_con->query($sql);
    foreach ($output as $outputs) {
    echo "<p>" . $outputs['ingredient']  . " " . $outputs['amount'] . " ". $outputs['measurements'] . "</p>";
      
     
    }
  }

 // this function is for purchase history record after choosing date and confirm order

  public function buyOrder($r_id, $datum){
   
    require 'database.php';
    
    $sql = "INSERT into orders (recipe_id, user_name, user_address, user_phone, `day_Order`) VALUES($r_id, '$_SESSION[user_name]', '$_SESSION[user_address]', '$_SESSION[user_phone]','$datum')";
    $DB_con->exec($sql);

    header("Location: ./confirmationmsg.php");
  }


  


    }
    
  
  
      
 

?>
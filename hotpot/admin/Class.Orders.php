 <?php

    @session_start();



class Orders {
 //class for orders's view in admin panel with information shown in table
 
 public function orderedRecipe()
 {
 require '../database.php';
 $sql = "SELECT recipe.title, recipe.subtitle, recipe.price, orders.order_id, orders.user_name, orders.user_address, orders.user_phone, orders.day_Order FROM orders LEFT JOIN recipe ON orders.recipe_id = recipe.recipe_id ORDER BY orders.day_Order ASC";

 $output = $DB_con->query($sql);
 foreach ($output as $outputs) {


 echo "<tr>";
     echo "<td class='column1'>" . $outputs['title'] . "</td>";
     echo "<td class='column2'>" . $outputs['subtitle'] . "</td>";
     echo "<td class='column2'>" . $outputs['price'] . "</td>";
     echo "<td class='column3'>" . $outputs['order_id'] . "</td>";
     echo "<td class='column4'>" . $outputs['user_name'] . "</td>";
     echo "<td class='column4'>" . $outputs['user_address'] . "</td>";
     echo "<td class='column4'>" . $outputs['user_phone'] . "</td>";
     echo "<td class='column4'>" . $outputs['day_Order'] . "</td>";
     echo "</tr>";
 }
 }


 }

 ?>
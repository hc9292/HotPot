<?php
@session_start();
require_once 'database.php';
include 'Class.Recipe.php';


if (!$user->is_loggedin()) {
    $user->redirect('login.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
       <link rel="stylesheet" href="./css/main.css" type="text/css">
    <title>Welcome- <?php print($userRow['user_email']); ?></title>
</head>

<body id="home">



    <nav class="navbar navbar-expand-lg navbar-light fixed top custom-nav bg-white">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded=" false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <img src="images/logo-2.png" class="logo2">
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./allRecipes.php">All Recipes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./recipeapp/rules.php">How it works</a>
                </li>

            </ul>
            <div class="nav navbar-nav navbar-right">

                <button class="btn my-2 my-sm 0 log"><a class="log" href="./logout.php">Logout</a></button>
            </div>
        </div>
    </nav>



    <div class="container-fluid">


        <div class="card2" id="welcome">
            <!-- png -->

            <img src="images/group.png" srcset="images/group@2x.png 2x,
             images/group@3x.png 3x" class="Group">


            <h3 class="Plan">Have no plan what to cook?</h3>
            <p class="textDesc"><strong>Here is how we can help you plan your meals</strong><br>
                You live on your own and have bad cooking habits.You
                find it hard to shop for 1 or 2 persons, chopping, measuring an all that?
                Or you have a family and want to plan your meals? We have a solution for you</p>

            <a href="./recipeapp/rules.php"><button class="how-it-works">How it works</button></a>
        </div>

        <div class="salad-bowl">

            <!-- svg -->

            <img src="images/group-5.svg" class="Group-5">

            <h2 class="display3">More taste, Less waste</h2>
            <p class="display4">Eat regular. Fall in love with cooking and be aware of others <br> and your environment.</p>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
</body>


</html>
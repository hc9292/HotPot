<?php
@session_start();
require 'database.php';
include  'Class.Recipe.php';
$recipes = new Recipe;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./css/main.css" type="text/css" />
    <title>All recipes list</title>
</head>

<body>

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
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">All Recipes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./recipeapp/rules.php">How it works</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
                <input class="form-control mr-sm-2" id="search-bar" type="text" name="search" placeholder="Search recipes">
                <button class=" btn my-2 my-sm 0 log" class="log" type="submit">Search</button>
            </form>
            <div class="nav navbar-nav navbar-right">
                <button class="btn my-2 my-sm 0 log"><a href="./logout.php" class="log">Logout</a></button>
            </div>
        </div>
    </nav>

    <div class="flex-container">

    </div>

    <?php $recipes->allRecipes(); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>

</html>
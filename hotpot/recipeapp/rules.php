<?php
@session_start();
require '../database.php';
include  '../Class.Recipe.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
    <title>How it works</title>
</head>

<body id="rules">
    <nav class="navbar navbar-expand-lg navbar-light fixed top custom-nav bg-white">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded=" false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <img src="image/logo-2.png" class="logo2">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../allRecipes.php">All Recipes</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">How it works</a>
                </li>


            </ul>
            <div class="nav navbar-nav navbar-right">
                <button class="btn my-2 my-sm 0 log"><a href="../logout.php" class="log">Logout</a></button>
            </div>
    </nav>

    <div class=" container-fluid rules">
        <br><br>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="bags" src="image/bags.png"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text">

                <h2>The idea behind Hot.pot</h2>
                <p>Remember each time you come home from work or
                    open your fridge have no clue what to eat?
                    We want to make meal planning easy for you, reduce wasting money, resources and food.
                </p>

                <h2> Packed for you</h2>
                <p>Basically, every day, our happy workers create these measured out meals that you just need to put in a pan or pot, cook a bit and eat. No chopping, measuring, adding ingredients.
                    All you need is there in the right amounts.</p>

                <h2>Efficient delivery</h2>
                <p>You schedule delivery date and time,
                    and our free delivery will bee there with your ecologically friendly bag, with a recipe in it. Happy cooking.</p>



            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-xs-2 ">
                <!-- png -->

                <img src="image/bingo-systems-logo-homeslider-light.png" srcset="image/bingo-systems-logo-homeslider-light@2x.png 2x,
             image/bingo-systems-logo-homeslider-light@3x.png 3x" class="bingo-systems-logo-homeslider-light">

                <!-- png -->

                <img src="image/mercator-logotip-rdec-negative-pokoncen.png" srcset="image/mercator-logotip-rdec-negative-pokoncen@2x.png 2x,
             image/mercator-logotip-rdec-negative-pokoncen@3x.png 3x" class="mercator-logotip-rdec-negative-pokoncen">



                <!-- png -->

                <img src="image/konzum-logo-svg.png" srcset="image/konzum-logo-svg@2x.png 2x,
             image/konzum-logo-svg@3x.png 3x" class="Konzum-Logosvg">

                <!-- png -->

                <img src="image/novi-logo-amko.png" srcset="image/novi-logo-amko@2x.png 2x,
             image/novi-logo-amko@3x.png 3x" class="novi-logo-amko">

                <!-- png -->

                <img src="image/1280-px-dm-drogerie-logo-svg.png" srcset="image/1280-px-dm-drogerie-logo-svg@2x.png 2x,
             image/1280-px-dm-drogerie-logo-svg@3x.png 3x" class="px-Dm-drogerie-Logosvg">


            </div>
        </div>
    </div>

</body>

</html>
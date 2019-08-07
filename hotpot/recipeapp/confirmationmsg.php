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
    <title>Confirmation order</title>
</head>

<body id="success">
    <div class="wrapper confirmation">

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
                    <li class="nav-item ">
                        <a class="nav-link" href="../allRecipes.php">All Recipes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./rules.php">How it works</a>
                    </li>


                </ul>
                <div class="nav navbar-nav navbar-right">
                    <button class="btn my-2 my-sm 0 log"><a href="../logout.php">Logout</a></button>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row confirmation-wrapper">
                <div class="col-lg-12">

                    <!-- svg -->

                    <img src="image/group-3.png" srcset="image/group-3@2x.png 2x,
                             image/group-3@3x.png 3x" class="Group-3">


                    <p class="confirming-order">
                        Your order will be there in time.<br>
                        Someone will give you a call 30 minutes before arrival.<br>
                        Have fun cooking!</p>


                    <a href="../index.php"><button class="thank-you">Thank You</button></a>
                </div>
            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
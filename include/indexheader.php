<?php require_once "scripts/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Font-Awesome-master/css/all.css">
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <style>
        nav a.nav-link {
            color: #fff !important;
        }

    </style>

    <title>Home Services</title>
</head>

<body>
   <nav class="navbar navbar-expand-sm navbar-dark nav-bgc">
        <div class="container">
            <a href="#" class="navbar navbar-brand">
                <p class="navbar-logo">myH<img src=vector_man_plumber.png class="navbar-nav img-size">ndyman</p>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
               
                <ul class="navbar-nav ml-auto ">
                    <?php if (!isset($_SESSION['user'])): ?>
                    <li class="navbar-item">
                         <a class="nav-link active" href="index.php">Find Service Provider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register Service Provider</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
     
<!--
        <a class="nav-link active" href="index.php">Find Service Provider</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="register.php">Register Service Provider</a>
        <a class="nav-link" href="about.php">About</a>
-->

        <?php elseif ($_SESSION['user']->name == 'admin'): ?>
        <a class="nav-link" href="managehall.php">Manage Providers</a>
        <a class="nav-link" href="admin.php">Manage Booking</a>
        <a class="nav-link" href="logout.php">Log Out</a>

        <?php else: ?>
        <a class="nav-link" href="logout.php">Log Out</a>
        <?php endif; ?>

    </nav>

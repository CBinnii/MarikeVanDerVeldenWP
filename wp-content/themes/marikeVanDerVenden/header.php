<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Marike van der Velden</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.png">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://use.typekit.net/lgk7qgt.css">
    </head>

    <body>
        <header id="header" class="header">
            <nav class="navbar navbar-expand-md">
                <div class="container justify-content-end">
                    <div class="navbar-menu">
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link pt-serif active" href="/">Tiktok</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pt-serif" href="#">Society Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pt-serif" href="#">Escort Bijbel</a>
                                </li>
                            </ul>
                        </div>
                        <button class="navbar-toggler">
                            <div class="menu-button" id="menu-button" onclick="menuMobile()">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                        </button>
                    </div>
                </div>
            </nav>
        </header>
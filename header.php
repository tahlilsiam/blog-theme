<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>">
</head>
<body>
    <header>
        <div class= "container">
        <h1><?php bloginfo('name') ?></h1>
        <span><?php bloginfo('description') ?></span>
        </div>
        
    </header>
    <nav class="nav-menu">
        <div class="container">
            <?php 
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu(); ?>
        </div>

    </nav>
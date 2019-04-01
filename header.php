<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
        <title><?php bloginfo("name"); ?></title>
    </head>
    <body>
        <div class="container">
        <header class="header">
            <img src="<?php echo get_template_directory_uri()?>/header_logo.png"<alt="business logo" class="logo" />
            <form action="#" class="search">
                <input type="text" class="search__input" placeholder="Search Blogs">

                <button class="search__button">
                    <svg class="search__icon">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/sprite.svg#icon-magnifying-glass"></use>
                    </svg>
                </button>
            </form>
        

            <nav class="user-nav">
                <div class="user-nav__icon-box">
                    <svg class="user-nav__icon">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/sprite.svg#icon-facebook"></use>
                    </svg>
                </div>
                <div class="user-nav__icon-box">
                    <svg class="user-nav__icon">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/sprite.svg#icon-github"></use>
                    </svg>
                </div>
                <div class="user-nav__icon-box">
                    <svg class="user-nav__icon">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/sprite.svg#icon-instagram"></use>
                    </svg>
                </div>
                <div class="user-nav__icon-box">
                    <svg class="user-nav__icon">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/sprite.svg#icon-linkedin"></use>
                    </svg>
                </div>
            </nav>
        </header>

        <div class="content">
                <nav class="sidebar">
                    <ul class="side-nav">
                        <li class="side-nav__item">
                            <a href="" class="side-nav__link">BLOG</a>    
                        </li>

                        <li class="side-nav__item">
                            <a href="http://zootechnic.local/about-me/" class="side-nav__link">ABOUT ME</a>    
                        </li>
                        <li class="side-nav__item">
                            <a href="" class="side-nav__link">CONTACT ME</a>    
                        </li>

                    </ul>
                    <div class="legal">
                        &copy; 2019 by Cesar Gomez. All rights reseved.    
                    </div>
                </nav>

            <main class="hotel-view">
                <h2>zooTechnics</h2>
                <?php 
                    while(have_posts()) {
                        the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <hr>
                    <?php    }
                ?>
            </main>
        </div>
    </div>


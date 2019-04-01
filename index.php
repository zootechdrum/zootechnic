<?php get_header();?>

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
    </header>
    <div class="content">
            <nav class="sidebar">
                Hello this is the navbar
            </nav>

        <main class="hotel-view">
            Hotel_view
        </main>
    </div>
</div>
 
<?php get_footer();?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gmp
 */

get_header();
?>
<html>
<body>

<div class="menu-btn"onclick="toggleNav()" >
		<span class="menu-btn__line"  ></span>
	</div>
    <div class="logo">
        <h1 class="logo-text"><a href="http://localhost:81/wordpress/home/#bio">Geoff Morgan Photography </h1>
    </div>
	<nav class="nav">
        <ul class="menu-nav">
            <li class="menu-nav__item">
                <a href="http://localhost:81/wordpress/home/#portfolio" class="menu-nav__link">
                Portfolio
                </a>
            </li>
            <li class="menu-nav__item">
                <a href="http://localhost:81/wordpress/home/#contact" class="menu-nav__link">
                Contact Me
                </a>
            </li>
            <li class="menu-nav__item active">
                <a href="http://localhost:81/wordpress/home/#investment" class="menu-nav__link">
                Investment
                </a>
            </li>
		</ul>
        </nav>

        <div class="row">
                <img class= "row-img" src="<?php the_field('portfolio_pic_1'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_2'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_3'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_4'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_5'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_6'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_7'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_8'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_9'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_10'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_11'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_14'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_12'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_13'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_15'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_16'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_17'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_18'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_19'); ?>" alt="">
                <img class= "row-img" src="<?php the_field('portfolio_pic_20'); ?>" alt="">
        </div>







</body>
</html>
<?php
get_footer();
?>

<?php
/**
 * The template for displaying all pages
 *"<?php echo get_stylesheet_directory_uri(); ?>../../../img/geoff.png"
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
        <h1 class="logo-text">Geoff Morgan Photography</h1>
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
<section class="bio">
<div class="bio-body">
<h3 class="bio-body__text"><?php the_field('bio_text'); ?></h3>
<img src="<?php the_field('bio_pic'); ?>" class="bio-body__pic">

    </div>
</section>

<section class="portfolio" id="portfolio">
    <div class="slideshow">
        <div class="slides fade">
            <img src="<?php the_field('portfolio_example_1'); ?>" alt="portfolio example 1">
        </div>
        <div class="slides fade">
            <img src="<?php the_field('portfolio_example_2'); ?>" alt="portfolio example 2">
        </div>
        <div class="slides fade">
            <img src="<?php the_field('portfolio_example_3'); ?>" alt="portfolio example 3">
        </div>

        <a class="prev" onclick="changeSlides(-1)">&#10094;</a>
        <a class="next" onclick="changeSlides(1)">&#10095;</a>
    </div>
    <br>
    <div class="dot">
        <span class="dot-indicators" onclick="currentSlide(1)"></span>
        <span class="dot-indicators" onclick="currentSlide(2)"></span>
        <span class="dot-indicators" onclick="currentSlide(3)"></span>
        <br>
        <a href="http://localhost:81/wordpress/portfolio"><button type="button">Click here to check out my full portfolio!</button></a>
    </div>
</section>

<section class="contact" id="contact">
<?php echo do_shortcode('[wpforms id="16"]');?>
<h3 class="contact-title"><?php the_field('contact_text'); ?></h3>
</section>

<section class="investment" id="investment">


<div class="tier-wrapper">
<div class="tier">
    <div class="tier-header">
        <h3 class="tier-header_title"><?php the_field('investment_title_1'); ?></h3>
    </div>
    <div class="tier-body">
        <h2 class="tier-body__price"><?php the_field('investment_price_1'); ?></h2>
        <p class="tier-body__text"><?php the_field('investment_body_1'); ?></p>
    </div>
</div>
</div>
<div class="tier-wrapper">
<div class="tier">
    <div class="tier-header">
        <h3 class="tier-header_title"><?php the_field('investment_title_2'); ?></h3>
    </div>
    <div class="tier-body">
        <h2 class="tier-body__price"><?php the_field('investment_price_2'); ?></h2>
        <p class="tier-body__text"><?php the_field('investment_body_2'); ?></p>
    </div>
</div>
</div>

<div class="tier-wrapper">
<div class="tier">
    <div class="tier-header">
        <h3 class="tier-header_title"><?php the_field('investment_title_3'); ?></h3>
    </div>
    <div class="tier-body">
        <h2 class="tier-body__price"><?php the_field('investment_price_3'); ?></h2>
        <p class="tier-body__text"><?php the_field('investment_body_3'); ?></p>
    </div>
</div>
</div>

</section>

</body>
</html>


<?php
get_footer();
?>
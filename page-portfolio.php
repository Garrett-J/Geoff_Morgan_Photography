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








</body>
</html>
<?php
get_footer();
?>
s
<?php
/**
 * Theme header
 *
 * @package plumasdetigre
 */

?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/61fe318b12.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<!--<a href="#page" id="g1-back-to-top" class="g1--on">Back to Top</a>-->
    <div id="page" class="site main <?php setBodyClass(); ?>">
        <div class="main-layout">
        <?php
            if (is_front_page()) {
                get_template_part('template-parts/header/homepage');
            } else {
                get_template_part('template-parts/header/main');
            }
        ?>
        <div id="content" class="site-content">

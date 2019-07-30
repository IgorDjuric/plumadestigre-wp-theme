<?php
/**
 * plumasdetigre functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package plumasdetigre
 */

require(__DIR__ . "/src/Theme/Setup.php");

$themeSetup = new \Plumasdetigre\Theme\Setup();

add_action('after_setup_theme', 'require_on_init');
function require_on_init()
{
    foreach (glob(get_stylesheet_directory() . "/inc/*.php") as $file) {
        require $file;
    }
}


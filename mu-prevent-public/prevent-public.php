<?php
/*
Plugin Name: Disallow crawling
Version: 0.1.1
Description: Prevent blog_public from being "1"
Plugin URI: https://github.com/szepeviktor/wordpress-plugin-construction
Author: Viktor Szépe
License: GNU General Public License (GPL) version 2
GitHub Plugin URI: https://github.com/szepeviktor/wordpress-plugin-construction
*/

if ( ! is_admin() ) {
    add_filter( 'option_blog_public', '__return_zero', 4294967295 );
}

// Add robots.txt also: `echo -e "User-agent: *\nDisallow: /" > robots.txt`

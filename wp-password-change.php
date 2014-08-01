<pre><?php

/*
Snippet Name: Reset your own WordPress password
Description: Copy this file to the WordPress root and load it in your browser
Plugin URI: https://github.com/szepeviktor/wordpress-plugin-construction
Author: Viktor Szépe
Author URI: http://www.online1.hu/
Version: 1.0
*/

/**
 * 1. change login name below to the selected user ($user)
 * 2. set passwrod ($plain_pass)
 * 3. comment out `die;`
 * 4. run again to set password
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);
// if it's annoying uncommant this
//error_reporting(E_ALL ^ E_STRICT);

define( 'WP_USE_THEMES', false );
require_once( dirname( __FILE__ ) . '/wp-load.php' );

var_dump( $wpdb->get_col( "SELECT user_login FROM $wpdb->users", 0 ) );
var_dump( $wpdb->get_col( "SELECT user_pass FROM $wpdb->users", 0 ) );

// comment out in the second run
die;


/***------EDIT HERE----------***/

$user = '<LOGIN-NAME-TO-CHANGE>';
$plain_pass = '<NEW PASSWORD>';

/***------EDIT HERE----------***/


require_once( dirname( __FILE__ ) . '/wp-includes/class-phpass.php' );

$wp_hasher = new PasswordHash( 8, true );
$pass = $wp_hasher->HashPassword( $plain_pass );

var_dump( $wpdb->update( $wpdb->users, array( 'user_pass' => $pass ), array( 'user_login' => $user ) ) );


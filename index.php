<?php
/*
 * Plugin Name: Naran Disable Heartbeat
 * Description: Disable Wordpress heartbeat script.
 * Author:      changwoo
 * Author URI:  mailto://ep6tri@hotmail.com
 * Plugin URI:  https://github.com/chwnam/naran-disable-heartbeat
 * Version:     1.0.1
 * License:     GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'ndh_deregister_heartbeat_script' ) ) {
    function ndh_deregister_heartbeat_script() {
        if ( wp_script_is( 'heartbeat', 'registered' ) ) {
            wp_deregister_script( 'heartbeat' );
        }
        if ( wp_script_is( 'wp-auth-check', 'registered' ) ) {
            wp_deregister_script( 'wp-auth-check' );
        }
        if ( wp_script_is( 'autosave', 'registered' ) ) {
            wp_deregister_script( 'autosave' );
        }
    }
}
add_action( 'admin_init', 'ndh_deregister_heartbeat_script', 9999 );

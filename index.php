<?php
/*
 * Plugin Name: Naran Disable Heartbeat
 * Description: Disable Wordpress heartbeat script.
 * Author:      changwoo
 * Author URI:  mailto://ep6tri@hotmail.com
 * Plugin URI:  https://github.com/chwnam/naran-disable-heartbeat
 * Version:     1.0.0
 * License:     GPLv2 or later
 */

add_action( 'admin_init', 'ndh_deregister_heartbeat_script', 9999 );
function ndh_deregister_heartbeat_script() {
	if ( wp_script_is( 'heartbeat', 'registered' ) ) {
		wp_deregister_script( 'heartbeat' );
	}
}

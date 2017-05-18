<?php
/**
 * Provides helper functions.
 *
 * @since	  1.0.0
 *
 * @package	GSCR_CPT_Staff
 * @subpackage GSCR_CPT_Staff/core
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since		1.0.0
 *
 * @return		GSCR_CPT_Staff
 */
function GSCRCPTSTAFF() {
	return GSCR_CPT_Staff::instance();
}
<?php
/**
 * Module Name: Enhanced Custom Fields
 * Module URI: http://kenobisoft.com
 * Description: This is the module entry-point.
 * Version: 1.0.0
 * Author: KenobiSoft, Neven Dyulgerov
 * Author URI: http://kenobisoft.com
 * License: GPL2
 */

namespace ThemeOptions;


// die, if directly accessed
defined('ABSPATH') or die('Access denied!');


/**
 * Theme options backend entry-point
 */
function themeOptions() {

	// get main module class
    require_once('core/Initialzr.php');

	// get module config
	$config = simplexml_load_file(__DIR__ . '/config.xml');

	// initialize plugin
	Initialzr::getInstance($config);
}
themeOptions();
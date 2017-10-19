<?php
/*
Plugin Name: Advanced NOTES BY SHIRSHAK
Description: Change boring login to custom login .
Author: Shirshak Bajgain
Version: 1.0
Text Domain: shirshak
License: MIT
*/
defined('ABSPATH') or die("Cannot access pages directly."); 

if ( ! defined( 'ADVANCED_NOTES_FILE' ) )
    define( 'ADVANCED_NOTES_FILE', __FILE__ );
if ( ! defined( 'ADVANCED_NOTES_DIR' ) )
    define( 'ADVANCED_NOTES_DIR', plugin_dir_path( __FILE__ ) );
if ( ! defined( 'ADVANCED_NOTES_DIR_URL' ) )
    define( 'ADVANCED_NOTES_DIR_URL', plugin_dir_url( __FILE__ ) );

require_once("register_post_type_notes.php");
//require_once("register_notes_navigation_taxonomy.php");
require_once("notes_custom_columns.php");
require_once("rewrite.php");
//require_once("taxonomy_adder.php");
<?php
/*
Plugin Name: Advanced NOTES BY SHIRSHAK
Description: Change boring login to custom login .
Author: Shirshak Bajgain
Version: 1.0
Text Domain: shirshak
License: 
All rights reserved.



Redistribution and use in source and binary forms, with or without

modification, are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright

      notice, this list of conditions and the following disclaimer.

    * Redistributions in binary form must reproduce the above copyright

      notice, this list of conditions and the following disclaimer in the

      documentation and/or other materials provided with the distribution.

    * Neither the name of the Studio 42 Ltd. nor the

      names of its contributors may be used to endorse or promote products

      derived from this software without specific prior written permission.



THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND

ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED

WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE

DISCLAIMED. IN NO EVENT SHALL "STUDIO 42" BE LIABLE FOR ANY DIRECT, INDIRECT,

INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT

LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR

PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF

LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE

OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF

ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
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
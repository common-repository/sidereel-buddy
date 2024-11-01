<?php
/*
Plugin Name: SideReel Buddy
Version: 1.0
Plugin URI: http://flatoz.net/side/
Author: Flatoz
Author URI: http://flatoz.net/side/
Description: Get video links from Sidereel.com. Go to a Tv Episode on Sidereel. Look at the url. Match the shortcode example: [sidereel show="Star_Trek_Deep_Space_Nine" season="2" episode="1"]
*/

/*  Copyright 2011  Flatoz  (email : info@flatoz.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function sidereel_func( $atts ) {
	extract( shortcode_atts( array(
		'show' => 'something',
		'season' => 'something',
		'episode' => 'something',
	), $atts ) );

require(dirname(__FILE__).'/episode.php');

}
add_shortcode( 'sidereel', 'sidereel_func' );

?>
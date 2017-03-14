<?php
   /*
   Plugin Name: Footnone Emoji
   Plugin URI: http://www.macht-medien.de
   Description: Prevents mobile safari from rendering the leftwards arrow with hook character ( &#8617; ) as an emoji.
   Version: 1.0
   Author: Florian Egermann
   Author URI: http://www.fleg.de
   License: GPL2
   */
  

function flegfleg_footnone_emoji() {

    wp_register_style( 'flegfleg-footnone-emoji-style', plugins_url('footnone-emoji.css', __FILE__) );
    wp_enqueue_style( 'flegfleg-footnone-emoji-style' );
}
add_action( 'wp_enqueue_scripts', 'flegfleg_footnone_emoji' );
?>
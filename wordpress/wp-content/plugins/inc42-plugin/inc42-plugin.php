<?php
/**
 * Plugin Name: INC42 Plugin
 * Description: A simple WordPress plugin to display a welcome message.
 * Version: 1.0
 * Author: Your Name
 */

function inc42_welcome_message() {
    echo '<div style="color: red; font-size: 2rem;">INC42 welcomes you</div>';
}

add_shortcode('inc42_welcome', 'inc42_welcome_message');
?>

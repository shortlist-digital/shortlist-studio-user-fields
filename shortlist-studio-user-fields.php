<?php

/**
* @wordpress-plugin
* Plugin Name: Shortlist Studio User Fields
* Plugin URI: http://github.com/shortlist-digital/shortlist-studio-user-fields
* Description: Add some extra ACF fields to the User model in Wordpress
* Version: 1.0.0
* Author: Jon Sherrard
* Author URI: http://twitter.com/jshez
* License: GPL2
*/

class ShortlistStudioUserFields
{
    public function __construct()
    {
        add_action('init', array($this, 'register_custom_fields'));
    }

    public function register_custom_fields()
    {
        include_once('user-fields.php');
    }
}

new ShortlistStudioUserFields();

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
        add_action('upload_mimes', array($this, 'allow_ply_mime_type'));
    }

    public function register_custom_fields()
    {
        include_once('user-fields.php');
    }

    public function allow_ply_mime_type($mimeTypes)
    {
        // Extra mimetypes to whitelist
        $mimeTypes['ply'] = 'application/octet-stream';
        return $mimeTypes;
    }
}

new ShortlistStudioUserFields();

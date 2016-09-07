<?php

$key = "user";

$user_acf = array(
    'key' => $key . '_group',
    'title' => 'User Fields',
    'fields' => array(
        array(
            'key' => $key . '_job_title',
            'label' => 'Job Title',
            'name' => 'job_title',
            'type' => 'text',
            'required' => 1,
        ),
        array(
            'key' => $key . '_twitter',
            'label' => 'Twitter',
            'name' => 'twitter',
            'type' => 'text',
            'instructions' => 'Do not include @',
        ),
        array(
            'key' => $key . '_github',
            'label' => 'Github',
            'name' => 'github',
            'type' => 'text',
        ),
        array(
            'key' => $key . '_fallback_image',
            'label' => 'Fallback Image',
            'name' => 'fallback_image',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'uploadedTo',
        ),
        array(
            'key' => $key . '_head_file',
            'label' => 'Head File',
            'name' => 'head_file',
            'type' => 'file',
            'instructions' => '.ply 3D file',
            'required' => 1,
            'return_format' => 'array',
            'library' => 'uploadedTo',
            'mime_types' => 'ply',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'user_form',
                'operator' => '==',
                'value' => 'edit',
            ),
        ),
    ),
);

$user_acf = apply_filters('shortlist_studio_user_fields_acf', $user_acf, $key);
register_field_group($user_acf);

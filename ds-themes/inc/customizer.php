<?php

function wpdevs_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'sec_copyright', 
        array(
            'title'       => 'Copyright Settings',
            'description' => 'copyright settings.',
        )
    );
    $wp_customize->add_setting(
        'set_copyright', 
        array(
            'type'              => 'theme_mod',
            'default'           => 'copyright x - All rights reserved.',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
        $wp_customize->add_control(
        'set_copyright', 
        array(
            'label'    => 'Copyright information',
            'description' => 'please type the copyright here',
            'section'  => 'sec_copyright',
            'type'     => 'text',
        )
    );
}
add_action( 'customize_register', 'wpdevs_customizer' );
?>
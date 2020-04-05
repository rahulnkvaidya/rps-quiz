<?php

function rps_social_customizer_section( $wp_customize ){
	$wp_customize->add_setting( 'rps_facebook_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'rps_twitter_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'rps_instagram_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'rps_email', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'rps_phone_number', array(
		'default'                   =>  '',
	));

	$wp_customize->add_section( 'rps_social_section', array(
		'title'                     =>  __( 'Social Settings', 'RPSRadio' ),
		'priority'                  =>  30,
	//	'panel'                     =>  'RPSRadio'
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'rps_social_facebook_input',
		array(
			'label'                 =>  __( 'Facebook Handle', 'RPSRadio' ),
			'section'               => 'rps_social_section',
			'settings'              => 'rps_facebook_handle',
			'type'                  =>  'text'
		)
	));

	// $wp_customize->add_control(new WP_Customize_Control(
	// 	$wp_customize,
	// 	'rps_social_twitter_input',
	// 	array(
	// 		'label'                 =>  __( 'Twitter Handle', 'RPSRadio' ),
	// 		'section'               => 'rps_social_section',
	// 		'settings'              => 'rps_twitter_handle',
	// 		'type'                  =>  'text'
	// 	)
	// ));

	// $wp_customize->add_control(new WP_Customize_Control(
	// 	$wp_customize,
	// 	'rps_social_instagram_input',
	// 	array(
	// 		'label'                 =>  __( 'Instagram Handle', 'RPSRadio' ),
	// 		'section'               => 'rps_social_section',
	// 		'settings'              => 'rps_instagram_handle',
	// 		'type'                  =>  'text'
	// 	)
	// ));

	// $wp_customize->add_control(new WP_Customize_Control(
	// 	$wp_customize,
	// 	'rps_social_email_input',
	// 	array(
	// 		'label'                 =>  __( 'Email', 'RPSRadio' ),
	// 		'section'               => 'rps_social_section',
	// 		'settings'              => 'rps_email',
	// 		'type'                  =>  'text'
	// 	)
	// ));

	// $wp_customize->add_control(new WP_Customize_Control(
	// 	$wp_customize,
	// 	'rps_social_phone_number_input',
	// 	array(
	// 		'label'                 =>  __( 'Phone Number', 'RPSRadio' ),
	// 		'section'               => 'rps_social_section',
	// 		'settings'              => 'rps_phone_number',
	// 		'type'                  =>  'text'
	// 	)
	// ));
}


/* if(get_theme_mod('rps_facebook_handle')){

}

*/
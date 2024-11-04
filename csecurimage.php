<?php

$config['si_active'] = 'si_easy'; // easy, medium, hard

$config['si_general'] = array(
	'ttf_file'             => FCPATH.'system/fonts/texb.ttf',	
	'image_signature'      => '',
	'signature_color'      => '#abcdef',
	'case_sensitive'       => false,
	'image_height'         => 30,	
	'image_bg_color'       => '#FFFFFF',
	'text_color'           => '#0000ff',
	'line_color'           => '#EAEAEA',
	'image_type'           => 'SI_IMAGE_PNG',	
	'use_wordlist'         => false,
	'text_transparency_percentage' => 90,
	'use_transparent_text' => false,
	'session_name'         => 'Sessioncaptcha',
	'audio_path'           => FCPATH.'application/libraries/securimage/audio/en',
	'audio_use_noise'      => false,
	'degrade_audio'        => false,

);

$config['si_easy'] = array(
	'code_length'  => rand(4, 5),
	'perturbation' => .0,
	'num_lines'    => '0',
	'image_width'  => 70
);

$config['si_medium'] = array(
	'code_length'  => rand(4, 5),
	'perturbation' => .0,
	'num_lines'    => '0',
	'noise_level' => 5,
	'image_width'  => 70,
);

$config['si_hard'] = array(
	'code_length'  => 9,
	'perturbation' => 1.1,
	'num_lines'    => rand(10, 12),
	'image_width'  => 320,
);
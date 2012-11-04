<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	$optionsframework_settings = get_option('optionsframework');
	// Make sure to change this identifier if you copy this block
	$optionsframework_settings['id'] = 'options-palettes';
	update_option('optionsframework', $optionsframework_settings);
	
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 */

function optionsframework_options() {

	$options = array();

	$base_color_scheme_array = array("vibrant" => "Vibrant","pastel" => "Pastel","light" => "Light");
	
	$options[] = array(
	    "name" => "Color Palettes",
	    "type" => "heading");
	    
	$options[] = array(
	    "name" => "Base Color Scheme",
	    "desc" => "If you change the color scheme, your color options below will automatically update.",
	    "id" => "color_scheme",
	    "std" => "vibrant",
	    "type" => "select",
	    "options" => $base_color_scheme_array);
	    
	$options[] = array(
		"name" => "Color One",
	    "id" => "color1",
	    "std" => "#07dfff",
	    "type" => "color" );
	    
	$options[] = array(
	    "name" => "Color Two",
	    "id" => "color2",
	    "std" => "#3cff07",
	    "type" => "color");
	    
	$options[] = array(
	    "name" => "Color Three",
	    "id" => "color3",
	    "std" => "#fcff00",
	    "type" => "color");
	    
	$options[] = array(
	    "name" => "Color Four",
	    "id" => "color4",
	    "std" => "#ff0090",
	    "type" => "color");
    		
	return $options;
}
<?php 
/*
Contributors: Spotlight Studios
Plugin Name: SS UIKit
Plugin URI: http://spotlightstudios.co.uk/plugins/ss-uikit/
Description: This plug-in is designed to be a fast way to implement the UIKit framework into your website; whatever you website is based on.
Tags: wordpress, spotlight, studios, 
Author URI: http://spotlightstudios.co.uk
Author: Spotlight Studios
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MVP7KKKX5YLG4
Requires at least: 2.3
Tested up to: 3.9.1
Stable tag: 1.0.0
Version: 1.0.0
License: GPLv2
*/

function uikit_load(){	/* UIKit Main */

	if(get_option('uikit_main') == 1){
		if(get_option('uikit_type') == 'Basic'){	/* UIkit with Basic style */
			wp_register_style( 'uikit.min.css', plugins_url('/css/uikit.min.css', __FILE__), false, '1.0.0', 'all');
			wp_enqueue_style( 'uikit.min.css' );
			if(get_option('debug') == 1){echo 'UIKit Basic Style Loaded<br>';}
		}
		if(get_option('uikit_type') == 'Gradient'){	/* UIkit with Gradient style */
			wp_register_style( 'uikit.gradient.min.css', plugins_url('/css/uikit.gradient.min.css', __FILE__), false, '1.0.0', 'all');
			wp_enqueue_style( 'uikit.gradient.min.css' );
			if(get_option('debug') == 1){echo 'UIKit Gradient Style Loaded<br>';}
		}
		if(get_option('uikit_type') == 'Almost-Flat'){	/*  UIkit with Almost flat style  */
			wp_register_style( 'uikit.almost-flat.min.css', plugins_url('/css/uikit.almost-flat.min.css', __FILE__), false, '1.0.0', 'all');
			wp_enqueue_style( 'uikit.almost-flat.min.css' );
			if(get_option('debug') == 1){echo 'UIKit Almost Flat Style Loaded<br>';}
		}
	}
	
	if(get_option('uikit_addon_style') == 1){
		if(get_option('uikit_addon_style') == 1){
			if(get_option('uikit_type') == 'Basic'){	/*  Add-ons with Basic style  */
				wp_register_style( 'uikit.addons.min.css', plugins_url('/css/addons/uikit.addons.min.css', __FILE__), false, '1.0.0', 'all');
				wp_enqueue_style( 'uikit.addons.min.css' );
			}
			if(get_option('uikit_type') == 'Gradient'){	/*  Add-ons with Gradient style  */
				wp_register_style( 'uikit.gradient.addons.min.css', plugins_url('/css/addons/uikit.gradient.addons.min.css', __FILE__), false, '1.0.0', 'all');
				wp_enqueue_style( 'uikit.gradient.addons.min.css' );
			}
			if(get_option('uikit_type') == 'Almost-Flat'){	/*  Add-ons with Almost flat style  */
				wp_register_style( 'uikit.almost-flat.addons.min.css', plugins_url('/css/addons/uikit.almost-flat.addons.min.css', __FILE__), false, '1.0.0', 'all');
				wp_enqueue_style( 'uikit.almost-flat.addons.min.css' );
			}
			if(get_option('debug') == 1){echo 'UIKit Add on Style Loaded<br>';}
		}
	}
 
	if(get_option('uikit_javascript') == 1){	/* Javascript */
		wp_register_script( 'uikit.min.js', plugins_url( '/js/uikit.min.js', __FILE__ ) );
		wp_enqueue_script( 'uikit.min.js' );
		if(get_option('debug') == 1){echo 'Javascript Loaded<br>';}
	}

	if(get_option('jquery') == 1){	/*  Jquery  */
		if(get_option('jquery_type') == 'jq2'){
			wp_register_script( 'jquery-1.11.1.min.js', plugins_url( '/jq/jquery-1.11.1.min.js', __FILE__ ) );
			wp_enqueue_script( 'jquery-1.11.1.min.js' );
			if(get_option('debug') == 1){echo 'Jquery 1.11.1 Loaded<br>';}
		}
		else {
			wp_register_script( 'jquery-2.1.1.min.js', plugins_url( '/jq/jquery-2.1.1.min.js', __FILE__ ) );
			wp_enqueue_script( 'jquery-2.1.1.min.js' );
			if(get_option('debug') == 1){echo 'Jquery 2.1.1 Loaded<br>';}
		}

	}

	if(get_option('Autocomplete') == 1){
		wp_register_script( 'autocomplete.min.js', plugins_url( '/js/addons/autocomplete.min.js', __FILE__ ) );
		wp_enqueue_script( 'autocomplete.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Autocomplete Loaded<br>';}
	}
	if(get_option('Datepicker') == 1){   
		wp_register_script( 'datepicker.min.js', plugins_url( '/js/addons/datepicker.min.js', __FILE__ ) );
		wp_enqueue_script( 'datepicker.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Datepicker Loaded<br>';}
	}
	if(get_option('Formadvanced') == 1 || get_option('Formfile') == 1 || get_option('Formpassword') == 1 || get_option('Placeholder') == 1){ 
		wp_register_script( 'form-password.min.js', plugins_url( '/js/addons/form-password.min.js', __FILE__ ) );
		wp_enqueue_script( 'form-password.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Form advanced/File/Password Loaded<br>';}
	}
	if(get_option('Formselect') == 1){
		wp_register_script( 'form-select.js', plugins_url( '/js/addons/form-select.js', __FILE__ ) );
		wp_enqueue_script( 'form-select.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Form Select Loaded<br>';}
	}
	if(get_option('HTMLeditor') == 1){
		wp_register_script( 'markdownarea.min.js', plugins_url( '/js/addons/markdownarea.min.js', __FILE__ ) );
		wp_enqueue_script( 'markdownarea.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on HTMLeditor Loaded<br>';}
	}
	if(get_option('Nestable') == 1){
		wp_register_script( 'nestable.min.js', plugins_url( '/js/addons/nestable.min.js', __FILE__ ) );
		wp_enqueue_script( 'nestable.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Nestable Loaded<br>';}
	}
	if(get_option('Notify') == 1){
		wp_register_script( 'notify.min.js', plugins_url( '/js/addons/notify.min.js', __FILE__ ) );
		wp_enqueue_script( 'notify.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Notify Loaded<br>';}
	}
	if(get_option('Pagination') == 1){
		wp_register_script( 'pagination.min.js', plugins_url( '/js/addons/pagination.min.js', __FILE__ ) );
		wp_enqueue_script( 'pagination.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Pagination Loaded<br>';}
	}
	if(get_option('Search') == 1){
		wp_register_script( 'search.min.js', plugins_url( '/js/addons/search.min.js', __FILE__ ) );
		wp_enqueue_script( 'search.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Search Loaded<br>';}
	}
	if(get_option('Sortable') == 1){
		wp_register_script( 'sortable.min.js', plugins_url( '/js/addons/sortable.min.js', __FILE__ ) );
		wp_enqueue_script( 'sortable.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Sortable Loaded<br>';}
	}
	if(get_option('Sticky') == 1){
		wp_register_script( 'sticky.min.js', plugins_url( '/js/addons/sticky.min.js', __FILE__ ) );
		wp_enqueue_script( 'sticky.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Sticky Loaded<br>';}
	}
	if(get_option('Timepicker') == 1){
		wp_register_script( 'timepicker.min.js', plugins_url( '/js/addons/timepicker.min.js', __FILE__ ) );
		wp_enqueue_script( 'timepicker.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Timepicker Loaded<br>';}
	}
	if(get_option('Upload') == 1){
		wp_register_script( 'upload.min.js', plugins_url( '/js/addons/upload.min.js', __FILE__ ) );
		wp_enqueue_script( 'upload.min.js' );
		if(get_option('debug') == 1){echo 'UIKit Add-on Upload Loaded<br>';}
	}
}

add_action('wp_enqueue_scripts', 'uikit_load' );
add_action('admin_menu', 'ss_uikit_menu');

function ss_uikit_menu() {add_options_page('SS UiKit', 'SS UiKit', '0', 'ss-uikit.php', 'ss_uikit_admin_page');}

function ss_uikit_admin_page(){include('admin/ss-uikit-settings.php');}
?>
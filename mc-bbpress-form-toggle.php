<?php

	/*
	 * Plugin Name: mc-bbpress-form-toggle
	 * Plugin URI:  #
	 * Description: Esconde los formularios y añade botón para mostrarlos/ocultarlos
	 * Version:     1.0.0
	 * Author:      Merksk8
	 * Author URI:  https://codecomas.com
	 * Text Domain: mc-bbpress-form-toggle
	 * Domain Path:
	 * Network:
	 * License:     GPL-2.0+
	 */	
	
	add_action( 'bbp_theme_before_topic_form', 'mc_bbpress_newPostButton', 10, 3 );
	function mc_bbpress_newPostButton(){
		echo '<span id="mc_post_button" class="mc_new_topic button">Nuevo Mensaje</span>';
	}
	
	add_action( 'bbp_theme_before_reply_form', 'mc_bbpress_newReplyButton', 10, 3 );
	function mc_bbpress_newReplyButton(){
		echo '<span id="mc_post_button" class="mc_new_topic button">Nueva Respuesta</span>';
	}
	
	add_action('wp_enqueue_scripts', 'mc_bbpress_styles', PHP_INT_MAX);
	function mc_bbpress_styles(){
		wp_enqueue_style( 'merkcat_bbpress1', plugins_url( 'css/style.css', __FILE__ ) );
		wp_enqueue_style( 'merkcat_bbpress2', plugins_url( 'css/custom-style.css', __FILE__ ) );
		wp_enqueue_script( 'script-name', plugins_url( 'js/toggle-forms.js', __FILE__ ), array(), '1.0.0', true );
	 }
?>
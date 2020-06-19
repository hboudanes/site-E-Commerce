<?php
/*-------------------------- Button Settings option------------------*/
	$bb_ecommerce_store_button_padding_top_bottom = get_theme_mod('bb_ecommerce_store_button_padding_top_bottom');
	$bb_ecommerce_store_button_padding_left_right = get_theme_mod('bb_ecommerce_store_button_padding_left_right');
	if($bb_ecommerce_store_button_padding_top_bottom != false || $bb_ecommerce_store_button_padding_left_right != false){
		$bb_ecommerce_store_custom_css .='.shomain a p{';
			$bb_ecommerce_store_custom_css .='padding-top: '.esc_html($bb_ecommerce_store_button_padding_top_bottom).'px !important; padding-bottom: '.esc_html($bb_ecommerce_store_button_padding_top_bottom).'px !important; padding-left: '.esc_html($bb_ecommerce_store_button_padding_left_right).'px !important; padding-right: '.esc_html($bb_ecommerce_store_button_padding_left_right).'px !important; display:inline-block;';
		$bb_ecommerce_store_custom_css .='}';
	}

	$bb_ecommerce_store_button_border_radius = get_theme_mod('bb_ecommerce_store_button_border_radius');
	if($bb_ecommerce_store_button_border_radius != false){
		$bb_ecommerce_store_custom_css .='.shomain a p{';
			$bb_ecommerce_store_custom_css .='border-radius: '.esc_html($bb_ecommerce_store_button_border_radius).'px !important;';
		$bb_ecommerce_store_custom_css .='}';
	}
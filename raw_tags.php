<?php
/*
 * Plugin Name: Raw tags as ShortCodes
 * Description: Allows to put some tags on WP with short codes
 * Author: Fábrica de Aplicativos
**/

/**
 * Takes care of the atributes strings of the tags
 * @param array $atts the array provided by WP
 * @param array $defaults Additional attributes can be added and the normal and
 * defaults can be overwritten by setting the global ones again
 * @return string The attributes string that should be used with the tag.
 */
function fabrica_SC_get_atts_string($atts, $defaults = array()){
	$global_defaults = array(
			'id' => '',
			'class' => '',
			'style' => '',
			'attrs' => ''
	);
	$defaults = array_merge($global_defaults, $defaults);
	$atts = shortcode_atts($defaults, $atts);
	$result = '';
	foreach($atts as $attr => $value){
		if($attr == 'attrs' || $value == ''){
			continue;
		}
		$result .= " $attr=\"$value\"";
	}
	$result .= ' ';
	$result .= $atts['attrs'];
	return $result;
}

function fabrica_SC_raw_div($atts, $content = ''){
	$result = '<div' .fabrica_SC_get_atts_string($atts) . '>';
	$result .= $content;
	$result .= '</div>';
	return $result;
}

function fabrica_SC_raw_img($atts){
	$defaults = array('src'=>'','alt'=>'');
	$result = '<img' . fabrica_SC_get_atts_string($atts, $defaults) . '/>';
	return $result;
}


function fabrica_SC_raw_span($atts, $content = ''){
	$result = '<span' . fabrica_SC_get_atts_string($atts) . '>';
	$result.= $content;
	$result.= '</span>';
	return $result;
}

function fabrica_SC_iframe($atts, $content = ''){
	$defaults = array('src'=>'', 'width'=>'', 'height'=>'');
	$result = '<iframe src="' .  fabrica_SC_get_atts_string($atts, $defaults) . '">';
	$result .= $content;
	$result .= '</iframe>';
	return $result;
}



add_shortcode('div', 'fabrica_SC_raw_div');
add_shortcode('span', 'fabrica_SC_raw_span');
add_shortcode('img', 'fabrica_SC_raw_img');
add_shortcode('iframe', 'fabrica_SC_iframe');

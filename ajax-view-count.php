<?php

# Admania View-Count implementation developed by @lukapaunovic

# We need the template engine
define( 'WP_USE_THEMES', true );
# Load WordPress Core
require_once( '../../../wp-load.php' );

# Sanitize number input
$post_id = str_replace(['+', '-'], '', filter_var($_REQUEST['post_id'], FILTER_SANITIZE_NUMBER_INT));

# The output will be JSON
header('Content-Type: application/json');

# Don't allow request to pass through if paramerts are empty and request is not initiated via AJAX
if(!empty($post_id) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
	$view_count = admania_get_post_views($post_id);
	admania_set_post_views($post_id);
	$arr = array("views_count"=>$view_count);
} else {
	$arr = array("status"=>'403');
}

echo json_encode($arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

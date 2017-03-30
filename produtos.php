<?php
include 'config.php';

// contains utility functions mb_stripos_all() and apply_highlight()
//require_once 'local_utils.php';

// prevent direct access
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if(!$isAjax) {
  $user_error = 'Access denied - not an AJAX request...';
  trigger_error($user_error, E_USER_ERROR);
}

// get what user typed in autocomplete input
$term = trim($_GET['term']);

$a_json = array();
$a_json_row = array();

$a_json_invalid = array(array("id" => "#", "value" => $term, "label" => "Only letters and digits are permitted..."));
$json_invalid = json_encode($a_json_invalid);

// replace multiple spaces with one
$term = preg_replace('/\s+/', ' ', $term);

// SECURITY HOLE ***************************************************************
// allow space, any unicode letter and digit, underscore and dash
if(preg_match("/[^\040\pL\pN_-]/u", $term)) {
  print $json_invalid;
  exit;
}
// *****************************************************************************

/*aqui tem que trocar o json da api pelo sql do banco*/
$unparsed_json = file_get_contents($url.'/indicators');
$json_object = json_decode($unparsed_json);
foreach($json_object->indicators as $entry) {
	$titulo = $entry->id.' - '.$entry->name;
	if (stripos($titulo, $term) !== false) {
	$a_json_row["id"] = $entry->id;
	$a_json_row["value"] = '';
	$a_json_row["label"] = $titulo;
	array_push($a_json, $a_json_row);
	}
};

// highlight search results
//$a_json = apply_highlight($a_json, $parts);

$json = json_encode($a_json);
print $json;
?>

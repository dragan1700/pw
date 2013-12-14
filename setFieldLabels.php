<?php

// setFieldLabels.php
// setting language-specific input field labels via API

// http://processwire.com/api/multi-language-support/multi-language-fields/#getting-and-setting
// http://processwire.com/talk/topic/1051-adding-and-assigning-fields-without-using-gui/#entry42543
// ---------------------------------------------

// Bootstrap ProcessWire
include('./index.php');


// Assign API variables to make things a little easier
$fields = wire("fields");
$templates = wire("templates");
$modules = wire("modules");
$languages = wire("languages");


$en = $languages->get('en');
$us = $languages->get('us');
$fr = $languages->get('fr');

$field = $fields->get("prod_max_power_consumption");

$field->set("label$en", "Max. Power Consumption");
$field->set("label$us", "Max. Power Consumption");
$field->set("label$fr", "Max. consommation de courant");

$field->save();

?>

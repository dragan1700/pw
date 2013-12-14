<?php

// change display of input fields in backend:
// collapsed if empty (= no content)
// handy if there's dozens of input fields and most are optional (minimize scrolling)


$tpl = $templates->get('product');
$felder = $tpl->fields;
$c = count($felder);
foreach ($felder as $k=>$v) {
	$fld = $fields->get("$v");
	$fld->set("collapsed", 2);
	$fld->save();
}

?>

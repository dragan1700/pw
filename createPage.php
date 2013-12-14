<?php

// create a page via API

$p = new Page();
$p->setOutputFormatting(false);
$p->template = 'products';
$p->parent = wire('pages')->get('/');
$p->name = "my-api-generated-new-pw-page"; // same as MODX alias
$p->title = "My API-generated new PW page";
$p->fieldname = "my field value";
$p->save();

echo "page ID {$p->id} created!<br>";

?>

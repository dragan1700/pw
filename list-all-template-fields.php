<?php

// list all fields from a given template, with edit-links, type, name, label and indication if set to required

$tpl 		= $page->template;
$f 			= $tpl->fields;
$adminUrl 	= $config->urls->admin;

echo "<table><thead><th class='left'>name</th><th class='left'>label</th><th class='left'>type</th><th class='center'>required?</th><th class='right'>id</th></thead><tbody>";
foreach($f as $ff) {
    $required = '';
    if($ff->required) {
        $required = 'x';
    }
    echo "<tr><td>{$ff->name}</td><td>{$ff->label}</td><td>{$ff->type}</td><td class='center'>$required</td><td class='right'><a href='$adminUrl" . "setup/field/edit?id={$ff->id}'>{$ff->id}</a></td></tr>";
}
echo "</tbody></table>";

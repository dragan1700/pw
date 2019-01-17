<?php

// list input fields for a given template

$template = $templates->get('project'); // example template

echo '<table>';
echo '<thead><tr><th>field name</th><th>field type</th><th>field required?</th><th>field label</th><th>field description</th></tr><tbody>';
foreach ($template->fields as $field) {
    echo "<tr>";
    echo "<td>{$field->name}</td>";
    echo "<td>{$field->type}</td>";    
    echo "<td>{$field->required}</td>";
    echo "<td>{$field->label}</td>";
    echo "<td>{$field->description}</td>";    
}
echo '</tbody></table>';

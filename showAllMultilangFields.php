<?php

// debug / info script:
// show all template field names and labels (for each language)
// proved to be essential to avoid chaos with almost 100 template fields in a product template


$template = $templates->get('product');

echo "<table border=1 cellpadding=3 cellspacing=0>";

  echo "<tr>";
  echo "<th>Field Name</th>";
  echo "<th>Field Label DE</th>";
  echo "<th>Field Label EN</th>";
  echo "<th>Field Label US</th>";
  echo "<th>Field Label FR</th>";
  echo "</tr>";


foreach($template->fields as $field) {

  echo "<tr>";
  echo "<td>" . $field->name . "</td>";

  $user->language = $languages->get("default");
  echo "<td>" . $fields->getLabel($field->name) . "</td>";

  $user->language = $languages->get("en");
  echo "<td>" . $fields->getLabel($field->name) . "</td>";

  $user->language = $languages->get("us");
  echo "<td>" . $fields->getLabel($field->name) . "</td>";

  $user->language = $languages->get("fr");
  echo "<td>" . $fields->getLabel($field->name) . "</td>";

  echo "</tr>";


}

echo "</table>";

?>

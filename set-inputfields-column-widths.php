<?php

// set input field column widths (percents)

$myFields = array("industry", "service", "product", "targetgroup");

foreach ($myFields as $field) {
    $f = $fields->get($field);
    $f->columnWidth = 100;
    $f->save();
}

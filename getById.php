<?php

// just testing the (relatively) new getById method

$items = $pages->getById([7657,7663,7677], [
  'template' => $templates->get('project'),
  'parent_id' => 1041
]);
foreach($items as $item) {
    echo "<h1>{$item->title}</h1>";
}

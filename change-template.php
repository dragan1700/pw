<?php
$children = $pages->get(11201)->children;
foreach($children as $child) {
    $child->template = 'offer';
    $child->save();
}

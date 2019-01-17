<?php

// clone entire page-tree

$from = $pages->get(11159);
$to = $pages->get(11180);
$from->of(false);
$to->of(false);
$newPage = $pages->clone($from, $to);
$newPage->of(false);
$newPage->name = $from->name;
$newPage->title = $from->title;
$newPage->save();

<?php
$tree = $pages->get(1221)->children;
foreach($tree as $branch) {
    $branch->removeStatus('locked');
    $branch->save();
}

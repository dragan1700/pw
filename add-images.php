<?php

$p = $pages->get(10202); // Hans Muster
$imgs = array('hans-muster-1.png', 'hans-muster-2.png', 'hans-muster-3.png', 'hans-muster-4.png');
$folder = $config->urls->templates . "images/";

foreach ($imgs as $k=>$v) {
    $path = $folder . $v;
    $p->of(false);
    $p->images->add($path);
    $p->images->last()->description = "sample description for image $v";
    $p->save();
}


<?php

$pw = new Password();
$r = range(0, 100);
foreach($r as $foo) {
    d($pw->randomPass([
        'minLength' => 8,
        'maxLength' => 15,
        'maxSymbols' => -1,
    ]));
}

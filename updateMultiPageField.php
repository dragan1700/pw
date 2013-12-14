<?php

// a little gotcha with CSV import module:
// multi-page input fields arent' recognized
// hence, an additional API page-update is necessary

$p = $pages->get(2025);$p->setOutputFormatting(false);$p->prod_material=1165; $p->save();

?>

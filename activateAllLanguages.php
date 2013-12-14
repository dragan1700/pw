<?php

// When creating pages via API, only the default language is activated.
// If you want to activate all languages, use this after your page-creation API script.
// In this real-life scenario I had to import product pages, hence the template-selector below.


$pages->setOutputFormatting(false);
$pag = $pages->find("template='product'");

foreach($pag as $p) {
    foreach($languages as $lang) {
      if($lang->isDefault()) continue;
      $p->set("status$lang", 1);
      $p->save();
    }
}

?>

$pgs = $pages->find("has_parent!=2, id!=2, id!=7,status=1");

// using <pre>, \n + \t, we can copy and paste it for use in spreadsheets
echo "<pre>";
foreach($pgs as $p) {
    foreach($languages as $lang) {
        $hreflang = $pages->get(1)->getLanguageValue($lang, 'name'); 
        $langTitle = $lang->title;
        if($lang->isDefault()) continue;
        $status = (int) $p["status$lang"];
        if($status === 0) {
            $activated = "inactive";
        } else {
            $activated = "active";
        }
        echo "{$p->id}\t$hreflang\t$activated\t{$p->title}\n";
    }
}
echo "</pre>";

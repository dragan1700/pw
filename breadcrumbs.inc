<?php

// typical breadcrumbs example

echo "<ul class=\"breadcrumbs noMobile\">";

$parents = $page->parents;
$parentsCount = count($parents);

foreach($parents as $parent) {
	$url = $parent->url;
	echo "<li><a href='$url'>{$parent->title}</a></li>\n";
}


// show current / "we are here" page as well, but not as link: (last element)
echo "<li>{$page->title}</li>\n";

echo "</ul>";

?>

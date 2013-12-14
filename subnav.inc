<?php

// sub-navigation example
// usually leftnav.inc
// only render link-list if parent page actually has child elements


$kids = $page->children;

if(count($kids)) {

	$kids->sort("postDate");

	echo "<ul class='leftNav'>\n";

	foreach($kids as $kid) {
		if($page->id != $kid->id) {
			echo "<li><a href='{$kid->url}' title='{$kid->title}'>{$kid->title}</a></li>\n";
		} else {
			echo "<li><strong>{$kid->title}</strong></li>\n"; // current page
		}
	}

	echo "</ul>\n";

}

?>

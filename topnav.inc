<?php

// create simple top-navigation - only top-level pages, no child elements
// show only pages where inputfield "shopTopNav" is checked
// sort according to PW backend page-tree
// use in template.php with include('./topnav.inc');


$topLinks = $pages->find("showTopNav=1,sort=sort");

foreach($topLinks as $top) {

	// link = current page?
	if( $page->id == $top->id || $page->parent->id == $top->id )  {
		echo "<li><a href=\"{$top->url}\" class='current'>{$top->title}</a></li>\n";
	} else {
		echo "<li><a href=\"{$top->url}\">{$top->title}</a></li>\n";
	}
	echo "<li class=\"divider\"></li>";

} // end foreach link

?>

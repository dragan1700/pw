<?php

// Image gallery overview page
// show first image of each gallery as link


$pgs = $page->children;

foreach($pgs as $child) {

	$galleryURL		= $child->url;
	$galleryTitle	= $child->title;

	$galleryPreview = $child->images->first();
	$thumb			= $galleryPreview->size(600);
	$thumbURL		= $thumb->url;

	$alt			= $child->title;

	echo "<div style=\"margin-bottom: 3em;\"><h2><a href=\"$galleryURL\">$galleryTitle</a></h2><br>";
	echo "<a href=\"$galleryURL\"><img src=\"$thumbURL\" alt=\"$alt\"></a></div>";

}


?>

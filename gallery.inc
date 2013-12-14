<?php

$imgSize = 180;

if($page->images) {
	$options = array(
	  'cropping' => 'center'
	);

	if(count($page->images)) {
		$images = $page->images;

		// this is ZURB Foundation - specific:
		echo '<ul class="clearing-thumbs" data-clearing>';


		foreach($images as $i) {
			$thumb = $i->size($imgSize, $imgSize, $options);

			$alt = '';
			$caption = '';

			// make sure img alt attributes don't stay empty:
			// either use image description (if available) or page-title:
			if($i->description) {
				$alt = $i->description;
				$caption = $alt;
			} else {
				$alt = $page->title;
				$caption = '';
			}

			echo "<li class='gallery'><a href='{$i->url}' title='$caption'><img src='{$thumb->url}' alt='$alt' data-caption='$alt'></a></li>\n";
		}

		echo '</ul>';

	}
}
?>

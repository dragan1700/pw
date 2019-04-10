<?php

// use-case: if you use language image-tags, and want to show the images of the user's current language 
// first, and everything else later
// https://processwire.com/talk/topic/21246-images-gallery-sorting-order-based-on-language/?tab=comments#comment-183814
// https://processwire.com/blog/posts/processwire-updates-and-new-field-types/

// assuming you use delayed output strategy...
$content .= "<div class='gallery'>";

$userlang = $user->language->name;

$content .=  "$userlang <hr>"; // just for debugging

$g = $page->gallery->sort('tags'); // just for debugging: show all, sorted by tag
$content .=  "all: <br>";
foreach($g as $pic) {
    $content .=  "{$pic->tags} {$pic->url}<br>";
}
$content .=  "<hr>";

$g = $page->gallery->find("tags=$userlang"); // only user's current language images
$content .=  "userlang: <br>";
foreach($g as $pic) {
    $content .=  "{$pic->tags}  {$pic->url}<br>";
}

$g = $page->gallery->find("tags!=$userlang"); // ... and then, everything else
$content .=  "NOT userlang: <br>";
foreach($g as $pic) {
    $content .=  "{$pic->tags}  {$pic->url}<br>";
}

$content .= "</div>";

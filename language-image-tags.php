<?php

// use-case: if you use language image-tags, and want to show the images of the user's current language 
// first, and everything else later
// https://processwire.com/talk/topic/21246-images-gallery-sorting-order-based-on-language/?tab=comments#comment-183814
// https://processwire.com/blog/posts/processwire-updates-and-new-field-types/

$userlang = $user->language->name;

$g = $page->gallery->find("tags=$userlang"); // only user's current language images
foreach($g as $pic) {
    $content .=  "<img src='{$pic->url}'>";
}

$g = $page->gallery->find("tags!=$userlang"); // ... and then, everything else
foreach($g as $pic) {
    $content .=  "<img src='{$pic->url}'>";
}

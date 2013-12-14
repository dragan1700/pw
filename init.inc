<?php

// example of an init file - included at the very top of every PW template
// make sure UTF-8 headers are set
// if multilang-site: declare a few variables / string translations
// specify language HTML attr.
// possible other uses: sessions


header("Content-type: text/html; charset=utf-8;");

$tplPath = $config->urls->templates;
$siteTitle = 'zürich transit maritim';

$lang = $user->language->name; // e.g. "default" or "en"

if($lang == 'default') {
	$htmlLang = 'de';
	$homeURL = $config->urls->root;
	$moreStr = "Weiterlesen"; // blog overview: link to full post
	$publishedStr = "Publiziert";
	$taglineStr = "Eine Kunst-Intervention im öffentlichen Raum";
}

if($lang == 'en') {
	$htmlLang = $lang;
	$homeURL = $config->urls->root . 'en/';
	$moreStr = "Read more"; // blog overview: link to full post
	$publishedStr = "Published";
	$taglineStr = "An art intervention in public space";
}

?>

<?php

/*

Use-case: You want to disallow search bots from crawling certain files, e.g. all files under parent page x.
Since PW stores files in site/assets/files/page-id/ and not under the virtual URL 
domain.com/page/sub-page/pagename/, finding all file-folders manually can be tedious.
This output can be copy and pasted in the site's robots.txt as is. Use in special template or Tracy Debugger console.

*/

$team = $pages->findIds("parent=1098, template=employee, include=all, sort=id"); // change parent id to whatever you want
$dir = $config->urls->assets;
echo "<pre>";
echo "User-agent: * \n";
foreach($team as $id) {
	echo "Disallow: $dir$id/\n";
}
echo "</pre>";

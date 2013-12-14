<?php

// just a little example how to pull a random page (e.g. quotes / testimonials)


$quote = $pages->find("parent=1041, include=hidden");

if(count($quote)) {

	$quote->shuffle();
	$pick = $quote->getRandom();
	$q = $pick->Zitat; // quote
	$a = $pick->Autor; // author

	echo "<div class='quoteWrapper'>\n";
	echo "	<div class='quote'>$q</div>\n";
	echo "	<div class='author'>— $a</div>\n";
	echo "</div>\n";

}


?>

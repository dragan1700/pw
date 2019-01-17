<?php
// minify HTML for frontend pages
// wrap HTML-tables in container DIVs (to make them responsive via CSS)
// use in site/ready.php

if ($this->page->template == 'admin') {
	//
} else {
	$this->addHookAfter('Page::render', function ($event) {
	
		// responsive tables (scrollarea):
		$event->return = str_replace("<table", "<div class='scrollarea'><table", $event->return);
		$event->return = str_replace("</table>", "</table></div>", $event->return);

		// minify HTML:
		$event->return = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $event->return);
		$event->return = preg_replace("/[\r\n]+/", "\n", $event->return);
		$event->return = preg_replace("/\s+/", ' ', $event->return);

	});

}

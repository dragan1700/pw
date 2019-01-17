// inject your own custom JS + CSS into admin templates
// place in site/ready.php
// when using AdminOnSteroids, perhaps obsolete (especially for theme-overrides)

if ($this->page->template == 'admin') {
	$this->addHookAfter('Page::render', function ($event) {
		$css = wire('config')->urls->templates . 'styles/admin-custom.css';
		$js = wire('config')->urls->templates . 'scripts/AdminThemeUikit.js?v=1';
		$event->return = str_replace("</head>", "\n<link type='text/css' href='{$css}' rel='stylesheet'/>\n</head>", $event->return);
		$event->return = str_replace("</body>", "\n<script type='text/javascript' src='{$js}'></script>\n</body>", $event->return);
	});
}

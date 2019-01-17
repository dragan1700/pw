// load necessary admin JS/CSS assets for pagelist select multiple
// https://processwire.com/talk/topic/18083-create-inputfieldpagelistselectmultiple-inside-module/?tab=comments#comment-158555
// use in site/ready.php

if ($this->page->template == 'admin') {
	$wire->addHookAfter('ProcessPageLister::execute', function (HookEvent $event) {
		if ($this->config->ajax) return; // not needed for AJAX-loads
		if (wire('page')->id === 1224) {
			$this->config->scripts->add($this->config->urls->templates . 'scripts/modules/admin.js');
			$inputfield = $this->modules->get("InputfieldPageListSelectMultiple");
			$inputfield->renderReady(); // load JS/CSS dependencies
		}
	});
}

<?php

/*

MODX FirstChildRedirect snippet PW equivalent
if a parent page only serves as a container, and shouldn't be displayed 
in the frontend, redirect to the first child page instead.
Typically, either include in a specific template, or add a selector to only trigger when needed.
Or with a checkbox inputfield.

*/

if($page->numChildren) {
	$session->redirect($page->child()->url);
}

?>

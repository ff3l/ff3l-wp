<?php
require_once 'functions.php';
$url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$tmpl = "single";
if (preg_match("^http(s?):\/\/(?:[A-Za-z0-9\.]*)\/(c|k)al", $url) == 1) {
	// We are on a calendar site. Let's remove the author and also the comments
	$tmpl = "single-cal";
}
Common::render($tmpl, array(
	"post" => new TimberPost()
	));
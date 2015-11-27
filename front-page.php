<?php
require_once 'common.inc.php';
Common::render("site", array(
	"post" => new TimberPost()
	));
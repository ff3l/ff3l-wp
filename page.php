<?php
require_once 'functions.php';
Common::render("site", array(
	"post" => new TimberPost()
	));
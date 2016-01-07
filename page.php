<?php
require_once 'functions.php';
Common::render("site", false, array(
	"post" => new TimberPost()
	));
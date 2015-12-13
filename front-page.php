<?php
require_once 'functions.php';
Common::render("site-front", array(
	"post" => new TimberPost()
	));
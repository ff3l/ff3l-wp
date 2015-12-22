<?php
require_once 'functions.php';
Common::render("site-front", false, array(
	"post" => new TimberPost()
	));
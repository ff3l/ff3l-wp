<?php
require_once 'functions.php';
Common::render("single", false, array(
	"post" => new TimberPost()
	));
<?php
require_once 'functions.php';
Common::render("single", array(
	"post" => new TimberPost()
	));
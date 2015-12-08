<?php
require_once 'functions.php';
$author = new TimberUser();
Common::render("author", array(
  "author" => $author,
  "author_avatar" => Common::get_gravatar($author->$user_email)
  ));
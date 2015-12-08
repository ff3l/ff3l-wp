<?php
require_once 'functions.php';
$author = new TimberUser();
$id = $author->ID;
Common::render("author", array(
  "author" => $author,
  "author_avatar" => Common::get_gravatar($author->$user_email),
  "author_posts" => Timber::get_posts("author=$id")
  ));
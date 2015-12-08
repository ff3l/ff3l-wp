<?php
require_once 'functions.php';
$author_id = get_queried_object()->ID;
$author = new TimberUser($author_id);
Common::render("author", array(
  "author" => $author,
  "author_avatar" => Common::get_gravatar(get_userdata($author_id)->user_email)),
  "author_bio" => get_the_author_meta('description', $author_id),
  "author_posts" => Timber::get_posts("author=$author_id")
  ));
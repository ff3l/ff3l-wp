<?php
require_once 'common.inc.php';
$author = new TimberUser(intval($_GET['author']));
Common::render("author", array(
  "author" => $author,
  "author_avatar" => Common::get_gravatar_url($author->$user_email)
  ));
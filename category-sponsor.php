<?php
require_once 'functions.php';
$context = Timber::get_context();
$context['site'] = Common::populate_context();
$posts = Timber::get_posts();
shuffle($posts);
$context['posts'] = $posts;
Timber::render("templates/sponsor.twig", $context);
<?php
require_once 'functions.php';
$context = Timber::get_context();
$context['site'] = Common::populate_context();
$posts = Timber::get_posts();
$context['posts'] = shuffle($posts);
Timber::render("templates/sponsor.twig", $context);
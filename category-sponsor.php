<?php
require_once 'functions.php';
$context = Timber::get_context();
$context['site'] = Common::populate_context();
$context['posts'] = shuffle(Timber::get_posts());
Timber::render("templates/sponsor.twig", $context);
<?php
require_once 'common.inc.php';
$context = Timber::get_context();
$context['site'] = Common::get_site_info();
Timber::render('templates/index.twig.html', $context);
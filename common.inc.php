<?php
class Common {

	public static $BLOGINFO_FIELDS = array("name","description","wpurl","url","admin_email","charset","version","html_type","language","stylesheet_url","stylesheet_directory","template_url","pingback_url","atom_url","rdf_url","rss_url","rss2_url","comments_atom_url","comments_rss2_url");

	public static function populate_context() {
		$data = array();
		foreach (Common::$BLOGINFO_FIELDS as $key) {
			$data[$key] = get_bloginfo($key);
		}
		$data['menu'] = new TimberMenu();
		$data['home'] = home_url('/');
		return $data;
	}

	public static function render($name, $args = array()) {
		$context = Timber::get_context();
		$context['site'] = Common::populate_context();
		$context['posts'] = Timber::get_posts();
		foreach ($args as $key => $value) {
			$context[$key] = $value;
		}
		Timber::render("templates/$name.twig.html", $context);
	}

}



add_filter('timber_context', 'Common::populate_context');
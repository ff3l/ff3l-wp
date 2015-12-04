<?php
class Common {

	public static $BLOGINFO_FIELDS = array("name","description","wpurl","url","admin_email","charset","version","html_type","language","stylesheet_url","stylesheet_directory","template_url","pingback_url","atom_url","rdf_url","rss_url","rss2_url","comments_atom_url","comments_rss2_url");

	public static function populate_context() {
		$data = array();
		foreach (Common::$BLOGINFO_FIELDS as $key) {
			$data[$key] = get_bloginfo($key);
		}
		$data['title'] = $data['name'] + " | " +
					is_front_page() ? $data['description'] : wp_title('&raquo;', false);
		$data['menu'] = new TimberMenu('main');
		$data['carousel'] = new TimberMenu('carousel');
		$data['home'] = home_url('/');
		$data['header'] = wp_head();
		$data['footer'] = wp_footer();
		return $data;
	}

	public static function get_gravatar_url( $email ) {
		return '//gravatar.com/avatar/' . md5( strtolower( trim ( $email ) ) );
	}

	public static function render($name, $args = array()) {
		$context = Timber::get_context();
		$context['site'] = Common::populate_context();
		$context['posts'] = Timber::get_posts();
		$context['pagination'] = Timber::get_pagination();
		foreach ($args as $key => $value) {
			$context[$key] = $value;
		}
		Timber::render("templates/$name.twig", $context);
	}

	public static function setup_admin_menu($wp_customize) {
		$wp_customize->add_section(
			'ff3l_banner_options',
			array(
				'title' => __( 'Banner Settings', 'ff3l' ),
				'priority' => 100,
				'capability' => 'edit_theme_options',
				'description' => __('Change bannner options here.', 'ff3l'),
			)
		);
	}

}

add_action("customize_register", "Common::setup_admin_menu");

add_filter('timber_context', 'Common::populate_context');
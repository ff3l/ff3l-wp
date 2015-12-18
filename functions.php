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

	public static function get_gravatar( $email ) {
		return get_avatar($email, 134);
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

}

add_action("customize_register", "setup_admin_menu");

function setup_admin_menu($wp_customize) {
	$wp_customize->add_section(
		'ff3l_carousel_options',
		array(
			'title'       => __( 'Carousel Settings', 'ff3l' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change carousel options here.', 'ff3l'),
		)
	);
	$wp_customize->add_setting( 'carousel_height',
		array(
			'default' => 250
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'carousel_height_control',
		array(
			'label'    => __( 'Carousel Height', 'ff3l' ),
			'section'  => 'ff3l_carousel_options',
			'settings' => 'carousel_height',
			'priority' => 10,
		)
	));
}

add_filter('timber_context', 'Common::populate_context');
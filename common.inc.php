<?php
class Common {

	public static $BLOGINFO_FIELDS = array("name","description","wpurl","url","admin_email","charset","version","html_type","language","stylesheet_url","stylesheet_directory","template_url","pingback_url","atom_url","rdf_url","rss_url","rss2_url","comments_atom_url","comments_rss2_url");

	public static function get_site_info() {
		$data = array();
		foreach (Common::$BLOGINFO_FIELDS as $key) {
			$data[$key] = get_bloginfo($key);
		}
		return $data;
	}

}
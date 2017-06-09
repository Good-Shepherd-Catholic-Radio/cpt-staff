<?php
/**
 * Class CPT_GSCR_Staff
 *
 * Creates the post type.
 *
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class CPT_GSCR_Staff extends RBM_CPT {

	public $post_type = 'staff';
	public $label_singular = null;
	public $label_plural = null;
	public $labels = array();
	public $icon = 'groups';
	public $post_args = array(
		'hierarchical' => true,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),
		'has_archive' => false,
		'rewrite' => array(
			'slug' => 'staff',
			'with_front' => false,
			'feeds' => false,
			'pages' => true
		),
		'menu_position' => 11,
		//'capability_type' => 'staff',
	);

	/**
	 * CPT_GSCR_Staff constructor.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		// This allows us to Localize the Labels
		$this->label_singular = __( 'Staff', 'gscr-cpt-staff' );
		$this->label_plural = __( 'Staff', 'gscr-cpt-staff' );

		$this->labels = array(
			'menu_name' => __( 'Staff', 'gscr-cpt-staff' ),
			'all_items' => __( 'All Staff', 'gscr-cpt-staff' ),
		);

		parent::__construct();
		
		add_action( 'init', array( $this, 'register_taxonomy' ) );
		
	}
	
	/**
	 * Staff Category Taxonomy
	 * 
	 * @access		public
	 * @since		1.0.0
	 * @return		void
	 */
	public function register_taxonomy() {
		
		register_taxonomy( $this->post_type . '-category', array( $this->post_type ), array(
			'labels' => array(
				'name' => sprintf( __( '%s Categories', 'gscr-cpt-staff' ), $this->label_singular ),
				'singular_name' => sprintf( __( '%s Category', 'gscr-cpt-staff' ), $this->label_singular ),
				'menu_name' => sprintf( __( '%s Categories', 'gscr-cpt-staff' ), $this->label_singular ),
			),
			'hierarchical' => true,
			'show_admin_column' => true,
		) );
		
	}
	
}
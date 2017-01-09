<?php
/**
 * Exemple of a custom post type declaration
 */
namespace App\PostType;

class PostTypeName {
    protected $post_type = 'posttype';

    function __construct() {
        add_action( 'init', array($this, 'registerPostType') );
        add_action( 'init', array($this, 'registerTaxonomies') );
    }

    function registerPostType() {
        $post_type_support='posts';

        $labels = array(
            'name'               => __( 'Post types', 'MickaelZhang' ),
            'singular_name'      => __( 'Post type', 'MickaelZhang' ),
            'all_items'          => __( 'All posttypes', 'MickaelZhang' ),
            'add_new'            => __( 'Add a posttype', 'MickaelZhang' ),
            'add_new_item'       => __( 'Add a posttype', 'MickaelZhang' ),
            'edit_item'          => __( 'Edit posttype',  'MickaelZhang' ),
            'new_item'           => __( 'New posttype', 'MickaelZhang' ),
            'view_item'          => __( 'View posttype',  'MickaelZhang' ),
            'search_items'       => __( 'Find a posttype',  'MickaelZhang' ),
            'not_found'          => __( 'No result', 'MickaelZhang' ),
            'not_found_in_trash' => __( 'No result', 'MickaelZhang' ),
            'parent_item_colon'  => __( 'Parent posttype:',  'MickaelZhang' ),
            'menu_name'          => __( 'Projects',  'MickaelZhang' ),
        );

        $args = array(
            'labels'              => $labels,
            'hierarchical'        => false,
            'supports'            => array( 'title','thumbnail','editor' ),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-media-document',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => false,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => array( 'slug' => $this->post_type )
        );

        register_post_type($this->post_type, $args );
    }

    function registerTaxonomies() {
        // Project Type
        register_taxonomy(
            'type',
            array($this->post_type),
            array(
                'label' => __( '- Project type', 'MickaelZhang' ),
                'rewrite' => array( 'slug' => 'type' ),
                'hierarchical' => true,
                'show_admin_column' => true,
            )
        );

        // Language and technology used
        register_taxonomy(
            'technology',
            array($this->post_type),
            array(
                'label' => __( '- Technology used', 'MickaelZhang' ),
                'rewrite' => array( 'slug' => 'technology' ),
                'hierarchical' => true,
                'show_admin_column' => true,
            )
        );
    }
}

<?php

namespace App\Core;

class BaseTheme {
    function __construct() {
        add_action( 'init', array($this, 'disableWpEmojicons') );

        add_action( 'admin_head', array($this, 'hideUpdateNoticeToAllButAdmin'), 1 );

        add_filter('acf/settings/save_json', array($this, 'myAcfJsonSavePoint') );

        $this->disableXmlrpc();
        $this->removeFromWpHead();
    }

    /**
     * Hide WordPress Update Nag to All But Admins
     */
    function hideUpdateNoticeToAllButAdmin() {
        if (!current_user_can('update_core')) {
            remove_action( 'admin_notices', 'update_nag', 3 );
        }
    }

    /**
     * Disable Emoji
     */
    function disableWpEmojicons() {
        remove_action( 'admin_print_styles', 'print_emoji_styles' );
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
        add_filter( 'tiny_mce_plugins', array($this, 'disableEmojiconsTynymce') );
    }

    function disableEmojiconsTynymce( $plugins ) {
        if ( is_array( $plugins ) ) {
            return array_diff( $plugins, array( 'wpemoji' ) );
        } else {
            return array();
        }
    }

    /**
     * Disable xmlrpc.php
     */
    function disableXmlrpc() {
        add_filter('xmlrpc_enabled', '__return_false');
        remove_action( 'wp_head', 'rsd_link' );
        remove_action( 'wp_head', 'wlwmanifest_link' );
    }

    function myAcfJsonSavePoint( $path ) {
        $path = get_template_directory() . '/acf-json';
        return $path;
    }

    /**
     * Remove useless things from wp_head
     * @link http://cubiq.org/clean-up-and-optimize-wordpress-for-your-next-theme
     */
    function removeFromWpHead() {
        remove_action('wp_head', 'wp_generator'); // WP Version
        remove_action('wp_head', 'start_post_rel_link');
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'adjacent_posts_rel_link'); // Remove link to next and previous post
        remove_action('wp_head', 'feed_links_extra', 3); // Automatic feeds for single posts
        remove_action( 'wp_head', 'feed_links', 2 );
        remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    }
}

<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

// search posts and pages
// function search_filter( $query ) {
// 	if (!is_page(14)) {
// 		if ( $query->is_search ) {
// 		  $query->set( 'post_type', array('post','page','case_studies') );
// 		}
// 		return $query;
// 	} else{
	// 	if ( $query->is_search ) {
	// 	  $query->set('post_type', array('faqs'));
	// 	}
	// 	return $query;
	// }
  
// }
// add_filter('pre_get_posts','search_filter');

// Get Available Languages
function icl_post_languages(){
  // Get current language
  switch (ICL_LANGUAGE_CODE) {
    case 'es':
      $lang = 'Elige lengua';
      break;
    case 'it':
      $lang = 'Scegli la lingua';
      break;
    default:
      $lang = 'Choose Language';
      break;
  }

  $languages = icl_get_languages();

  if(1 < count($languages)){
    echo '<button class="button" type="button" data-toggle="example-dropdown-1"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;<span class="choose">'. $lang .'</span>&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></button>';
    echo '<ul class="dropdown-pane lang-switcher" id="example-dropdown-1" data-dropdown data-hover="true" data-hover-pane="true">';
    foreach($languages as $l){
      if(!$l['active']) {
        if (strpos($l['url'],'/it') !== false) {
          echo '<li><a href="'.$l['url'].'">'.$l['translated_name'].'</a></li>';
        }else if (strpos($l['url'],'/es') !== false) {
          echo '';
        }else{
          echo '<li><a href="'.$l['url'].'">'.$l['translated_name'].'</a></li>';
        }
      }
    }
    echo '</ul>';
  }
}

function icl_post_languages_mobile(){
  // Get current language
  switch (ICL_LANGUAGE_CODE) {
    case 'es':
      $lang = 'Elige lengua';
      break;
    case 'it':
      $lang = 'Scegli la lingua';
      break;
    default:
      $lang = 'Choose Language';
      break;
  }

  $languages = icl_get_languages('skip_missing=1');
  
  if(1 < count($languages)){
    echo '<button class="button" type="button" data-toggle="example-dropdown-bottom-left"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;<span class="choose">'. $lang .'</span>&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></button>';

    echo '<ul class="dropdown-pane" data-position="bottom" data-alignment="center" id="example-dropdown-bottom-left" data-dropdown data-auto-focus="true">';
    foreach($languages as $l){
      if(!$l['active']) {
      	echo '<li><a href="'.$l['url'].'">'.$l['translated_name'].'</a></li>';
      }
    }
    echo '</ul>';
  }
}

// Add support for excerpts on pages
add_post_type_support('page','excerpt');

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

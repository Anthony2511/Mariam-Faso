<?php

add_action('init', 'ma_register_types');
add_theme_support('post-thumbnails');
add_image_size( 'thumb-about', 523, 523, true );
add_image_size( 'thumb-voyage', 330, 218, true );
add_image_size( 'thumb-home-project', 542, 359, true );
add_image_size( 'thumb-single-project', 500, 375, true );
add_image_size( 'thumb-project', 350, 232, true );
add_image_size( 'thumb-voyages', 440, 291, true );
add_image_size( 'thumb-galerie', 356, 236, true );
add_image_size( 'thumb-partenaires', 260, 153, true );
add_image_size( 'thumb-events', 440, 330, true );

// Define shortcut path
$css =  get_template_directory_uri() . '/css/main.css';
$images =  get_template_directory_uri() . '/images/';
$scripts =  get_template_directory_uri() . '/scripts/';

// Retrieves the absolute URI for given asset in this theme.
function get_images($src = '') {
  return get_template_directory_uri() . '/images/' . trim($src, '/');
}

function ma_register_types() {
  register_post_type( 'voyages', [
              'label' => 'Voyages',
              'labels' => [
                          'singular_name' => 'voyage',
                          'add_new' =>'Ajouter un nouveau voyage'
                    ],
              'description' => 'Permet d\'administrer les voyages affichés sur le site.',
              'public' => true,
              'menu_position' => 20,
              'menu_icon' => 'dashicons-palmtree',
              'supports' => ['title','thumbnail']
        ] );

  register_post_type( 'projets', [
              'label' => 'Projets',
              'labels' => [
                          'singular_name' => 'projet',
                          'add_new' =>'Ajouter un nouveau projet'
                    ],
              'description' => 'Permet d\'administrer les projets affichés sur le site.',
              'public' => true,
              'menu_position' => 21,
              'menu_icon' => 'dashicons-hammer',
              'supports' => ['title','thumbnail']
        ] );

  register_post_type( 'evenements', [
              'label' => 'Évènements',
              'labels' => [
                          'singular_name' => 'evenement',
                          'add_new' =>'Ajouter un nouveau évènement'
                    ],
              'description' => 'Permet d\'administrer les évènements affichés sur le site.',
              'public' => true,
              'menu_position' => 22,
              'menu_icon' => 'dashicons-calendar-alt',
              'supports' => ['title','thumbnail']
        ] );

}





// Displays the absolute URI for given asset in this theme.
function theme_asset($src = '') {
  echo get_theme_asset($src);
}

// Disable admin bar
show_admin_bar(false);

// Register menu
register_nav_menu( 'main-nav', __('Menu principal, affiché dans le header.','b') );

// Create items menu
function b_get_menu_id( $location )
{
  $a = get_nav_menu_locations();
  if (isset($a[$location])) return $a[$location];
  return false;
}

function b_get_menu_items( $location )
{
  $navItems = [];
  foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
      $item = new stdClass();
      $item->url = $obj->url;
      $item->label = $obj->title;
      $item->class = $obj->classes[0];
      $item->id = $obj->object_id;
      array_push($navItems, $item);
  }
  return $navItems;
}

// Generate breadcrumb
function the_breadcrumb() {
  echo '<ul class="fil-ariane__navigation">';
  if (!is_home()) {
    echo '<li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-home" href="';
    echo get_home_url();
    echo '"><span class=';
    echo 'hidden>';
    echo 'Accueil';
    echo "</span></a></li>";
    if (is_category() || is_single()) {
      echo '<li class="fil-ariane__ariane-item">';
      echo '<a class="fil-ariane__ariane-link" href="';
      the_category('</li><li class="fil-ariane__ariane-item">');
      if (is_single()) {
        echo '</li><li class=\"fil-ariane__ariane-item">';
        the_title();
        echo '</li>';
      }
    } elseif (is_page()) {
        echo '<li class="fil-ariane__ariane-item"><a class="fil-ariane__ariane-link" href="';
        echo get_permalink();
        echo '">';
        echo the_title();
        echo '</a>';
        echo '</li>';
    }
  }
  echo '</ul>';
}

// Return a custom excerpt for given length
function ma_get_the_excerpt($length = null) {
    $excerpt = get_the_excerpt();
    if(is_null($length) || strlen($excerpt) <= $length) return $excerpt;
    $string = '';
    $words = explode(' ', $excerpt);
    foreach ($words as $word) {
        //  + 2 is needed in order to include the next space and the &hellip; in the character count.
        if((strlen($string) + strlen($word) + 2) > $length) break;
        $string .= ' ' . $word;
    }
    return trim($string) . '&hellip;';
}

 // Output a custom excerpt for given length
function ma_the_excerpt($length = null) {
    echo ma_get_the_excerpt($length);
}

// ACF PRO Options Page
if ( function_exists('acf_add_options_page') ) {
  acf_add_options_page();

  acf_add_options_sub_page('Footer');

  acf_add_options_page( array(
    'page_title' => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug' => 'Theme Options',
    'capability' => 'edit_posts',
    'parent_slug' => '',
    'position' => false,
    'icon_url' => false,
  ));

  acf_add_options_sub_page( array(
    'page_title' => 'Footer',
    'menu_title' => 'Footer',
    'menu_slug' => 'theme-options-footer',
    'capability' => 'edit_posts',
    'parent_slug' => 'theme-options',
    'position' => false,
    'icon_url' => false,
  ));
}

<?php

add_theme_support('post-thumbnails');
add_image_size( 'thumb-about', 523, 523, true );

// Define shortcut path
$css =  get_template_directory_uri() . '/css/main.css';
$images =  get_template_directory_uri() . '/images/';
$scripts =  get_template_directory_uri() . '/scripts/';

// Retrieves the absolute URI for given asset in this theme.
function get_images($src = '') {
  return get_template_directory_uri() . '/images/' . trim($src, '/');
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

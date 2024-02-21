<?php


function load_bootstrap() {
    // carica lo stile css di bootstrap
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . './assets/css/custom-style.css'); // vado a leggere un eventuale file CSS custom
}


function load_bootstrap_scripts() {
    // carica lo script js di bootstrap
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('custom-script', get_template_directory_uri() . './assets/js/custom-script.js'); // vado a leggere un eventuale file CSS custom
}

// Hook predefiniti di wordpress per aggiunre azioni al nostro template
add_action('wp_enqueue_scripts', 'load_bootstrap');
add_action('wp_enqueue_scripts', 'load_bootstrap_scripts' );
//funzione per registrare il menu collegare menu al pannello di controllo

function register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu'  => __( 'Footer Menu'),
            'sidebar-menu'  => __( 'Sidebar Menu'),
        )
    );
}
add_action('init','register_menus');
//classe per la la gestione menu bootstrap
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        
        if ($depth > 0) {
            return;
        }
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        
            if ($depth === 0 && $item->menu_order === 0) { 
                // Inserisci il logo qui
                $output .= '<li class="navbar-brand">';
                $output .= '<a href="' . esc_url(home_url('/')) . '">';
               // $output .= '<img src="' . get_template_directory_uri() . 'kitsune.png" alt="' . esc_attr(get_bloginfo('name')) . '">';
                $output .= '</a>';
                $output .= '</li>';
            }
        if (strcasecmp($item->attr_title, 'divider') == 0 && $depth === 1) {
            $output .= '<li class="dropdown-divider">';
            return;
        }
        elseif (strcasecmp($item->title, 'divider') == 0 && $depth === 1) {
            $output .= '<li class="dropdown-divider">';
            return;
        }

        if (strcasecmp($item->attr_title, 'dropdown-header') == 0 && $depth === 1) {
            $output .= '<li class="dropdown-header">' . esc_attr($item->title);
            return;
        }
        elseif (strcasecmp($item->title, 'dropdown-header') == 0 && $depth === 1) {
            $output .= '<li class="dropdown-header">' . esc_attr($item->title);
            return;
        }
        
       

        parent::start_el($output, $item, $depth, $args);
    }

    
}
//far apparire tutti itenti
add_filter( 'rest_user_query' , 'custom_rest_user_query' );
function custom_rest_user_query( $prepared_args, $request = null ) {
  unset($prepared_args['has_published_posts']);
  return $prepared_args;
}


function enqueue_react_scripts() {
    wp_enqueue_script('react', 'https://unpkg.com/react@18/umd/react.development.js', array(), null, true);
    wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@18/umd/react-dom.development.js', array('react'), null, true);
    // Enqueue your custom scripts here
    wp_enqueue_script('custom-script', get_template_directory_uri() . './banzai/src/index.js', array('react-dom'), null, true);
    wp_enqueue_script('banzai', get_template_directory_uri() . './banzai/src/components/Footer.js', array('custom-script'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_react_scripts');
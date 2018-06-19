<?php

function basica_theme_support(){
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'basica_theme_support');

add_image_size( "client_logo", 150, 150, false );

function my_styles() {
  //CSS
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.1.1');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', 'bootstrap_css', null);
  wp_enqueue_style( 'open_sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800', null);
  wp_enqueue_style( 'icomoon_social_icons', get_template_directory_uri() . '/css/icomoon-social.css', array(), null);
  wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', array(), '4.0');
  wp_enqueue_style( 'flexisel_css', get_template_directory_uri() . '/css/flexisel.css', null);
  wp_enqueue_style( 'main_custom', get_template_directory_uri() . '/css/custom.css', array(), null);
  wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/style.css', array(), null);

  //JS
  wp_enqueue_script( 'bootstrap_popper', get_template_directory_uri() . '/js/popper.min.js', array(), null, true);
  wp_enqueue_script( 'bootstrap_jquery', get_template_directory_uri() . '/js/bootstrap.min.js', 'bootstrap_popper', '4.1.1', true);
  wp_enqueue_script( 'jquery_easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), null, true);
  wp_enqueue_script( 'jquery_scrolling_nav', get_template_directory_uri() . '/js/scrolling-nav.js', array(), null, true);
  wp_enqueue_script( 'flexisel_js', get_template_directory_uri() . '/js/jquery.flexisel.js', array(), null, true);
  wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/my.js', array(), null, true);
}

add_action('wp_enqueue_scripts','my_styles');

/*****************
** CPT SERVIZI **
****************/

function cptui_register_my_cpts_servizi() {

	$labels = array(
		"name" => __( "Servizi", "basica" ),
		"singular_name" => __( "servizio", "basica" ),
		"menu_name" => __( "Servizi", "basica" ),
		"all_items" => __( "Tutti i servizi", "basica" ),
		"add_new" => __( "Aggiungi servizio", "basica" ),
		"add_new_item" => __( "Aggiungi nuovo servizio", "basica" ),
		"edit_item" => __( "Modifica servizio", "basica" ),
		"new_item" => __( "Nuovo servizio", "basica" ),
		"view_item" => __( "Visualizza servizio", "basica" ),
		"view_items" => __( "Visualizza tutti i servizi", "basica" ),
		"search_items" => __( "Cerca servizio", "basica" ),
		"not_found" => __( "Nessuna servizio trovato", "basica" ),
		"not_found_in_trash" => __( "Nessun servizio trovato nel cestino", "basica" ),
		"featured_image" => __( "Immagine in evidenza", "basica" ),
		"set_featured_image" => __( "Imposta immagine in evidenza per il servizio", "basica" ),
		"remove_featured_image" => __( "Rimuovi immagine in evidenza per il servizio", "basica" ),
		"use_featured_image" => __( "Usa come immagine in evidenza", "basica" ),
		"archives" => __( "Archivio servizio", "basica" ),
		"insert_into_item" => __( "Inserisci nel servizio", "basica" ),
		"uploaded_to_this_item" => __( "Carica in questo servizio", "basica" ),
		"items_list" => __( "Elenco servizi", "basica" ),
	);

	$args = array(
		"label" => __( "servizi", "basica" ),
		"labels" => $labels,
		"description" => "Servizi offerti dall'azienda",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "servizi", "with_front" => true ), //ricordarsi di rigenerare i permalink dopo aver modificato questo campo
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "servizi", $args );
}

add_action( 'init', 'cptui_register_my_cpts_servizi' );


/*****************
** CPT CLIENTI **
****************/

function cptui_register_my_cpts_clienti() {

	$labels = array(
		"name" => __( "Clienti", "basica" ),
		"singular_name" => __( "Cliente", "basica" ),
		"menu_name" => __( "Clienti", "basica" ),
		"all_items" => __( "Tutti i clienti", "basica" ),
		"add_new" => __( "Aggiungi cliente", "basica" ),
		"add_new_item" => __( "Aggiungi nuovo cliente", "basica" ),
		"edit_item" => __( "Modifica cliente", "basica" ),
		"new_item" => __( "Nuovo cliente", "basica" ),
		"view_item" => __( "Visualizza cliente", "basica" ),
		"view_items" => __( "Visualizza tutti i clienti", "basica" ),
		"search_items" => __( "Cerca cliente", "basica" ),
		"not_found" => __( "Nessuna cliente trovato", "basica" ),
		"not_found_in_trash" => __( "Nessun cliente trovato nel cestino", "basica" ),
		"featured_image" => __( "Immagine in evidenza", "basica" ),
		"set_featured_image" => __( "Imposta immagine in evidenza per il cliente", "basica" ),
		"remove_featured_image" => __( "Rimuovi immagine in evidenza per il cliente", "basica" ),
		"use_featured_image" => __( "Usa come immagine in evidenza", "basica" ),
		"archives" => __( "Archivio cliente", "basica" ),
		"insert_into_item" => __( "Inserisci nel cliente", "basica" ),
		"uploaded_to_this_item" => __( "Carica in questo cliente", "basica" ),
		"items_list" => __( "Elenco clienti", "basica" ),
	);

	$args = array(
		"label" => __( "clienti", "basica" ),
		"labels" => $labels,
		"description" => "I nostri clienti",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "clienti", "with_front" => true ), //ricordarsi di rigenerare i permalink dopo aver modificato questo campo
		"query_var" => true,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "clienti", $args );
}

add_action( 'init', 'cptui_register_my_cpts_clienti' );


/************************************
** REGISTRAZIONE MENU NAVIGAZIONE **
***********************************/

register_nav_menus( array(
  'type_1' => __('Bootstrap Menu'),
  'type_2' => __('Boostrap Menu Custom Navwalker'),
));

function menu_default() { ?> <!-- funzione che viene richiamata in header.php da wp_nav_menu() attraverso 'fallback_cb', serve ad indicare menu di default da visualizzare nel caso in cui la posizione del menu registrato da wp_nav_menu() non sia attiva -->

  <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
              <ul class="dropdown-menu">
                  <li><a href="#">Dropdown Menu 1</a></li>
                  <li><a href="#">Dropdown Menu 2</a></li>
                  <li><a href="#">Dropdown Menu 3</a></li>
                  <li><a href="#">Dropdown Menu 4</a></li>
                  <li><a href="#">Dropdown Menu 5</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms of Use</a></li>
              </ul>
          </li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact-us.html">Contact</a></li>
      </ul>
  </div>

<?php }


//codice per inserire classi custom agli elementi li della nav senza Bootstrap Navwalker (ripreso da: https://stackoverflow.com/questions/26180688/how-to-add-class-to-link-in-wp-nav-menu)

/*
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'principale') {
    $classes[] = 'nav-link';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
*/


// Registrazione Custom Navigation Walker (rimanda al file class-wp-bootstrap-navwalker.php nella directory del sito)

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

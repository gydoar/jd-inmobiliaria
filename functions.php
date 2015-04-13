<?php 
// Cargar archivos externos
require_once( 'library/admin.php' );

/***
// Habilitar soporte para menu
***/
register_nav_menus(
		array(
			'header-menu' => 'Menu superior',   // main nav in header
			'footer-menu' => 'Menu pie' // secondary nav in footer
		)
	);

/***
// Soporte Thumhnails
***/

add_theme_support('post-thumbnails' );
add_image_size('img_inm', 351, 348, true );

/***
// Habilitar soporte Custom posts
***/
add_action( 'init', 'register_cpt_portfolio' );
function register_cpt_portfolio() {
    $labels = array(
        'name' => _x( 'Inmuebles', 'portfolio' ),
        'singular_name' => _x( 'Inmobiliaria', 'portfolio' ),
        'add_new' => _x( 'Agregar', 'portfolio' ),
        'add_new_item' => _x( 'Agregar Inmueble', 'portfolio' ),
        'edit_item' => _x( 'Editar Inmueble', 'portfolio' ),
        'new_item' => _x( 'Nuevo Inmueble', 'portfolio' ),
        'view_item' => _x( 'Ver Inmueble', 'portfolio' ),
        'search_items' => _x( 'Buscar Inmueble', 'portfolio' ),
        'not_found' => _x( 'No se encontraron Inmbuebles', 'portfolio' ),
        'not_found_in_trash' => _x( 'No se encontraron en la papelera', 'portfolio' ),
        'parent_item_colon' => _x( 'Parent Portfolio:', 'portfolio' ),
        'menu_name' => _x( 'Inmobiliaria', 'portfolio' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Trabajos que realizamos recientemente',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'portfolio', $args );
}

function register_portfoliotaxonomies() {
	$labels = array(
		'name' 					=> _x( 'Tipos', 'taxonomy general name' ),
		'singular_name' 		=> _x( 'Tipo', 'taxonomy singular name' ),
		'add_new' 				=> _x( 'Agregar tipo', 'tipo'),
		'add_new_item' 			=> __( 'Agregar tipo' ),
		'edit_item' 			=> __( 'Editar tipo' ),
		'new_item' 				=> __( 'Nuevo tipo' ),
		'view_item' 			=> __( 'Ver tipo' ),
		'search_items' 			=> __( 'Buscar tipos' ),
		'not_found' 			=> __( 'No encontrado' ),
		'not_found_in_trash' 	=> __( 'No encotrado' ),
	);
	$pages = array('portfolio');
	$args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __('tipo'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'hierarchical' 		=> true,
		'show_tagcloud' 	=> false,
		'show_in_nav_menus' => true,
		'_builtin' 			=> false,
		'rewrite' 			=> array('slug' => 'porfoliotax','with_front' => FALSE ),
	 );
	register_taxonomy('portfoliotaxonomies', $pages, $args);
}
add_action('init', 'register_portfoliotaxonomies');


/* Metabox */
$meta_box = array(
 'id' => 'metabox-portfolio',
 'title' => 'Información general de inmuebles',
 'page' => 'portfolio',
 'context' => 'normal',
 'priority' => 'high',
 'fields' => array(
 array(
 'name' => 'Tipo de inmueble:',
 'desc' => 'Casa, Apto ...',
 'id' => 'tipo_inm',
 'type' => 'text'
 ),
 array(
 'name' => 'Ubicación:',
 'desc' => 'Localidad o barrio',
 'id' => 'ubi_inm',
 'type' => 'text',
 'std' => ''
 ),
 array(
 'name' => 'Valor Venta:',
 'desc' => 'Valor del inmueble',
 'id' => 'vlr_inm',
 'type' => 'text',
 'std' => '$'
 ),
 array(
 'name' => 'Área:',
 'desc' => 'Área en mt2',
 'id' => 'area_inm',
 'type' => 'text',
 'std' => ''
 ),
 array(
 'name' => 'Habitaciones:',
 'desc' => 'Numero de habitaciones',
 'id' => 'habita_inm',
 'type' => 'text',
 'std' => ''
 ),
 array(
 'name' => 'Baños:',
 'desc' => 'Numero de baños',
 'id' => 'bano_inm',
 'type' => 'text',
 'std' => ''
 ),
  array(
 'name' => 'Descripción:',
 'desc' => 'Agregue una descripción corta',
 'id' => 'descrip_inm',
 'type' => 'textarea',
 'std' => ''
 ),
 )
);
add_action('admin_menu', 'mytheme_add_box');
// Add meta box
function mytheme_add_box() {
 global $meta_box;
 add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}
// Callback function to show fields in meta box
function mytheme_show_box() {
 global $meta_box, $post;
 // Use nonce for verification
 echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 echo '<table class="form-table">';
foreach ($meta_box['fields'] as $field) {
 // get current post meta data
 $meta = get_post_meta($post->ID, $field['id'], true);
 
 ///////////////////////////

 echo '<tr>',
 '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
 '<td>';
 switch ($field['type']) {
 case 'text':
 echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
 '<br />', $field['desc'];
 break;
 case 'textarea':
 echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
 '<br />', $field['desc'];
 break;
 case 'select':
 echo '<select name="', $field['id'], '" id="', $field['id'], '">';
 foreach ($field['options'] as $option) {
 echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
 }
 echo '</select>';
 break;
 case 'radio':
 foreach ($field['options'] as $option) {
 echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
 }
 break;
 case 'checkbox':
 echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
 break;
 }
 echo '<td>',
 '</tr>';
 }
 echo '</table>';
}
add_action('save_post', 'mytheme_save_data');
// Save data from meta box
function mytheme_save_data($post_id) {
 global $meta_box;
 // verify nonce
 if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
 return $post_id;
 }
// check autosave
 if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
 return $post_id;
 }
// check permissions
 if ('page' == $_POST['post_type']) {
 if (!current_user_can('edit_page', $post_id)) {
 return $post_id;
 }
 } elseif (!current_user_can('edit_post', $post_id)) {
 return $post_id;
 }
 foreach ($meta_box['fields'] as $field) {
 $old = get_post_meta($post_id, $field['id'], true);
 $new = $_POST[$field['id']];
 if ($new && $new != $old) {
 update_post_meta($post_id, $field['id'], $new);
 } elseif ('' == $new && $old) {
 delete_post_meta($post_id, $field['id'], $old);
 }
 }
}
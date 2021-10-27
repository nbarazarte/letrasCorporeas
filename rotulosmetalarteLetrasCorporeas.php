<?php
/*
Plugin Name: Rotulos Metalarte Letras Corporeas
Plugin URI: https://www.rotulosmetalarte.es
Description: Personalizador de Letras Corporeas
Version: 1.1
Author: Neil Barazarte
Author URI: https://www.ploshshop.com
License: GPLv2
*/

//Archivos css y js propios del plugin:
//include(plugin_dir_url(__FILE__).'funciones.php');

//echo $_SERVER['REQUEST_URI'];
if( $_SERVER['REQUEST_URI'] == '/rotulosmetalarte/producto/letras-corporeas-personalizadas-custom/'){
//if( $_SERVER['REQUEST_URI'] == '/producto/neon-flexible-personalizado-custom-neon-flex/'){    

    add_action( 'wp_enqueue_scripts', 'custom_styles_letras',10 );
    add_action( 'wp_enqueue_scripts', 'custom_scripts_letras' );
    add_action( 'wp_enqueue_scripts', 'browser_scripts_letras');
}

// Register Style
function custom_styles_letras() {

    wp_register_style( 'dv-custom', plugin_dir_url(__FILE__).'css/custom.css', false, '1.0' );
    wp_enqueue_style( 'dv-custom' );
}

// Register Script
function custom_scripts_letras() {

    wp_register_script( 'main', plugin_dir_url(__FILE__).'js/custom.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main' );
}

function browser_scripts_letras() {

    wp_enqueue_script('browser', plugin_dir_url(__FILE__).'/js/node_modules/text-to-svg/build/test/browser.js', array(), false, true);
    wp_enqueue_script( 'browser' );

}

# Agregar informacion predeterminada al activar el plugin
//Este Script se correra en 3 momentos: Al activar por primera vez, al actualizar, al reactivar
register_activation_hook( __FILE__, 'cn_set_default_options_LetrasCorporeas' );

function cn_set_default_options_LetrasCorporeas() {

    // Revisar si ya se habia activado antes

    if ( get_option( 'cn_id_producto_personalizado_letras' ) === false ) {
        add_option( 'cn_id_producto_personalizado_letras', '0' );
    }

    if ( get_option( 'iva_letras' ) === false ) {
        add_option( 'iva_letras', '21' );
    }

    //Aluminio:
    if ( get_option( 'precio_aluminio' ) === false ) {
        add_option( 'precio_aluminio', '124' );
    }

    if ( get_option( 'precio_aluminio_mano_de_obra' ) === false ) {
        add_option( 'precio_aluminio_mano_de_obra', '1600' );
    }

   if ( get_option( 'precio_aluminio_pintura' ) === false ) {
        add_option( 'precio_aluminio_pintura', '40' );
    }

   if ( get_option( 'precio_aluminio_corte_cnc' ) === false ) {
        add_option( 'precio_aluminio_corte_cnc', '30' );
    }

    //Aluminio retroiluminadas:
    if ( get_option( 'precio_aluminio_retroiluminado' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado', '124' );
    }

    if ( get_option( 'precio_aluminio_retroiluminado_mano_de_obra' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_mano_de_obra', '1600' );
    }

   if ( get_option( 'precio_aluminio_retroiluminado_pintura' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_pintura', '30' );
    }  

   if ( get_option( 'precio_aluminio_retroiluminado_metacrilato10mm' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_metacrilato10mm', '260' );
    } 

   if ( get_option( 'precio_aluminio_retroiluminado_led' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_led', '8' );
    } 

   if ( get_option( 'precio_aluminio_retroiluminado_transformador' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_transformador', '80' );
    }                   
   if ( get_option( 'precio_aluminio_retroiluminado_corte_cnc' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_corte_cnc', '30' );
    }

    //Aluminio Iluminadas frontalmente:
    if ( get_option( 'precio_aluminio_iluminado_frontal' ) === false ) {
        add_option( 'precio_aluminio_iluminado_frontal', '124' );
    }

    if ( get_option( 'precio_aluminio_iluminado_frontal_mano_de_obra' ) === false ) {
        add_option( 'precio_aluminio_iluminado_frontal_mano_de_obra', '1600' );
    }

   if ( get_option( 'precio_aluminio_iluminado_frontal_pintura' ) === false ) {
        add_option( 'precio_aluminio_iluminado_frontal_pintura', '40' );
    }  

   if ( get_option( 'precio_aluminio_iluminado_frontal_metacrilato3mm' ) === false ) {
        add_option( 'precio_aluminio_iluminado_frontal_metacrilato3mm', '79' );
    } 

   if ( get_option( 'precio_aluminio_iluminado_frontal_junquillo' ) === false ) {
        add_option( 'precio_aluminio_iluminado_frontal_junquillo', '8' );
    } 

   if ( get_option( 'precio_aluminio_iluminado_frontal_led' ) === false ) {
        add_option( 'precio_aluminio_iluminado_frontal_led', '8' );
    } 

   if ( get_option( 'precio_aluminio_iluminado_frontal_transformador' ) === false ) {
        add_option( 'precio_aluminio_iluminado_frontal_transformador', '80' );
    }   

   if ( get_option( 'precio_aluminio_iluminado_frontal_corte_cnc' ) === false ) {
        add_option( 'precio_aluminio_iluminado_frontal_corte_cnc', '30' );
    }    

    //Letras corporeas PVC:
    if ( get_option( 'precio_pvc_5mm' ) === false ) {
        add_option( 'precio_pvc_5mm', '31' );
    }

   if ( get_option( 'precio_pvc_10mm' ) === false ) {
        add_option( 'precio_pvc_10mm', '61' );
    } 

   if ( get_option( 'precio_pvc_19mm' ) === false ) {
        add_option( 'precio_pvc_19mm', '45' );
    } 
    
    if ( get_option( 'precio_pvc_mano_de_obra' ) === false ) {
        add_option( 'precio_pvc_mano_de_obra', '1600' );
    }

   if ( get_option( 'precio_pvc_pintura' ) === false ) {
        add_option( 'precio_pvc_pintura', '160' );
    }  
    
   if ( get_option( 'precio_pvc_led' ) === false ) {
        add_option( 'precio_pvc_led', '8' );
    } 

   if ( get_option( 'precio_pvc_transformador' ) === false ) {
        add_option( 'precio_pvc_transformador', '50' );
    }

   if ( get_option( 'precio_pvc_corte_cnc' ) === false ) {
        add_option( 'precio_pvc_corte_cnc', '30' );
    }             

    //Letras Corporeas de metacrilatos huecas:  
    if ( get_option( 'precio_metacrilato_huecas_mano_de_obra' ) === false ) {
        add_option( 'precio_metacrilato_huecas_mano_de_obra', '1600' );
    } 

   if ( get_option( 'precio_metacrilato_huecas_metacrilato3mm' ) === false ) {
        add_option( 'precio_metacrilato_huecas_metacrilato3mm', '80' );
    } 

   if ( get_option( 'precio_metacrilato_huecas_led' ) === false ) {
        add_option( 'precio_metacrilato_huecas_led', '8' );
    } 

   if ( get_option( 'precio_metacrilato_huecas_transformador' ) === false ) {
        add_option( 'precio_metacrilato_huecas_transformador', '80' );
    }                   
   if ( get_option( 'precio_metacrilato_huecas_corte_cnc' ) === false ) {
        add_option( 'precio_metacrilato_huecas_corte_cnc', '30' );
    }     
}

#Agregar esta condiguración al menu
function cn_menu_ajustes_LetrasCorporeas() {
    add_options_page( 'Letras Corporeas', //Título de la página
                      'Letras Corporeas', //Nombre del menú
                      'manage_options', //Nivel de acceso, solo usuarios
                      'cn-conf-ga-letras-corporeas', // slug
                      'cn_genera_pagina_letrasCorporeas' ); //Función que procesará todo
}

add_action( 'admin_menu', 'cn_menu_ajustes_LetrasCorporeas' );

//Generar el codigo de la pagina de actualización
function cn_genera_pagina_letrasCorporeas() {

  // Conseguir el valor del Precio base de todos los elementos:
  $cn_id_producto_personalizado_letras                  = get_option( 'cn_id_producto_personalizado_letras' ) ;
  $iva_letras                                           = get_option( 'iva_letras' ) ;

  //Aluminio:
  $precio_aluminio                                      = get_option( 'precio_aluminio' );
  $precio_aluminio_mano_de_obra                         = get_option( 'precio_aluminio_mano_de_obra' );
  $precio_aluminio_pintura                              = get_option( 'precio_aluminio_pintura' );
  $precio_aluminio_corte_cnc                            = get_option( 'precio_aluminio_corte_cnc' );

  //Aluminio retroiluminadas:
  $precio_aluminio_retroiluminado                       = get_option( 'precio_aluminio_retroiluminado' ); 
  $precio_aluminio_retroiluminado_mano_de_obra          = get_option( 'precio_aluminio_retroiluminado_mano_de_obra' );
  $precio_aluminio_retroiluminado_pintura               = get_option( 'precio_aluminio_retroiluminado_pintura' );
  $precio_aluminio_retroiluminado_metacrilato10mm       = get_option( 'precio_aluminio_retroiluminado_metacrilato10mm' );
  $precio_aluminio_retroiluminado_led                   = get_option( 'precio_aluminio_retroiluminado_led' );
  $precio_aluminio_retroiluminado_transformador         = get_option( 'precio_aluminio_retroiluminado_transformador' );
  $precio_aluminio_retroiluminado_corte_cnc             = get_option( 'precio_aluminio_retroiluminado_corte_cnc' );

  //Aluminio Iluminadas frontalmente:
  $precio_aluminio_iluminado_frontal                    = get_option( 'precio_aluminio_iluminado_frontal' );
  $precio_aluminio_iluminado_frontal_mano_de_obra       = get_option( 'precio_aluminio_iluminado_frontal_mano_de_obra' );
  $precio_aluminio_iluminado_frontal_pintura            = get_option( 'precio_aluminio_iluminado_frontal_pintura' );
  $precio_aluminio_iluminado_frontal_metacrilato3mm     = get_option( 'precio_aluminio_iluminado_frontal_metacrilato3mm' );
  $precio_aluminio_iluminado_frontal_junquillo          = get_option( 'precio_aluminio_iluminado_frontal_junquillo' );
  $precio_aluminio_iluminado_frontal_led                = get_option( 'precio_aluminio_iluminado_frontal_led' );
  $precio_aluminio_iluminado_frontal_transformador      = get_option( 'precio_aluminio_iluminado_frontal_transformador' );
  $precio_aluminio_iluminado_frontal_corte_cnc          = get_option( 'precio_aluminio_iluminado_frontal_corte_cnc' ); 

  //Letras corporeas PVC:
  $precio_pvc_5mm                                       = get_option( 'precio_pvc_5mm' );
  $precio_pvc_10mm                                      = get_option( 'precio_pvc_10mm' );
  $precio_pvc_19mm                                      = get_option( 'precio_pvc_19mm' );
  $precio_pvc_mano_de_obra                              = get_option( 'precio_pvc_mano_de_obra' );
  $precio_pvc_pintura                                   = get_option( 'precio_pvc_pintura' ); 
  $precio_pvc_led                                       = get_option( 'precio_pvc_led' ); 
  $precio_pvc_transformador                             = get_option( 'precio_pvc_transformador' );
  $precio_pvc_corte_cnc                                 = get_option( 'precio_pvc_corte_cnc' );  

  //Letras Corporeas de metacrilatos huecas:
  $precio_metacrilato_huecas_mano_de_obra               = get_option( 'precio_metacrilato_huecas_mano_de_obra' );
  $precio_metacrilato_huecas_metacrilato3mm             = get_option( 'precio_metacrilato_huecas_metacrilato3mm' );
  $precio_metacrilato_huecas_led                        = get_option( 'precio_metacrilato_huecas_led' );
  $precio_metacrilato_huecas_transformador              = get_option( 'precio_metacrilato_huecas_transformador' );
  $precio_metacrilato_huecas_corte_cnc                  = get_option( 'precio_metacrilato_huecas_corte_cnc' );

  require('formularioAdmin/configuracionesForm.php');
}

add_action( 'admin_post_guardar_ga_LetrasCorporeas', 'cn_guardar_ga_LetrasCorporeas' );

function cn_guardar_ga_LetrasCorporeas() {
    // Revisar el permiso de autorización
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( 'Not allowed' );
    }

    // Revisar el token que creamos antes
    check_admin_referer( 'token_ga' );

    //Limpiar valor, para prevenir problemas de seguridad
    $cn_id_producto_personalizado_letras                  = sanitize_text_field( $_POST['cn_id_producto_personalizado_letras'] );
    $iva_letras                                           = sanitize_text_field( $_POST['iva_letras'] );
    //Aluminio:
    $precio_aluminio                                      = sanitize_text_field( $_POST['precio_aluminio'] );
    $precio_aluminio_mano_de_obra                         = sanitize_text_field( $_POST['precio_aluminio_mano_de_obra'] );
    $precio_aluminio_pintura                              = sanitize_text_field( $_POST['precio_aluminio_pintura'] );
    $precio_aluminio_corte_cnc                            = sanitize_text_field( $_POST['precio_aluminio_corte_cnc'] );
    //Aluminio retroiluminadas:
    $precio_aluminio_retroiluminado                       = sanitize_text_field( $_POST['precio_aluminio_retroiluminado'] );
    $precio_aluminio_retroiluminado_mano_de_obra          = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_mano_de_obra'] );
    $precio_aluminio_retroiluminado_pintura               = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_pintura'] );
    $precio_aluminio_retroiluminado_metacrilato10mm       = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_metacrilato10mm'] );
    $precio_aluminio_retroiluminado_led                   = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_led'] );
    $precio_aluminio_retroiluminado_transformador         = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_transformador'] );
    $precio_aluminio_retroiluminado_corte_cnc             = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_corte_cnc'] );
    //Aluminio Iluminadas frontalmente:
    $precio_aluminio_iluminado_frontal                    = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal'] );
    $precio_aluminio_iluminado_frontal_mano_de_obra       = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_mano_de_obra'] );
    $precio_aluminio_iluminado_frontal_pintura            = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_pintura'] );
    $precio_aluminio_iluminado_frontal_metacrilato3mm     = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_metacrilato3mm'] );
    $precio_aluminio_iluminado_frontal_junquillo          = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_junquillo'] );
    $precio_aluminio_iluminado_frontal_led                = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_led'] );
    $precio_aluminio_iluminado_frontal_transformador      = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_transformador'] );
    $precio_aluminio_iluminado_frontal_corte_cnc          = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_corte_cnc'] );
    //Letras corporeas PVC:
    $precio_pvc_5mm                                       = sanitize_text_field( $_POST['precio_pvc_5mm'] );
    $precio_pvc_10mm                                      = sanitize_text_field( $_POST['precio_pvc_10mm'] );
    $precio_pvc_19mm                                      = sanitize_text_field( $_POST['precio_pvc_19mm'] );
    $precio_pvc_mano_de_obra                              = sanitize_text_field( $_POST['precio_pvc_mano_de_obra'] );
    $precio_pvc_pintura                                   = sanitize_text_field( $_POST['precio_pvc_pintura'] );
    $precio_pvc_led                                       = sanitize_text_field( $_POST['precio_pvc_led'] );
    $precio_pvc_transformador                             = sanitize_text_field( $_POST['precio_pvc_transformador'] );
    $precio_pvc_corte_cnc                                 = sanitize_text_field( $_POST['precio_pvc_corte_cnc'] );
    //Letras Corporeas de metacrilatos huecas:
    $precio_metacrilato_huecas_mano_de_obra               = sanitize_text_field( $_POST['precio_metacrilato_huecas_mano_de_obra'] );
    $precio_metacrilato_huecas_metacrilato3mm             = sanitize_text_field( $_POST['precio_metacrilato_huecas_metacrilato3mm'] );
    $precio_metacrilato_huecas_led                        = sanitize_text_field( $_POST['precio_metacrilato_huecas_led'] );
    $precio_metacrilato_huecas_transformador              = sanitize_text_field( $_POST['precio_metacrilato_huecas_transformador'] );
    $precio_metacrilato_huecas_corte_cnc                  = sanitize_text_field( $_POST['precio_metacrilato_huecas_corte_cnc'] );


    // Guardar en la base de datos
    update_option( 'cn_id_producto_personalizado_letras', $cn_id_producto_personalizado_letras );
    update_option( 'iva_letras', $iva_letras );
    //Aluminio:
    update_option( 'precio_aluminio', $precio_aluminio );
    update_option( 'precio_aluminio_mano_de_obra', $precio_aluminio_mano_de_obra );
    update_option( 'precio_aluminio_pintura', $precio_aluminio_pintura );
    update_option( 'precio_aluminio_corte_cnc', $precio_aluminio_corte_cnc );
    //Aluminio retroiluminadas:    
    update_option( 'precio_aluminio_retroiluminado', $precio_aluminio_retroiluminado );
    update_option( 'precio_aluminio_retroiluminado_mano_de_obra', $precio_aluminio_retroiluminado_mano_de_obra );
    update_option( 'precio_aluminio_retroiluminado_pintura', $precio_aluminio_retroiluminado_pintura );
    update_option( 'precio_aluminio_retroiluminado_metacrilato10mm', $precio_aluminio_retroiluminado_metacrilato10mm );
    update_option( 'precio_aluminio_retroiluminado_led', $precio_aluminio_retroiluminado_led );
    update_option( 'precio_aluminio_retroiluminado_transformador', $precio_aluminio_retroiluminado_transformador );
    update_option( 'precio_aluminio_retroiluminado_corte_cnc', $precio_aluminio_retroiluminado_corte_cnc );
    //Aluminio Iluminadas frontalmente:    
    update_option( 'precio_aluminio_iluminado_frontal', $precio_aluminio_iluminado_frontal );
    update_option( 'precio_aluminio_iluminado_frontal_mano_de_obra', $precio_aluminio_iluminado_frontal_mano_de_obra );
    update_option( 'precio_aluminio_iluminado_frontal_pintura', $precio_aluminio_iluminado_frontal_pintura );
    update_option( 'precio_aluminio_iluminado_frontal_metacrilato3mm', $precio_aluminio_iluminado_frontal_metacrilato3mm );
    update_option( 'precio_aluminio_iluminado_frontal_junquillo', $precio_aluminio_iluminado_frontal_junquillo );
    update_option( 'precio_aluminio_iluminado_frontal_led', $precio_aluminio_iluminado_frontal_led );
    update_option( 'precio_aluminio_iluminado_frontal_transformador', $precio_aluminio_iluminado_frontal_transformador );
    update_option( 'precio_aluminio_iluminado_frontal_corte_cnc', $precio_aluminio_iluminado_frontal_corte_cnc );
    //Letras corporeas PVC:    
    update_option( 'precio_pvc_5mm', $precio_pvc_5mm );
    update_option( 'precio_pvc_10mm', $precio_pvc_10mm );
    update_option( 'precio_pvc_19mm', $precio_pvc_19mm );
    update_option( 'precio_pvc_mano_de_obra', $precio_pvc_mano_de_obra );
    update_option( 'precio_pvc_pintura', $precio_pvc_pintura );
    update_option( 'precio_pvc_led', $precio_pvc_led );
    update_option( 'precio_pvc_transformador', $precio_pvc_transformador );
    update_option( 'precio_pvc_corte_cnc', $precio_pvc_corte_cnc );
    //Letras Corporeas de metacrilatos huecas:
    update_option( 'precio_metacrilato_huecas_mano_de_obra', $precio_metacrilato_huecas_mano_de_obra );
    update_option( 'precio_metacrilato_huecas_metacrilato3mm', $precio_metacrilato_huecas_metacrilato3mm );
    update_option( 'precio_metacrilato_huecas_led', $precio_metacrilato_huecas_led );
    update_option( 'precio_metacrilato_huecas_transformador', $precio_metacrilato_huecas_transformador ); 
    update_option( 'precio_metacrilato_huecas_corte_cnc', $precio_metacrilato_huecas_corte_cnc );     


    // Regresamos a la pagina de ajustes
    wp_redirect(

      add_query_arg (
        'page',
        'cn-conf-ga-letras-corporeas',
        admin_url( 'options-general.php' )
      )
    );
    exit;
}
/*
//Crear un filtro para modificar el contenido del articulo....
add_filter( 'the_content', 'cn_agregar_anuncio' );

function cn_agregar_anuncio ( $the_content ) {

    global $wpdb;

    $cn_pagina = get_option( 'cn_pagina' ) ;

    $sql = "SELECT id FROM {$wpdb->prefix}posts WHERE post_title = '".$cn_pagina."' ";
    $results = $wpdb->get_results( $sql, OBJECT );

    foreach ($results as $key ) {

      $id_pagina[] = $key->id;

    }
    //echo "--->".$id_pagina[0];
    //die();

    $pagina = $id_pagina[0];

    if(!empty($pagina) ){


    //Creamos una variable que contenga todo el contenido
    //del articulo
    //$articulo = $the_content;

    //Solo inyectar el anuncio en los articulos
    //if (is_singular() && is_main_query() && in_the_loop()){
    //if (is_page() && is_main_query() && in_the_loop()){
    //if (is_home() && is_main_query() && in_the_loop()){
    if (is_page($pagina) && is_main_query() && in_the_loop()){
      // Al final del articulo agregar el codigo del anuncio....
      //$articulo .= '<div class="ads"> *** Aquí va el formulario *** </div>';


      // Conseguir el valor del Precio base de todos los elementos:
      $cn_id_producto_personalizado   = get_option( 'cn_id_producto_personalizado' ) ;
      $cn_pagina                      = get_option( 'cn_pagina' ) ;
      $cn_precio_base                 = get_option( 'cn_precio_base' ) ;
      $cn_precio_dimmer               = get_option( 'cn_precio_dimmer' ) ;
      $cn_precio_metacrilato          = get_option( 'cn_precio_metacrilato' ) ;
      $cn_precio_dm                   = get_option( 'cn_precio_dm' ) ;
      $cn_precio_pvc                  = get_option( 'cn_precio_pvc' ) ;
      $cn_precio_contraenchapado      = get_option( 'cn_precio_contraenchapado' ) ;
      $cn_precio_maderadepino         = get_option( 'cn_precio_maderadepino' ) ;
      $cn_precio_ancladoalapared      = get_option( 'cn_precio_ancladoalapared' ) ;
      $cn_precio_colgadoaltecho       = get_option( 'cn_precio_colgadoaltecho' ) ;
      $cn_precio_colgadocomouncuadro  = get_option( 'cn_precio_colgadocomouncuadro' ) ;
      $cn_precio_sinsujecion          = get_option( 'cn_precio_sinsujecion' ) ;
      $cn_precio_sietediaslaborales   = get_option( 'cn_precio_sietediaslaborales' ) ;
      $cn_precio_4872                 = get_option( 'cn_precio_4872' ) ;

      require('formularioCustomizer.php');
    }


  }
    // siempre debe regresar el contenido que se desea mostrar
    //return $articulo;
    return;

    wp_die();
}*/

add_action('wp_ajax_jnjtest_LetrasCorporeas', 'jnj_mi_funcion_LetrasCorporeas');
add_action('wp_ajax_nopriv_jnjtest_LetrasCorporeas', 'jnj_mi_funcion_LetrasCorporeas');

// Esta función tiene que devolver los resultados al frontend
// en el formato que queramos..
function jnj_mi_funcion_LetrasCorporeas()
{

  /*global $wpdb;
  //echo '<pre style="color: #fff">'; print_r($_POST); echo '</pre>';
  //$sql = "SELECT * FROM {$wpdb->prefix}options WHERE option_name = 'cn_precio_base'";
  $sql = "SELECT option_name, option_value FROM {$wpdb->prefix}options WHERE option_name LIKE '%cn_precio%'";
  $results = $wpdb->get_results( $sql, OBJECT );

  foreach ($results as $key => $valor) {

    $res[$valor->option_name] = $valor->option_value;

  }*/

    //echo '<pre>'.print_r($res).'</pre><br/>';
    //echo "Precio Base: ".$res['cn_precio_base']."<br/>";
     

    /*
      echo "<b>Fuente de Letra: </b>". $_POST['fuenteLetrasText']."<br/>";
      echo "<b>Ancho:</b> ". number_format($_POST['anchocm'],2,",",".")." cm <br/>";
      echo "<b>Alto:</b> ".$_POST['alto']." cm <br/>";
      echo "<b>Trasera del Neon:</b> ".$_POST['tipoTrasera']." ".number_format($traseraNeon,2,",",".")."&euro;<br/>";
      echo "<b>Sujeción del Neon:</b> ".$_POST['tipoSujecion']." ".number_format($_POST['sujecionNeon'],2,",",".")."&euro;<br/>";
      echo "<b>Dimmer (controlador de luz):</b> ".number_format($_POST['dimmerNeon'],2,",",".")."&euro;<br/>";
      echo "<b>Tiempo de Entrega:</b> ".$_POST['tiemposEntregaText']." ".number_format($_POST['tiemposEntrega'],2,",",".")."&euro;<br/>";
      echo "<b>Forma del Contorno: </b>". $_POST['contorno']."<br/>";
      echo "<b>Color: </b>". $_POST['color']."<br/>";
    */

    $fuente = $_POST['fuenteLetras'];
    $color = $_POST['color'];

    echo '<h1>
      <small class="text-muted"> <strong>'. $_POST['precioFinal']. '&euro;<strong></small>
      
    </h1>
    <div style="font-size: 10px; color: #870D00">IVA incluido</div>
    <div style="font-size: 10px;">ENVÍO GRATUITO</div>
    <h3 style="font-size: 24px;font-family: "Open Sans", sans-serif;">Letras de Neón Personalizadas</h3>
    <p style="text-align: justify;">
      Neones personalizados, puedes seguirnos en nuestro perfil de Instagram para ver los trabajos realizados @RotulosMetalarte
      Tres medidas a escoger, Puedes pedirnos un presupuesto personalizado si quieres  en caso de querer un Neón personalizado o con alguna medida diferente
    </p>';

    echo '<div id="caja">
            <div class="neon_effect '.$fuente.' '.$color.' ">
              '.$_POST['rotulo'].'
            </div>
          </div>';  

  wp_die();
}


//Aqui se muestra el formulario de personalización del rotulo de neon:
/**
 * Output engraving field.
 */
function iconic_output_engraving_field_LetrasCorporeas() {

      global $product;

      $cn_id_producto_personalizado = get_option( 'cn_id_producto_personalizado' ) ;

      //echo $cn_id_producto_personalizado; die();

      if ( $product->get_id() != $cn_id_producto_personalizado ) {
        return;
      }

      // Conseguir el valor del Precio base de todos los elementos:
      $cn_pagina                      = get_option( 'cn_pagina' ) ;
      $cn_precio_base                 = get_option( 'cn_precio_base' ) ;
      $iva                            = get_option( 'iva' ) ;
      $costoTransformador             = get_option( 'costoTransformador' ) ;
      $cn_precio_dimmer               = get_option( 'cn_precio_dimmer' ) ;
      $cn_precio_metacrilato          = get_option( 'cn_precio_metacrilato' ) ;
      $cn_precio_dm                   = get_option( 'cn_precio_dm' ) ;
      $cn_precio_pvc                  = get_option( 'cn_precio_pvc' ) ;
      $cn_precio_contraenchapado      = get_option( 'cn_precio_contraenchapado' ) ;
      $cn_precio_maderadepino         = get_option( 'cn_precio_maderadepino' ) ;
      $cn_precio_ancladoalapared      = get_option( 'cn_precio_ancladoalapared' ) ;
      $cn_precio_colgadoaltecho       = get_option( 'cn_precio_colgadoaltecho' ) ;
      $cn_precio_colgadocomouncuadro  = get_option( 'cn_precio_colgadocomouncuadro' ) ;
      $cn_precio_sinsujecion          = get_option( 'cn_precio_sinsujecion' ) ;
      $cn_precio_sietediaslaborales   = get_option( 'cn_precio_sietediaslaborales' ) ;
      $cn_precio_4872                 = get_option( 'cn_precio_4872' ) ;
      $cn_precio_metro_neon           = get_option( 'cn_precio_metro_neon' ) ;

      require('formularioCustomizer.php');

}

//add_action( 'woocommerce_before_single_product', 'iconic_output_engraving_field_LetrasCorporeas', 10 );

//woocommerce_single_product_summary
//woocommerce_before_single_product
//add_action( 'woocommerce_before_add_to_cart_button', 'iconic_output_engraving_field_LetrasCorporeas', 10 );


//Aqui se muestran ocultos en el formulario del carrito los campos de personalización del rotulo de neon:
/**
 * Output engraving field.
 */
function campos_ocultos_letrasCorporeas() {

      global $product;

      $cn_id_producto_personalizado = get_option( 'cn_id_producto_personalizado' ) ;

      //echo $cn_id_producto_personalizado; die();

      if ( $product->get_id() != $cn_id_producto_personalizado ) {
        return;
      }

  ?>

  <div class="bsnamespace" style=""> 


      <div class="col-12 text-center">

          <div class="fabify-button" style="cursor: pointer;">

            <a id="myButton2" style="color: #fff;" onclick="jQueryDoSomethingAJAX()">
              <i class="fas fa-magic"></i> Aplicar cambios
            </a>

          </div>
          <br/>
          <div id="precioOtraVez" style="position: relative; left: 30px;">
           
          </div>
          

        <!--<a id="myButton2" style="color: #fff; background-color: #870D00" onclick="jQueryDoSomethingAJAX()" class="btn" role="button">
          <i class="fas fa-magic"></i> 
          Aplicar cambios
        </a>-->

        <div id="myDIV">
          <i class="fas fa-hourglass-start"></i> Creando el nuevo diseño...
        </div>        

      </div>

      <input type="hidden" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="" readonly="yes">
      <input type="hidden" id="texto_rotulo" name="texto_rotulo" value="" readonly="yes">
      <input type="hidden" id="fuenteLetrasText" name="fuenteLetrasText" value="" readonly="yes">
      <input type="hidden" id="anchocm" name="anchocm" value="" readonly="yes">

      <input type="hidden" id="alturacm" name="alturacm" value="" readonly="yes">

      <input type="hidden" id="altocm" name="altocm" value="" readonly="yes">
      <input type="hidden" id="tipoTraseraSumario" name="tipoTraseraSumario" value="" readonly="yes">
      <input type="hidden" id="tipoSujecionSumario" name="tipoSujecionSumario" value="" readonly="yes">   
      <input type="hidden" id="tipoDimmerSumario" name="tipoDimmerSumario" value="" readonly="yes">
      <input type="hidden" id="tiempoEntregaSumario" name="tiempoEntregaSumario" value="" readonly="yes">
      <input type="hidden" id="tipoContornoSumario" name="tipoContornoSumario" value="" readonly="yes">
      <input type="hidden" id="colorSumario" name="colorSumario" value="" readonly="yes">
      <input type="hidden" id="impuesto" name="impuesto" value="" readonly="yes">
      <input type="hidden" id="subTotalPrecio" name="subTotalPrecio" value="" readonly="yes">
      <input type="hidden" id="pathA" name="pathA" value="" readonly="yes">
      <input type="hidden" id="pathB" name="pathB" value="" readonly="yes">

  </div>
  <?php

}

//add_action( 'woocommerce_before_single_product_summary', 'iconic_output_engraving_field', 10 );
add_action( 'woocommerce_before_add_to_cart_button', 'campos_ocultos_letrasCorporeas', 10 );


/**
 * Add engraving text to cart item.
 *
 * @param array $cart_item_data
 * @param int   $product_id
 * @param int   $variation_id
 *
 * @return array
 */
function iconic_add_engraving_text_to_cart_item_LetrasCorporeas( $cart_item_data, $product_id, $variation_id ) {
  
  $precio_final_rotulo  = filter_input( INPUT_POST, 'precio_final_rotulo' );
  $texto_rotulo         = filter_input( INPUT_POST, 'texto_rotulo' );
  $fuenteLetrasText     = filter_input( INPUT_POST, 'fuenteLetrasText' );
  $anchocm              = filter_input( INPUT_POST, 'anchocm' );

  $alturacm              = filter_input( INPUT_POST, 'alturacm' );


  $altocm               = filter_input( INPUT_POST, 'altocm' );
  $tipoTraseraSumario   = filter_input( INPUT_POST, 'tipoTraseraSumario' );
  $tipoSujecionSumario  = filter_input( INPUT_POST, 'tipoSujecionSumario' );
  $tipoDimmerSumario    = filter_input( INPUT_POST, 'tipoDimmerSumario' );  
  $tiempoEntregaSumario = filter_input( INPUT_POST, 'tiempoEntregaSumario' ); 
  $tipoContornoSumario  = filter_input( INPUT_POST, 'tipoContornoSumario'  ); 
  $colorSumario         = filter_input( INPUT_POST, 'colorSumario'         );
  $impuesto             = filter_input( INPUT_POST, 'impuesto'         );
  $subTotalPrecio       = filter_input( INPUT_POST, 'subTotalPrecio'         );
  $pathA                = filter_input( INPUT_POST, 'pathA'         );
  $pathB                = filter_input( INPUT_POST, 'pathB'         );

  if ( empty( $precio_final_rotulo ) ) {
    return $cart_item_data;
  }

  $product = wc_get_product( $product_id );
  $price = $product->get_price();
  // extra pack checkbox
  
     
  //$cart_item_data['new_price'] = $price + $precio_final_rotulo;
  //$cart_item_data['new_price'] = $precio_final_rotulo;
  $cart_item_data['new_price'] = $subTotalPrecio;
  
  /*
  echo "-->".$precio_final_rotulo;

  echo "-->".$cart_item_data['new_price'];

  echo "<br/>";

  echo "-->".$engraving_text; die();

  */

  
  $cart_item_data['texto_rotulo']         = $texto_rotulo;
  $cart_item_data['fuenteLetrasText']     = $fuenteLetrasText;
  $cart_item_data['anchocm']              = number_format($_POST['anchocm'],3,",",".");

  $cart_item_data['alturacm']              = number_format($_POST['alturacm'],3,",",".");

  $cart_item_data['altocm']               = $altocm;
  $cart_item_data['tipoTraseraSumario']   = $tipoTraseraSumario;
  $cart_item_data['tipoSujecionSumario']  = $tipoSujecionSumario;
  $cart_item_data['tipoDimmerSumario']    = $tipoDimmerSumario;
  $cart_item_data['tiempoEntregaSumario'] = $tiempoEntregaSumario;
  $cart_item_data['tipoContornoSumario']  = $tipoContornoSumario;
  $cart_item_data['colorSumario']         = $colorSumario;
  $cart_item_data['impuesto']             = $impuesto;
  $cart_item_data['subTotalPrecio']       = $subTotalPrecio;
  $cart_item_data['pathA']                = $pathA;
  $cart_item_data['pathB']                = $pathB;

  return $cart_item_data;
}

add_filter( 'woocommerce_add_cart_item_data', 'iconic_add_engraving_text_to_cart_item_LetrasCorporeas', 10, 3 );


/**
 * Display engraving text in the cart.
 *
 * @param array $item_data
 * @param array $cart_item
 *
 * @return array
 */
function iconic_display_engraving_text_cart_LetrasCorporeas( $item_data, $cart_item ) {
  if ( empty( $cart_item['texto_rotulo'] ) ) {
    return $item_data;
  }

  $item_data[] = array(
    'key'     => __( 'Texto rótulo', 'iconic' ),
    'value'   => wc_clean( $cart_item['texto_rotulo'] ),
    'display' => '',
  ); 

  $item_data[] = array(
    'key'     => __( 'Fuente de letras', 'iconic' ),
    'value'   => wc_clean( $cart_item['fuenteLetrasText'] ),
    'display' => '',
  );   

  $item_data[] = array(
    'key'     => __( 'Altura (cm)', 'iconic' ),
    'value'   => wc_clean( $cart_item['alturacm'] ),
    'display' => '',
  );

  $item_data[] = array(
    'key'     => __( 'Ancho (cm)', 'iconic' ),
    'value'   => wc_clean( $cart_item['anchocm'] ),
    'display' => '',
  );
  
  /*
    $item_data[] = array(
      'key'     => __( 'Tamaño de letra', 'iconic' ),
      'value'   => wc_clean( $cart_item['altocm'] ),
      'display' => '',
    );
  */

  $item_data[] = array(
    'key'     => __( 'Trasera del Neon', 'iconic' ),
    'value'   => wc_clean( $cart_item['tipoTraseraSumario'] ),
    'display' => '',
  );

  $item_data[] = array(
    'key'     => __( 'Sujeción del Neon', 'iconic' ),
    'value'   => wc_clean( $cart_item['tipoSujecionSumario'] ),
    'display' => '',
  );

  $item_data[] = array(
    'key'     => __( 'Dimmer', 'iconic' ),
    'value'   => wc_clean( $cart_item['tipoDimmerSumario'] ),
    'display' => '',
  );     

  $item_data[] = array(
    'key'     => __( 'Tiempo de Entrega', 'iconic' ),
    'value'   => wc_clean( $cart_item['tiempoEntregaSumario'] ),
    'display' => '',
  ); 

  $item_data[] = array(
    'key'     => __( 'Forma del Contorno', 'iconic' ),
    'value'   => wc_clean( $cart_item['tipoContornoSumario'] ),
    'display' => '',
  );   
 
   $item_data[] = array(
    'key'     => __( 'Color', 'iconic' ),
    'value'   => wc_clean( $cart_item['colorSumario'] ),
    'display' => '',
  ); 
  
  /*
     $item_data[] = array(
      'key'     => __( 'Longitud Path A', 'iconic' ),
      'value'   => wc_clean( $cart_item['pathA'] ),
      'display' => '',
    ); 

     $item_data[] = array(
      'key'     => __( 'Longitud Path B', 'iconic' ),
      'value'   => wc_clean( $cart_item['pathB'] ),
      'display' => '',
    );
     
     $item_data[] = array(
      'key'     => __( 'Impuesto (gastos de envío)', 'iconic' ),
      'value'   => wc_clean( $cart_item['impuesto'] ."%"),
      'display' => '',
    ); 
  */

   $item_data[] = array(
    'key'     => __( 'Sub Total', 'iconic' ),
    'value'   => wc_clean( $cart_item['subTotalPrecio'] ." &euro;"),
    'display' => '',
  );       

  return $item_data;
}

add_filter( 'woocommerce_get_item_data', 'iconic_display_engraving_text_cart_LetrasCorporeas', 10, 2 );


add_action( 'woocommerce_before_calculate_totals', 'before_calculate_totals_LetrasCorporeas', 10, 1 );
 
function before_calculate_totals_LetrasCorporeas( $cart_obj ) {

  if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
    return;
  }

  // Iterate through each cart item
  foreach( $cart_obj->get_cart() as $key=>$value ) {

    if( isset( $value['new_price'] ) ) {
      $price = $value['new_price'];
      $value['data']->set_price( ( $price ) );
    }
  }
}

/**
 * Add custom meta to order
 */
function plugin_republic_checkout_create_order_line_item_LetrasCorporeas( $item, $cart_item_key, $values, $order ) {

 $item->add_meta_data(
  __( 'Texto rótulo', 'iconic' ),
  $values['texto_rotulo'],
  true
 );

 $item->add_meta_data(
  __( 'Fuente de letras', 'iconic' ),
  $values['fuenteLetrasText'],
  true
 );

 $item->add_meta_data(
  __( 'Altura (cm)', 'iconic' ),
  $values['alturacm'],
  true
 );

 $item->add_meta_data(
  __( 'Ancho (cm)', 'iconic' ),
  $values['anchocm'],
  true
 );

 $item->add_meta_data(
  __( 'Trasera del Neon', 'iconic' ),
  $values['tipoTraseraSumario'],
  true
 );

 $item->add_meta_data(
  __( 'Sujeción del Neon', 'iconic' ),
  $values['tipoSujecionSumario'],
  true
 );

 $item->add_meta_data(
  __( 'Dimmer', 'iconic' ),
  $values['tipoDimmerSumario'],
  true
 );

  $item->add_meta_data(
  __( 'Tiempo de Entrega', 'iconic' ),
  $values['tiempoEntregaSumario'],
  true
 ); 

  $item->add_meta_data(
  __( 'Forma del Contorno', 'iconic' ),
  $values['tipoContornoSumario'],
  true
 ); 

  $item->add_meta_data(
  __( 'Color', 'iconic' ),
  $values['colorSumario'],
  true
 ); 
 
  $item->add_meta_data(
  __( 'Sub Total', 'iconic' ),
  $values['subTotalPrecio'],
  true
 ); 

}
add_action( 'woocommerce_checkout_create_order_line_item', 'plugin_republic_checkout_create_order_line_item_LetrasCorporeas', 10, 5 );


/**
 * Add custom cart item data to emails
 */

/*
function plugin_republic_order_item_name( $product_name, $item ) {
 if( isset( $item['pr_field'] ) ) {

   $product_name .= sprintf(
   '<ul><li>%s: %s</li></ul>',
   __( 'Your name', 'plugin_republic' ),
   esc_html( $item['pr_field'] )
   );

 }
 return $product_name;

}

add_filter( 'woocommerce_order_item_name', 'plugin_republic_order_item_name', 10, 2 );
*/
<?php
/*
Plugin Name: Rotulos Metalarte Letras Corporeas
Plugin URI: https://www.rotulosmetalarte.es
Description: Personalizador de Letras Corporeas
Version: 1.0
Author: Neil Barazarte
Author URI: https://www.ploshshop.com
License: GPLv2
*/

//Archivos css y js propios del plugin:
//include(plugin_dir_url(__FILE__).'funciones.php');

//echo $_SERVER['REQUEST_URI'];
if( $_SERVER['REQUEST_URI'] == '/proyecto/producto/letras-corporeas/'){
//if( $_SERVER['REQUEST_URI'] == '/producto/letras-corporeas-personalizadas-custom/'){ 

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

    if ( get_option( 'previsualizacion' ) === false ) {
        add_option( 'previsualizacion', '20' );
    }

    //Aluminio sin iluminar:
    if ( get_option( 'precio_aluminio' ) === false ) {
        add_option( 'precio_aluminio', '25' );
    }

    if ( get_option( 'precio_aluminio_mano_de_obra' ) === false ) {
        add_option( 'precio_aluminio_mano_de_obra', '20' );
    }

    if ( get_option( 'precio_aluminio_pintura' ) === false ) {
        add_option( 'precio_aluminio_pintura', '20' );
    }

    if ( get_option( 'precio_aluminio_corte_cnc' ) === false ) {
        add_option( 'precio_aluminio_corte_cnc', '0.30' );
    }

    if ( get_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar', '100.00' );
    }

    if ( get_option( 'cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar', '20.00' );
    }

    if ( get_option( 'cn_precio_doblado_aluminio_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_doblado_aluminio_sin_iluminar', '20.00' );
    }    

    if ( get_option( 'profundidad_30mm_aluminio_sin_iluminar' ) === false ) {
        add_option( 'profundidad_30mm_aluminio_sin_iluminar', '00.63' );
    }   

    if ( get_option( 'profundidad_50mm_aluminio_sin_iluminar' ) === false ) {
        add_option( 'profundidad_50mm_aluminio_sin_iluminar', '01.05' );
    }   

    if ( get_option( 'profundidad_80mm_aluminio_sin_iluminar' ) === false ) {
        add_option( 'profundidad_80mm_aluminio_sin_iluminar', '01.68' );
    }  

    if ( get_option( 'profundidad_100mm_aluminio_sin_iluminar' ) === false ) {
        add_option( 'profundidad_100mm_aluminio_sin_iluminar', '02.10' );
    }  

    //Aluminio retroiluminadas:
    if ( get_option( 'precio_aluminio_retroiluminado' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado', '25' );
    }

    if ( get_option( 'precio_aluminio_retroiluminado_mano_de_obra' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_mano_de_obra', '20' );
    }

    if ( get_option( 'precio_aluminio_retroiluminado_pintura' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_pintura', '20' );
    }  

    if ( get_option( 'precio_aluminio_retroiluminado_metacrilato10mm' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_metacrilato10mm', '65' );
    } 

    if ( get_option( 'precio_aluminio_retroiluminado_led' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_led', '8' );
    } 

    if ( get_option( 'precio_aluminio_retroiluminado_transformador' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_transformador', '40' );
    }                   
   
    if ( get_option( 'precio_aluminio_retroiluminado_corte_cnc' ) === false ) {
        add_option( 'precio_aluminio_retroiluminado_corte_cnc', '0.30' );
    }

    if ( get_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado' ) === false ) {
        add_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado', '100.00' );
    }

    if ( get_option( 'cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado' ) === false ) {
        add_option( 'cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado', '20.00' );
    }

    if ( get_option( 'cn_precio_doblado_aluminio_retroiluminado' ) === false ) {
        add_option( 'cn_precio_doblado_aluminio_retroiluminado', '20.00' );
    }

    if ( get_option( 'cn_precio_separadores_aluminio_retroiluminado' ) === false ) {
        add_option( 'cn_precio_separadores_aluminio_retroiluminado', '10.00' );
    }

    if ( get_option( 'profundidad_30mm_aluminio_retroiluminado' ) === false ) {
        add_option( 'profundidad_30mm_aluminio_retroiluminado', '00.63' );
    }   

    if ( get_option( 'profundidad_50mm_aluminio_retroiluminado' ) === false ) {
        add_option( 'profundidad_50mm_aluminio_retroiluminado', '01.05' );
    }   

    if ( get_option( 'profundidad_80mm_aluminio_retroiluminado' ) === false ) {
        add_option( 'profundidad_80mm_aluminio_retroiluminado', '01.68' );
    }  

    if ( get_option( 'profundidad_100mm_aluminio_retroiluminado' ) === false ) {
        add_option( 'profundidad_100mm_aluminio_retroiluminado', '02.10' );
    }

    //Aluminio iluminadas frontalmente:
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

    if ( get_option( 'cn_precio_doblado_aluminio_iluminado_frontal' ) === false ) {
        add_option( 'cn_precio_doblado_aluminio_iluminado_frontal', '20.00' );
    }

    if ( get_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal' ) === false ) {
        add_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal', '100.00' );
    }

    if ( get_option( 'cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal' ) === false ) {
        add_option( 'cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal', '20.00' );
    }

    if ( get_option( 'profundidad_30mm_aluminio_iluminado_frontal' ) === false ) {
        add_option( 'profundidad_30mm_aluminio_iluminado_frontal', '00.63' );
    }   

    if ( get_option( 'profundidad_50mm_aluminio_iluminado_frontal' ) === false ) {
        add_option( 'profundidad_50mm_aluminio_iluminado_frontal', '01.05' );
    }   

    if ( get_option( 'profundidad_80mm_aluminio_iluminado_frontal' ) === false ) {
        add_option( 'profundidad_80mm_aluminio_iluminado_frontal', '01.68' );
    }  

    if ( get_option( 'profundidad_100mm_aluminio_iluminado_frontal' ) === false ) {
        add_option( 'profundidad_100mm_aluminio_iluminado_frontal', '02.10' );
    }      

    //Acero sin iluminar:
    if ( get_option( 'precio_acero' ) === false ) {
        add_option( 'precio_acero', '50' );
    }

    if ( get_option( 'precio_acero_mano_de_obra' ) === false ) {
        add_option( 'precio_acero_mano_de_obra', '30' );
    }

    if ( get_option( 'precio_acero_corte_cnc' ) === false ) {
        add_option( 'precio_acero_corte_cnc', '0.30' );
    }

    if ( get_option( 'cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar', '100.00' );
    }

    if ( get_option( 'cn_precio_quincediaslaboralesLetras_acero_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_quincediaslaboralesLetras_acero_sin_iluminar', '20.00' );
    }

    if ( get_option( 'cn_precio_doblado_acero_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_doblado_acero_sin_iluminar', '20.00' );
    }

    if ( get_option( 'profundidad_30mm_acero_sin_iluminar' ) === false ) {
        add_option( 'profundidad_30mm_acero_sin_iluminar', '00.63' );
    }   

    if ( get_option( 'profundidad_50mm_acero_sin_iluminar' ) === false ) {
        add_option( 'profundidad_50mm_acero_sin_iluminar', '01.05' );
    }   

    if ( get_option( 'profundidad_80mm_acero_sin_iluminar' ) === false ) {
        add_option( 'profundidad_80mm_acero_sin_iluminar', '01.68' );
    }  

    if ( get_option( 'profundidad_100mm_acero_sin_iluminar' ) === false ) {
        add_option( 'profundidad_100mm_acero_sin_iluminar', '02.10' );
    }        

    //Acero retroiluminadas:
    if ( get_option( 'cn_precio_acero_retroiluminado' ) === false ) {
        add_option( 'cn_precio_acero_retroiluminado', '50.00' );
    }  

    if ( get_option( 'cn_precio_acero_mano_de_obra_retroiluminado' ) === false ) {
        add_option( 'cn_precio_acero_mano_de_obra_retroiluminado', '30.00' );
    }  

    if ( get_option( 'precio_acero_retroiluminado_metacrilato10mm' ) === false ) {
        add_option( 'precio_acero_retroiluminado_metacrilato10mm', '65.00' );
    }  

    if ( get_option( 'precio_acero_retroiluminado_led' ) === false ) {
        add_option( 'precio_acero_retroiluminado_led', '8.00' );
    } 

    if ( get_option( 'precio_acero_retroiluminado_transformador' ) === false ) {
        add_option( 'precio_acero_retroiluminado_transformador', '40.00' );
    } 

    if ( get_option( 'precio_acero_retroiluminado_corte_cnc' ) === false ) {
        add_option( 'precio_acero_retroiluminado_corte_cnc', '0.30' );
    } 

    if ( get_option( 'precio_acero_retroiluminado_separadores' ) === false ) {
        add_option( 'precio_acero_retroiluminado_separadores', '10.00' );
    } 

    if ( get_option( 'precio_acero_retroiluminado_doblado' ) === false ) {
        add_option( 'precio_acero_retroiluminado_doblado', '20.00' );
    } 

    if ( get_option( 'cn_precio_diezdiaslaboralesLetras_acero_retroiluminado' ) === false ) {
        add_option( 'cn_precio_diezdiaslaboralesLetras_acero_retroiluminado', '100.00' );
    } 

    if ( get_option( 'cn_precio_quincediaslaboralesLetras_acero_retroiluminado' ) === false ) {
        add_option( 'cn_precio_quincediaslaboralesLetras_acero_retroiluminado', '20.00' );
    } 

    if ( get_option( 'profundidad_30mm_acero_retroiluminado' ) === false ) {
        add_option( 'profundidad_30mm_acero_retroiluminado', '00.63' );
    }   

    if ( get_option( 'profundidad_50mm_acero_retroiluminado' ) === false ) {
        add_option( 'profundidad_50mm_acero_retroiluminado', '01.05' );
    }   

    if ( get_option( 'profundidad_80mm_acero_retroiluminado' ) === false ) {
        add_option( 'profundidad_80mm_acero_retroiluminado', '01.68' );
    }  

    if ( get_option( 'profundidad_100mm_acero_retroiluminado' ) === false ) {
        add_option( 'profundidad_100mm_acero_retroiluminado', '02.10' );
    }  

    //Acero iluminadas frontalmennte:
    if ( get_option( 'cn_precio_acero_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_acero_iluminacion_frontal', '50.00' );
    } 

    if ( get_option( 'cn_precio_acero_soldadura_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_acero_soldadura_iluminacion_frontal', '30.00' );
    } 
    
    if ( get_option( 'cn_precio_acero_metacrilato3mm_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_acero_metacrilato3mm_iluminacion_frontal', '20.00' );
    } 

    if ( get_option( 'cn_precio_acero_led_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_acero_led_iluminacion_frontal', '8.00' );
    } 

    if ( get_option( 'cn_precio_acero_transformador_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_acero_transformador_iluminacion_frontal', '40.00' );
    } 

    if ( get_option( 'cn_precio_acero_corte_cnc_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_acero_corte_cnc_iluminacion_frontal', '0.30' );
    } 

    if ( get_option( 'cn_precio_acero_doblado_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_acero_doblado_iluminacion_frontal', '20.00' );
    } 

    if ( get_option( 'cn_precio_acero_junquillo_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_acero_junquillo_iluminacion_frontal', '2.00' );
    } 

    if ( get_option( 'cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal', '100.00' );
    } 

    if ( get_option( 'cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal', '20.00' );
    }

    if ( get_option( 'profundidad_30mm_acero_iluminacion_frontal' ) === false ) {
        add_option( 'profundidad_30mm_acero_iluminacion_frontal', '00.63' );
    }   

    if ( get_option( 'profundidad_50mm_acero_iluminacion_frontal' ) === false ) {
        add_option( 'profundidad_50mm_acero_iluminacion_frontal', '01.05' );
    }   

    if ( get_option( 'profundidad_80mm_acero_iluminacion_frontal' ) === false ) {
        add_option( 'profundidad_80mm_acero_iluminacion_frontal', '01.68' );
    }  

    if ( get_option( 'profundidad_100mm_acero_iluminacion_frontal' ) === false ) {
        add_option( 'profundidad_100mm_acero_iluminacion_frontal', '02.10' );
    }

    //Lat??n sin iluminar:
    if ( get_option( 'cn_precio_laton_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_laton_sin_iluminar', '170.00' );
    } 

    if ( get_option( 'cn_precio_soldadura_laton_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_soldadura_laton_sin_iluminar', '30.00' );
    } 

    if ( get_option( 'cn_precio_corte_cnc_laton_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_corte_cnc_laton_sin_iluminar', '0.30' );
    } 

    if ( get_option( 'cn_precio_doblado_laton_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_doblado_laton_sin_iluminar', '20.00' );
    } 

    if ( get_option( 'cn_precio_diez_dias_laton_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_diez_dias_laton_sin_iluminar', '100.00' );
    } 

    if ( get_option( 'cn_precio_quince_dias_laton_sin_iluminar' ) === false ) {
        add_option( 'cn_precio_quince_dias_laton_sin_iluminar', '20.00' );
    } 

    if ( get_option( 'profundidad_30mm_laton_sin_iluminar' ) === false ) {
        add_option( 'profundidad_30mm_laton_sin_iluminar', '00.63' );
    }   

    if ( get_option( 'profundidad_50mm_laton_sin_iluminar' ) === false ) {
        add_option( 'profundidad_50mm_laton_sin_iluminar', '01.05' );
    }   

    if ( get_option( 'profundidad_80mm_laton_sin_iluminar' ) === false ) {
        add_option( 'profundidad_80mm_laton_sin_iluminar', '01.68' );
    }  

    if ( get_option( 'profundidad_100mm_laton_sin_iluminar' ) === false ) {
        add_option( 'profundidad_100mm_laton_sin_iluminar', '02.10' );
    } 

    //Lat??n retroiluminadas:
    if ( get_option( 'cn_precio_laton_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_laton_retroiluminadas', '170.00' );
    } 

    if ( get_option( 'cn_precio_laton_soldadura_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_laton_soldadura_retroiluminadas', '30.00' );
    } 

    if ( get_option( 'cn_precio_laton_metacrilato10mm_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_laton_metacrilato10mm_retroiluminadas', '65.00' );
    } 

    if ( get_option( 'cn_precio_laton_led_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_laton_led_retroiluminadas', '8.00' );
    }

    if ( get_option( 'cn_precio_laton_transformador_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_laton_transformador_retroiluminadas', '40.00' );
    }     

    if ( get_option( 'cn_precio_laton_corte_cnc_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_laton_corte_cnc_retroiluminadas', '0.30' );
    }  

    if ( get_option( 'cn_precio_laton_separadores_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_laton_separadores_retroiluminadas', '10.00' );
    }

    if ( get_option( 'cn_precio_laton_doblado_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_laton_doblado_retroiluminadas', '20.00' );
    }  

    if ( get_option( 'cn_precio_diez_dias_laton_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_diez_dias_laton_retroiluminadas', '100.00' );
    }  

    if ( get_option( 'cn_precio_quince_dias_laton_retroiluminadas' ) === false ) {
        add_option( 'cn_precio_quince_dias_laton_retroiluminadas', '20.00' );
    }

    if ( get_option( 'profundidad_30mm_laton_retroiluminadas' ) === false ) {
        add_option( 'profundidad_30mm_laton_retroiluminadas', '00.63' );
    }   

    if ( get_option( 'profundidad_50mm_laton_retroiluminadas' ) === false ) {
        add_option( 'profundidad_50mm_laton_retroiluminadas', '01.05' );
    }   

    if ( get_option( 'profundidad_80mm_laton_retroiluminadas' ) === false ) {
        add_option( 'profundidad_80mm_laton_retroiluminadas', '01.68' );
    }  

    if ( get_option( 'profundidad_100mm_laton_retroiluminadas' ) === false ) {
        add_option( 'profundidad_100mm_laton_retroiluminadas', '02.10' );
    }  

    //Lat??n iluminadas frontalmente:
    if ( get_option( 'cn_precio_laton_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_laton_iluminacion_frontal', '170.00' );
    } 

    if ( get_option( 'cn_precio_laton_soldadura_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_laton_soldadura_iluminacion_frontal', '30.00' );
    } 

    if ( get_option( 'cn_precio_laton_metacrilato3mm_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_laton_metacrilato3mm_iluminacion_frontal', '20.00' );
    } 

    if ( get_option( 'cn_precio_laton_led_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_laton_led_iluminacion_frontal', '8.00' );
    }

    if ( get_option( 'cn_precio_laton_transformador_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_laton_transformador_iluminacion_frontal', '40.00' );
    }     

    if ( get_option( 'cn_precio_laton_corte_cnc_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_laton_corte_cnc_iluminacion_frontal', '0.30' );
    }  

    if ( get_option( 'cn_precio_laton_junquillo_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_laton_junquillo_iluminacion_frontal', '2.00' );
    }

    if ( get_option( 'cn_precio_laton_doblado_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_laton_doblado_iluminacion_frontal', '20.00' );
    }  

    if ( get_option( 'cn_precio_diez_dias_laton_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_diez_dias_laton_iluminacion_frontal', '100.00' );
    }  

    if ( get_option( 'cn_precio_quince_dias_laton_iluminacion_frontal' ) === false ) {
        add_option( 'cn_precio_quince_dias_laton_iluminacion_frontal', '20.00' );
    }

    if ( get_option( 'profundidad_30mm_laton_iluminacion_frontal' ) === false ) {
        add_option( 'profundidad_30mm_laton_iluminacion_frontal', '00.63' );
    }   

    if ( get_option( 'profundidad_50mm_laton_iluminacion_frontal' ) === false ) {
        add_option( 'profundidad_50mm_laton_iluminacion_frontal', '01.05' );
    }   

    if ( get_option( 'profundidad_80mm_laton_iluminacion_frontal' ) === false ) {
        add_option( 'profundidad_80mm_laton_iluminacion_frontal', '01.68' );
    }  

    if ( get_option( 'profundidad_100mm_laton_iluminacion_frontal' ) === false ) {
        add_option( 'profundidad_100mm_laton_iluminacion_frontal', '02.10' );
    }    

    //Metacrilato con luz:
    if ( get_option( 'cn_precio_metacrilato3mm_blancoOpal_sin_luz' ) === false ) {
        add_option( 'cn_precio_metacrilato3mm_blancoOpal_sin_luz', '20.00' );
    }

    if ( get_option( 'cn_precio_metacrilato3mm_color360_sin_luz' ) === false ) {
        add_option( 'cn_precio_metacrilato3mm_color360_sin_luz', '25.00' );
    }

    if ( get_option( 'cn_precio_metacrilato_led_sin_luz' ) === false ) {
        add_option( 'cn_precio_metacrilato_led_sin_luz', '8.00' );
    }

    if ( get_option( 'cn_precio_metacrilato_transformador_sin_luz' ) === false ) {
        add_option( 'cn_precio_metacrilato_transformador_sin_luz', '40.00' );
    }

    if ( get_option( 'cn_precio_metacrilato_cloroformo_sin_luz' ) === false ) {
        add_option( 'cn_precio_metacrilato_cloroformo_sin_luz', '10.00' );
    }

    if ( get_option( 'cn_precio_metacrilato_corte_cnc_sin_luz' ) === false ) {
        add_option( 'cn_precio_metacrilato_corte_cnc_sin_luz', '0.30' );
    }

    if ( get_option( 'cn_precio_metacrilato_doblado_sin_luz' ) === false ) {
        add_option( 'cn_precio_metacrilato_doblado_sin_luz', '60.00' );
    }

    if ( get_option( 'cn_precio_metacrilato_traseraPVC10mm_sin_luz' ) === false ) {
        add_option( 'cn_precio_metacrilato_traseraPVC10mm_sin_luz', '20.00' );
    }

    if ( get_option( 'cn_precio_diez_dias_metacrilato_sin_luz' ) === false ) {
        add_option( 'cn_precio_diez_dias_metacrilato_sin_luz', '100.00' );
    }

    if ( get_option( 'cn_precio_quince_dias_metacrilato_sin_luz' ) === false ) {
        add_option( 'cn_precio_quince_dias_metacrilato_sin_luz', '20.00' );
    }

    //PVC 5mm:
    if ( get_option( 'precio_pvc_5mm' ) === false ) {
        add_option( 'precio_pvc_5mm', '10.00' );
    }

    if ( get_option( 'precio_pvc_5mm_fondo' ) === false ) {
        add_option( 'precio_pvc_5mm_fondo', '20.00' );
    }     

    if ( get_option( 'precio_pvc_5mm_pintura' ) === false ) {
        add_option( 'precio_pvc_5mm_pintura', '20.00' );
    } 

    if ( get_option( 'precio_pvc_5mm_corte_cnc' ) === false ) {
        add_option( 'precio_pvc_5mm_corte_cnc', '0.30' );
    }     

    if ( get_option( 'precio_pvc_5mm_cinta' ) === false ) {
        add_option( 'precio_pvc_5mm_cinta', '5.00' );
    }  

    if ( get_option( 'precio_pvc_5mm_diez_dias' ) === false ) {
        add_option( 'precio_pvc_5mm_diez_dias', '60.00' );
    } 

    if ( get_option( 'precio_pvc_5mm_quince_dias' ) === false ) {
        add_option( 'precio_pvc_5mm_quince_dias', '20.00' );
    }  

    //PVC 10mm:
    if ( get_option( 'precio_pvc_10mm' ) === false ) {
        add_option( 'precio_pvc_10mm', '20.00' );
    }

    if ( get_option( 'precio_pvc_10mm_fondo' ) === false ) {
        add_option( 'precio_pvc_10mm_fondo', '20.00' );
    }     

    if ( get_option( 'precio_pvc_10mm_pintura' ) === false ) {
        add_option( 'precio_pvc_10mm_pintura', '20.00' );
    } 

    if ( get_option( 'precio_pvc_10mm_corte_cnc' ) === false ) {
        add_option( 'precio_pvc_10mm_corte_cnc', '0.30' );
    }     

    if ( get_option( 'precio_pvc_10mm_cinta' ) === false ) {
        add_option( 'precio_pvc_10mm_cinta', '5.00' );
    }  

    if ( get_option( 'precio_pvc_10mm_diez_dias' ) === false ) {
        add_option( 'precio_pvc_10mm_diez_dias', '60.00' );
    } 

    if ( get_option( 'precio_pvc_10mm_quince_dias' ) === false ) {
        add_option( 'precio_pvc_10mm_quince_dias', '20.00' );
    }

    //PVC 19mm sin iluminar:
    if ( get_option( 'precio_pvc_19mm' ) === false ) {
        add_option( 'precio_pvc_19mm', '20.00' );
    }

    if ( get_option( 'precio_pvc_19mm_fondo' ) === false ) {
        add_option( 'precio_pvc_19mm_fondo', '20.00' );
    }     

    if ( get_option( 'precio_pvc_19mm_pintura' ) === false ) {
        add_option( 'precio_pvc_19mm_pintura', '20.00' );
    } 

    if ( get_option( 'precio_pvc_19mm_corte_cnc' ) === false ) {
        add_option( 'precio_pvc_19mm_corte_cnc', '0.30' );
    }     

    if ( get_option( 'precio_pvc_19mm_cinta' ) === false ) {
        add_option( 'precio_pvc_19mm_cinta', '5.00' );
    }  

    if ( get_option( 'precio_pvc_19mm_diez_dias' ) === false ) {
        add_option( 'precio_pvc_19mm_diez_dias', '60.00' );
    } 

    if ( get_option( 'precio_pvc_19mm_quince_dias' ) === false ) {
        add_option( 'precio_pvc_19mm_quince_dias', '20.00' );
    }

    //PVC 19 mm Retroiluminadas:
    if ( get_option( 'precio_pvc_19mm_retroiluminadas' ) === false ) {
        add_option( 'precio_pvc_19mm_retroiluminadas', '20.00' );
    }

    if ( get_option( 'precio_pvc_19mm_fondo_retroiluminadas' ) === false ) {
        add_option( 'precio_pvc_19mm_fondo_retroiluminadas', '20.00' );
    }

    if ( get_option( 'precio_pvc_19mm_pintura_retroiluminadas' ) === false ) {
        add_option( 'precio_pvc_19mm_pintura_retroiluminadas', '20.00' );
    }

    if ( get_option( 'precio_pvc_19mm_corte_cnc_retroiluminadas' ) === false ) {
        add_option( 'precio_pvc_19mm_corte_cnc_retroiluminadas', '0.30' );
    }

    if ( get_option( 'precio_pvc_19mm_cinta_retroiluminadas' ) === false ) {
        add_option( 'precio_pvc_19mm_cinta_retroiluminadas', '5.00' );
    }      

    if ( get_option( 'precio_pvc_19mm_tornilleria_retroiluminadas' ) === false ) {
        add_option( 'precio_pvc_19mm_tornilleria_retroiluminadas', '10.00' );
    } 

    if ( get_option( 'precio_pvc_19mm_separadores_retroiluminadas' ) === false ) {
        add_option( 'precio_pvc_19mm_separadores_retroiluminadas', '10.00' );
    } 

    if ( get_option( 'precio_pvc_19mm_transformador_retroiluminadas' ) === false ) {
        add_option( 'precio_pvc_19mm_transformador_retroiluminadas', '10.00' );
    } 

    if ( get_option( 'precio_pvc_19mm_led_retroiluminadas' ) === false ) {
        add_option( 'precio_pvc_19mm_led_retroiluminadas', '10.00' );
    } 

    if ( get_option( 'precio_pvc_19mm_diez_dias_retroalimentadas' ) === false ) {
        add_option( 'precio_pvc_19mm_diez_dias_retroalimentadas', '10.00' );
    } 

    if ( get_option( 'precio_pvc_19mm_quince_dias_retroalimentadas' ) === false ) {
        add_option( 'precio_pvc_19mm_quince_dias_retroalimentadas', '10.00' );
    } 
}

#Agregar esta condiguraci??n al menu
function cn_menu_ajustes_LetrasCorporeas() {
    add_options_page( 'Letras Corporeas', //T??tulo de la p??gina
                      'Letras Corporeas', //Nombre del men??
                      'manage_options', //Nivel de acceso, solo usuarios
                      'cn-conf-ga-letras-corporeas', // slug
                      'cn_genera_pagina_letrasCorporeas' ); //Funci??n que procesar?? todo
}

add_action( 'admin_menu', 'cn_menu_ajustes_LetrasCorporeas' );

//Generar el codigo de la pagina de actualizaci??n
function cn_genera_pagina_letrasCorporeas() {

  // Conseguir el valor del Precio base de todos los elementos:
  $cn_id_producto_personalizado_letras                       = get_option( 'cn_id_producto_personalizado_letras' ) ;
  $iva_letras                                                = get_option( 'iva_letras' ) ;
  $previsualizacion                                          = get_option( 'previsualizacion' ) ;

  //Aluminio sin iluminar:
  $precio_aluminio                                           = get_option( 'precio_aluminio' );
  $precio_aluminio_mano_de_obra                              = get_option( 'precio_aluminio_mano_de_obra' );
  $precio_aluminio_pintura                                   = get_option( 'precio_aluminio_pintura' );
  $precio_aluminio_corte_cnc                                 = get_option( 'precio_aluminio_corte_cnc' );
  $cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar   = get_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar' ) ;
  $cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar = get_option( 'cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar' ) ;
  $cn_precio_doblado_aluminio_sin_iluminar                   = get_option( 'cn_precio_doblado_aluminio_sin_iluminar' ) ;  
  $profundidad_30mm_aluminio_sin_iluminar  = get_option( 'profundidad_30mm_aluminio_sin_iluminar' ) ;
  $profundidad_50mm_aluminio_sin_iluminar  = get_option( 'profundidad_50mm_aluminio_sin_iluminar' ) ;
  $profundidad_80mm_aluminio_sin_iluminar  = get_option( 'profundidad_80mm_aluminio_sin_iluminar' ) ;
  $profundidad_100mm_aluminio_sin_iluminar = get_option( 'profundidad_100mm_aluminio_sin_iluminar' ) ;

  //Aluminio retroiluminadas:
  $precio_aluminio_retroiluminado                              = get_option( 'precio_aluminio_retroiluminado' ); 
  $precio_aluminio_retroiluminado_mano_de_obra                 = get_option( 'precio_aluminio_retroiluminado_mano_de_obra' );
  $precio_aluminio_retroiluminado_pintura                      = get_option( 'precio_aluminio_retroiluminado_pintura' );
  $precio_aluminio_retroiluminado_metacrilato10mm              = get_option( 'precio_aluminio_retroiluminado_metacrilato10mm' );
  $precio_aluminio_retroiluminado_led                          = get_option( 'precio_aluminio_retroiluminado_led' );
  $precio_aluminio_retroiluminado_transformador                = get_option( 'precio_aluminio_retroiluminado_transformador' );
  $precio_aluminio_retroiluminado_corte_cnc                    = get_option( 'precio_aluminio_retroiluminado_corte_cnc' );
  $cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado   = get_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado' );
  $cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado = get_option( 'cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado' );
  $cn_precio_doblado_aluminio_retroiluminado                   = get_option( 'cn_precio_doblado_aluminio_retroiluminado' );
  $cn_precio_separadores_aluminio_retroiluminado               = get_option( 'cn_precio_separadores_aluminio_retroiluminado' );
  $profundidad_30mm_aluminio_retroiluminado  = get_option( 'profundidad_30mm_aluminio_retroiluminado' ) ;
  $profundidad_50mm_aluminio_retroiluminado  = get_option( 'profundidad_50mm_aluminio_retroiluminado' ) ;
  $profundidad_80mm_aluminio_retroiluminado  = get_option( 'profundidad_80mm_aluminio_retroiluminado' ) ;
  $profundidad_100mm_aluminio_retroiluminado = get_option( 'profundidad_100mm_aluminio_retroiluminado' ) ;

  //Aluminio Iluminadas frontalmente:
  $precio_aluminio_iluminado_frontal                    = get_option( 'precio_aluminio_iluminado_frontal' );
  $precio_aluminio_iluminado_frontal_mano_de_obra       = get_option( 'precio_aluminio_iluminado_frontal_mano_de_obra' );
  $precio_aluminio_iluminado_frontal_pintura            = get_option( 'precio_aluminio_iluminado_frontal_pintura' );
  $precio_aluminio_iluminado_frontal_metacrilato3mm     = get_option( 'precio_aluminio_iluminado_frontal_metacrilato3mm' );
  $precio_aluminio_iluminado_frontal_junquillo          = get_option( 'precio_aluminio_iluminado_frontal_junquillo' );
  $precio_aluminio_iluminado_frontal_led                = get_option( 'precio_aluminio_iluminado_frontal_led' );
  $precio_aluminio_iluminado_frontal_transformador      = get_option( 'precio_aluminio_iluminado_frontal_transformador' );
  $precio_aluminio_iluminado_frontal_corte_cnc          = get_option( 'precio_aluminio_iluminado_frontal_corte_cnc' ); 
  $cn_precio_doblado_aluminio_iluminado_frontal         = get_option( 'cn_precio_doblado_aluminio_iluminado_frontal' ); 
  $cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal     = get_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal' ); 
  $cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal   = get_option( 'cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal' ); 
  $profundidad_30mm_aluminio_iluminado_frontal  = get_option( 'profundidad_30mm_aluminio_iluminado_frontal' ) ;
  $profundidad_50mm_aluminio_iluminado_frontal  = get_option( 'profundidad_50mm_aluminio_iluminado_frontal' ) ;
  $profundidad_80mm_aluminio_iluminado_frontal  = get_option( 'profundidad_80mm_aluminio_iluminado_frontal' ) ;
  $profundidad_100mm_aluminio_iluminado_frontal = get_option( 'profundidad_100mm_aluminio_iluminado_frontal' ) ;

  //Acero sin iluminar: 
  $precio_acero                                           = get_option( 'precio_acero' );
  $precio_acero_mano_de_obra                              = get_option( 'precio_acero_mano_de_obra' );
  $precio_acero_corte_cnc                                 = get_option( 'precio_acero_corte_cnc' );
  $cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar   = get_option( 'cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar' );
  $cn_precio_quincediaslaboralesLetras_acero_sin_iluminar = get_option( 'cn_precio_quincediaslaboralesLetras_acero_sin_iluminar' );
  $cn_precio_doblado_acero_sin_iluminar                   = get_option( 'cn_precio_doblado_acero_sin_iluminar' );
  $profundidad_30mm_acero_sin_iluminar  = get_option( 'profundidad_30mm_acero_sin_iluminar' ) ;
  $profundidad_50mm_acero_sin_iluminar  = get_option( 'profundidad_50mm_acero_sin_iluminar' ) ;
  $profundidad_80mm_acero_sin_iluminar  = get_option( 'profundidad_80mm_acero_sin_iluminar' ) ;
  $profundidad_100mm_acero_sin_iluminar = get_option( 'profundidad_100mm_acero_sin_iluminar' ) ;  

  //Acero retroiluminado:
  $cn_precio_acero_retroiluminado                           = get_option( 'cn_precio_acero_retroiluminado' );
  $cn_precio_acero_mano_de_obra_retroiluminado              = get_option( 'cn_precio_acero_mano_de_obra_retroiluminado' );
  $precio_acero_retroiluminado_metacrilato10mm              = get_option( 'precio_acero_retroiluminado_metacrilato10mm' );
  $precio_acero_retroiluminado_led                          = get_option( 'precio_acero_retroiluminado_led' );
  $precio_acero_retroiluminado_transformador                = get_option( 'precio_acero_retroiluminado_transformador' );
  $precio_acero_retroiluminado_corte_cnc                    = get_option( 'precio_acero_retroiluminado_corte_cnc' );
  $precio_acero_retroiluminado_separadores                  = get_option( 'precio_acero_retroiluminado_separadores' );
  $precio_acero_retroiluminado_doblado                      = get_option( 'precio_acero_retroiluminado_doblado' );
  $cn_precio_diezdiaslaboralesLetras_acero_retroiluminado   = get_option( 'cn_precio_diezdiaslaboralesLetras_acero_retroiluminado' );
  $cn_precio_quincediaslaboralesLetras_acero_retroiluminado = get_option( 'cn_precio_quincediaslaboralesLetras_acero_retroiluminado' );
  $profundidad_30mm_acero_retroiluminado  = get_option( 'profundidad_30mm_acero_retroiluminado' ) ;
  $profundidad_50mm_acero_retroiluminado  = get_option( 'profundidad_50mm_acero_retroiluminado' ) ;
  $profundidad_80mm_acero_retroiluminado  = get_option( 'profundidad_80mm_acero_retroiluminado' ) ;
  $profundidad_100mm_acero_retroiluminado = get_option( 'profundidad_100mm_acero_retroiluminado' ) ;  

  //Acero Iluminadas frontalmente:
  $cn_precio_acero_iluminacion_frontal                            = get_option( 'cn_precio_acero_iluminacion_frontal' );
  $cn_precio_acero_soldadura_iluminacion_frontal                  = get_option( 'cn_precio_acero_soldadura_iluminacion_frontal' );
  $cn_precio_acero_metacrilato3mm_iluminacion_frontal             = get_option( 'cn_precio_acero_metacrilato3mm_iluminacion_frontal' );
  $cn_precio_acero_led_iluminacion_frontal                        = get_option( 'cn_precio_acero_led_iluminacion_frontal' );
  $cn_precio_acero_transformador_iluminacion_frontal              = get_option( 'cn_precio_acero_transformador_iluminacion_frontal' );
  $cn_precio_acero_corte_cnc_iluminacion_frontal                  = get_option( 'cn_precio_acero_corte_cnc_iluminacion_frontal' );
  $cn_precio_acero_doblado_iluminacion_frontal                    = get_option( 'cn_precio_acero_doblado_iluminacion_frontal' );
  $cn_precio_acero_junquillo_iluminacion_frontal                  = get_option( 'cn_precio_acero_junquillo_iluminacion_frontal' );
  $cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal    = get_option( 'cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal' );
  $cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal  = get_option( 'cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal' );
  $profundidad_30mm_acero_iluminacion_frontal  = get_option( 'profundidad_30mm_acero_iluminacion_frontal' ) ;
  $profundidad_50mm_acero_iluminacion_frontal  = get_option( 'profundidad_50mm_acero_iluminacion_frontal' ) ;
  $profundidad_80mm_acero_iluminacion_frontal  = get_option( 'profundidad_80mm_acero_iluminacion_frontal' ) ;
  $profundidad_100mm_acero_iluminacion_frontal = get_option( 'profundidad_100mm_acero_iluminacion_frontal' ) ;

  //Lat??n sin iluminar:
  $cn_precio_laton_sin_iluminar             = get_option( 'cn_precio_laton_sin_iluminar' );
  $cn_precio_soldadura_laton_sin_iluminar   = get_option( 'cn_precio_soldadura_laton_sin_iluminar' );
  $cn_precio_corte_cnc_laton_sin_iluminar   = get_option( 'cn_precio_corte_cnc_laton_sin_iluminar' );
  $cn_precio_doblado_laton_sin_iluminar     = get_option( 'cn_precio_doblado_laton_sin_iluminar' );
  $cn_precio_diez_dias_laton_sin_iluminar   = get_option( 'cn_precio_diez_dias_laton_sin_iluminar' );
  $cn_precio_quince_dias_laton_sin_iluminar = get_option( 'cn_precio_quince_dias_laton_sin_iluminar' );
  $profundidad_30mm_laton_sin_iluminar  = get_option( 'profundidad_30mm_laton_sin_iluminar' ) ;
  $profundidad_50mm_laton_sin_iluminar  = get_option( 'profundidad_50mm_laton_sin_iluminar' ) ;
  $profundidad_80mm_laton_sin_iluminar  = get_option( 'profundidad_80mm_laton_sin_iluminar' ) ;
  $profundidad_100mm_laton_sin_iluminar = get_option( 'profundidad_100mm_laton_sin_iluminar' ) ;

  //Lat??n retroiluminadas:
  $cn_precio_laton_retroiluminadas                 = get_option( 'cn_precio_laton_retroiluminadas' );
  $cn_precio_laton_soldadura_retroiluminadas       = get_option( 'cn_precio_laton_soldadura_retroiluminadas' );
  $cn_precio_laton_metacrilato10mm_retroiluminadas = get_option( 'cn_precio_laton_metacrilato10mm_retroiluminadas' );
  $cn_precio_laton_led_retroiluminadas             = get_option( 'cn_precio_laton_led_retroiluminadas' );
  $cn_precio_laton_transformador_retroiluminadas   = get_option( 'cn_precio_laton_transformador_retroiluminadas' );
  $cn_precio_laton_corte_cnc_retroiluminadas       = get_option( 'cn_precio_laton_corte_cnc_retroiluminadas' );
  $cn_precio_laton_separadores_retroiluminadas     = get_option( 'cn_precio_laton_separadores_retroiluminadas' );
  $cn_precio_laton_doblado_retroiluminadas         = get_option( 'cn_precio_laton_doblado_retroiluminadas' );
  $cn_precio_diez_dias_laton_retroiluminadas       = get_option( 'cn_precio_diez_dias_laton_retroiluminadas' );
  $cn_precio_quince_dias_laton_retroiluminadas     = get_option( 'cn_precio_quince_dias_laton_retroiluminadas' );
  $profundidad_30mm_laton_retroiluminadas  = get_option( 'profundidad_30mm_laton_retroiluminadas' ) ;
  $profundidad_50mm_laton_retroiluminadas  = get_option( 'profundidad_50mm_laton_retroiluminadas' ) ;
  $profundidad_80mm_laton_retroiluminadas  = get_option( 'profundidad_80mm_laton_retroiluminadas' ) ;
  $profundidad_100mm_laton_retroiluminadas = get_option( 'profundidad_100mm_laton_retroiluminadas' ) ;

 //Lat??n iluminaci??n frontal:
  $cn_precio_laton_iluminacion_frontal                = get_option( 'cn_precio_laton_iluminacion_frontal' );
  $cn_precio_laton_soldadura_iluminacion_frontal      = get_option( 'cn_precio_laton_soldadura_iluminacion_frontal' );
  $cn_precio_laton_metacrilato3mm_iluminacion_frontal = get_option( 'cn_precio_laton_metacrilato3mm_iluminacion_frontal' );
  $cn_precio_laton_led_iluminacion_frontal            = get_option( 'cn_precio_laton_led_iluminacion_frontal' );
  $cn_precio_laton_transformador_iluminacion_frontal  = get_option( 'cn_precio_laton_transformador_iluminacion_frontal' );
  $cn_precio_laton_corte_cnc_iluminacion_frontal      = get_option( 'cn_precio_laton_corte_cnc_iluminacion_frontal' );
  $cn_precio_laton_junquillo_iluminacion_frontal      = get_option( 'cn_precio_laton_junquillo_iluminacion_frontal' );
  $cn_precio_laton_doblado_iluminacion_frontal        = get_option( 'cn_precio_laton_doblado_iluminacion_frontal' );
  $cn_precio_diez_dias_laton_iluminacion_frontal      = get_option( 'cn_precio_diez_dias_laton_iluminacion_frontal' );
  $cn_precio_quince_dias_laton_iluminacion_frontal    = get_option( 'cn_precio_quince_dias_laton_iluminacion_frontal' );
  $profundidad_30mm_laton_iluminacion_frontal  = get_option( 'profundidad_30mm_laton_iluminacion_frontal' ) ;
  $profundidad_50mm_laton_iluminacion_frontal  = get_option( 'profundidad_50mm_laton_iluminacion_frontal' ) ;
  $profundidad_80mm_laton_iluminacion_frontal  = get_option( 'profundidad_80mm_laton_iluminacion_frontal' ) ;
  $profundidad_100mm_laton_iluminacion_frontal = get_option( 'profundidad_100mm_laton_iluminacion_frontal' ) ;

  //Metacrilato con luz:
  $cn_precio_metacrilato3mm_blancoOpal_sin_luz        = get_option( 'cn_precio_metacrilato3mm_blancoOpal_sin_luz' );
  $cn_precio_metacrilato3mm_color360_sin_luz          = get_option( 'cn_precio_metacrilato3mm_color360_sin_luz' );
  $cn_precio_metacrilato_led_sin_luz                  = get_option( 'cn_precio_metacrilato_led_sin_luz' );
  $cn_precio_metacrilato_transformador_sin_luz        = get_option( 'cn_precio_metacrilato_transformador_sin_luz' );
  $cn_precio_metacrilato_cloroformo_sin_luz           = get_option( 'cn_precio_metacrilato_cloroformo_sin_luz' );
  $cn_precio_metacrilato_corte_cnc_sin_luz            = get_option( 'cn_precio_metacrilato_corte_cnc_sin_luz' );
  $cn_precio_metacrilato_doblado_sin_luz              = get_option( 'cn_precio_metacrilato_doblado_sin_luz' );
  $cn_precio_metacrilato_traseraPVC10mm_sin_luz       = get_option( 'cn_precio_metacrilato_traseraPVC10mm_sin_luz' );
  $cn_precio_diez_dias_metacrilato_sin_luz            = get_option( 'cn_precio_diez_dias_metacrilato_sin_luz' );
  $cn_precio_quince_dias_metacrilato_sin_luz          = get_option( 'cn_precio_quince_dias_metacrilato_sin_luz' );

  //PVC 5mm:
  $precio_pvc_5mm              = get_option( 'precio_pvc_5mm' );
  $precio_pvc_5mm_fondo        = get_option( 'precio_pvc_5mm_fondo' );
  $precio_pvc_5mm_pintura      = get_option( 'precio_pvc_5mm_pintura' );
  $precio_pvc_5mm_corte_cnc    = get_option( 'precio_pvc_5mm_corte_cnc' );
  $precio_pvc_5mm_cinta        = get_option( 'precio_pvc_5mm_cinta' ); 
  $precio_pvc_5mm_diez_dias    = get_option( 'precio_pvc_5mm_diez_dias' ); 
  $precio_pvc_5mm_quince_dias  = get_option( 'precio_pvc_5mm_quince_dias' );

  //PVC 10mm:
  $precio_pvc_10mm              = get_option( 'precio_pvc_10mm' );
  $precio_pvc_10mm_fondo        = get_option( 'precio_pvc_10mm_fondo' );
  $precio_pvc_10mm_pintura      = get_option( 'precio_pvc_10mm_pintura' );
  $precio_pvc_10mm_corte_cnc    = get_option( 'precio_pvc_10mm_corte_cnc' );
  $precio_pvc_10mm_cinta        = get_option( 'precio_pvc_10mm_cinta' ); 
  $precio_pvc_10mm_diez_dias    = get_option( 'precio_pvc_10mm_diez_dias' ); 
  $precio_pvc_10mm_quince_dias  = get_option( 'precio_pvc_10mm_quince_dias' );
  
  //PVC 19mm sin iluminar:
  $precio_pvc_19mm              = get_option( 'precio_pvc_19mm' );
  $precio_pvc_19mm_fondo        = get_option( 'precio_pvc_19mm_fondo' );
  $precio_pvc_19mm_pintura      = get_option( 'precio_pvc_19mm_pintura' );
  $precio_pvc_19mm_corte_cnc    = get_option( 'precio_pvc_19mm_corte_cnc' );
  $precio_pvc_19mm_cinta        = get_option( 'precio_pvc_19mm_cinta' ); 
  $precio_pvc_19mm_diez_dias    = get_option( 'precio_pvc_19mm_diez_dias' ); 
  $precio_pvc_19mm_quince_dias  = get_option( 'precio_pvc_19mm_quince_dias' );

  //PVC 19mm retroalimentadas:
  $precio_pvc_19mm_retroiluminadas                  = get_option( 'precio_pvc_19mm_retroiluminadas' );
  $precio_pvc_19mm_fondo_retroiluminadas            = get_option( 'precio_pvc_19mm_fondo_retroiluminadas' );
  $precio_pvc_19mm_pintura_retroiluminadas          = get_option( 'precio_pvc_19mm_pintura_retroiluminadas' );
  $precio_pvc_19mm_corte_cnc_retroiluminadas        = get_option( 'precio_pvc_19mm_corte_cnc_retroiluminadas' );
  $precio_pvc_19mm_cinta_retroiluminadas            = get_option( 'precio_pvc_19mm_cinta_retroiluminadas' ); 
  $precio_pvc_19mm_tornilleria_retroiluminadas      = get_option( 'precio_pvc_19mm_tornilleria_retroiluminadas' ); 
  $precio_pvc_19mm_separadores_retroiluminadas      = get_option( 'precio_pvc_19mm_separadores_retroiluminadas' );
  $precio_pvc_19mm_transformador_retroiluminadas    = get_option( 'precio_pvc_19mm_transformador_retroiluminadas' );
  $precio_pvc_19mm_led_retroiluminadas              = get_option( 'precio_pvc_19mm_led_retroiluminadas' ); 
  $precio_pvc_19mm_diez_dias_retroalimentadas       = get_option( 'precio_pvc_19mm_diez_dias_retroalimentadas' ); 
  $precio_pvc_19mm_quince_dias_retroalimentadas     = get_option( 'precio_pvc_19mm_quince_dias_retroalimentadas' );

  require('formularioAdmin/configuracionesForm.php');
}

add_action( 'admin_post_guardar_ga_LetrasCorporeas', 'cn_guardar_ga_LetrasCorporeas' );

function cn_guardar_ga_LetrasCorporeas() {
    // Revisar el permiso de autorizaci??n
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( 'Not allowed' );
    }

    // Revisar el token que creamos antes
    check_admin_referer( 'token_ga' );

    //Limpiar valor, para prevenir problemas de seguridad
    $cn_id_producto_personalizado_letras                  = sanitize_text_field( $_POST['cn_id_producto_personalizado_letras'] );
    $iva_letras                                           = sanitize_text_field( $_POST['iva_letras'] );
    $previsualizacion                                     = sanitize_text_field( $_POST['previsualizacion'] );

    //Aluminio Sin Iluminar:
    $precio_aluminio                                      = sanitize_text_field( $_POST['precio_aluminio'] );
    $precio_aluminio_mano_de_obra                         = sanitize_text_field( $_POST['precio_aluminio_mano_de_obra'] );
    $precio_aluminio_pintura                              = sanitize_text_field( $_POST['precio_aluminio_pintura'] );
    $precio_aluminio_corte_cnc                            = sanitize_text_field( $_POST['precio_aluminio_corte_cnc'] );
    $cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar   = sanitize_text_field( $_POST['cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar'] );
    $cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar = sanitize_text_field( $_POST['cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar'] );
    $cn_precio_doblado_aluminio_sin_iluminar              = sanitize_text_field( $_POST['cn_precio_doblado_aluminio_sin_iluminar'] );
    $profundidad_30mm_aluminio_sin_iluminar       = sanitize_text_field( $_POST['profundidad_30mm_aluminio_sin_iluminar'] );
    $profundidad_50mm_aluminio_sin_iluminar       = sanitize_text_field( $_POST['profundidad_50mm_aluminio_sin_iluminar'] );
    $profundidad_80mm_aluminio_sin_iluminar       = sanitize_text_field( $_POST['profundidad_80mm_aluminio_sin_iluminar'] );
    $profundidad_100mm_aluminio_sin_iluminar      = sanitize_text_field( $_POST['profundidad_100mm_aluminio_sin_iluminar'] );    

    //Aluminio retroiluminadas:
    $precio_aluminio_retroiluminado                       = sanitize_text_field( $_POST['precio_aluminio_retroiluminado'] );
    $precio_aluminio_retroiluminado_mano_de_obra          = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_mano_de_obra'] );
    $precio_aluminio_retroiluminado_pintura               = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_pintura'] );
    $precio_aluminio_retroiluminado_metacrilato10mm       = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_metacrilato10mm'] );
    $precio_aluminio_retroiluminado_led                   = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_led'] );
    $precio_aluminio_retroiluminado_transformador         = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_transformador'] );
    $precio_aluminio_retroiluminado_corte_cnc             = sanitize_text_field( $_POST['precio_aluminio_retroiluminado_corte_cnc'] );
    $cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado    = sanitize_text_field( $_POST['cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado'] );
    $cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado  = sanitize_text_field( $_POST['cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado'] );
    $cn_precio_doblado_aluminio_retroiluminado                    = sanitize_text_field( $_POST['cn_precio_doblado_aluminio_retroiluminado'] );
    $cn_precio_separadores_aluminio_retroiluminado                = sanitize_text_field( $_POST['cn_precio_separadores_aluminio_retroiluminado'] );
    $profundidad_30mm_aluminio_retroiluminado       = sanitize_text_field( $_POST['profundidad_30mm_aluminio_retroiluminado'] );
    $profundidad_50mm_aluminio_retroiluminado       = sanitize_text_field( $_POST['profundidad_50mm_aluminio_retroiluminado'] );
    $profundidad_80mm_aluminio_retroiluminado       = sanitize_text_field( $_POST['profundidad_80mm_aluminio_retroiluminado'] );
    $profundidad_100mm_aluminio_retroiluminado      = sanitize_text_field( $_POST['profundidad_100mm_aluminio_retroiluminado'] );

    //Aluminio Iluminadas frontalmente:
    $precio_aluminio_iluminado_frontal                    = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal'] );
    $precio_aluminio_iluminado_frontal_mano_de_obra       = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_mano_de_obra'] );
    $precio_aluminio_iluminado_frontal_pintura            = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_pintura'] );
    $precio_aluminio_iluminado_frontal_metacrilato3mm     = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_metacrilato3mm'] );
    $precio_aluminio_iluminado_frontal_junquillo          = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_junquillo'] );
    $precio_aluminio_iluminado_frontal_led                = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_led'] );
    $precio_aluminio_iluminado_frontal_transformador      = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_transformador'] );
    $precio_aluminio_iluminado_frontal_corte_cnc          = sanitize_text_field( $_POST['precio_aluminio_iluminado_frontal_corte_cnc'] );
    $cn_precio_doblado_aluminio_iluminado_frontal         = sanitize_text_field( $_POST['cn_precio_doblado_aluminio_iluminado_frontal'] );
    $cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal = sanitize_text_field( $_POST['cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal'] );
    $cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal = sanitize_text_field( $_POST['cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal'] );
    $profundidad_30mm_aluminio_iluminado_frontal       = sanitize_text_field( $_POST['profundidad_30mm_aluminio_iluminado_frontal'] );
    $profundidad_50mm_aluminio_iluminado_frontal       = sanitize_text_field( $_POST['profundidad_50mm_aluminio_iluminado_frontal'] );
    $profundidad_80mm_aluminio_iluminado_frontal       = sanitize_text_field( $_POST['profundidad_80mm_aluminio_iluminado_frontal'] );
    $profundidad_100mm_aluminio_iluminado_frontal      = sanitize_text_field( $_POST['profundidad_100mm_aluminio_iluminado_frontal'] );

    //Acero sin iluminar:
    $precio_acero                                            = sanitize_text_field( $_POST['precio_acero'] );
    $precio_acero_mano_de_obra                               = sanitize_text_field( $_POST['precio_acero_mano_de_obra'] );
    $precio_acero_corte_cnc                                  = sanitize_text_field( $_POST['precio_acero_corte_cnc'] );
    $cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar    = sanitize_text_field( $_POST['cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar'] );
    $cn_precio_quincediaslaboralesLetras_acero_sin_iluminar  = sanitize_text_field( $_POST['cn_precio_quincediaslaboralesLetras_acero_sin_iluminar'] );
    $cn_precio_doblado_acero_sin_iluminar                    = sanitize_text_field( $_POST['cn_precio_doblado_acero_sin_iluminar'] );
    $profundidad_30mm_acero_sin_iluminar       = sanitize_text_field( $_POST['profundidad_30mm_acero_sin_iluminar'] );
    $profundidad_50mm_acero_sin_iluminar       = sanitize_text_field( $_POST['profundidad_50mm_acero_sin_iluminar'] );
    $profundidad_80mm_acero_sin_iluminar       = sanitize_text_field( $_POST['profundidad_80mm_acero_sin_iluminar'] );
    $profundidad_100mm_acero_sin_iluminar      = sanitize_text_field( $_POST['profundidad_100mm_acero_sin_iluminar'] );

    //Acero retroiluminado:
    $cn_precio_acero_retroiluminado                           = sanitize_text_field( $_POST['cn_precio_acero_retroiluminado'] );
    $cn_precio_acero_mano_de_obra_retroiluminado              = sanitize_text_field( $_POST['cn_precio_acero_mano_de_obra_retroiluminado'] );
    $precio_acero_retroiluminado_metacrilato10mm              = sanitize_text_field( $_POST['precio_acero_retroiluminado_metacrilato10mm'] );
    $precio_acero_retroiluminado_led                          = sanitize_text_field( $_POST['precio_acero_retroiluminado_led'] );
    $precio_acero_retroiluminado_transformador                = sanitize_text_field( $_POST['precio_acero_retroiluminado_transformador'] );
    $precio_acero_retroiluminado_corte_cnc                    = sanitize_text_field( $_POST['precio_acero_retroiluminado_corte_cnc'] );
    $precio_acero_retroiluminado_separadores                  = sanitize_text_field( $_POST['precio_acero_retroiluminado_separadores'] );
    $precio_acero_retroiluminado_doblado                      = sanitize_text_field( $_POST['precio_acero_retroiluminado_doblado'] );
    $cn_precio_diezdiaslaboralesLetras_acero_retroiluminado   = sanitize_text_field( $_POST['cn_precio_diezdiaslaboralesLetras_acero_retroiluminado'] );
    $cn_precio_quincediaslaboralesLetras_acero_retroiluminado = sanitize_text_field( $_POST['cn_precio_quincediaslaboralesLetras_acero_retroiluminado'] );
    $profundidad_30mm_acero_retroiluminado       = sanitize_text_field( $_POST['profundidad_30mm_acero_retroiluminado'] );
    $profundidad_50mm_acero_retroiluminado       = sanitize_text_field( $_POST['profundidad_50mm_acero_retroiluminado'] );
    $profundidad_80mm_acero_retroiluminado       = sanitize_text_field( $_POST['profundidad_80mm_acero_retroiluminado'] );
    $profundidad_100mm_acero_retroiluminado      = sanitize_text_field( $_POST['profundidad_100mm_acero_retroiluminado'] );

    //Acero Iluminadas frontalmente:
    $cn_precio_acero_iluminacion_frontal                         = sanitize_text_field( $_POST['cn_precio_acero_iluminacion_frontal'] );
    $cn_precio_acero_soldadura_iluminacion_frontal               = sanitize_text_field( $_POST['cn_precio_acero_soldadura_iluminacion_frontal'] );
    $cn_precio_acero_metacrilato3mm_iluminacion_frontal          = sanitize_text_field( $_POST['cn_precio_acero_metacrilato3mm_iluminacion_frontal'] );
    $cn_precio_acero_led_iluminacion_frontal                     = sanitize_text_field( $_POST['cn_precio_acero_led_iluminacion_frontal'] );
    $cn_precio_acero_transformador_iluminacion_frontal           = sanitize_text_field( $_POST['cn_precio_acero_transformador_iluminacion_frontal'] );
    $cn_precio_acero_corte_cnc_iluminacion_frontal               = sanitize_text_field( $_POST['cn_precio_acero_corte_cnc_iluminacion_frontal'] );
    $cn_precio_acero_doblado_iluminacion_frontal                 = sanitize_text_field( $_POST['cn_precio_acero_doblado_iluminacion_frontal'] );
    $cn_precio_acero_junquillo_iluminacion_frontal               = sanitize_text_field( $_POST['cn_precio_acero_junquillo_iluminacion_frontal'] );
    $cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal = sanitize_text_field( $_POST['cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal'] );
    $cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal = sanitize_text_field( $_POST['cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal'] );
    $profundidad_30mm_acero_iluminacion_frontal       = sanitize_text_field( $_POST['profundidad_30mm_acero_iluminacion_frontal'] );
    $profundidad_50mm_acero_iluminacion_frontal       = sanitize_text_field( $_POST['profundidad_50mm_acero_iluminacion_frontal'] );
    $profundidad_80mm_acero_iluminacion_frontal       = sanitize_text_field( $_POST['profundidad_80mm_acero_iluminacion_frontal'] );
    $profundidad_100mm_acero_iluminacion_frontal      = sanitize_text_field( $_POST['profundidad_100mm_acero_iluminacion_frontal'] );

    //lat??n sin iluminar:
    $cn_precio_laton_sin_iluminar             = sanitize_text_field( $_POST['cn_precio_laton_sin_iluminar'] );
    $cn_precio_soldadura_laton_sin_iluminar   = sanitize_text_field( $_POST['cn_precio_soldadura_laton_sin_iluminar'] );
    $cn_precio_corte_cnc_laton_sin_iluminar   = sanitize_text_field( $_POST['cn_precio_corte_cnc_laton_sin_iluminar'] );
    $cn_precio_doblado_laton_sin_iluminar     = sanitize_text_field( $_POST['cn_precio_doblado_laton_sin_iluminar'] );
    $cn_precio_diez_dias_laton_sin_iluminar   = sanitize_text_field( $_POST['cn_precio_diez_dias_laton_sin_iluminar'] );
    $cn_precio_quince_dias_laton_sin_iluminar = sanitize_text_field( $_POST['cn_precio_quince_dias_laton_sin_iluminar'] );
    $profundidad_30mm_laton_sin_iluminar       = sanitize_text_field( $_POST['profundidad_30mm_laton_sin_iluminar'] );
    $profundidad_50mm_laton_sin_iluminar       = sanitize_text_field( $_POST['profundidad_50mm_laton_sin_iluminar'] );
    $profundidad_80mm_laton_sin_iluminar       = sanitize_text_field( $_POST['profundidad_80mm_laton_sin_iluminar'] );
    $profundidad_100mm_laton_sin_iluminar      = sanitize_text_field( $_POST['profundidad_100mm_laton_sin_iluminar'] );

    //Lat??n retroiluminado:
    $cn_precio_laton_retroiluminadas                 = sanitize_text_field( $_POST['cn_precio_laton_retroiluminadas'] );
    $cn_precio_laton_soldadura_retroiluminadas       = sanitize_text_field( $_POST['cn_precio_laton_soldadura_retroiluminadas'] );
    $cn_precio_laton_metacrilato10mm_retroiluminadas = sanitize_text_field( $_POST['cn_precio_laton_metacrilato10mm_retroiluminadas'] );
    $cn_precio_laton_led_retroiluminadas             = sanitize_text_field( $_POST['cn_precio_laton_led_retroiluminadas'] );
    $cn_precio_laton_transformador_retroiluminadas   = sanitize_text_field( $_POST['cn_precio_laton_transformador_retroiluminadas'] );    
    $cn_precio_laton_corte_cnc_retroiluminadas       = sanitize_text_field( $_POST['cn_precio_laton_corte_cnc_retroiluminadas'] );
    $cn_precio_laton_separadores_retroiluminadas     = sanitize_text_field( $_POST['cn_precio_laton_separadores_retroiluminadas'] );
    $cn_precio_laton_doblado_retroiluminadas         = sanitize_text_field( $_POST['cn_precio_laton_doblado_retroiluminadas'] );
    $cn_precio_diez_dias_laton_retroiluminadas       = sanitize_text_field( $_POST['cn_precio_diez_dias_laton_retroiluminadas'] );
    $cn_precio_quince_dias_laton_retroiluminadas     = sanitize_text_field( $_POST['cn_precio_quince_dias_laton_retroiluminadas'] );
    $profundidad_30mm_laton_retroiluminadas       = sanitize_text_field( $_POST['profundidad_30mm_laton_retroiluminadas'] );
    $profundidad_50mm_laton_retroiluminadas       = sanitize_text_field( $_POST['profundidad_50mm_laton_retroiluminadas'] );
    $profundidad_80mm_laton_retroiluminadas       = sanitize_text_field( $_POST['profundidad_80mm_laton_retroiluminadas'] );
    $profundidad_100mm_laton_retroiluminadas      = sanitize_text_field( $_POST['profundidad_100mm_laton_retroiluminadas'] );

    //Lat??n iluminacion frontal:
    $cn_precio_laton_iluminacion_frontal                = sanitize_text_field( $_POST['cn_precio_laton_iluminacion_frontal'] );
    $cn_precio_laton_soldadura_iluminacion_frontal      = sanitize_text_field( $_POST['cn_precio_laton_soldadura_iluminacion_frontal'] );
    $cn_precio_laton_metacrilato3mm_iluminacion_frontal = sanitize_text_field( $_POST['cn_precio_laton_metacrilato3mm_iluminacion_frontal'] );
    $cn_precio_laton_led_iluminacion_frontal            = sanitize_text_field( $_POST['cn_precio_laton_led_iluminacion_frontal'] );
    $cn_precio_laton_transformador_iluminacion_frontal  = sanitize_text_field( $_POST['cn_precio_laton_transformador_iluminacion_frontal'] );    
    $cn_precio_laton_corte_cnc_iluminacion_frontal      = sanitize_text_field( $_POST['cn_precio_laton_corte_cnc_iluminacion_frontal'] );
    $cn_precio_laton_junquillo_iluminacion_frontal      = sanitize_text_field( $_POST['cn_precio_laton_junquillo_iluminacion_frontal'] );
    $cn_precio_laton_doblado_iluminacion_frontal        = sanitize_text_field( $_POST['cn_precio_laton_doblado_iluminacion_frontal'] );
    $cn_precio_diez_dias_laton_iluminacion_frontal      = sanitize_text_field( $_POST['cn_precio_diez_dias_laton_iluminacion_frontal'] );
    $cn_precio_quince_dias_laton_iluminacion_frontal    = sanitize_text_field( $_POST['cn_precio_quince_dias_laton_iluminacion_frontal'] );
    $profundidad_30mm_laton_iluminacion_frontal       = sanitize_text_field( $_POST['profundidad_30mm_laton_iluminacion_frontal'] );
    $profundidad_50mm_laton_iluminacion_frontal       = sanitize_text_field( $_POST['profundidad_50mm_laton_iluminacion_frontal'] );
    $profundidad_80mm_laton_iluminacion_frontal       = sanitize_text_field( $_POST['profundidad_80mm_laton_iluminacion_frontal'] );
    $profundidad_100mm_laton_iluminacion_frontal      = sanitize_text_field( $_POST['profundidad_100mm_laton_iluminacion_frontal'] );

    //Metacrilato con luz:
    $cn_precio_metacrilato3mm_blancoOpal_sin_luz       = sanitize_text_field( $_POST['cn_precio_metacrilato3mm_blancoOpal_sin_luz'] );
    $cn_precio_metacrilato3mm_color360_sin_luz         = sanitize_text_field( $_POST['cn_precio_metacrilato3mm_color360_sin_luz'] );
    $cn_precio_metacrilato_led_sin_luz                 = sanitize_text_field( $_POST['cn_precio_metacrilato_led_sin_luz'] );
    $cn_precio_metacrilato_transformador_sin_luz       = sanitize_text_field( $_POST['cn_precio_metacrilato_transformador_sin_luz'] );
    $cn_precio_metacrilato_cloroformo_sin_luz          = sanitize_text_field( $_POST['cn_precio_metacrilato_cloroformo_sin_luz'] );    
    $cn_precio_metacrilato_corte_cnc_sin_luz           = sanitize_text_field( $_POST['cn_precio_metacrilato_corte_cnc_sin_luz'] );
    $cn_precio_metacrilato_doblado_sin_luz             = sanitize_text_field( $_POST['cn_precio_metacrilato_doblado_sin_luz'] );
    $cn_precio_metacrilato_traseraPVC10mm_sin_luz      = sanitize_text_field( $_POST['cn_precio_metacrilato_traseraPVC10mm_sin_luz'] );
    $cn_precio_diez_dias_metacrilato_sin_luz           = sanitize_text_field( $_POST['cn_precio_diez_dias_metacrilato_sin_luz'] );
    $cn_precio_quince_dias_metacrilato_sin_luz         = sanitize_text_field( $_POST['cn_precio_quince_dias_metacrilato_sin_luz'] ); 

    //PVC 5mm:
    $precio_pvc_5mm               = sanitize_text_field( $_POST['precio_pvc_5mm'] );
    $precio_pvc_5mm_fondo         = sanitize_text_field( $_POST['precio_pvc_5mm_fondo'] );
    $precio_pvc_5mm_pintura       = sanitize_text_field( $_POST['precio_pvc_5mm_pintura'] );
    $precio_pvc_5mm_corte_cnc     = sanitize_text_field( $_POST['precio_pvc_5mm_corte_cnc'] );
    $precio_pvc_5mm_cinta         = sanitize_text_field( $_POST['precio_pvc_5mm_cinta'] );
    $precio_pvc_5mm_diez_dias     = sanitize_text_field( $_POST['precio_pvc_5mm_diez_dias'] );
    $precio_pvc_5mm_quince_dias   = sanitize_text_field( $_POST['precio_pvc_5mm_quince_dias'] );
  
    //PVC 10mm:
    $precio_pvc_10mm               = sanitize_text_field( $_POST['precio_pvc_10mm'] );
    $precio_pvc_10mm_fondo         = sanitize_text_field( $_POST['precio_pvc_10mm_fondo'] );
    $precio_pvc_10mm_pintura       = sanitize_text_field( $_POST['precio_pvc_10mm_pintura'] );
    $precio_pvc_10mm_corte_cnc     = sanitize_text_field( $_POST['precio_pvc_10mm_corte_cnc'] );
    $precio_pvc_10mm_cinta         = sanitize_text_field( $_POST['precio_pvc_10mm_cinta'] );
    $precio_pvc_10mm_diez_dias     = sanitize_text_field( $_POST['precio_pvc_10mm_diez_dias'] );
    $precio_pvc_10mm_quince_dias   = sanitize_text_field( $_POST['precio_pvc_10mm_quince_dias'] );

    //PVC 19mm sin iluminar:
    $precio_pvc_19mm               = sanitize_text_field( $_POST['precio_pvc_19mm'] );
    $precio_pvc_19mm_fondo         = sanitize_text_field( $_POST['precio_pvc_19mm_fondo'] );
    $precio_pvc_19mm_pintura       = sanitize_text_field( $_POST['precio_pvc_19mm_pintura'] );
    $precio_pvc_19mm_corte_cnc     = sanitize_text_field( $_POST['precio_pvc_19mm_corte_cnc'] );
    $precio_pvc_19mm_cinta         = sanitize_text_field( $_POST['precio_pvc_19mm_cinta'] );
    $precio_pvc_19mm_diez_dias     = sanitize_text_field( $_POST['precio_pvc_19mm_diez_dias'] );
    $precio_pvc_19mm_quince_dias   = sanitize_text_field( $_POST['precio_pvc_19mm_quince_dias'] );

    //PVC 19mm retroiluminadas:
    $precio_pvc_19mm_retroiluminadas               = sanitize_text_field( $_POST['precio_pvc_19mm_retroiluminadas'] );
    $precio_pvc_19mm_fondo_retroiluminadas         = sanitize_text_field( $_POST['precio_pvc_19mm_fondo_retroiluminadas'] );
    $precio_pvc_19mm_pintura_retroiluminadas       = sanitize_text_field( $_POST['precio_pvc_19mm_pintura_retroiluminadas'] );
    $precio_pvc_19mm_corte_cnc_retroiluminadas     = sanitize_text_field( $_POST['precio_pvc_19mm_corte_cnc_retroiluminadas'] );
    $precio_pvc_19mm_cinta_retroiluminadas         = sanitize_text_field( $_POST['precio_pvc_19mm_cinta_retroiluminadas'] );
    $precio_pvc_19mm_tornilleria_retroiluminadas   = sanitize_text_field( $_POST['precio_pvc_19mm_tornilleria_retroiluminadas'] );
    $precio_pvc_19mm_separadores_retroiluminadas   = sanitize_text_field( $_POST['precio_pvc_19mm_separadores_retroiluminadas'] );
    $precio_pvc_19mm_transformador_retroiluminadas = sanitize_text_field( $_POST['precio_pvc_19mm_transformador_retroiluminadas'] );
    $precio_pvc_19mm_led_retroiluminadas           = sanitize_text_field( $_POST['precio_pvc_19mm_led_retroiluminadas'] );
    $precio_pvc_19mm_diez_dias_retroalimentadas    = sanitize_text_field( $_POST['precio_pvc_19mm_diez_dias_retroalimentadas'] );
    $precio_pvc_19mm_quince_dias_retroalimentadas  = sanitize_text_field( $_POST['precio_pvc_19mm_quince_dias_retroalimentadas'] );

    // Guardar en la base de datos
    update_option( 'cn_id_producto_personalizado_letras', $cn_id_producto_personalizado_letras );
    update_option( 'iva_letras', $iva_letras );
    update_option( 'previsualizacion', $previsualizacion );

    //Aluminio sin iluminar:
    update_option( 'precio_aluminio', $precio_aluminio );
    update_option( 'precio_aluminio_mano_de_obra', $precio_aluminio_mano_de_obra );
    update_option( 'precio_aluminio_pintura', $precio_aluminio_pintura );
    update_option( 'precio_aluminio_corte_cnc', $precio_aluminio_corte_cnc );
    update_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar', $cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar );
    update_option( 'cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar', $cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar );    
    update_option( 'cn_precio_doblado_aluminio_sin_iluminar', $cn_precio_doblado_aluminio_sin_iluminar );   
    update_option( 'profundidad_30mm_aluminio_sin_iluminar', $profundidad_30mm_aluminio_sin_iluminar );
    update_option( 'profundidad_50mm_aluminio_sin_iluminar', $profundidad_50mm_aluminio_sin_iluminar );
    update_option( 'profundidad_80mm_aluminio_sin_iluminar', $profundidad_80mm_aluminio_sin_iluminar );
    update_option( 'profundidad_100mm_aluminio_sin_iluminar', $profundidad_100mm_aluminio_sin_iluminar );

    //Aluminio retroiluminadas:    
    update_option( 'precio_aluminio_retroiluminado', $precio_aluminio_retroiluminado );
    update_option( 'precio_aluminio_retroiluminado_mano_de_obra', $precio_aluminio_retroiluminado_mano_de_obra );
    update_option( 'precio_aluminio_retroiluminado_pintura', $precio_aluminio_retroiluminado_pintura );
    update_option( 'precio_aluminio_retroiluminado_metacrilato10mm', $precio_aluminio_retroiluminado_metacrilato10mm );
    update_option( 'precio_aluminio_retroiluminado_led', $precio_aluminio_retroiluminado_led );
    update_option( 'precio_aluminio_retroiluminado_transformador', $precio_aluminio_retroiluminado_transformador );
    update_option( 'precio_aluminio_retroiluminado_corte_cnc', $precio_aluminio_retroiluminado_corte_cnc );
    update_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado', $cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado );
    update_option( 'cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado', $cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado );
    update_option( 'cn_precio_doblado_aluminio_retroiluminado', $cn_precio_doblado_aluminio_retroiluminado );
    update_option( 'cn_precio_separadores_aluminio_retroiluminado', $cn_precio_separadores_aluminio_retroiluminado );
    update_option( 'profundidad_30mm_aluminio_retroiluminado', $profundidad_30mm_aluminio_retroiluminado );
    update_option( 'profundidad_50mm_aluminio_retroiluminado', $profundidad_50mm_aluminio_retroiluminado );
    update_option( 'profundidad_80mm_aluminio_retroiluminado', $profundidad_80mm_aluminio_retroiluminado );
    update_option( 'profundidad_100mm_aluminio_retroiluminado', $profundidad_100mm_aluminio_retroiluminado );

    //Aluminio iluminadas frontalmente:    
    update_option( 'precio_aluminio_iluminado_frontal', $precio_aluminio_iluminado_frontal );
    update_option( 'precio_aluminio_iluminado_frontal_mano_de_obra', $precio_aluminio_iluminado_frontal_mano_de_obra );
    update_option( 'precio_aluminio_iluminado_frontal_pintura', $precio_aluminio_iluminado_frontal_pintura );
    update_option( 'precio_aluminio_iluminado_frontal_metacrilato3mm', $precio_aluminio_iluminado_frontal_metacrilato3mm );
    update_option( 'precio_aluminio_iluminado_frontal_junquillo', $precio_aluminio_iluminado_frontal_junquillo );
    update_option( 'precio_aluminio_iluminado_frontal_led', $precio_aluminio_iluminado_frontal_led );
    update_option( 'precio_aluminio_iluminado_frontal_transformador', $precio_aluminio_iluminado_frontal_transformador );
    update_option( 'precio_aluminio_iluminado_frontal_corte_cnc', $precio_aluminio_iluminado_frontal_corte_cnc );
    update_option( 'cn_precio_doblado_aluminio_iluminado_frontal', $cn_precio_doblado_aluminio_iluminado_frontal );
    update_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal', $cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal );
    update_option( 'cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal', $cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal );
    update_option( 'profundidad_30mm_aluminio_iluminado_frontal', $profundidad_30mm_aluminio_iluminado_frontal );
    update_option( 'profundidad_50mm_aluminio_iluminado_frontal', $profundidad_50mm_aluminio_iluminado_frontal );
    update_option( 'profundidad_80mm_aluminio_iluminado_frontal', $profundidad_80mm_aluminio_iluminado_frontal );
    update_option( 'profundidad_100mm_aluminio_iluminado_frontal', $profundidad_100mm_aluminio_iluminado_frontal );

    //Acero sin iluminar:
    update_option( 'precio_acero', $precio_acero );
    update_option( 'precio_acero_mano_de_obra', $precio_acero_mano_de_obra );
    update_option( 'precio_acero_corte_cnc', $precio_acero_corte_cnc );
    update_option( 'cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar', $cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar );
    update_option( 'cn_precio_quincediaslaboralesLetras_acero_sin_iluminar', $cn_precio_quincediaslaboralesLetras_acero_sin_iluminar );
    update_option( 'cn_precio_doblado_acero_sin_iluminar', $cn_precio_doblado_acero_sin_iluminar );
    update_option( 'profundidad_30mm_acero_sin_iluminar', $profundidad_30mm_acero_sin_iluminar );
    update_option( 'profundidad_50mm_acero_sin_iluminar', $profundidad_50mm_acero_sin_iluminar );
    update_option( 'profundidad_80mm_acero_sin_iluminar', $profundidad_80mm_acero_sin_iluminar );
    update_option( 'profundidad_100mm_acero_sin_iluminar', $profundidad_100mm_acero_sin_iluminar );

    //Acero retroiluminado:
    update_option( 'cn_precio_acero_retroiluminado', $cn_precio_acero_retroiluminado );
    update_option( 'cn_precio_acero_mano_de_obra_retroiluminado', $cn_precio_acero_mano_de_obra_retroiluminado );
    update_option( 'precio_acero_retroiluminado_metacrilato10mm', $precio_acero_retroiluminado_metacrilato10mm );
    update_option( 'precio_acero_retroiluminado_led', $precio_acero_retroiluminado_led );
    update_option( 'precio_acero_retroiluminado_transformador', $precio_acero_retroiluminado_transformador );
    update_option( 'precio_acero_retroiluminado_corte_cnc', $precio_acero_retroiluminado_corte_cnc );
    update_option( 'precio_acero_retroiluminado_separadores', $precio_acero_retroiluminado_separadores );
    update_option( 'precio_acero_retroiluminado_doblado', $precio_acero_retroiluminado_doblado );
    update_option( 'cn_precio_diezdiaslaboralesLetras_acero_retroiluminado', $cn_precio_diezdiaslaboralesLetras_acero_retroiluminado );
    update_option( 'cn_precio_quincediaslaboralesLetras_acero_retroiluminado', $cn_precio_quincediaslaboralesLetras_acero_retroiluminado );
    update_option( 'profundidad_30mm_acero_retroiluminado', $profundidad_30mm_acero_retroiluminado );
    update_option( 'profundidad_50mm_acero_retroiluminado', $profundidad_50mm_acero_retroiluminado );
    update_option( 'profundidad_80mm_acero_retroiluminado', $profundidad_80mm_acero_retroiluminado );
    update_option( 'profundidad_100mm_acero_retroiluminado', $profundidad_100mm_acero_retroiluminado );    

    //Acero iluminadas frontalmente:    
    update_option( 'cn_precio_acero_iluminacion_frontal', $cn_precio_acero_iluminacion_frontal );
    update_option( 'cn_precio_acero_soldadura_iluminacion_frontal', $cn_precio_acero_soldadura_iluminacion_frontal );
    update_option( 'cn_precio_acero_metacrilato3mm_iluminacion_frontal', $cn_precio_acero_metacrilato3mm_iluminacion_frontal );
    update_option( 'cn_precio_acero_led_iluminacion_frontal', $cn_precio_acero_led_iluminacion_frontal );
    update_option( 'cn_precio_acero_transformador_iluminacion_frontal', $cn_precio_acero_transformador_iluminacion_frontal );
    update_option( 'cn_precio_acero_corte_cnc_iluminacion_frontal', $cn_precio_acero_corte_cnc_iluminacion_frontal );
    update_option( 'cn_precio_acero_doblado_iluminacion_frontal', $cn_precio_acero_doblado_iluminacion_frontal );
    update_option( 'cn_precio_acero_junquillo_iluminacion_frontal', $cn_precio_acero_junquillo_iluminacion_frontal );
    update_option( 'cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal', $cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal );
    update_option( 'cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal', $cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal );
    update_option( 'profundidad_30mm_acero_iluminacion_frontal', $profundidad_30mm_acero_iluminacion_frontal );
    update_option( 'profundidad_50mm_acero_iluminacion_frontal', $profundidad_50mm_acero_iluminacion_frontal );
    update_option( 'profundidad_80mm_acero_iluminacion_frontal', $profundidad_80mm_acero_iluminacion_frontal );
    update_option( 'profundidad_100mm_acero_iluminacion_frontal', $profundidad_100mm_acero_iluminacion_frontal );

    //Lat??n sin iluminar:
    update_option( 'cn_precio_laton_sin_iluminar', $cn_precio_laton_sin_iluminar );
    update_option( 'cn_precio_soldadura_laton_sin_iluminar', $cn_precio_soldadura_laton_sin_iluminar );
    update_option( 'cn_precio_corte_cnc_laton_sin_iluminar', $cn_precio_corte_cnc_laton_sin_iluminar );
    update_option( 'cn_precio_doblado_laton_sin_iluminar', $cn_precio_doblado_laton_sin_iluminar );
    update_option( 'cn_precio_diez_dias_laton_sin_iluminar', $cn_precio_diez_dias_laton_sin_iluminar );
    update_option( 'cn_precio_quince_dias_laton_sin_iluminar', $cn_precio_quince_dias_laton_sin_iluminar );
    update_option( 'profundidad_30mm_laton_sin_iluminar', $profundidad_30mm_laton_sin_iluminar );
    update_option( 'profundidad_50mm_laton_sin_iluminar', $profundidad_50mm_laton_sin_iluminar );
    update_option( 'profundidad_80mm_laton_sin_iluminar', $profundidad_80mm_laton_sin_iluminar );
    update_option( 'profundidad_100mm_laton_sin_iluminar', $profundidad_100mm_laton_sin_iluminar );

    //Lat??n retroiluminadas:
    update_option( 'cn_precio_laton_retroiluminadas', $cn_precio_laton_retroiluminadas );
    update_option( 'cn_precio_laton_soldadura_retroiluminadas', $cn_precio_laton_soldadura_retroiluminadas );
    update_option( 'cn_precio_laton_metacrilato10mm_retroiluminadas', $cn_precio_laton_metacrilato10mm_retroiluminadas );
    update_option( 'cn_precio_laton_led_retroiluminadas', $cn_precio_laton_led_retroiluminadas );
    update_option( 'cn_precio_laton_transformador_retroiluminadas', $cn_precio_laton_transformador_retroiluminadas );
    update_option( 'cn_precio_laton_corte_cnc_retroiluminadas', $cn_precio_laton_corte_cnc_retroiluminadas );
    update_option( 'cn_precio_laton_separadores_retroiluminadas', $cn_precio_laton_separadores_retroiluminadas );
    update_option( 'cn_precio_laton_doblado_retroiluminadas', $cn_precio_laton_doblado_retroiluminadas );
    update_option( 'cn_precio_diez_dias_laton_retroiluminadas', $cn_precio_diez_dias_laton_retroiluminadas );
    update_option( 'cn_precio_quince_dias_laton_retroiluminadas', $cn_precio_quince_dias_laton_retroiluminadas );
    update_option( 'profundidad_30mm_laton_retroiluminadas', $profundidad_30mm_laton_retroiluminadas );
    update_option( 'profundidad_50mm_laton_retroiluminadas', $profundidad_50mm_laton_retroiluminadas );
    update_option( 'profundidad_80mm_laton_retroiluminadas', $profundidad_80mm_laton_retroiluminadas );
    update_option( 'profundidad_100mm_laton_retroiluminadas', $profundidad_100mm_laton_retroiluminadas );    

    //Lat??n iluminaci??n frontal:
    update_option( 'cn_precio_laton_iluminacion_frontal', $cn_precio_laton_iluminacion_frontal );
    update_option( 'cn_precio_laton_soldadura_iluminacion_frontal', $cn_precio_laton_soldadura_iluminacion_frontal );
    update_option( 'cn_precio_laton_metacrilato3mm_iluminacion_frontal', $cn_precio_laton_metacrilato3mm_iluminacion_frontal );
    update_option( 'cn_precio_laton_led_iluminacion_frontal', $cn_precio_laton_led_iluminacion_frontal );
    update_option( 'cn_precio_laton_transformador_iluminacion_frontal', $cn_precio_laton_transformador_iluminacion_frontal );
    update_option( 'cn_precio_laton_corte_cnc_iluminacion_frontal', $cn_precio_laton_corte_cnc_iluminacion_frontal );
    update_option( 'cn_precio_laton_junquillo_iluminacion_frontal', $cn_precio_laton_junquillo_iluminacion_frontal );
    update_option( 'cn_precio_laton_doblado_iluminacion_frontal', $cn_precio_laton_doblado_iluminacion_frontal );
    update_option( 'cn_precio_diez_dias_laton_iluminacion_frontal', $cn_precio_diez_dias_laton_iluminacion_frontal );
    update_option( 'cn_precio_quince_dias_laton_iluminacion_frontal', $cn_precio_quince_dias_laton_iluminacion_frontal );
    update_option( 'profundidad_30mm_laton_iluminacion_frontal', $profundidad_30mm_laton_iluminacion_frontal );
    update_option( 'profundidad_50mm_laton_iluminacion_frontal', $profundidad_50mm_laton_iluminacion_frontal );
    update_option( 'profundidad_80mm_laton_iluminacion_frontal', $profundidad_80mm_laton_iluminacion_frontal );
    update_option( 'profundidad_100mm_laton_iluminacion_frontal', $profundidad_100mm_laton_iluminacion_frontal );

    //Metacrilato con luz:
    update_option( 'cn_precio_metacrilato3mm_blancoOpal_sin_luz', $cn_precio_metacrilato3mm_blancoOpal_sin_luz );
    update_option( 'cn_precio_metacrilato3mm_color360_sin_luz', $cn_precio_metacrilato3mm_color360_sin_luz );
    update_option( 'cn_precio_metacrilato_led_sin_luz', $cn_precio_metacrilato_led_sin_luz );
    update_option( 'cn_precio_metacrilato_transformador_sin_luz', $cn_precio_metacrilato_transformador_sin_luz ); 
    update_option( 'cn_precio_metacrilato_cloroformo_sin_luz', $cn_precio_metacrilato_cloroformo_sin_luz );       
    update_option( 'cn_precio_metacrilato_corte_cnc_sin_luz', $cn_precio_metacrilato_corte_cnc_sin_luz );
    update_option( 'cn_precio_metacrilato_doblado_sin_luz', $cn_precio_metacrilato_doblado_sin_luz );
    update_option( 'cn_precio_metacrilato_traseraPVC10mm_sin_luz', $cn_precio_metacrilato_traseraPVC10mm_sin_luz );
    update_option( 'cn_precio_diez_dias_metacrilato_sin_luz', $cn_precio_diez_dias_metacrilato_sin_luz ); 
    update_option( 'cn_precio_quince_dias_metacrilato_sin_luz', $cn_precio_quince_dias_metacrilato_sin_luz );  

    //PVC 5mm:    
    update_option( 'precio_pvc_5mm', $precio_pvc_5mm );
    update_option( 'precio_pvc_5mm_fondo', $precio_pvc_5mm_fondo );
    update_option( 'precio_pvc_5mm_pintura', $precio_pvc_5mm_pintura );
    update_option( 'precio_pvc_5mm_corte_cnc', $precio_pvc_5mm_corte_cnc );
    update_option( 'precio_pvc_5mm_cinta', $precio_pvc_5mm_cinta );
    update_option( 'precio_pvc_5mm_diez_dias', $precio_pvc_5mm_diez_dias );
    update_option( 'precio_pvc_5mm_quince_dias', $precio_pvc_5mm_quince_dias );

    //PVC 10mm:    
    update_option( 'precio_pvc_10mm', $precio_pvc_10mm );
    update_option( 'precio_pvc_10mm_fondo', $precio_pvc_10mm_fondo );
    update_option( 'precio_pvc_10mm_pintura', $precio_pvc_10mm_pintura );
    update_option( 'precio_pvc_10mm_corte_cnc', $precio_pvc_10mm_corte_cnc );
    update_option( 'precio_pvc_10mm_cinta', $precio_pvc_10mm_cinta );
    update_option( 'precio_pvc_10mm_diez_dias', $precio_pvc_10mm_diez_dias );
    update_option( 'precio_pvc_10mm_quince_dias', $precio_pvc_10mm_quince_dias );    

    //PVC 19mm sin iluminar:    
    update_option( 'precio_pvc_19mm', $precio_pvc_19mm );
    update_option( 'precio_pvc_19mm_fondo', $precio_pvc_19mm_fondo );
    update_option( 'precio_pvc_19mm_pintura', $precio_pvc_19mm_pintura );
    update_option( 'precio_pvc_19mm_corte_cnc', $precio_pvc_19mm_corte_cnc );
    update_option( 'precio_pvc_19mm_cinta', $precio_pvc_19mm_cinta );
    update_option( 'precio_pvc_19mm_diez_dias', $precio_pvc_19mm_diez_dias );
    update_option( 'precio_pvc_19mm_quince_dias', $precio_pvc_19mm_quince_dias );

    //PVC 19mm retroiluminadas:    
    update_option( 'precio_pvc_19mm_retroiluminadas', $precio_pvc_19mm_retroiluminadas );
    update_option( 'precio_pvc_19mm_fondo_retroiluminadas', $precio_pvc_19mm_fondo_retroiluminadas );
    update_option( 'precio_pvc_19mm_pintura_retroiluminadas', $precio_pvc_19mm_pintura_retroiluminadas );
    update_option( 'precio_pvc_19mm_corte_cnc_retroiluminadas', $precio_pvc_19mm_corte_cnc_retroiluminadas );
    update_option( 'precio_pvc_19mm_cinta_retroiluminadas', $precio_pvc_19mm_cinta_retroiluminadas );
    update_option( 'precio_pvc_19mm_tornilleria_retroiluminadas', $precio_pvc_19mm_tornilleria_retroiluminadas );
    update_option( 'precio_pvc_19mm_separadores_retroiluminadas', $precio_pvc_19mm_separadores_retroiluminadas );
    update_option( 'precio_pvc_19mm_transformador_retroiluminadas', $precio_pvc_19mm_transformador_retroiluminadas );
    update_option( 'precio_pvc_19mm_led_retroiluminadas', $precio_pvc_19mm_led_retroiluminadas );
    update_option( 'precio_pvc_19mm_diez_dias_retroalimentadas', $precio_pvc_19mm_diez_dias_retroalimentadas );
    update_option( 'precio_pvc_19mm_quince_dias_retroalimentadas', $precio_pvc_19mm_quince_dias_retroalimentadas );

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

add_action('wp_ajax_jnjtest_LetrasCorporeas', 'jnj_mi_funcion_LetrasCorporeas');
add_action('wp_ajax_nopriv_jnjtest_LetrasCorporeas', 'jnj_mi_funcion_LetrasCorporeas');

// Esta funci??n tiene que devolver los resultados al frontend
// en el formato que queramos..
function jnj_mi_funcion_LetrasCorporeas()
{
    $fuente = $_POST['fuenteLetras'];
    $color = $_POST['color'];

    echo '<h1>
      <small class="text-muted"> <strong>'. $_POST['precioFinal']. '&euro;<strong></small>
      
    </h1>
    <div style="font-size: 10px; color: #870D00">IVA incluido</div>
    <div style="font-size: 10px;">ENV??O GRATUITO</div>
    <h3 style="font-size: 24px;font-family: "Open Sans", sans-serif;">Letras de Ne??n Personalizadas</h3>
    <p style="text-align: justify;">
          Te ofrecemos la posibilidad de personalizar tus letras corp??reas para exterior o interior. Puedes escoger el tipo de material entre Aluminio, PVC, Metacrilato, Lat??n o Acero Inoxidable, seleccionar el grosor del material, el alto y ancho de la letra, la tipograf??a de letra que m??s os guste, seleccionar si las quieres iluminar, retroiluminar, pintadas o sin pintar, acabado mate o brillo.
        </p>

        <p style="text-align: justify;">
          Nuestro servicio incluye:
          <ol>
            <li>Corte profesional mediante fresado CNC</li>
            <li>Distintos tama??os de letra, tanto en grosor como en altura</li>
            <li>Fuente de letra o tipograf??a a elegir con posibilidad de hacerlo en tu propia fuente</li>
            <li>Material acto para ser instalado en interiores y exteriores</li>
            <li>Letras lacado al horno</li>
          </ol>
        </p>

        <p style="text-align: justify;">
          Tambi??n podemos fabricar en base a tu logo o tu marca, puedes enviarnos un correo a <a href="mailto:consultas@rotulosmetalarte.es">consultas@rotulosmetalarte.es</a> o escribirnos al WhatsApp <a href="https://wa.link/vvyfn2" target="_blank">647002464</a>, con gusto te atenderemos, Si deseas ver nuestros trabajos realizados visita nuestro Instagram  <a href="https://www.instagram.com/rotulosmetalarte/" target="_blank">@rotulosmetalarte</a>          
        </p>';

        echo '<div class="container">
          <div id="caja" class="row justify-content-md-center">

            <div id="muestra" class="col-md-auto neon_effect '.$fuente.' '.$color.' ">
              '.$_POST['rotulo'].'
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              
              <label for="customRange1" class="form-label">Acercar/alejar texto (Este control no altera las medidas) Es una referencia del orden de las palabras por l??nea.</label>
              <input type="range" class="form-range" id="customRange1" min="0" max="15" step="0.1" value="5" onchange="ajustarTamano(this.value)">
            </div>
          </div>
        </div>';

  wp_die();
}

//Aqui se muestra el formulario de personalizaci??n del rotulo de neon:
/**
 * Output engraving field.
 */
function iconic_output_engraving_field_LetrasCorporeas() {

      global $product;

      $cn_id_producto_personalizado_letras = get_option( 'cn_id_producto_personalizado_letras' ) ;

      //echo $cn_id_producto_personalizado_letras; die();

      if ( $product->get_id() != $cn_id_producto_personalizado_letras ) {
        return;
      }

      // Conseguir el valor del Precio base de todos los elementos:

        $iva_letras                                           = get_option( 'iva_letras' ) ;
        $previsualizacion                                     = get_option( 'previsualizacion' ) ;

        //Aluminio sin iluminar:
        $precio_aluminio                                      = get_option( 'precio_aluminio' ) ;
        $precio_aluminio_mano_de_obra                         = get_option( 'precio_aluminio_mano_de_obra' ) ;
        $precio_aluminio_pintura                              = get_option( 'precio_aluminio_pintura' ) ;
        $precio_aluminio_corte_cnc                            = get_option( 'precio_aluminio_corte_cnc' ) ;
        $cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar    = get_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar' ) ;
        $cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar  = get_option( 'cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar' ) ;
        $cn_precio_doblado_aluminio_sin_iluminar              = get_option( 'cn_precio_doblado_aluminio_sin_iluminar' ) ;
        $profundidad_30mm_aluminio_sin_iluminar   = get_option( 'profundidad_30mm_aluminio_sin_iluminar' ) ;
        $profundidad_50mm_aluminio_sin_iluminar   = get_option( 'profundidad_50mm_aluminio_sin_iluminar' ) ;
        $profundidad_80mm_aluminio_sin_iluminar   = get_option( 'profundidad_80mm_aluminio_sin_iluminar' ) ;
        $profundidad_100mm_aluminio_sin_iluminar  = get_option( 'profundidad_100mm_aluminio_sin_iluminar' ) ;

        //Aluminio retroiluminadas:
        $precio_aluminio_retroiluminado                       = get_option( 'precio_aluminio_retroiluminado' ) ;
        $precio_aluminio_retroiluminado_mano_de_obra          = get_option( 'precio_aluminio_retroiluminado_mano_de_obra' ) ;
        $precio_aluminio_retroiluminado_pintura               = get_option( 'precio_aluminio_retroiluminado_pintura' ) ;
        $precio_aluminio_retroiluminado_metacrilato10mm       = get_option( 'precio_aluminio_retroiluminado_metacrilato10mm' ) ;
        $precio_aluminio_retroiluminado_led                   = get_option( 'precio_aluminio_retroiluminado_led' ) ;
        $precio_aluminio_retroiluminado_transformador         = get_option( 'precio_aluminio_retroiluminado_transformador' ) ;
        $precio_aluminio_retroiluminado_corte_cnc             = get_option( 'precio_aluminio_retroiluminado_corte_cnc' ) ;
        $cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado   = get_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado' ) ;
        $cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado = get_option( 'cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado' ) ;
        $cn_precio_doblado_aluminio_retroiluminado                   = get_option( 'cn_precio_doblado_aluminio_retroiluminado' ) ;
        $cn_precio_separadores_aluminio_retroiluminado               = get_option( 'cn_precio_separadores_aluminio_retroiluminado' ) ;
        $profundidad_30mm_aluminio_retroiluminado   = get_option( 'profundidad_30mm_aluminio_retroiluminado' ) ;
        $profundidad_50mm_aluminio_retroiluminado   = get_option( 'profundidad_50mm_aluminio_retroiluminado' ) ;
        $profundidad_80mm_aluminio_retroiluminado   = get_option( 'profundidad_80mm_aluminio_retroiluminado' ) ;
        $profundidad_100mm_aluminio_retroiluminado  = get_option( 'profundidad_100mm_aluminio_retroiluminado' ) ;

        //Aluminio iluminadas frontalmente:
        $precio_aluminio_iluminado_frontal                    = get_option( 'precio_aluminio_iluminado_frontal' ) ;
        $precio_aluminio_iluminado_frontal_mano_de_obra       = get_option( 'precio_aluminio_iluminado_frontal_mano_de_obra' ) ;
        $precio_aluminio_iluminado_frontal_pintura            = get_option( 'precio_aluminio_iluminado_frontal_pintura' ) ;
        $precio_aluminio_iluminado_frontal_metacrilato3mm     = get_option( 'precio_aluminio_iluminado_frontal_metacrilato3mm' ) ;
        $precio_aluminio_iluminado_frontal_junquillo          = get_option( 'precio_aluminio_iluminado_frontal_junquillo' ) ;
        $precio_aluminio_iluminado_frontal_led                = get_option( 'precio_aluminio_iluminado_frontal_led' ) ;
        $precio_aluminio_iluminado_frontal_transformador      = get_option( 'precio_aluminio_iluminado_frontal_transformador' ) ;
        $precio_aluminio_iluminado_frontal_corte_cnc          = get_option( 'precio_aluminio_iluminado_frontal_corte_cnc' ) ;
        $cn_precio_doblado_aluminio_iluminado_frontal         = get_option( 'cn_precio_doblado_aluminio_iluminado_frontal' ) ;
        $cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal   = get_option( 'cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal' ) ;
        $cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal = get_option( 'cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal' ) ;
        $profundidad_30mm_aluminio_iluminado_frontal   = get_option( 'profundidad_30mm_aluminio_iluminado_frontal' ) ;
        $profundidad_50mm_aluminio_iluminado_frontal   = get_option( 'profundidad_50mm_aluminio_iluminado_frontal' ) ;
        $profundidad_80mm_aluminio_iluminado_frontal   = get_option( 'profundidad_80mm_aluminio_iluminado_frontal' ) ;
        $profundidad_100mm_aluminio_iluminado_frontal  = get_option( 'profundidad_100mm_aluminio_iluminado_frontal' ) ;

        //Acero sin iluminar:
        $precio_acero                                            = get_option( 'precio_acero' ) ;
        $precio_acero_mano_de_obra                               = get_option( 'precio_acero_mano_de_obra' ) ;
        $precio_acero_corte_cnc                                  = get_option( 'precio_acero_corte_cnc' ) ;
        $cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar    = get_option( 'cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar' ) ;
        $cn_precio_quincediaslaboralesLetras_acero_sin_iluminar  = get_option( 'cn_precio_quincediaslaboralesLetras_acero_sin_iluminar' ) ;
        $cn_precio_doblado_acero_sin_iluminar                    = get_option( 'cn_precio_doblado_acero_sin_iluminar' ) ;
        $profundidad_30mm_acero_sin_iluminar   = get_option( 'profundidad_30mm_acero_sin_iluminar' ) ;
        $profundidad_50mm_acero_sin_iluminar   = get_option( 'profundidad_50mm_acero_sin_iluminar' ) ;
        $profundidad_80mm_acero_sin_iluminar   = get_option( 'profundidad_80mm_acero_sin_iluminar' ) ;
        $profundidad_100mm_acero_sin_iluminar  = get_option( 'profundidad_100mm_acero_sin_iluminar' ) ;

        //Acero retroiluminado:
        $cn_precio_acero_retroiluminado                           = get_option( 'cn_precio_acero_retroiluminado' ) ;
        $cn_precio_acero_mano_de_obra_retroiluminado              = get_option( 'cn_precio_acero_mano_de_obra_retroiluminado' ) ;
        $precio_acero_retroiluminado_metacrilato10mm              = get_option( 'precio_acero_retroiluminado_metacrilato10mm' ) ;
        $precio_acero_retroiluminado_led                          = get_option( 'precio_acero_retroiluminado_led' ) ;
        $precio_acero_retroiluminado_transformador                = get_option( 'precio_acero_retroiluminado_transformador' ) ;
        $precio_acero_retroiluminado_corte_cnc                    = get_option( 'precio_acero_retroiluminado_corte_cnc' ) ;
        $precio_acero_retroiluminado_separadores                  = get_option( 'precio_acero_retroiluminado_separadores' ) ;
        $precio_acero_retroiluminado_doblado                      = get_option( 'precio_acero_retroiluminado_doblado' ) ;
        $cn_precio_diezdiaslaboralesLetras_acero_retroiluminado   = get_option( 'cn_precio_diezdiaslaboralesLetras_acero_retroiluminado' ) ;
        $cn_precio_quincediaslaboralesLetras_acero_retroiluminado = get_option( 'cn_precio_quincediaslaboralesLetras_acero_retroiluminado' ) ;
        $profundidad_30mm_acero_retroiluminado   = get_option( 'profundidad_30mm_acero_retroiluminado' ) ;
        $profundidad_50mm_acero_retroiluminado   = get_option( 'profundidad_50mm_acero_retroiluminado' ) ;
        $profundidad_80mm_acero_retroiluminado   = get_option( 'profundidad_80mm_acero_retroiluminado' ) ;
        $profundidad_100mm_acero_retroiluminado  = get_option( 'profundidad_100mm_acero_retroiluminado' ) ;

        //Acero iluminadas frontalmente:
        $cn_precio_acero_iluminacion_frontal                           = get_option( 'cn_precio_acero_iluminacion_frontal' ) ;
        $cn_precio_acero_soldadura_iluminacion_frontal                 = get_option( 'cn_precio_acero_soldadura_iluminacion_frontal' ) ;
        $cn_precio_acero_metacrilato3mm_iluminacion_frontal            = get_option( 'cn_precio_acero_metacrilato3mm_iluminacion_frontal' ) ;
        $cn_precio_acero_led_iluminacion_frontal                       = get_option( 'cn_precio_acero_led_iluminacion_frontal' ) ;
        $cn_precio_acero_transformador_iluminacion_frontal             = get_option( 'cn_precio_acero_transformador_iluminacion_frontal' ) ;
        $cn_precio_acero_corte_cnc_iluminacion_frontal                 = get_option( 'cn_precio_acero_corte_cnc_iluminacion_frontal' ) ;
        $cn_precio_acero_doblado_iluminacion_frontal                   = get_option( 'cn_precio_acero_doblado_iluminacion_frontal' ) ;
        $cn_precio_acero_junquillo_iluminacion_frontal                 = get_option( 'cn_precio_acero_junquillo_iluminacion_frontal' ) ;
        $cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal   = get_option( 'cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal' ) ;
        $cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal = get_option( 'cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal' ) ;
        $profundidad_30mm_acero_iluminacion_frontal   = get_option( 'profundidad_30mm_acero_iluminacion_frontal' ) ;
        $profundidad_50mm_acero_iluminacion_frontal   = get_option( 'profundidad_50mm_acero_iluminacion_frontal' ) ;
        $profundidad_80mm_acero_iluminacion_frontal   = get_option( 'profundidad_80mm_acero_iluminacion_frontal' ) ;
        $profundidad_100mm_acero_iluminacion_frontal  = get_option( 'profundidad_100mm_acero_iluminacion_frontal' ) ;

        //Lat??n sin iluminar:
        $cn_precio_laton_sin_iluminar             = get_option( 'cn_precio_laton_sin_iluminar' ) ;
        $cn_precio_soldadura_laton_sin_iluminar   = get_option( 'cn_precio_soldadura_laton_sin_iluminar' ) ;
        $cn_precio_corte_cnc_laton_sin_iluminar   = get_option( 'cn_precio_corte_cnc_laton_sin_iluminar' ) ;
        $cn_precio_doblado_laton_sin_iluminar     = get_option( 'cn_precio_doblado_laton_sin_iluminar' ) ;
        $cn_precio_diez_dias_laton_sin_iluminar   = get_option( 'cn_precio_diez_dias_laton_sin_iluminar' ) ;
        $cn_precio_quince_dias_laton_sin_iluminar = get_option( 'cn_precio_quince_dias_laton_sin_iluminar' ) ;
        $profundidad_30mm_laton_sin_iluminar   = get_option( 'profundidad_30mm_laton_sin_iluminar' ) ;
        $profundidad_50mm_laton_sin_iluminar   = get_option( 'profundidad_50mm_laton_sin_iluminar' ) ;
        $profundidad_80mm_laton_sin_iluminar   = get_option( 'profundidad_80mm_laton_sin_iluminar' ) ;
        $profundidad_100mm_laton_sin_iluminar  = get_option( 'profundidad_100mm_laton_sin_iluminar' ) ;

        //Lat??n retroiluminadas:
        $cn_precio_laton_retroiluminadas                 = get_option( 'cn_precio_laton_retroiluminadas' ) ;
        $cn_precio_laton_soldadura_retroiluminadas       = get_option( 'cn_precio_laton_soldadura_retroiluminadas' ) ;
        $cn_precio_laton_metacrilato10mm_retroiluminadas = get_option( 'cn_precio_laton_metacrilato10mm_retroiluminadas' ) ;
        $cn_precio_laton_led_retroiluminadas             = get_option( 'cn_precio_laton_led_retroiluminadas' ) ;
        $cn_precio_laton_transformador_retroiluminadas   = get_option( 'cn_precio_laton_transformador_retroiluminadas' ) ;
        $cn_precio_laton_corte_cnc_retroiluminadas       = get_option( 'cn_precio_laton_corte_cnc_retroiluminadas' ) ;
        $cn_precio_laton_separadores_retroiluminadas     = get_option( 'cn_precio_laton_separadores_retroiluminadas' ) ;
        $cn_precio_laton_doblado_retroiluminadas         = get_option( 'cn_precio_laton_doblado_retroiluminadas' ) ;
        $cn_precio_diez_dias_laton_retroiluminadas       = get_option( 'cn_precio_diez_dias_laton_retroiluminadas' ) ;
        $cn_precio_quince_dias_laton_retroiluminadas     = get_option( 'cn_precio_quince_dias_laton_retroiluminadas' ) ;
        $profundidad_30mm_laton_retroiluminadas   = get_option( 'profundidad_30mm_laton_retroiluminadas' ) ;
        $profundidad_50mm_laton_retroiluminadas   = get_option( 'profundidad_50mm_laton_retroiluminadas' ) ;
        $profundidad_80mm_laton_retroiluminadas   = get_option( 'profundidad_80mm_laton_retroiluminadas' ) ;
        $profundidad_100mm_laton_retroiluminadas  = get_option( 'profundidad_100mm_laton_retroiluminadas' ) ;

        //Lat??n iluminaci??n frontal:
        $cn_precio_laton_iluminacion_frontal                = get_option( 'cn_precio_laton_iluminacion_frontal' ) ;
        $cn_precio_laton_soldadura_iluminacion_frontal      = get_option( 'cn_precio_laton_soldadura_iluminacion_frontal' ) ;
        $cn_precio_laton_metacrilato3mm_iluminacion_frontal = get_option( 'cn_precio_laton_metacrilato3mm_iluminacion_frontal' ) ;
        $cn_precio_laton_led_iluminacion_frontal            = get_option( 'cn_precio_laton_led_iluminacion_frontal' ) ;
        $cn_precio_laton_transformador_iluminacion_frontal  = get_option( 'cn_precio_laton_transformador_iluminacion_frontal' ) ;
        $cn_precio_laton_corte_cnc_iluminacion_frontal      = get_option( 'cn_precio_laton_corte_cnc_iluminacion_frontal' ) ;
        $cn_precio_laton_junquillo_iluminacion_frontal      = get_option( 'cn_precio_laton_junquillo_iluminacion_frontal' ) ;
        $cn_precio_laton_doblado_iluminacion_frontal        = get_option( 'cn_precio_laton_doblado_iluminacion_frontal' ) ;
        $cn_precio_diez_dias_laton_iluminacion_frontal      = get_option( 'cn_precio_diez_dias_laton_iluminacion_frontal' ) ;
        $cn_precio_quince_dias_laton_iluminacion_frontal    = get_option( 'cn_precio_quince_dias_laton_iluminacion_frontal' ) ;
        $profundidad_30mm_laton_iluminacion_frontal   = get_option( 'profundidad_30mm_laton_iluminacion_frontal' ) ;
        $profundidad_50mm_laton_iluminacion_frontal   = get_option( 'profundidad_50mm_laton_iluminacion_frontal' ) ;
        $profundidad_80mm_laton_iluminacion_frontal   = get_option( 'profundidad_80mm_laton_iluminacion_frontal' ) ;
        $profundidad_100mm_laton_iluminacion_frontal  = get_option( 'profundidad_100mm_laton_iluminacion_frontal' ) ;
        
        //Metacrilato con luz:
        $cn_precio_metacrilato3mm_blancoOpal_sin_luz       = get_option( 'cn_precio_metacrilato3mm_blancoOpal_sin_luz' ) ;
        $cn_precio_metacrilato3mm_color360_sin_luz         = get_option( 'cn_precio_metacrilato3mm_color360_sin_luz' ) ;
        $cn_precio_metacrilato_led_sin_luz                 = get_option( 'cn_precio_metacrilato_led_sin_luz' ) ;
        $cn_precio_metacrilato_transformador_sin_luz       = get_option( 'cn_precio_metacrilato_transformador_sin_luz' ) ;
        $cn_precio_metacrilato_cloroformo_sin_luz          = get_option( 'cn_precio_metacrilato_cloroformo_sin_luz' ) ;        
        $cn_precio_metacrilato_corte_cnc_sin_luz           = get_option( 'cn_precio_metacrilato_corte_cnc_sin_luz' ) ;
        $cn_precio_metacrilato_doblado_sin_luz             = get_option( 'cn_precio_metacrilato_doblado_sin_luz' ) ;
        $cn_precio_metacrilato_traseraPVC10mm_sin_luz      = get_option( 'cn_precio_metacrilato_traseraPVC10mm_sin_luz' ) ;
        $cn_precio_diez_dias_metacrilato_sin_luz           = get_option( 'cn_precio_diez_dias_metacrilato_sin_luz' ) ;
        $cn_precio_quince_dias_metacrilato_sin_luz         = get_option( 'cn_precio_quince_dias_metacrilato_sin_luz' ) ;   

        //PVC 5mm:
        $precio_pvc_5mm             = get_option( 'precio_pvc_5mm' ) ;
        $precio_pvc_5mm_fondo       = get_option( 'precio_pvc_5mm_fondo' ) ;
        $precio_pvc_5mm_pintura     = get_option( 'precio_pvc_5mm_pintura' ) ;
        $precio_pvc_5mm_corte_cnc   = get_option( 'precio_pvc_5mm_corte_cnc' ) ;
        $precio_pvc_5mm_cinta       = get_option( 'precio_pvc_5mm_cinta' ) ;
        $precio_pvc_5mm_diez_dias   = get_option( 'precio_pvc_5mm_diez_dias' ) ;
        $precio_pvc_5mm_quince_dias = get_option( 'precio_pvc_5mm_quince_dias' ) ;
        
        //PVC 10mm:
        $precio_pvc_10mm             = get_option( 'precio_pvc_10mm' ) ;
        $precio_pvc_10mm_fondo       = get_option( 'precio_pvc_10mm_fondo' ) ;
        $precio_pvc_10mm_pintura     = get_option( 'precio_pvc_10mm_pintura' ) ;
        $precio_pvc_10mm_corte_cnc   = get_option( 'precio_pvc_10mm_corte_cnc' ) ;
        $precio_pvc_10mm_cinta       = get_option( 'precio_pvc_10mm_cinta' ) ;
        $precio_pvc_10mm_diez_dias   = get_option( 'precio_pvc_10mm_diez_dias' ) ;
        $precio_pvc_10mm_quince_dias = get_option( 'precio_pvc_10mm_quince_dias' ) ;

        //PVC 19mm sin iluminar:
        $precio_pvc_19mm             = get_option( 'precio_pvc_19mm' ) ;
        $precio_pvc_19mm_fondo       = get_option( 'precio_pvc_19mm_fondo' ) ;
        $precio_pvc_19mm_pintura     = get_option( 'precio_pvc_19mm_pintura' ) ;
        $precio_pvc_19mm_corte_cnc   = get_option( 'precio_pvc_19mm_corte_cnc' ) ;
        $precio_pvc_19mm_cinta       = get_option( 'precio_pvc_19mm_cinta' ) ;
        $precio_pvc_19mm_diez_dias   = get_option( 'precio_pvc_19mm_diez_dias' ) ;
        $precio_pvc_19mm_quince_dias = get_option( 'precio_pvc_19mm_quince_dias' ) ;

        //PVC 19mm retroiluminadas:
        $precio_pvc_19mm_retroiluminadas                = get_option( 'precio_pvc_19mm_retroiluminadas' ) ;
        $precio_pvc_19mm_fondo_retroiluminadas          = get_option( 'precio_pvc_19mm_fondo_retroiluminadas' ) ;
        $precio_pvc_19mm_pintura_retroiluminadas        = get_option( 'precio_pvc_19mm_pintura_retroiluminadas' ) ;
        $precio_pvc_19mm_corte_cnc_retroiluminadas      = get_option( 'precio_pvc_19mm_corte_cnc_retroiluminadas' ) ;
        $precio_pvc_19mm_cinta_retroiluminadas          = get_option( 'precio_pvc_19mm_cinta_retroiluminadas' ) ;
        $precio_pvc_19mm_tornilleria_retroiluminadas    = get_option( 'precio_pvc_19mm_tornilleria_retroiluminadas' ) ;
        $precio_pvc_19mm_separadores_retroiluminadas    = get_option( 'precio_pvc_19mm_separadores_retroiluminadas' ) ;
        $precio_pvc_19mm_transformador_retroiluminadas  = get_option( 'precio_pvc_19mm_transformador_retroiluminadas' ) ;
        $precio_pvc_19mm_led_retroiluminadas            = get_option( 'precio_pvc_19mm_led_retroiluminadas' ) ;
        $precio_pvc_19mm_diez_dias_retroalimentadas     = get_option( 'precio_pvc_19mm_diez_dias_retroalimentadas' ) ;
        $precio_pvc_19mm_quince_dias_retroalimentadas   = get_option( 'precio_pvc_19mm_quince_dias_retroalimentadas' ) ;

      require('formularioCustomizer.php');
}

add_action( 'woocommerce_before_single_product', 'iconic_output_engraving_field_LetrasCorporeas', 10 );

//woocommerce_single_product_summary
//woocommerce_before_single_product
//add_action( 'woocommerce_before_add_to_cart_button', 'iconic_output_engraving_field_LetrasCorporeas', 10 );


//Aqui se muestran ocultos en el formulario del carrito los campos de personalizaci??n del rotulo de neon:
/**
 * Output engraving field.
 */
function campos_ocultos_letrasCorporeas() {

      global $product;

      $cn_id_producto_personalizado_letras = get_option( 'cn_id_producto_personalizado_letras' ) ;

      //echo $cn_id_producto_personalizado_letras; die();

      if ( $product->get_id() != $cn_id_producto_personalizado_letras ) {
        return;
      }

  ?>

  <div class="bsnamespace" style=""> 

      <div class="col-12 text-center">

          <div class="gem-button-container gem-button-position-center thegem-button-61835271a9da17668 lazy-loading  lazy-loading-end-animation">
            <a id="myButton2" title="" class="gem-button gem-button-size-small gem-button-style-flat gem-button-text-weight-normal lazy-loading-item lazy-loading-item-drop-right" data-ll-effect="drop-right-without-wrap" style="text-decoration:none;border-radius: 0px; background-color: rgb(153, 34, 51); color: rgb(255, 255, 255);cursor: pointer;" onmouseleave="this.style.backgroundColor='#992233';this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#172b3c';this.style.color='#ffffff';"  >
            <i class="fas fa-magic"></i> APLICAR CAMBIOS
            </a>
          </div>
          <br/>
          <div id="precioOtraVez" style="position: relative; left: 30px;">
           
          </div>
          

        <div id="myDIV">
          <i class="fas fa-hourglass-start"></i> Creando el nuevo dise??o...
        </div>        

      </div>

      <input type="hidden" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="" readonly="yes">
      <input type="hidden" id="texto_rotulo" name="texto_rotulo" value="" readonly="yes">
      <input type="hidden" id="fuenteLetrasText" name="fuenteLetrasText" value="" readonly="yes">
      <input type="hidden" id="anchocm" name="anchocm" value="" readonly="yes">
      <input type="hidden" id="alturacm" name="alturacm" value="" readonly="yes">
      <input type="hidden" id="altocm" name="altocm" value="" readonly="yes">

      <input type="hidden" id="tipoletraCorporea" name="tipoletraCorporea" value="" readonly="yes">
      <input type="hidden" id="tipoGrosor" name="tipoGrosor" value="" readonly="yes">
      
      <!-- Aluminio, Acero y Lat??n -->
      <input type="hidden" id="acabado" name="acabado" value="" readonly="yes">
      <input type="hidden" id="colorLed" name="colorLed" value="" readonly="yes">
      <input type="hidden" id="separacion" name="separacion" value="" readonly="yes">   
      <input type="hidden" id="opciones" name="opciones" value="" readonly="yes">
      
      <!-- Metacrilato Huecas y PVC-->
      <input type="hidden" id="sujecion" name="sujecion" value="" readonly="yes">

      <input type="hidden" id="tiempoEntregaSumario" name="tiempoEntregaSumario" value="" readonly="yes">
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
  $alturacm             = filter_input( INPUT_POST, 'alturacm' );
  $altocm               = filter_input( INPUT_POST, 'altocm' );


  $tipoletraCorporea    = filter_input( INPUT_POST, 'tipoletraCorporea' );
  $tipoGrosor           = filter_input( INPUT_POST, 'tipoGrosor' );
  $acabado              = filter_input( INPUT_POST, 'acabado' );  
  $colorLed             = filter_input( INPUT_POST, 'colorLed' );  
  $separacion           = filter_input( INPUT_POST, 'separacion'  ); 
  $opciones             = filter_input( INPUT_POST, 'opciones'  );
  $sujecion             = filter_input( INPUT_POST, 'sujecion'  ); 
  

  $tiempoEntregaSumario = filter_input( INPUT_POST, 'tiempoEntregaSumario' ); 
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
  $cart_item_data['alturacm']             = number_format($_POST['alturacm'],3,",",".");
  $cart_item_data['altocm']               = $altocm;

  $cart_item_data['tipoletraCorporea']    = $tipoletraCorporea;
  $cart_item_data['tipoGrosor']           = $tipoGrosor;
  $cart_item_data['acabado']              = $acabado;  
  $cart_item_data['colorLed']             = $colorLed;  
  $cart_item_data['separacion']           = $separacion;
  $cart_item_data['opciones']             = $opciones;  
  $cart_item_data['sujecion']             = $sujecion;

  $cart_item_data['tiempoEntregaSumario'] = $tiempoEntregaSumario;
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

    //echo "<pre>".var_dump($cart_item)."</pre>";
    //echo $cart_item['product_id'];

    $id_letras = get_option( 'cn_id_producto_personalizado_letras' );

    if($id_letras == $cart_item['product_id']){

      $item_data[] = array(
        'key'     => __( '', 'iconic' ),
        'value'   => '',
        'display' => '<b>Texto:</b><br/>'.wc_clean( $cart_item['texto_rotulo']).'<br/>'.
                     '<b>Fuente:</b><br/>'.wc_clean( $cart_item['fuenteLetrasText']).'<br/>'.
                     '<b>Altura (cm):</b><br/>'.wc_clean( $cart_item['alturacm']).'<br/>'.
                     '<b>Ancho (cm):</b><br/>'.wc_clean( $cart_item['anchocm']).'<br/>'.
                     '<b>Letra Corp??rea de:</b><br/>'.wc_clean( $cart_item['tipoletraCorporea']).'<br/>'.
                     '<b>Profundidad:</b><br/>'.wc_clean( $cart_item['tipoGrosor']).'<br/>'.
                     '<b>Acabado:</b><br/>'.wc_clean( $cart_item['acabado']).'<br/>'.
                     '<b>Color Led:</b><br/>'.wc_clean( $cart_item['colorLed']).'<br/>'.
                     '<b>Separaci??n:</b><br/>'.wc_clean( $cart_item['separacion']).'<br/>'.                     
                     '<b>Opciones:</b><br/>'.wc_clean( $cart_item['opciones']).'<br/>'.
                     '<b>Sujeci??n:</b><br/>'.wc_clean( $cart_item['sujecion']).'<br/>'. 
                     '<b>Color:</b><br/>'.wc_clean( $cart_item['colorSumario']).'<br/>'.
                     '<b>Tiempos de Entrega:</b><br/>'.wc_clean( $cart_item['tiempoEntregaSumario']).'<br/>'.
                     '<b>Sub Total:</b><br/>'.wc_clean( $cart_item['subTotalPrecio'])
      ); 
    }

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
  __( 'Texto r??tulo', 'iconic' ),
  $values['texto_rotulo'],
  true
 );

 $item->add_meta_data(
  __( 'Fuente', 'iconic' ),
  $values['fuenteLetrasText'],
  true
 );

 $item->add_meta_data(
  __( 'Altura (cm)', 'iconic' ),
  $values['alturacm'],
  true
 );

/*
 $item->add_meta_data(
  __( 'Ancho (cm)', 'iconic' ),
  $values['anchocm'],
  true
 );
*/
 $item->add_meta_data(
  __( 'Letra Corporea', 'iconic' ),
  $values['tipoletraCorporea'],
  true
 );

 $item->add_meta_data(
  __( 'Profundidad', 'iconic' ),
  $values['tipoGrosor'],
  true
 );

 $item->add_meta_data(
  __( 'Acabado', 'iconic' ),
  $values['acabado'],
  true
 );

  $item->add_meta_data(
  __( 'Color Led', 'iconic' ),
  $values['colorLed'],
  true
 );

  $item->add_meta_data(
  __( 'Separaci??n', 'iconic' ),
  $values['separacion'],
  true
 ); 

 $item->add_meta_data(
  __( 'Opciones', 'iconic' ),
  $values['opciones'],
  true
 );

  $item->add_meta_data(
  __( 'Sujeci??n', 'iconic' ),
  $values['sujecion'],
  true
 ); 

  $item->add_meta_data(
  __( 'Tiempo de Entrega', 'iconic' ),
  $values['tiempoEntregaSumario'],
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
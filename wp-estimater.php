<?php
/**

 * @package EnablonCommunity

 */
/*
  Plugin Name: CONFLUENT Wordpress Estimater Plugin
  Plugin URI: https://www.confluent.com
  Description: Ajouter un bouton scroll down sur n importe quelle partie du site
  Version: 1.0
  Author: confluent
  Author URI: http://confluent.com

 */

define('WE_PLUGIN_FILE',__FILE__);
define('WE_DIR', plugin_dir_path(__FILE__));
 
define('WE_URL', plugin_dir_url(__FILE__));

define('WE_URL_SITE', get_site_url() . "/");


class WpEstimater {
    function __construct() {
        add_shortcode('WIDGET_HTML_ESTIMATER', array($this, 'get_form_estimater'));   
        add_action( 'plugins_loaded', array($this, 'vc_mapping') );
        
    }   

    /*
     * INit LINKS
     */
    
    /*
     * ADD ACTION
     */


    /*
     * VISUAL COMPOSER INTEGRATION
     */

    function vc_mapping(){
        if(function_exists ('vc_map')){
            vc_map( 
                 array(
                    'base' => 'WIDGET_HTML_ESTIMATER',
                    'name' =>__(  "ESTIMATION", 'js_composer'  ),
                    'class' => '',
                    'icon' =>'iw-default',// 'icon-heart',
                    'params' => array(array(
                          "type" => "colorpicker",
                          "holder" => "Couleur du widget",
                          "class" => "",
                          "heading" => "Couleur",
                          "param_name" => "couleur",
                          "value" => __( "#fff", "my-text-domain" ),
                          "description" => "La couleur pour personnaliser le kit" 
                        )
                    )
                ) 
            );
        }
    }

    /*
     * SHORCODE INTEGRATION
     */
    function get_form_estimater($atts = [], $content = null, $tag = ''){
        // // normalize attribute keys, lowercase
        // $atts = array_change_key_case((array)$atts, CASE_LOWER);
        //     // override default attributes with user attributes
        //  $wporg_atts = shortcode_atts(
        //     [
        //         'kecouleury'=>  "#fff"
        //     ], $atts, $tag);
        //  $couleur = $wporg_atts['couleur'];
        if ( is_admin() ) {
                echo "Integration Bon de visite ";
        } else { 


              echo "<link rel='stylesheet' href='http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>";
              echo "<link rel='stylesheet' href='".WE_URL."templates/css/style.css'>";
              echo "<link rel='stylesheet' href='".WE_URL."templates/css/custom.css'>";
              require(WE_DIR."templates/html/index.php");
              // echo "<script  src='https://code.jquery.com/ui/1.12.1/jquery-ui.js'>";
              echo "<script  src='".WE_URL."templates/js/script.js'>";
        }
    }
}

new WpEstimater();
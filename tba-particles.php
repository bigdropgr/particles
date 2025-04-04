<?php
/**
 * Particles Backgrounds Addon for WPBakery Page Builder
 *
 * @package           tba-particles
 * @author            TheBasementAgency
 * @copyright         2022 TheBasement.Agency
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Particles Backgrounds Addon for WPBakery Page Builder
 * Plugin URI:        https://thebasement.agency/portfolio_page/particles-backgrounds-addon-for-wpbakery-page-builder/
 * Description:       This powerful WordPress plugin adds pro-level particle backgrounds to the famous WPBakery Page Builder, allowing both novice and mid-level designers to wow their clients.
 * Version:           1.3.0
 * Tested up to:      6.0.3
 * Requires at least: 5.6.8
 * Requires PHP:      7.4
 * Author:            TheBasementAgency
 * Author URI:        https://thebasement.agency
 * Text Domain:       tba-particles
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If accessed directly exit;
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'plugins_loaded', 'tba_load_textdomain' );
/**
 * Load plugin textdomain.
 */
function tba_load_textdomain() {
    load_plugin_textdomain( 'tba-particles', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}

class tba_background_particles {
    public function integrateWithVC() {
        // Check if WPBakery Page Builder is installed
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            // Display notice that Extend WPBakery Page Builder is required
            add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
            return;
        }
 
        /*
        Add your WPBakery Page Builder logic here.
        Lets call vc_map function to "register" our custom shortcode within WPBakery Page Builder interface.

        More info: http://kb.wpbakery.com/index.php?title=Vc_map
        */

        /**
         * Call Defaults
         */ 
        // vc_row
        if ( file_exists( __DIR__."/elements/defaults/vc_row_particles.php" ) ){
            require(__DIR__."/elements/defaults/vc_row_particles.php");
        }

        // vc_particles_background_element
        if ( file_exists( __DIR__."/elements/addons/vc_particles_background_element.php" ) ){
            require(__DIR__."/elements/addons/vc_particles_background_element.php");
        }

    }

    function execute_tba_shortcode($output, $obj, $attr) {
        if($obj->settings('base')=='vc_row') {
            $output .= $this->tba_shortcode($attr, '');
        }
        return $output;
    }
    
    public static function tba_shortcode($atts, $content){
        $pb_type = $pb_dot_color = $pb_line_color = $pb_particle_radius = $pb_line_width = $pb_min_speedx = $pb_max_speedx = $pb_min_speedy = $pb_max_speedy = $pb_directionx = $pb_directiony = $pb_particle_density = $pb_smoke_preset = $pb_sm_line_width =  $pb_bg_inner = $pb_bg_outer = $pb_gradient_end = $pb_gradient_start = $pb_num_circles = $pb_radius_size = $pb_smoke_opacity = $pb_speed = $pb_rain_bg = $pb_rain_preset = $pb_rain_img_blur = $pjs_shape = $pjs_img = $pjs_color = $pjs_stroke = $pjs_scolor = $pjs_sides = $pjs_count = $pjs_size = $pjs_srandom = $pjs_sanimate = $pjs_sanispeed = $pjs_smin = $pjs_opacity = $pjs_orandom = $pjs_oanimate = $pjs_oanispeed = $pjs_omin = $pjs_link = $pjs_ldistance = $pjs_lcolor = $pjs_lopacity = $pjs_lwidth = $pjs_move = $pjs_direction = $pjs_mrandom = $pjs_mstraight = $pjs_mspeed = $pjs_omode = $pjs_hover = $pjs_onhover = $pjs_click = $pjs_onclick = $pjs_zindex = $snow_shape = $snow_img = $snow_color = $snow_stroke = $snow_scolor = $snow_sides = $snow_count = $snow_size = $snow_srandom = $snow_sanimate = $snow_sanispeed = $snow_smin = $snow_opacity = $snow_orandom = $snow_oanimate = $snow_oanispeed = $snow_omin = $snow_link = $snow_ldistance = $snow_lcolor = $snow_lopacity = $snow_lwidth = $snow_move = $snow_direction = $snow_mrandom = $snow_mstraight = $snow_mspeed = $snow_omode = $snow_hover = $snow_onhover = $snow_click = $snow_onclick = $snow_zindex = $fss_depth = $fss_segments = $fss_slices = $fss_xrange = $fss_yrange = $fss_zrange = $fss_mambient = $fss_mdiffuse = $fss_count = $fss_xyscalar = $fss_zofsset = $fss_lambient = $fss_ldiffuse = $bird_type = $bird_count = $swarm_count = $swarm_rcolor = $swarm_pcolor = $alian_count = $aliancolor1 = $aliancolor2 = $bgaliancolor1 = $bgaliancolor2 = $wavescolor = $spcolor = $mpcolor = $lpcolor = $lcolor1 = $lcolor2 = $lcolor3 = $spacepcolor = $spacepspeed = "";
        
        extract( shortcode_atts( array( "pb_type" => "", "pb_dot_color" => "", "pb_line_color" => "", "pb_particle_radius" => "", "pb_line_width" => "", "pb_min_speedx" => "", "pb_max_speedx" => "", "pb_min_speedy" => "", "pb_max_speedy" => "", "pb_directionx" => "", "pb_directiony" => "", "pb_particle_density" => "", "pb_smoke_preset" => "", "pb_bg_inner" => "", "pb_bg_outer" => "", "pb_gradient_end" => "", "pb_gradient_start" => "", "pb_num_circles" => "", "pb_radius_size" => "", "pb_smoke_opacity" => "", "pb_sm_line_width" => "", "pb_speed" => "", "pb_rain_bg" => "", "pb_rain_preset" => "", "pb_rain_img_blur" => "", "pjs_shape" => "", "pjs_img" => "", "pjs_color" => "", "pjs_stroke" => "", "pjs_scolor" => "", "pjs_sides" => "", "pjs_count" => "", "pjs_size" => "", "pjs_srandom" => "", "pjs_sanimate" => "", "pjs_sanispeed" => "", "pjs_smin" => "", "pjs_opacity" => "", "pjs_orandom" => "", "pjs_oanimate" => "", "pjs_oanispeed" => "", "pjs_omin" => "", "pjs_link" => "", "pjs_ldistance" => "", "pjs_lcolor" => "", "pjs_lopacity" => "", "pjs_lwidth" => "", "pjs_move" => "", "pjs_direction" => "", "pjs_mrandom" => "", "pjs_mstraight" => "", "pjs_mspeed" => "", "pjs_omode" => "", "pjs_hover" => "", "pjs_onhover" => "", "pjs_click" => "", "pjs_onclick" => "", "pjs_zindex" => "", "snow_shape" => "", "snow_img" => "", "snow_color" => "", "snow_stroke" => "", "snow_scolor" => "", "snow_sides" => "", "snow_count" => "", "snow_size" => "", "snow_srandom" => "", "snow_sanimate" => "", "snow_sanispeed" => "", "snow_smin" => "", "snow_opacity" => "", "snow_orandom" => "", "snow_oanimate" => "", "snow_oanispeed" => "", "snow_omin" => "", "snow_link" => "", "snow_ldistance" => "", "snow_lcolor" => "", "snow_lopacity" => "", "snow_lwidth" => "", "snow_move" => "", "snow_direction" => "", "snow_mrandom" => "", "snow_mstraight" => "", "snow_mspeed" => "", "snow_omode" => "", "snow_hover" => "", "snow_onhover" => "", "snow_click" => "", "snow_onclick" => "", "snow_zindex" => "", "fss_depth" => "",  "fss_segments" => "",  "fss_slices" => "",  "fss_xrange" => "",  "fss_yrange" => "",  "fss_zrange" => "",  "fss_mambient" => "",  "fss_mdiffuse" => "",  "fss_count" => "",  "fss_xyscalar" => "",  "fss_zoffset" => "",  "fss_lambient" => "",  "fss_ldiffuse" => "", "bird_type" => "", "bird_count" => "", "swarm_count" => "", "swarm_rcolor" => "", "swarm_pcolor" => "", "alian_count" => "", "aliancolor1" => "", "aliancolor2" => "", "bgaliancolor1" => "", "bgaliancolor2" => "", "wavescolor" => "", "spcolor" => "", "mpcolor" => "", "lpcolor" => "", "lcolor1" => "", "lcolor2" => "", "lcolor3" => "", "spacepcolor" => "", "spacepspeed" => "" ), $atts ) );
        
        $js_path = '/assets/js/';
        $css_path = '/assets/css/';

        $html = "";
        
        if($pb_type != '') {
            
            wp_register_style( 'tba_style', plugins_url($css_path,__FILE__).'tba_style.css' );
            wp_enqueue_style( 'tba_style' );
            
            if($pb_type == 'matrix'){
                
                wp_enqueue_script('pb-row-matrix',plugins_url($js_path,__FILE__).'jquery.particleground.min.js', array( 'jquery' ));
                
                $html .= '<div class="particle_matrix_ref" data-dotColor="'.$pb_dot_color.'" data-lineColor="'.$pb_line_color.'"  data-particleRadius="'.$pb_particle_radius.'" data-lineWidth="'.$pb_line_width.'" data-minSpeedX="'.$pb_min_speedx.'" data-maxSpeedX="'.$pb_max_speedx.'" data-minSpeedY="'.$pb_min_speedy.'" data-maxSpeedY="'.$pb_max_speedy.'" data-directionX="'.$pb_directionx.'" data-directionY="'.$pb_directiony.'" data-density="'.$pb_particle_density.'"></div>';
            
            } else if($pb_type == 'pjs') {
                
                wp_enqueue_script('pb-row-pjs',plugins_url('/particles-lib/particles.js/',__FILE__).'particles.js', array( 'jquery' ));
                
                $pid = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',5)),0,5);
                
                $p_img = wp_get_attachment_image_src($pjs_img, 'full');
                
                if ( isset($p_img[0])): 
                    $p_img[0]; 
                else:
                    $p_img[0] = '';
                endif;

                $html .= '<div class="particle_pjs_ref" data-id="'.$pid.'" data-shape="'.$pjs_shape.'" data-img="'.$p_img[0].'" data-pcolor="'.$pjs_color.'" data-stroke="'.$pjs_stroke.'" data-scolor="'.$pjs_scolor.'" data-sides="'.$pjs_sides.'" data-count="'.$pjs_count.'" data-size="'.$pjs_size.'" data-srandom="'.$pjs_srandom.'" data-sanimate="'.$pjs_sanimate.'" data-sanispeed="'.$pjs_sanispeed.'" data-smin="'.$pjs_smin.'" data-opacity="'.$pjs_opacity.'" data-orandom="'.$pjs_orandom.'" data-oanimate="'.$pjs_oanimate.'" data-oanispeed="'.$pjs_oanispeed.'" data-omin="'.$pjs_omin.'" data-link="'.$pjs_link.'" data-ldistance="'.$pjs_ldistance.'" data-lcolor="'.$pjs_lcolor.'" data-lopacity="'.$pjs_lopacity.'" data-lwidth="'.$pjs_lwidth.'" data-move="'.$pjs_move.'" data-direction="'.$pjs_direction.'" data-mrandom="'.$pjs_mrandom.'" data-mstraight="'.$pjs_mstraight.'" data-mspeed="'.$pjs_mspeed.'" data-omode="'.$pjs_omode.'" data-hover="'.$pjs_hover.'" data-onhover="'.$pjs_onhover.'" data-click="'.$pjs_click.'" data-onclick="'.$pjs_onclick.'"></div>';

               $myfile = fopen("/home/bigdropeu/public_html/perikliswheels/wp-content/plugins/tba-particles/typehere.txt", "w") or die("Unable to open file!");
                fwrite($myfile, $html);
                fclose($myfile);

                // Set html inline css of z-index
                wp_register_script( 'tba-js-footer', '', array("jquery"), '', true );
                wp_add_inline_script( 'tba-js-footer',
                    "setTimeout(function () {
                        jQuery('#$pid').css('zIndex', $pjs_zindex);
                     }, 1200);
                ");
                
            } else if($pb_type == 'rain') {
                
                wp_enqueue_script('pb-row-rain',plugins_url($js_path,__FILE__).'rainyday.min.js', array( 'jquery' ));
                
                $img_src = wp_get_attachment_image_src($pb_rain_bg, 'full');
                // Check incase there is no IMG set in `RAIN` bg_field;
                if ( empty($img_src[0]) ):
                    $img_src[0] = '';
                endif;

                $html .= '<div class="particle_rain_ref" data-imgblurness="'.$pb_rain_img_blur.'" data-rainbg="'.$img_src[0].'" data-preset="'.$pb_rain_preset.'"></div>';
                
            } else if($pb_type == 'snow') {
                
                wp_enqueue_script('pb-row-snow',plugins_url('/particles-lib/particles.js/',__FILE__).'particles.js', array( 'jquery' ));
                
                $pid = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',5)),0,5);
                
                $html .= '<div class="particle_pjs_ref" data-id="'. $pid .'" data-shape="circle" data-img="" data-pcolor="#ffffff" data-stroke="0" data-scolor="#000000" data-sides="0" data-count="400" data-size="10" data-srandom="" data-sanimate="yes" data-sanispeed="40" data-smin="0.1" data-opacity="" data-orandom="" data-oanimate="yes" data-oanispeed="1" data-omin="0.1" data-link="" data-ldistance="" data-lcolor="#ffffff" data-lopacity="0.4" data-lwidth="1" data-move="yes" data-direction="bottom" data-mrandom="" data-mstraight="" data-mspeed="6" data-omode="out" data-hover="" data-onhover="" data-click="yes" data-onclick="repulse"></div>';

                // Set html inline css of z-index
                wp_register_script( 'tba-js-footer', '', array("jquery"), '', true );
                wp_add_inline_script( 'tba-js-footer',
                    "setTimeout(function () {
                        jQuery('#$pid').css('zIndex', $snow_zindex);
                     }, 1200);
                ");

                wp_register_script( 'tba-js-footer-snow', '', array("jquery"), '', true );
                wp_add_inline_script( 'tba-js-footer-snow',
                    "jQuery(document).ready(function() {
                        window.dispatchEvent(new Event('resize'));
                    });
                ");

            } else if($pb_type == 'fss') {
                
                wp_enqueue_script('tba-row-fss-js',plugins_url($js_path,__FILE__).'fss.min.js', array( 'jquery' ));

                $pid = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',5)),0,5);
                
                $html .= '<div class="flat_surf_ref" data-id="'.$pid.'" data-depth="'.$fss_depth.'" data-segments="'.$fss_segments.'" data-slices="'.$fss_slices.'" data-xrange="'.$fss_xrange.'" data-yrange="'.$fss_yrange.'" data-zrange="'.$fss_zrange.'" data-mambient="'.$fss_mambient.'" data-mdiffuse="'.$fss_mdiffuse.'" data-count="'.$fss_count.'" data-xyscalar="'.$fss_xyscalar.'" data-zoffset="'.$fss_zoffset.'" data-lambient="'.$fss_lambient.'" data-ldiffuse="'.$fss_ldiffuse.'" ></div>';
                
            } else if($pb_type == 'birds') {

                wp_enqueue_script('three-min',plugins_url($js_path,__FILE__).'three.min.js', array( 'jquery' ));
                wp_enqueue_script('three-projector',plugins_url($js_path,__FILE__).'projector.min.js', array( 'jquery' ));
                wp_enqueue_script('three-canvasrenderer',plugins_url($js_path,__FILE__).'canvasrenderer.min.js', array( 'jquery' ));
                wp_enqueue_script('three-bird',plugins_url($js_path,__FILE__).'bird.min.js', array( 'jquery' ));
                wp_enqueue_script('three-boid',plugins_url($js_path,__FILE__).'boid.min.js', array( 'jquery' ));

                $pid = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',5)),0,5);
                
                $html .= '<div class="three_bird_ref" data-birdcount="'.$bird_count.'" data-id="'.$pid.'" data-birdtype="'.$bird_type.'"></div>';
                
            } else if($pb_type == 'swarm') {

                wp_enqueue_script('smallprng',plugins_url($js_path,__FILE__).'smallprng.js', array( 'jquery' ));
                wp_enqueue_script('codepen',plugins_url($js_path,__FILE__).'codepen-utilities.min.js', array( 'jquery' ));
                wp_enqueue_script('swarm',plugins_url($js_path,__FILE__).'swarm.js', array( 'jquery' ));

                $pid = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',5)),0,5);
                
                $html .= '<div class="swarm_ref" data-swarmcount="'.$swarm_count.'" data-id="'.$pid.'" data-swarmrcolor="'.$swarm_rcolor.'" data-swarmpcolor="'.$swarm_pcolor.'"></div>';

            } else if($pb_type == 'alian') {

                $pid = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',5)),0,5);
                
                $html .= '<div class="alian_ref" data-id="'.$pid.'" data-aliancount="'.$alian_count.'" data-aliancolor1="'.$aliancolor1.'" data-aliancolor2="'.$aliancolor2.'" data-bgaliancolor1="'.$bgaliancolor1.'" data-bgaliancolor2="'.$bgaliancolor2.'"></div>';

            } else if($pb_type == 'waves') {

                wp_enqueue_script('three-min',plugins_url($js_path,__FILE__).'three.min.js', array( 'jquery' ));
                wp_enqueue_script('three-projector',plugins_url($js_path,__FILE__).'projector.min.js', array( 'jquery' ));
                wp_enqueue_script('three-canvasrenderer',plugins_url($js_path,__FILE__).'canvasrenderer.min.js', array( 'jquery' ));

                $pid = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',5)),0,5);

                if(!$wavescolor) { $wavescolor = "#ffffff"; }
                
                $html .= '<div class="three_waves_ref" data-color="'.$wavescolor.'" data-id="'.$pid.'"></div>';

            } else if($pb_type == 'ambient') {

                wp_enqueue_script('create-js',plugins_url($js_path,__FILE__).'createjs.min.js', array( 'jquery' ));
                wp_enqueue_script('tweenMax-js',plugins_url($js_path,__FILE__).'TweenMax.min.js', array( 'jquery' ));
                wp_enqueue_script('particle-engine',plugins_url($js_path,__FILE__).'particle_engine.js', array( 'jquery' ));

                $pid = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',5)),0,5);

                if(!$spcolor) $spcolor = '#0cdbf3';
                if(!$mpcolor) $mpcolor = '#6fd2f3';
                if(!$lpcolor) $lpcolor = '#93e9f3';
                if(!$lcolor1) $lcolor1 = '#6ac6e8';
                if(!$lcolor2) $lcolor2 = '#54d5e8';
                if(!$lcolor3) $lcolor3 = '#2ae8d8';
                
                $html .= '<div class="ambient_ref" data-spcolor="'.$spcolor.'" data-mpcolor="'.$mpcolor.'" data-lpcolor="'.$lpcolor.'" data-lcolor1="'.$lcolor1.'" data-lcolor2="'.$lcolor2.'" data-lcolor3="'.$lcolor3.'" data-id="'.$pid.'"></div>';

            } else if($pb_type == 'space') {

                wp_enqueue_script('three-min',plugins_url($js_path,__FILE__).'three.min.js', array( 'jquery' ));
                wp_enqueue_script('three-projector',plugins_url($js_path,__FILE__).'projector.min.js', array( 'jquery' ));
                wp_enqueue_script('three-canvasrenderer',plugins_url($js_path,__FILE__).'canvasrenderer.min.js', array( 'jquery' ));

                $pid = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',5)),0,5);

                $html .= '<div class="space_ref" data-spacepcolor="'.$spacepcolor.'" data-spacepspeed="'.$spacepspeed.'" data-id="'.$pid.'"></div>';

            }
            
            wp_enqueue_script('tba-row-common',plugins_url($js_path,__FILE__).'particle_common.js');

            wp_enqueue_script('tba-row-common',plugins_url($js_path,__FILE__).'particle_common.min.js');
        }
        
        $output = $html;
        
        return $output;
    }
    
    function tba_css_classes( $class_string, $tag = null ) {
        if ( $tag == 'vc_row' ) {
            $class_string .= " pb_bg";
        }
        
        return $class_string;
    }
    
    /*
    Shortcode logic how it should be rendered
    */
    function theShortcode($Atts, $Content = null) {
        wp_enqueue_script(  array( 'jquery','tba-particles-backgrounds','tba-particles-js' ) );
        
        $image = wp_get_attachment_image_srcset($Atts, 'full');
        
        $Return = '<div id="'.$Atts['theid'].'" ';
        foreach ($Atts as $AttN => $AttV) {
            $Return .= 'data-'.str_replace("_","-",$AttN).'="'.$AttV.'" ';
        }
        $Return .= 'class="tba-particles-background" style="display:none;"></div>';
        
        return $Return;
    }

    /*
    Load plugin css and javascript files which you may need on front end of your site
    */
    function loadCssAndJs() {
        wp_register_script( 'tba-particles-backgrounds', plugins_url('js/tbaparticles.js',__FILE__ ),  );
        wp_register_script( 'tba-particles-js', plugins_url('particles-lib/particles.js/particles.min.js',__FILE__ ) );
    }

    /*
    Show notice if your plugin is activated but Visual Composer is not
    */
    function showVcVersionNotice() {
        $plugin_data = get_plugin_data(__FILE__);
        echo '
        <div class="updated">
          <p>'.sprintf(__('<strong>%s</strong> requires <strong><a href="http://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'vc_extend'), $plugin_data['Name']).'</p>
        </div>';
    }

    function registerShortcode() {
        add_shortcode( 'tba_particles_background', array($this,'theShortcode') );
        $this->integrateWithVC();
    }

    function custom_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {
      if ( $tag == 'vc_row' || $tag == 'vc_row_inner' ) {
        if (strpos($class_string,'vc_tba_row') == false) { $class_string = $class_string . " vc_tba_row"; }
      }
      if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
        if (strpos($class_string,'vc_tba_column') == false) { $class_string = $class_string . " vc_tba_column"; }
      }
      if ( $tag == 'vc_section' || $tag == 'vc_section_inner' ) {
        if (strpos($class_string,'vc_tba_section') == false) { $class_string = $class_string . " vc_tba_section"; }
      }
      return $class_string;
    }

    function lastEnqueue(){
        // Register scripts
        wp_enqueue_script( 'tba-js-footer' );
        wp_enqueue_script( 'tba-js-footer-snow' );
    }

    function __construct() {

        // We safely integrate with VC with this hook
        add_action( 'init', array( $this, 'registerShortcode') );  
        
        // Register CSS and JS
        add_action( 'wp_enqueue_scripts', array( $this, 'loadCssAndJs' ) );

        // Enqueue last
        add_action( 'wp_enqueue_scripts', array( $this, 'lastEnqueue' ), 20, 3 );

        // Register Custom Css class
        add_filter( 'vc_shortcodes_css_class', array($this,'custom_css_classes_for_vc_row_and_vc_column'), 10, 2 );

        // VC_ROW Related
        add_filter('vc_shortcode_output',array($this, 'execute_tba_shortcode'),10,3);
        add_filter( 'vc_shortcodes_css_class', array($this, 'tba_css_classes'), 10, 2 );

    }
}
// Finally initialize code
new tba_background_particles();
<?php
if (!defined('ABSPATH')) {
    exit();
}
/**
 * Pcfq Dynamic Styles
 *
 *
 * @class        Pcfq_Dynamic_Styles
 * @version      1.0
 * @category     Class
 * @author       PeaceFulThemes
 */
class Pcfq_Dynamic_Styles
{
    protected static $instance = null;
    private $getduri;
    private $use_minify;
    public static function get_instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function register_script()
    {
        $this->getduri = get_template_directory_uri();
        // Register action for Admin
        add_action('admin_enqueue_scripts', [$this, 'admin_css']);
        add_action('admin_enqueue_scripts', [$this, 'admin_js']);
        if (Pcfq_Theme_Helper::pcfq_purchase_verify()) {
            add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts'], 99);
            add_action('wp_enqueue_scripts', [$this, 'render_font_fonts'], 99);
            add_action('wp_head', [$this, 'preloader_font'], 1);  

        }
        
        
    }
    /* Register css for admin panel */
    public function admin_css()
    {
        // Main admin styles
        wp_enqueue_style('Pcfq-admin', $this->getduri . '/admin/assest/css/admin.css');
        // Add standard wp color picker
    }
    /* Register css and js for admin panel */
    public function admin_js()
    {
        $currentTheme = wp_get_theme();
        $theme_name =
        $currentTheme->parent() == false
        ? wp_get_theme()->get('Name')
        : wp_get_theme()
        ->parent()
        ->get('Name');
        $theme_name = trim($theme_name);
        $email = '';
        $purchaseCode = '';
        $domain_id = '';
        $purchase_opt = get_option('pcfq_licence_data');
        if (!empty($purchase_opt)) {
            $purchaseCode = $purchase_opt['data']['purchase_key'];
            $domain_id = $purchase_opt['data']['domain_id'];
        }
        wp_enqueue_script('Pcfq-admin', $this->getduri . '/admin/assest/js/admin.js');
        wp_localize_script('Pcfq-admin', 'Pcfq_verify', [
            'ajaxurl' => esc_js(admin_url('admin-ajax.php')),
            'PcfqUrlActivate' => esc_js(Pcfq_Theme_Verify::get_instance()->api),
            'PcfqUrlDeactivate' => esc_js(Pcfq_Theme_Verify::get_instance()->api . 'deactivate'),
            'domainUrl' => esc_js(site_url('/')),
            'themeName' => esc_js($theme_name),
            'purchaseCode' => esc_js($purchaseCode),
            'domain_id' => esc_js($domain_id),
            'email' => esc_js($email),
            'message' => esc_js(esc_html__('Thank you, your license has been validated', 'medicate')),
            'ajax_nonce' => esc_js(wp_create_nonce('_notice_nonce')),
        ]);
    }
    public function theme_minify_css( $minify ) {
    $minify = preg_replace('/\/\*((?!\*\/).)*\*\//','',$minify); // negative look ahead
    $minify = preg_replace('/\s{2,}/',' ',$minify);
    $minify = preg_replace('/\s*([:;{}])\s*/','$1',$minify);
    $minify = preg_replace('/;}/','}',$minify);
    return $minify;
}
public function enqueue_scripts()
{

    Pt_WP_Filesystem::Pfq_theme_add_script('bootstrap', CONST_MEDICATE_URI . '/assets/js/bootstrap.min.js', [], '4.1.3', true);
    Pt_WP_Filesystem::Pfq_theme_add_script('medicate-script', CONST_MEDICATE_URI . '/assets/js/script.js', ['jquery'], '1.0', true);
    wp_enqueue_style('fontawesome', CONST_MEDICATE_URI . '/assets/css/font-awesome/css/all.min.css', [], '6.0', 'all');
    wp_enqueue_style('ionicons', CONST_MEDICATE_URI . '/assets/css/ionicons/ionicons.min.css', [], '1.0', 'all');
    wp_enqueue_style('themefiy', CONST_MEDICATE_URI . '/assets/css/themify/themify-icons.css', [], '1.0', 'all');
    Pt_WP_Filesystem::Pfq_theme_add_style('medicate-loader', CONST_MEDICATE_URI . '/assets/css/medicate-loader.css', [], '1.0.0', 'all');
    Pt_WP_Filesystem::Pfq_theme_add_style('bootstrap', CONST_MEDICATE_URI . '/assets/css/bootstrap.min.css', [], '4.1.3', 'all');
    Pt_WP_Filesystem::Pfq_theme_add_style('medicate-responsive', CONST_MEDICATE_URI . '/assets/css/responsive.css', [], '1.0', 'all');

    if (is_rtl()) {
        Pt_WP_Filesystem::Pfq_theme_add_style('medicate-style-rtl', CONST_MEDICATE_URI . '/assets/css/style-rtl.css', [], '1.0', 'all');
        Pt_WP_Filesystem::Pfq_theme_add_style('woocommerce-style-rtl', CONST_MEDICATE_URI . '/assets/css/woocommerce-rtl.css', [], '1.0', 'all');
    }
    else{
        Pt_WP_Filesystem::Pfq_theme_add_style('medicate-style', CONST_MEDICATE_URI . '/assets/css/style.css', [], '1.0', 'all');
        Pt_WP_Filesystem::Pfq_theme_add_style('woocommerce-style', CONST_MEDICATE_URI . '/assets/css/woocommerce.css', [], '1.0', 'all');
    }


    if (is_singular() && comments_open() && get_option('thread_comments') == 1) {
            // Load comment-reply.js (into footer)
        // Pt_WP_Filesystem::Pfq_theme_add_script('comment-reply', '/wp-includes/js/comment-reply.min.js', [], false, true);
        wp_enqueue_script( 'comment-reply', false, [], false, true );
    }
}

public function preloader_font( ){
    $fonts = ['montserrat-v23-vietnamese_latin-ext_latin_cyrillic-ext_cyrillic','quicksand-v28-vietnamese_latin-ext_latin'];
    if( empty($fonts) ) return;


    foreach( $fonts as $fontindex => $font ) {
        $foldername = preg_replace('/\s+/', '_', $font);
        $fontsname = preg_replace('/\s+/', '_', strtolower($font));

        if( $fontindex === 0  ) {

            printf(('<link rel="preload" as="font" href="%s" type="font/woff2" crossorigin>
                <link rel="preload" as="font" href="%s" type="font/woff2" crossorigin>'),
            CONST_MEDICATE_ASSETS_FONTS_URI .'/'.$foldername.'/'.$fontsname.'-regular.woff2',
            CONST_MEDICATE_ASSETS_FONTS_URI .'/'.$foldername.'/'.$fontsname.'-600.woff2'
        );
        }
        if( $fontindex === 1  ) {
            printf(('<link rel="preload" as="font" href="%s" type="font/woff2" crossorigin>
                <link rel="preload" as="font" href="%s" type="font/woff2" crossorigin>'),
            CONST_MEDICATE_ASSETS_FONTS_URI .'/'.$foldername.'/'.$fontsname.'-regular.woff2',
            CONST_MEDICATE_ASSETS_FONTS_URI .'/'.$foldername.'/'.$fontsname.'-300.woff2'
        );
        }


    }
}
public function render_font_fonts(){
    $custom_styles = '';
    $custom_styles_minify = '';
    $font1 = 'montserrat-v23-vietnamese_latin-ext_latin_cyrillic-ext_cyrillic';
    $font2 = 'quicksand-v28-vietnamese_latin-ext_latin';
    $custom_styles .= $this->theme_load_default_fonts( array($font1 , $font2) );
    $custom_styles_minify .= $this->theme_minify_css($custom_styles);
    wp_register_style( 'fonts-handle', false );
    wp_enqueue_style( 'fonts-handle' );
    wp_add_inline_style( 'fonts-handle', $custom_styles_minify );


}
public function theme_load_default_fonts( $fonts = array() )
{
    if( empty($fonts) ) return;
    $font_face = '';

    foreach( $fonts as $fontindex => $font ) {
        if( $fontindex === 0  ) {
            $font_face .= $this->theme_load_font( $font, $font.'-100', '100' );
            $font_face .= $this->theme_load_font( $font, $font.'-200', '200' );
            $font_face .= $this->theme_load_font( $font, $font.'-300', '300' );
            $font_face .= $this->theme_load_font( $font, $font.'-500', '500' );
            $font_face .= $this->theme_load_font( $font, $font.'-600', '600' );
            $font_face .= $this->theme_load_font( $font, $font.'-700', '700' );
            $font_face .= $this->theme_load_font( $font, $font.'-800', '800' );
            $font_face .= $this->theme_load_font( $font, $font.'-regular', 'normal' );
        }
        if ($fontindex === 1 ) {
            $font_face .= $this->theme_load_font( $font, $font.'-100', '100' );
            $font_face .= $this->theme_load_font( $font, $font.'-200', '200' );
            $font_face .= $this->theme_load_font( $font, $font.'-300', '300' );
            $font_face .= $this->theme_load_font( $font, $font.'-500', '500' );
            $font_face .= $this->theme_load_font( $font, $font.'-600', '600' );
            $font_face .= $this->theme_load_font( $font, $font.'-700', '700' );
            $font_face .= $this->theme_load_font( $font, $font.'-800', '800' );
            $font_face .= $this->theme_load_font( $font, $font.'-regular', 'normal' );
        }
    }
    return $font_face;

}
public function theme_load_font( $font_name, $font, $font_weight )
{

    $fontsname = preg_replace('/\s+/', '_', strtolower($font));
    $foldername = preg_replace('/\s+/', '_', $font_name);
    $family = substr($font_name, 0, strpos($font_name, '-'));
    return '@font-face {
        font-family: '."'".$family."'".';
        font-display: swap;
        font-style: normal;
        font-weight: '.$font_weight.';
        src: url("'.CONST_MEDICATE_ASSETS_FONTS_URI .'/'.$foldername.'/'.$fontsname.'.eot");
        src: url("'.CONST_MEDICATE_ASSETS_FONTS_URI .'/'.$foldername.'/'.$fontsname.'.eot?#iefix") format("embedded-opentype"),
        url("'.CONST_MEDICATE_ASSETS_FONTS_URI .'/'.$foldername.'/'.$fontsname.'.woff2") format("woff2"),
        url("'.CONST_MEDICATE_ASSETS_FONTS_URI .'/'.$foldername.'/'.$fontsname.'.ttf") format("truetype"),
        url("'.CONST_MEDICATE_ASSETS_FONTS_URI .'/'.$foldername.'/'.$fontsname.'.woff") format("woff");
    }';
}


}
if (!function_exists('Pcfq_Dynamic_Styles')) {
    function Pcfq_Dynamic_Styles()
    {
        return Pcfq_Dynamic_Styles::get_instance();
    }
}
Pcfq_Dynamic_Styles()->register_script();

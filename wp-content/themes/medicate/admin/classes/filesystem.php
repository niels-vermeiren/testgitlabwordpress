<?php
class Pt_WP_Filesystem
{
    public static $Pfq_theme_theme_styles = [];
    public static $Pfq_theme_theme_script = [];
    private static $instance              = null;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'Pfq_theme_init_filesystem'], 0);
        add_action('wp_enqueue_scripts', [$this, 'Pqf_theme_enqueue_style'], 999);
        add_action('wp_enqueue_scripts', [$this, 'Pqf_theme_enqueue_script'], 999);

    }
    public function test()
    {
        echo 'test';
    }
    public function Pfq_theme_init_filesystem()
    {
        if (!function_exists('WP_Filesystem')) {
            require_once trailingslashit(ABSPATH) . 'wp-admin/includes/file.php';
        }
        if (is_admin()) {
            $url   = admin_url();
            $creds = false;
            if (function_exists('request_filesystem_credentials')) {
                $creds = @request_filesystem_credentials($url, '', false, false, []);
                if (false === $creds) {
                    return false;
                }
            }
            if (!WP_Filesystem($creds)) {
                if (function_exists('request_filesystem_credentials')) {
                    @request_filesystem_credentials($url, '', true, false);
                }
                return false;
            }
            return true;
        } else {
            WP_Filesystem();
        }
        return true;
    }
    public static function Pfq_theme_fpc($file, $data, $flag = 0)
    {
        global $wp_filesystem;
        if (!empty($file)) {
            if (isset($wp_filesystem) && is_object($wp_filesystem)) {
                $file = str_replace(ABSPATH, $wp_filesystem->abspath(), $file);
                return $wp_filesystem->put_contents($file, (FILE_APPEND == $flag && $wp_filesystem->exists($file) ? $wp_filesystem->get_contents($file) : '') . $data, false);
            }
        }
        return false;
    }
    public static function Pfq_theme_fgc($file)
    {

        global $wp_filesystem;
        if (!empty($file)) {
            if (isset($wp_filesystem) && is_object($wp_filesystem)) {
                $file = str_replace(ABSPATH, $wp_filesystem->abspath(), $file);
                return $wp_filesystem->get_contents($file);
            }
        }
        return '';
    }
    public static function Pfq_theme_is_file($file)
    {
        global $wp_filesystem;
        if (!empty($file)) {
            if (isset($wp_filesystem) && is_object($wp_filesystem)) {
                $file = str_replace(ABSPATH, $wp_filesystem->abspath(), $file);
                return $wp_filesystem->is_file($file);
            }
        }
        return '';
    }
    public static function Pfq_theme_is_dir($file)
    {
        global $wp_filesystem;
        if (!empty($file)) {
            if (isset($wp_filesystem) && is_object($wp_filesystem)) {
                $file = str_replace(ABSPATH, $wp_filesystem->abspath(), $file);
                return $wp_filesystem->is_dir($file);
            }
        }
        return '';
    }
    public static function Pfq_theme_mkdir($file)
    {
        global $wp_filesystem;
        if (!empty($file)) {
            if (isset($wp_filesystem) && is_object($wp_filesystem)) {
                $file = str_replace(ABSPATH, $wp_filesystem->abspath(), $file);
                return wp_mkdir_p($file);
            }
        }
        return '';
    }
    public static function Pfq_theme_mtime($file)
    {
        global $wp_filesystem;
        if (!empty($file)) {
            if (isset($wp_filesystem) && is_object($wp_filesystem)) {
                $file = str_replace(ABSPATH, $wp_filesystem->abspath(), $file);
                return $wp_filesystem->mtime($file);
            }
        }
        return '';
    }
    public static function Pfq_theme_rm_files($file)
    {
        global $wp_filesystem;
        if (!empty($file)) {
            if (isset($wp_filesystem) && is_object($wp_filesystem)) {
                $file = str_replace(ABSPATH, $wp_filesystem->abspath(), $file);
                return $wp_filesystem->delete($file);
            }
        }
        return '';
    }
    public static function Pfq_theme_clean_css()
    {
        $pqf_options = get_option('pqf_options');
        if (!empty($pqf_options['optimize_css_cleaner']) && $pqf_options['optimize_css_cleaner'] == 'clean') {
            if (self::Pfq_theme_is_file(CONST_MEDICATE_UPLOAD_DIR . 'min.css')) {
                self::Pfq_theme_rm_files(CONST_MEDICATE_UPLOAD_DIR . 'min.css');
                delete_option('pqf_options')['optimize_css_cleaner'];
            }

        }

    }
    public static function Pfq_theme_clean_js()
    {
        $pqf_options = get_option('pqf_options');
        if (!empty($pqf_options['optimize_js_cleaner']) && $pqf_options['optimize_js_cleaner'] == 'clean') {
            if (self::Pfq_theme_is_file(CONST_MEDICATE_UPLOAD_DIR . 'min.js')) {
                self::Pfq_theme_rm_files(CONST_MEDICATE_UPLOAD_DIR . 'min.js');
                delete_option('pqf_options')['optimize_js_cleaner'];
            }

        }

    }

    public static function Pqf_theme_enqueue_style()
    {
        if (class_exists('ReduxFramework')) {
            $pqf_options = get_option('pqf_options');
        }else{
            $pqf_options['optimize_css_minify'] = 'no';
        }
        $pqf_options = get_option('pqf_options');
        self::Pfq_theme_clean_css();
        if (isset($pqf_options['optimize_css_minify']) && $pqf_options['optimize_css_minify'] == 'yes') {

            if (!self::Pfq_theme_is_dir(CONST_MEDICATE_UPLOAD_DIR)) {
                self::Pfq_theme_mkdir(CONST_MEDICATE_UPLOAD_DIR);
            }
            if (!self::Pfq_theme_is_file(CONST_MEDICATE_UPLOAD_DIR . 'min.css')) {

                require_once CONST_MEDICATE_DIR . '/inc/classes/cssmin.php';
                $code = "";
                foreach (self::$Pfq_theme_theme_styles as $style) {
                    $path = $style['path'] ? $style['path'] : (CONST_MEDICATE_DIR . preg_replace('~^' . preg_quote(CONST_MEDICATE_URI, '~') . '~', '', $style['src']));
                    $css  = self::Pfq_theme_fgc($path);
                    $css  = preg_replace('~url\("\./~', 'url("' . CONST_MEDICATE_URI . dirname(preg_replace('~^' . preg_quote(CONST_MEDICATE_URI, '~') . '~', '', $style['src'])) . '/', $css);
                    // $css  = preg_replace( '~\.\./fonts/~', CONST_MEDICATE_URI . '/fonts/', $css );
                    $css = preg_replace('~url\((assets/[^\)]+)\)~', 'url(' . CONST_MEDICATE_URI . '/\\1)', $css);
                    $code .= $css;
                }
                $code = CSSMin::compressCSS($code);
                self::Pfq_theme_fpc(CONST_MEDICATE_UPLOAD_DIR . 'min.css', $code);
                wp_enqueue_style('Pqf-Theme-min', CONST_MEDICATE_UPLOAD_URL . 'min.css', [], self::Pfq_theme_mtime(CONST_MEDICATE_UPLOAD_DIR . 'min.css'), 'all');
            } elseif (self::Pfq_theme_is_file(CONST_MEDICATE_UPLOAD_DIR . 'min.css')) {

                wp_enqueue_style('Pqf-Theme-min', CONST_MEDICATE_UPLOAD_URL . 'min.css', [], self::Pfq_theme_mtime(CONST_MEDICATE_UPLOAD_DIR . 'min.css'), 'all');
            }
        }  else {
            foreach (self::$Pfq_theme_theme_styles as $style) {
                wp_enqueue_style($style['handle'], $style['src'], $style['deps'], $style['ver'], $style['media']);
            }

        }

    }
    public function Pqf_theme_enqueue_script()
    {
              if (class_exists('ReduxFramework')) {
        $pqf_options = get_option('pqf_options');
    }else{
        $pqf_options['optimize_js_minify'] = 'no';
    }
        
        $pqf_options = get_option('pqf_options');
        self::Pfq_theme_clean_js();

        if (!self::Pfq_theme_is_dir(CONST_MEDICATE_UPLOAD_DIR)) {
            self::Pfq_theme_mkdir(CONST_MEDICATE_UPLOAD_DIR);
        }
        if (isset($pqf_options['optimize_css_minify']) && $pqf_options['optimize_js_minify'] == 'yes') {
        $deps = [];
        foreach (self::$Pfq_theme_theme_script as $script) {
            $deps = array_merge($deps, $script['deps']);
        }
        $deps = array_unique($deps);
        
            if (!self::Pfq_theme_is_file(CONST_MEDICATE_UPLOAD_DIR . 'min.js')) {
                require_once CONST_MEDICATE_DIR . '/inc/classes/jsmin.php';
                $code = "";
                foreach (self::$Pfq_theme_theme_script as $script) {
                
                    $path        = $script['path'] ? $script['path'] : (CONST_MEDICATE_DIR . preg_replace('~^' . preg_quote(CONST_MEDICATE_URI, '~') . '~', '', $script['src']));
                    $script_code = self::Pfq_theme_fgc($path);
                    $code .= strpos($path, '.min') !== false ? $script_code : JSMin::minify($script_code);
                }
                self::Pfq_theme_fpc(CONST_MEDICATE_UPLOAD_DIR . 'min.js', $code);

                wp_enqueue_script('Pqf-Theme-min', CONST_MEDICATE_UPLOAD_URL . 'min.js', $deps, self::Pfq_theme_mtime(CONST_MEDICATE_UPLOAD_DIR . 'min.js'), true);
            } elseif (self::Pfq_theme_is_file(CONST_MEDICATE_UPLOAD_DIR . 'min.js')) {
                wp_enqueue_script('Pqf-Theme-min', CONST_MEDICATE_UPLOAD_URL . 'min.js', $deps, self::Pfq_theme_mtime(CONST_MEDICATE_UPLOAD_DIR . 'min.js'), true);
            }
        } else {
            foreach (self::$Pfq_theme_theme_script as $script) {
         
            wp_enqueue_script($script['handle'], $script['src'], $script['deps'], $script['ver'], $script['in_footer']);
        	}
        }
    }

    public static function Pfq_theme_add_style($handle, $src = '', $deps = [], $ver = false, $media = 'all', $path = '')
    {

        if (!array_key_exists($handle, self::$Pfq_theme_theme_styles)) {
            self::$Pfq_theme_theme_styles[$handle] = [
                'handle' => $handle,
                'src'    => $src,
                'deps'   => $deps,
                'ver'    => $ver,
                'media'  => $media,
                'path'   => $path,
            ];
        }
    }
    public static function Pfq_theme_add_script($handle, $src = '', $deps = [], $ver = false, $in_footer = false, $path = '')
    {
        if (!array_key_exists($handle, self::$Pfq_theme_theme_script)) {
            self::$Pfq_theme_theme_script[$handle] =
                [
                'handle'    => $handle,
                'src'       => $src,
                'deps'      => $deps,
                'ver'       => $ver,
                'in_footer' => $in_footer,
                'path'      => $path,
            ];
        }
    }
}

// new Pt_WP_Filesystem();
return Pt_WP_Filesystem::getInstance();

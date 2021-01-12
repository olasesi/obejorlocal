<?php
if (!property_exists('Front', 'IS_OC2') && !property_exists('Router', 'IS_OC2')) {
    echo '
        <h3>Journal Installation Error</h3>
        <p>Make sure you have uploaded all Journal files to your server and successfully replaced <b>system/engine/front.php</b> file.</p>
        <p>You can find more information <a href="http://docs.digital-atelier.com/opencart/journal/#/settings/install" target="_blank">here</a>.</p>
    ';
    exit();
}
if (!function_exists('array_get_first_key')) {
    function array_get_first_key($array) {
        $key = array_keys($array);
        $key = reset($key);
        return $key;
    }
}

/* http://php.net/manual/en/function.array-replace.php#115215 */
if(!function_exists('array_replace')) {
    function array_replace() {
        $args = func_get_args();
        $num_args = func_num_args();
        $res = array();
        for($i=0; $i<$num_args; $i++) {
            if(is_array($args[$i])) {
                foreach($args[$i] as $key => $val) {
                    $res[$key] = $val;
                }
            }
            else {
                trigger_error(__FUNCTION__ .'(): Argument #'.($i+1).' is not an array', E_USER_WARNING);
                return NULL;
            }
        }
        return $res;
    }
}

class Journal2Utils {

    private static $RIBBON_SIZES = array(
        'small' => array(
            'font'  => 8,
            'dim'   => 14,
            'top'   => 6
        ),
        'medium' => array(
            'font'  => 11,
            'dim'   => 17,
            'top'   => 8
        ),
        'large' => array(
            'font'  => 14,
            'dim'   => 21,
            'top'   => 10
        ),
    );

    private static function sortAsc($a, $b) {
        $a = (int)$a['sort_order'];
        $b = (int)$b['sort_order'];
        return $a - $b;
    }

    private static function sortDesc($a, $b) {
        $a = (int)$a['sort_order'];
        $b = (int)$b['sort_order'];
        return $b - $a;
    }

    public static function sortArray($array, $desc = false) {
        $temp_array = array();

        foreach ($array as $value) {
            if (isset($value['sort_order']) && is_numeric($value['sort_order'])) {
                $temp_array[] = $value;
            }
        }

        usort($temp_array, array('Journal2Utils', $desc ? 'sortDesc' : 'sortAsc'));

        foreach ($array as $value) {
            if (!isset($value['sort_order']) || (isset($value['sort_order']) && !is_numeric($value['sort_order']))) {
                $temp_array[] = $value;
            }
        }

        return $temp_array;
    }

    public static function getProperty($array, $property, $default_value = null) {
        $properties = explode('.', $property);
        foreach ($properties as $prop) {
            if (!is_array($array) || !isset($array[$prop])) {
                return $default_value;
            }
            $array = $array[$prop];
        }
        if (is_array($array)) {
            return $array;
        }
        $array = trim($array);
        return $array !== '' ? $array : $default_value;
    }

    public static function getGridClasses($products_per_row) {
        $products_per_row_xs = 1;
        $products_per_row_sm = min(2, $products_per_row);
        $products_per_row_md = min(3, $products_per_row);
        $products_per_row_lg = min(4, $products_per_row);
        $products_per_row_xl = min(5, $products_per_row);

        $xl = (int)(100 / $products_per_row_xl);
        $lg = (int)(100 / $products_per_row_lg);
        $md = (int)(100 / $products_per_row_md);
        $sm = (int)(100 / $products_per_row_sm);
        $xs = (int)(100 / $products_per_row_xs);

        return "xs-$xs sm-$sm md-$md lg-$lg xl-$xl";
    }

    public static function getProductGridClasses($settings, $site_width, $columns = 0) {
        $grid = self::getItemGrid($settings, $site_width, $columns);

        $xs = (int)(100 / $grid['xs']);
        $sm = (int)(100 / $grid['sm']);
        $md = (int)(100 / $grid['md']);
        $lg = (int)(100 / $grid['lg']);
        $xl = (int)(100 / $grid['xl']);

        return "xs-$xs sm-$sm md-$md lg-$lg xl-$xl";
    }

    public static function getItemGrid($settings, $site_width, $columns) {
        $products_per_row_xs = Journal2Utils::getProperty($settings, 'mobile.value', 1);
        $products_per_row_sm = Journal2Utils::getProperty($settings, 'mobile1.value', 2);
        if ($columns == 1) {
            $products_per_row_md = Journal2Utils::getProperty($settings, 'tablet1.value', 2);
        } else if ($columns == 2) {
            $products_per_row_md = Journal2Utils::getProperty($settings, 'tablet2.value', 1);
        } else {
            $products_per_row_md = Journal2Utils::getProperty($settings, 'tablet.value', 3);
        }
        if ($columns == 1) {
            $products_per_row_lg = Journal2Utils::getProperty($settings, 'desktop1.value', 4);
        } else if ($columns == 2) {
            $products_per_row_lg = Journal2Utils::getProperty($settings, 'desktop2.value', 3);
        } else {
            $products_per_row_lg = Journal2Utils::getProperty($settings, 'desktop.value', 5);
        }
        if ($columns == 1) {
            $products_per_row_xl = Journal2Utils::getProperty($settings, 'large_desktop1.value', 4);
        } else if ($columns == 2) {
            $products_per_row_xl = Journal2Utils::getProperty($settings, 'large_desktop2.value', 3);
        } else {
            $products_per_row_xl = Journal2Utils::getProperty($settings, 'large_desktop.value', 5);
        }
        return array(
            'xs'    => (int)$products_per_row_xs,
            'sm'    => (int)$products_per_row_sm,
            'md'    => (int)$products_per_row_md,
            'lg'    => (int)$products_per_row_lg,
            'xl'    => $site_width > 1200 ? (int)$products_per_row_xl : (int)$products_per_row_lg
        );
    }

    public static function getIconOptions($item, $text = '') {
        $icon_left = null;
        $icon_right = null;
        /* item icon */
        switch (Journal2Utils::getProperty($item, 'icon.icon_type')) {
            case 'icon':
                $icon_options = array();
                if (Journal2Utils::getProperty($item, 'icon.options.color.value.color')) {
                    $icon_options[] = 'color: ' . Journal2Utils::getColor(Journal2Utils::getProperty($item, 'icon.options.color.value.color'));
                }
                if ($fs = Journal2Utils::getProperty($item, 'icon.options.font_size')) {
                    if ($fs !== '---') {
                        $icon_options[] = 'font-size: ' . $fs;
                    }
                }
                if (Journal2Utils::getProperty($item, 'icon.options.top')) {
                    $icon_options[] = 'top: ' . Journal2Utils::getProperty($item, 'icon.options.top') . 'px';
                }
                if (Journal2Utils::getProperty($item, 'icon.options.left')) {
                    $icon_options[] = 'left: ' . Journal2Utils::getProperty($item, 'icon.options.left') . 'px';
                }
                if (Journal2Utils::getProperty($item, 'icon_position', 'left') === 'left') {
                    $icon_left = '<i style="margin-right: 5px; ' . implode('; ', $icon_options) . '" data-icon="' . Journal2Utils::getProperty($item, 'icon.icon.icon') . '"></i>';
                } else {
                    $icon_right = '<i style="margin-left: 5px; ' . implode('; ', $icon_options) . '"  data-icon="' . Journal2Utils::getProperty($item, 'icon.icon.icon') . '"></i>';
                }
                break;
            case 'image':
                $icon_options = array();
                if (Journal2Utils::getProperty($item, 'icon.options.top')) {
                    $icon_options[] = 'top: ' . Journal2Utils::getProperty($item, 'icon.options.top') . 'px';
                }
                if (Journal2Utils::getProperty($item, 'icon.options.left')) {
                    $icon_options[] = 'left: ' . Journal2Utils::getProperty($item, 'icon.options.left') . 'px';
                }
                $width = Journal2Utils::getProperty($item, 'icon.options.width');
                $height = Journal2Utils::getProperty($item, 'icon.options.height');

                if ($width && $height) {
                    $attrs = array("width: {$width}", "height: {$height}");
                    $icon_options[] = "width: {$width}px";
                    $icon_options[] = "height: {$height}px";
                } else {
                    $attrs = array();
                }

                if (Journal2Utils::getProperty($item, 'icon_position', 'left') === 'left') {
                    $icon_left = '<i><img ' . implode(' ', $attrs) . ' style="margin-right: 5px; ' . implode('; ', $icon_options) . '" src="image/' . Journal2Utils::getProperty($item, 'icon.image') . '" alt="' . $text . '" title="' . $text . '" /></i>';
                } else {
                    $icon_right = '<i><img ' . implode(' ', $attrs) . ' style="margin-left: 5px; ' . implode('; ', $icon_options) . '"  src="image/' . Journal2Utils::getProperty($item, 'icon.image') . '" alt="' . $text . '" title="' . $text . '" /></i>';
                }
                break;
        }
        return array(
            'left'  => $icon_left,
            'right' => $icon_right
        );
    }

    public static function getIconOptions2($icon) {
        switch (Journal2Utils::getProperty($icon, 'icon_type')) {
            case 'icon':
                $icon_options = array();
                if (Journal2Utils::getProperty($icon, 'options.color.value.color')) {
                    $icon_options[] = 'color: ' . Journal2Utils::getColor(Journal2Utils::getProperty($icon, 'options.color.value.color'));
                }
                if ($fs = Journal2Utils::getProperty($icon, 'options.font_size')) {
                    if ($fs !== '---') {
                        $icon_options[] = 'font-size: ' . Journal2Utils::getProperty($icon, 'options.font_size');
                    }
                }
                if (Journal2Utils::getProperty($icon, 'options.top')) {
                    $icon_options[] = 'top: ' . Journal2Utils::getProperty($icon, 'options.top') . 'px';
                }
                if (Journal2Utils::getProperty($icon, 'options.left')) {
                    $icon_options[] = 'left: ' . Journal2Utils::getProperty($icon, 'options.left') . 'px';
                }
                return '<i style="margin-right: 5px; ' . implode('; ', $icon_options) . '" data-icon="' . Journal2Utils::getProperty($icon, 'icon.icon') . '"></i>';
            case 'image':
                $icon_options = array();
                if (Journal2Utils::getProperty($icon, 'options.top')) {
                    $icon_options[] = 'top: ' . Journal2Utils::getProperty($icon, 'options.top') . 'px';
                }
                if (Journal2Utils::getProperty($icon, 'options.left')) {
                    $icon_options[] = 'left: ' . Journal2Utils::getProperty($icon, 'options.left') . 'px';
                }

                $width = Journal2Utils::getProperty($icon, 'options.width');
                $height = Journal2Utils::getProperty($icon, 'options.height');

                if ($width && $height) {
                    $icon_options[] = "width: {$width}px";
                    $icon_options[] = "height: {$height}px";
                }

                return '<i><img style="margin-right: 5px; ' . implode('; ', $icon_options) . '" src="image/' . Journal2Utils::getProperty($icon, 'image') . '" alt="" title="" /></i>';
        }
        return null;
    }

    public static function getColor($color) {
        if (!$color) {
            return 'transparent';
        }
        if (strpos($color, 'rgba') === 0) {
            if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/(?i)msie [1-8]/',$_SERVER['HTTP_USER_AGENT'])) {
                $color = str_replace(array('rgba(', ')', ' '), '', $color);
                $arr = explode(',', $color);
                return "rgb({$arr[0]}, {$arr[1]}, {$arr[2]})";
            }
            return $color;
        }
        if (strpos($color, 'rgb') === 0) {
            return $color;
        }
        if (strpos($color, '#') === 0) {
            return $color;
        }
        return '#' . $color;
    }

    public static function getBackgroundCssProperties($settings) {
        $res = array();
        if (Journal2Utils::getProperty($settings, 'value.use_gradient') == 1) {
            $gradient = preg_replace('/\s*(?!<\")\/\*[^\*]+\*\/(?!\")\s*/', '', Journal2Utils::getProperty($settings, 'value.gradient'));
            if ($gradient) {
                foreach (explode(';', $gradient) as $prop) {
                    if ($prop) {
                        $res[] = $prop;
                    }
                }
            }
        } else {
            if (Journal2Utils::getProperty($settings, 'value.bgcolor.value.color')) {
                $res[] = 'background-color: ' . Journal2Utils::getColor(Journal2Utils::getProperty($settings, 'value.bgcolor.value.color'));
            }
            $has_image = false;
            if ($img = Journal2Utils::getProperty($settings, 'value.bgimage.value.image')) {
				$res[] = 'background-image: url(\'' . Journal2Utils::staticAsset('image/' . ltrim($img, '/')) . '\')';
                $has_image = true;
            }

            if ($has_image) {
                if (Journal2Utils::getProperty($settings, 'value.bgimage_repeat')) {
                    $res[] = 'background-repeat: ' . Journal2Utils::getProperty($settings, 'value.bgimage_repeat');
                }
                if (Journal2Utils::getProperty($settings, 'value.bgimage_position')) {
                    $prop = Journal2Utils::getProperty($settings, 'value.bgimage_position');
                    if ($prop === 'custom') {
                        $pos = array();
                        $unit = Journal2Utils::getProperty($settings, 'value.bg_position_unit', 'px');
                        if (is_numeric(Journal2Utils::getProperty($settings, 'value.bg_position_x'))) {
                            $pos[] = Journal2Utils::getProperty($settings, 'value.bg_position_x') . $unit;
                        }
                        if (is_numeric(Journal2Utils::getProperty($settings, 'value.bg_position_y'))) {
                            $pos[] = Journal2Utils::getProperty($settings, 'value.bg_position_y') . $unit;
                        }
                        $res[] = 'background-position: ' . implode(' ', $pos);
                    } else {
                        $res[] = 'background-position: ' . ($prop === 'center' ? 'center top' : $prop);
                    }
                }
                $is_cover = false;
                if (Journal2Utils::getProperty($settings, 'value.bgimage_size', 'auto')) {
                    $prop = Journal2Utils::getProperty($settings, 'value.bgimage_size', 'auto');
                    if ($prop === 'custom') {
                        $pos = array();
                        $unit = Journal2Utils::getProperty($settings, 'value.bg_size_unit', 'px');
                        if (is_numeric(Journal2Utils::getProperty($settings, 'value.bg_size_x'))) {
                            $pos[] = Journal2Utils::getProperty($settings, 'value.bg_size_x') . $unit;
                        } else {
                            $pos[] = 'auto';
                        }
                        if (is_numeric(Journal2Utils::getProperty($settings, 'value.bg_size_y'))) {
                            $pos[] = Journal2Utils::getProperty($settings, 'value.bg_size_y') . $unit;
                        } else {
                            $pos[] = 'auto';
                        }
                        $res[] = 'background-size: ' . implode(' ', $pos);
                    } else {
                        $res[] = 'background-size: ' . $prop;
                        if ($prop === 'cover') {
                            $is_cover = true;
                        }
                    }
                }
                if ($is_cover) {
                    $res[] = 'background-attachment: fixed';
                } else if (Journal2Utils::getProperty($settings, 'value.bgimage_attach')) {
                    $res[] = 'background-attachment: ' . Journal2Utils::getProperty($settings, 'value.bgimage_attach');
                }
            }
        }

        return $res;
    }

    public static function getBorderCssProperties($settings) {
        $res = array();
        $unit = Journal2Utils::getProperty($settings, 'value.border_radius_unit', 'px');
        $has_border = false;

        /* width */
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border.value.text'))) {
            $has_border = true;
            $res[] = 'border-width: ' . Journal2Utils::getProperty($settings, 'value.border.value.text') . 'px';
        }
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border_top.value.text'))) {
            $has_border = true;
            $res[] = 'border-top-width: ' . Journal2Utils::getProperty($settings, 'value.border_top.value.text') . 'px';
        }
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border_right.value.text'))) {
            $has_border = true;
            $res[] = 'border-right-width: ' . Journal2Utils::getProperty($settings, 'value.border_right.value.text') . 'px';
        }
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border_bottom.value.text'))) {
            $has_border = true;
            $res[] = 'border-bottom-width: ' . Journal2Utils::getProperty($settings, 'value.border_bottom.value.text') . 'px';
        }
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border_left.value.text'))) {
            $has_border = true;
            $res[] = 'border-left-width: ' . Journal2Utils::getProperty($settings, 'value.border_left.value.text') . 'px';
        }

        /* radius */
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border_radius.value.text'))) {
            $res[] = 'border-radius: ' . Journal2Utils::getProperty($settings, 'value.border_radius.value.text') . $unit;
        }
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border_radius_top.value.text'))) {
            $res[] = 'border-top-left-radius: ' . Journal2Utils::getProperty($settings, 'value.border_radius_top.value.text') . $unit;
        }
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border_radius_right.value.text'))) {
            $res[] = 'border-top-right-radius: ' . Journal2Utils::getProperty($settings, 'value.border_radius_right.value.text') . $unit;
        }
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border_radius_bottom.value.text'))) {
            $res[] = 'border-bottom-right-radius: ' . Journal2Utils::getProperty($settings, 'value.border_radius_bottom.value.text') . $unit;
        }
        if (is_numeric(Journal2Utils::getProperty($settings, 'value.border_radius_left.value.text'))) {
            $res[] = 'border-bottom-left-radius: ' . Journal2Utils::getProperty($settings, 'value.border_radius_left.value.text') . $unit;
        }

        /* style */
        if ($has_border && Journal2Utils::getProperty($settings, 'value.border_type', 'solid')) {
            $res[] = 'border-style: ' . Journal2Utils::getProperty($settings, 'value.border_type', 'solid');
        }

        /* color */
        if (Journal2Utils::getProperty($settings, 'value.border_color.value.color')) {
            $res[] = 'border-color: ' . Journal2Utils::getColor(Journal2Utils::getProperty($settings, 'value.border_color.value.color'));
        }

        return $res;
    }

    public static function getVideoBackgroundSettings($video) {
        if (!$video) {
            return '';
        }

        $settings = array();
        $options = array();

        $extensions = array('mp4', 'webm', 'ogg');

        foreach ($extensions as $extension) {
            if (file_exists(DIR_APPLICATION . '../' .  $video . '.' . $extension)) {
                $settings[] = $extension . ': ' . $video;
            }
        }

        $extensions = array('jpg', 'jpeg', 'png');
        $poster = null;

        foreach ($extensions as $extension) {
            if (file_exists(DIR_APPLICATION . '../' .  $video . '.' . $extension)) {
                $settings[] = 'poster: ' . $video;
                $options[] = 'posterType: ' . $extension;
                break;
            }
        }

        return 'data-vide-bg="' . implode(', ', $settings) . '" data-vide-options="' . implode(', ', $options) . '"';
    }

    public static function getShadowCssProperties($settings) {
        $res = array();

        $x = trim(Journal2Utils::getProperty($settings, 'value.x_offset.value.text', ''));
        $y = trim(Journal2Utils::getProperty($settings, 'value.y_offset.value.text', ''));

        if ($x !== '' || $y !== '') {
            if (Journal2Utils::getProperty($settings, 'value.inner_shadow', '0')) {
                $res[] = 'inset';
            }

            $res[] = (int)$x . 'px';
            $res[] = (int)$y . 'px';

            if (is_numeric(Journal2Utils::getProperty($settings, 'value.blur.value.text'))) {
                $res[] = Journal2Utils::getProperty($settings, 'value.blur.value.text') . 'px';
            }

            if (is_numeric(Journal2Utils::getProperty($settings, 'value.spread.value.text'))) {
                $res[] = Journal2Utils::getProperty($settings, 'value.spread.value.text') . 'px';
            }

            if (Journal2Utils::getProperty($settings, 'value.color.value.color')) {
                $res[] = Journal2Utils::getColor(Journal2Utils::getProperty($settings, 'value.color.value.color'));
            }

            return array(
                'box-shadow: ' . implode($res, ' ')
            );
        }

        return array();
    }

    public static function resizeImage($tool, $image, $width = '', $height = '', $resize_type = '') {
        if (is_array($image)) {
            $image = self::getProperty($image, 'image', 'no_image.jpg');
        }

        if (!$image || !file_exists(DIR_IMAGE . $image) || !is_file(DIR_IMAGE . $image)) {
            $image = version_compare(VERSION, '2', '>=') ? 'no_image.png' : 'no_image.jpg';
        }

        $image = trim($image, '/');

        list($width_orig, $height_orig) = getimagesize(DIR_IMAGE . $image);

        if (!$width_orig || !$height_orig) {
            trigger_error('Image ' . $image . ' is invalid!');
            return false;
        }

        if (!is_numeric($width)) {
            $width = $width_orig;
        }

        if (!is_numeric($height)) {
            $height = $height_orig;
        }

        if ($resize_type === 'crop') {
            $ratio = (float)$width / $height;
            $ratio_orig = (float)$width_orig / $height_orig;
            if ($ratio > $ratio_orig) {
                $resize_type = 'w';
            } else {
                $resize_type = 'h';
            }
        } else {
            $resize_type = '';
        }
        return $tool->resize($image, $width, $height, $resize_type);
    }

    public static function canGenerateImages() {
        $functions = array(
            'imagettfbbox',
            'imagecreatetruecolor',
            'imagecolortransparent',
            'imagefilledpolygon',
            'imagecolorallocate',
            'imagettftext'
        );
        foreach ($functions as $function)
        if (!function_exists($function)) {
            return false;
        }
        return true;
    }

    public static function generateRibbon($text, $size, $color, $bgcolor) {
        $size_param = $size;
        $size = isset(self::$RIBBON_SIZES[$size]) ? self::$RIBBON_SIZES[$size] : self::$RIBBON_SIZES['medium'];
        $color = $color ? $color : 'rgb(0, 0, 0)';
        $bgcolor = $bgcolor ? $bgcolor : 'rgb(255, 255, 255)';

        $bgcolor = explode(', ', str_replace(array('rgb(', 'rgba(', ')'), array('', '', ''), $bgcolor));
        $color = explode(', ', str_replace(array('rgb(', 'rgba(', ')'), array('', '', ''), $color));
        /* vars */
        $font = DIR_SYSTEM . 'journal2/data/fonts/ribbon-font.ttf';
        $fontSize = $size['font'];
        $textColor = array($color[0], $color[1], $color[2]);
        $bgColor = array($bgcolor[0], $bgcolor[1], $bgcolor[2]);

        /* get text */
        //$text = strtoupper($text ? $text : 'Out Of Stock');
        $text = "     {$text}     ";

        /* generate image name */
        $file_name = md5($text) . "--{$size_param}--{$color[0]}-{$color[1]}-{$color[2]}--{$bgcolor[0]}-{$bgcolor[1]}-{$bgcolor[2]}.png";

        if (!file_exists(DIR_IMAGE . 'cache/' . $file_name)) {
            /* get text size */
            $box = imagettfbbox($fontSize, 45, $font, $text);
            $textWidth = abs($box[3] - $box[0]);
            $textHeight = abs($box[5] - $box[1]);
            $dim = $textHeight > $textWidth ? $textHeight : $textWidth;

            /* generate image */
            $image = imagecreatetruecolor($dim + $size['dim'], $dim + $size['dim']);
            imagecolortransparent($image, imagecolorallocate($image, 0, 0, 0));
            imagefilledpolygon($image, array(
                0, $dim + $size['dim'],
                0, $dim - $size['dim'],
                $dim - $size['dim'], 0,
                $dim + $size['dim'], 0,
                $dim, $size['dim'],
                $size['dim'], $dim
            ), 6, imagecolorallocate($image, $bgColor[0], $bgColor[1], $bgColor[2]));
            imagettftext($image, $fontSize, 45, $size['top'], $dim, imagecolorallocate($image, $textColor[0], $textColor[1], $textColor[2]), $font, $text);

            /* save image */
            imagepng($image, DIR_IMAGE . 'cache/' . $file_name);
        }

        return self::staticAsset('image/cache/' . $file_name);
    }

    public static function getRibbonSize($size) {
        switch ($size) {
            case 'small':
                return 'width="94" height="94"';
            case 'medium':
                return 'width="120" height="120"';
            case 'large':
                return 'width="152" height="152"';
        }
        return null;
    }

    public static function imgElement($src, $alt = '', $width = '', $height = '') {
        return 'src="' . $src . '" alt="' . $alt . '" width="' . $width . '" height="' . $height .'"';
    }

    public static function getLogo($config) {
        $name = $config->get('config_name');
        $image = $config->get('config_logo');

        if (is_array($image)) {
            $image = Journal2Utils::getProperty($image, $config->get('config_language_id'));
        }

        if (!$image || !file_exists(DIR_IMAGE . $image)) {
            return '';
        }

        list($width, $height) = getimagesize(DIR_IMAGE . $image);
        global $registry;

        $image = self::resizeImage($registry->get('model_tool_image'), $image);
        $image2x = $registry->get('journal2')->settings->get('retina_logo');

        $img = '';

        if ($image2x && file_exists(DIR_IMAGE . $image2x)) {
            $img .= "<img src=\"image/{$image2x}\" width=\"$width\" height=\"$height\" alt=\"$name\" title=\"$name\" class=\"logo-2x\" />";
        }

        $img .= "<img src=\"$image\" width=\"$width\" height=\"$height\" alt=\"$name\" title=\"$name\" class=\"logo-1x\" />";

        return $img;
    }

    public static function getHostName() {
        $protocol = isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1')) ? 'https' : 'http';
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null;
        return $protocol . '://' . $host;
    }

    public static function gravatar($email, $default = '', $size = 50, $alt = '') {
//        return '<img class="avatar" src="' . $default .'" width="' . $size . '" height="' . $size . '" alt="' . $alt . '" />';
        return '<img class="avatar" src="https://s.gravatar.com/avatar/' . md5(strtolower(trim($email))) . '?s=' . $size . '" width="' . $size . '" height="' . $size . '" alt="' . $alt . '" />';
    }

    public static function staticAsset($url) {
        if (self::isExternalResource($url)) {
            return $url;
        }
        $https = isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'));
        if ($https && defined('HTTPS_STATIC_CDN')) {
            return HTTPS_STATIC_CDN . $url;
        }
        if (defined('HTTP_STATIC_CDN')) {
            return HTTP_STATIC_CDN . $url;
        }
        global $config;
        return ($https ? $config->get('config_ssl') : $config->get('config_url')) .  $url;
    }

    public static function isEnquiryProduct($obj, $product) {
    	global $registry;

    	if (!is_array($product)) {
            return (bool)$registry->get('journal2')->settings->get('enquiry_products.' . $product, false);
        }

        if ($registry->get('journal2')->settings->get('enquiry_products') === 'all') {
            return true;
        }

        if ($registry->get('journal2')->settings->get('enquiry_products') === 'outofstock' && isset($product['labels']) && isset($product['labels']['outofstock'])) {
            return true;
        }

        return (bool)$registry->get('journal2')->settings->get('enquiry_products.' . $product['product_id'], false);
    }

    public static function isLocalResource($url) {
        if (strpos($url, '//') === 0) {
            return false;
        }
        return !filter_var($url, FILTER_VALIDATE_URL);
    }

    public static function isExternalResource($url) {
        return !self::isLocalResource($url);
    }

    public static function getDevice() {
        static $device;

        if ($device === null) {
            if (Journal2Cache::$mobile_detect->isMobile()) {
                if (Journal2Cache::$mobile_detect->isTablet()) {
                    $device = 'tablet';
                } else {
                    $device = 'phone';
                }
            } else {
                $device = 'desktop';
            }
        }

        return $device;
    }

    public static function currencyFormat($value, $format = true) {
        global $registry;
        global $session;

        if (version_compare(VERSION, '2.2', '>=')) {
            return $registry->get('currency')->format($value, $session->data['currency'], '', $format);
        } else {
            return $registry->get('currency')->format($value, '', '', $format);
        }
    }

    public static function getLanguageFlag($language) {
        if (version_compare(VERSION, '2.2', '>=')) {
            return Journal2Utils::staticAsset('catalog/language/' . $language['code'] . '/' . $language['code'] . '.png');
        } else {
            return Journal2Utils::staticAsset('image/flags/' . $language['image']);
        }
    }

    public static function link($url, $args = '', $ssl = null) {
        if ($ssl === true || $ssl = 'SSL') {
            $ssl = true;
        } else {
            $ssl = false;
        }

        global $registry;

        if (version_compare(VERSION, '2.2', '>=')) {
            return $registry->get('url')->link($url, $args, $ssl);
        } else {
            return $registry->get('url')->link($url, $args, $ssl ? 'SSL' : '');
        }
    }

}

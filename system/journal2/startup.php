<?php
/* version */
define('JOURNAL_VERSION', '2.16.4');


/* check if journal should be loaded */
$load_theme = !(defined('BLOCK_JOURNAL') && BLOCK_JOURNAL === true);

/* detect if is cli call */
if (php_sapi_name() === "cli") {
    $load_theme = false;
}

if (defined('VERSION')) {
	if (version_compare(VERSION, '3', '<')) {
		/* detect if is admin access */
		if (Front::$IS_ADMIN) {
			$load_theme = false;
		}

		/* detect if is install access */
		if (Front::$IS_INSTALLER) {
			$load_theme = false;
		}

		/* check if current theme is journal2 */
		if (!Front::$IS_JOURNAL) {
			$load_theme = false;
		}
	} else {
		/* detect if is admin access */
		if (Router::$IS_ADMIN) {
			$load_theme = false;
		}

		/* detect if is install access */
		if (Router::$IS_INSTALLER) {
			$load_theme = false;
		}

		/* check if current theme is journal2 */
		if (!Router::$IS_JOURNAL) {
			$load_theme = false;
		}
	}
} else {
	$load_theme = false;
}

/* check if is api call */
if (isset($_GET['route']) && strpos($_GET['route'], 'api/') === 0) {
    $load_theme = false;
}

if ($load_theme) {
    if (version_compare(VERSION, '2', '>=')) {
        /* Opencart 2.2.0.0 fix */
        if (version_compare(VERSION, '2.2', '>=')) {
            $config->set('config_template', 'journal2');
        }

        /* block OpenCart 2.0 */
        if (defined('J2SERVER') || defined('J2ENV')) {
            global $config;
            if (version_compare(VERSION, '3', '>=')) {
                $config->set('config_template', 'journal2_oc3');
            } else {
                $config->set('config_template', 'journal2_oc2');
            }
        }

        /* check if DIR_CATALOG is defined */
        if (defined('DIR_CATALOG')) {
            echo '
                <h3>Opencart OCMod config.php error detected. </h3>
                <p>Your config.php file creates a conflict with OCMod, probably caused by 1-click Opencart installers.</p>
                <p><strong>Solution:</strong> Edit config.php from your Opencart root installation and replace all lines of code found after: <pre>//DIR</pre> and before: <pre>//DB</pre> with the following:</p>
            ';

            if (version_compare(VERSION, '2.1', '>=')) {
                echo '
                <pre>
// DIR
define(\'DIR_ROOT\'           , \'' . realpath(dirname(__FILE__)  . '/../../') .'/\');
define(\'DIR_APPLICATION\'    , DIR_ROOT . \'catalog/\');
define(\'DIR_SYSTEM\'         , DIR_ROOT . \'system/\');
define(\'DIR_LANGUAGE\'       , DIR_ROOT . \'catalog/language/\');
define(\'DIR_TEMPLATE\'       , DIR_ROOT . \'catalog/view/theme/\');
define(\'DIR_CONFIG\'         , DIR_ROOT . \'system/config/\');
define(\'DIR_IMAGE\'          , DIR_ROOT . \'image/\');
define(\'DIR_CACHE\'          , DIR_ROOT . \'system/storage/cache/\');
define(\'DIR_DOWNLOAD\'       , DIR_ROOT . \'system/storage/download/\');
define(\'DIR_UPLOAD\'         , DIR_ROOT . \'system/storage/upload/\');
define(\'DIR_LOGS\'           , DIR_ROOT . \'system/storage/logs/\');
define(\'DIR_MODIFICATION\'   , DIR_ROOT . \'system/storage/modification/\');
                </pre>
            ';
            } else {
                echo '
                <pre>
// DIR
define(\'DIR_ROOT\'           , \'' . realpath(dirname(__FILE__)  . '/../../') .'/\');
define(\'DIR_APPLICATION\'    , DIR_ROOT . \'catalog/\');
define(\'DIR_SYSTEM\'         , DIR_ROOT . \'system/\');
define(\'DIR_LANGUAGE\'       , DIR_ROOT . \'catalog/language/\');
define(\'DIR_TEMPLATE\'       , DIR_ROOT . \'catalog/view/theme/\');
define(\'DIR_CONFIG\'         , DIR_ROOT . \'system/config/\');
define(\'DIR_IMAGE\'          , DIR_ROOT . \'image/\');
define(\'DIR_CACHE\'          , DIR_ROOT . \'system/cache/\');
define(\'DIR_DOWNLOAD\'       , DIR_ROOT . \'system/download/\');
define(\'DIR_UPLOAD\'         , DIR_ROOT . \'system/upload/\');
define(\'DIR_LOGS\'           , DIR_ROOT . \'system/logs/\');
define(\'DIR_MODIFICATION\'   , DIR_ROOT . \'system/modification/\');
                </pre>
            ';
            }
            exit();
        }

        /* check if DIR_MODIFICATION is writable */
        if (!is_writable(DIR_MODIFICATION)) {
            echo '
                <h3>Journal Installation Error</h3>
                <p><b>' . DIR_MODIFICATION . '</b> is not writable. Contact your hosting provider for more information.</p>
            ';
            exit();
        }

        /* check oc modifications */
        global $loader;
        if (!method_exists($loader, '__get')) {
            echo '
                <h3>Journal Installation Error</h3>
                <p>Access OpenCart Modifications Page and hit the Refresh button. <a href="http://docs.digital-atelier.com/opencart/journal/images/mods.png" target="_blank">See example.</a></p>
            ';
            exit();
        }
    } else {
        /* check if Journal 1.x is active */
        foreach ($this->pre_action as $act) {
            if ($act->getMethod() === 'journal_cp') {
                echo '
            <h3>Journal Installation Error</h3>
            <p>Open <b>index.php</b> from the root directory of your setup and remove this line of code as it is not needed anymore in Journal2:</p>
            <pre>$controller->addPreAction(new Action(\'module/journal_cp\'));</pre>
        ';
                exit();
            }
        }
    }
}

/* Check if Modules are enabled */
if ($load_theme && $this->registry->get('db')->query(str_replace('_', '\_', 'show tables like "' . DB_PREFIX . 'journal2_config"'))->num_rows === 0) {
    echo '
        <h3>Journal Installation Error</h3>
        <p>Journal2 module is not installed.</p>
    ';
    exit();
}

/* Check Template Version */
if ($load_theme) {
    global $config;
    require_once DIR_TEMPLATE . $config->get('config_template') . '/template/version.php';

    $version = explode('.', VERSION);
    $version = (int)$version[0];

    if ($version != JOURNAL_TEMPLATE_VERSION) {
        echo '
            <h3>Journal Installation Error</h3>
            <p>You have OpenCart ' . $version . '.x but you have installed Journal for OpenCart ' . JOURNAL_TEMPLATE_VERSION . '.x Read installation instructions <a href="http://docs.digital-atelier.com/opencart/journal/#/settings/install" target="_blank">here.</a></p>
        ';
        exit();
    }
}

/* start Journal 2 engine */
if ($load_theme) {
    /* load journal2 */
    require_once(DIR_SYSTEM . 'journal2/classes/journal2.php');
    Journal2::startTimer('Engine');
    define('JOURNAL_INSTALLED', true);

    /* Get current route */
    $current_route = isset($this->registry->get('request')->get['route']) ? $this->registry->get('request')->get['route'] : null;

    /* Utils */
    require_once(DIR_SYSTEM . 'journal2/classes/journal2_utils.php');

    /* DB Upgrade */
    require_once(DIR_SYSTEM . 'journal2/classes/journal2_db_upgrade.php');
    Journal2DBUpgrade::check();

    /* Load journal2 class */
    global $journal2;
    $journal2 = new Journal2();
    $this->registry->set('journal2', $journal2);

    /* Load Cache class */
    require_once(DIR_SYSTEM . 'journal2/classes/journal2_cache.php');
    $journal2->cache = new Journal2Cache($this->registry);

    /* Html Classes */
    require_once(DIR_SYSTEM . 'journal2/classes/journal2_html_classes.php');
    $journal2->html_classes = new Journal2HtmlClasses($this->registry);

    /* Add mobile / tablet class */
    if (Journal2Cache::$mobile_detect->isMobile()) {
        if (Journal2Cache::$mobile_detect->isTablet()) {
            $journal2->html_classes->addClass('tablet');
        } else {
            $journal2->html_classes->addClass('mobile');
        }
    } else {
        $journal2->html_classes->addClass('journal-desktop');
    }

    /* Load journal2 settings */
    require_once(DIR_SYSTEM . 'journal2/classes/journal2_settings.php');
    $journal2->settings = new Journal2Settings($this->registry);

    /* Load journal2 minifier */
    require_once(DIR_SYSTEM . 'journal2/classes/journal2_minifier.php');
    $journal2->minifier = new Journal2Minifier($journal2->cache);

    /* Google Fonts */
    require_once(DIR_SYSTEM . 'journal2/classes/journal2_google_fonts.php');
    $journal2->google_fonts = new Journal2GoogleFonts();

    /* Controllers */
    if ($current_route === 'module/journal2_popup/show') {
        $this->execute(new Action('module/journal2_popup/show'));
        die();
    }

    if ($current_route !== 'module/journal2_side_blocks/load') {
        $this->execute(new Action('journal2/settings'));
        if (!$journal2->cache->getDeveloperMode()) {
            if ($journal2->minifier->getMinifyCss()) {
                $this->execute(new Action('journal2/assets/css'));
            }
            if ($journal2->minifier->getMinifyJs()) {
                $this->execute(new Action('journal2/assets/js'));
            }
        }
    }

    /* Blog sitemap */
    if ($current_route === 'information/sitemap') {
        $this->execute(new Action('journal2/settings/sitemap'));
    }

    /* Route Parser */
    require_once(DIR_SYSTEM . 'journal2/classes/journal2_page.php');
    $journal2->page = new Journal2Page($this->registry, $journal2->html_classes);

    /* Calculate columns */
    $this->execute(new Action('journal2/settings/columns'));

    if (!in_array($current_route, array('module/journal2_side_blocks/load', 'journal2/assets/js', 'journal2/assets/css', 'journal2/assets/outofstock', 'product/product/captcha', 'information/contact/captcha', 'tool/captcha'))) {
        $this->execute(new Action('journal2/product_tabs'));
        $this->execute(new Action('journal2/product_tabs/enquiry'));
        $this->execute(new Action('journal2/modules'));
        if (version_compare(VERSION, '2', '>=')) {
            if (version_compare(VERSION, '2.2', '>=')) {
                global $loader;
                $loader->controller('journal2/menu/header',   'primary_menu');
                $loader->controller('journal2/menu/header',   'secondary_menu');
                $loader->controller('journal2/menu/mega',     'mega_menu');
                $loader->controller('journal2/menu/footer',   'footer_menu');
            } else {
                $this->execute(new Action('journal2/menu/header',   'primary_menu'));
                $this->execute(new Action('journal2/menu/header',   'secondary_menu'));
                $this->execute(new Action('journal2/menu/mega',     'mega_menu'));
                $this->execute(new Action('journal2/menu/footer',   'footer_menu'));
            }
        } else {
            $this->execute(new Action('journal2/menu/header',   (array('primary_menu'))));
            $this->execute(new Action('journal2/menu/header',   (array('secondary_menu'))));
            $this->execute(new Action('journal2/menu/mega',     (array('mega_menu'))));
            $this->execute(new Action('journal2/menu/footer',   (array('footer_menu'))));
        }

        $this->execute(new Action('journal2/snippets'));
        $this->execute(new Action('journal2/category/refine_images'));
    }

    Journal2::stopTimer('Engine');
}

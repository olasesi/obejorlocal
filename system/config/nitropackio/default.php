<?php

// Never modify this file. Instead, create a new file called override.php in the same directory as this file. If a constant in override.php exists, it takes precedence over the constant in this file.

// Main constants. Do not modify unless you know what you are doing.
if (!defined('NITROPACK_DIR_BASE')) define('NITROPACK_DIR_BASE', DIR_SYSTEM . 'library/nitropackio/');
if (!defined('NITROPACK_DIR_SETTING')) define('NITROPACK_DIR_SETTING', NITROPACK_DIR_BASE . 'setting/');
if (!defined('NITROPACK_DIR_HTML')) define('NITROPACK_DIR_HTML', NITROPACK_DIR_BASE . 'html/');
if (!defined('NITROPACK_PARTNER_ID_FILE')) define('NITROPACK_PARTNER_ID_FILE', NITROPACK_DIR_SETTING . 'partner_id');
if (!defined('NITROPACK_OPENCART_VERSION')) define('NITROPACK_OPENCART_VERSION', VERSION);
if (!defined('NITROPACK_ERROR_LOG_FILESIZE_LIMIT')) define('NITROPACK_ERROR_LOG_FILESIZE_LIMIT', 8388608);
if (!defined('NITROPACK_DEBUG_LOG_FILESIZE_LIMIT')) define('NITROPACK_DEBUG_LOG_FILESIZE_LIMIT', 8388608);

// TRUE to disable NitroPack for all admin sessions. FALSE to enable it for everyone. This does not make NitroPack work on the admin panel.
if (!defined('NITROPACK_DISABLED_FOR_ADMIN')) define('NITROPACK_DISABLED_FOR_ADMIN', false);

// TRUE to always force cache invalidation in all cases, except for the Journal cookie events. FALSE to use the default behavior.
if (!defined('NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE')) define('NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE', false);

// TRUE to always force cache purge in all cases
if (!defined('NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE')) define('NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE', false);

// TRUE if quantity editions (between >0 and =0) should clear all product pages. FALSE to clear only the product/product route for this product.
if (!defined('NITROPACK_AUTO_CACHE_CLEAR_QUANTITY_CLEAR_ALL')) define('NITROPACK_AUTO_CACHE_CLEAR_QUANTITY_CLEAR_ALL', true);

// TRUE if stock status editions should clear all product pages. FALSE to clear only the product/product route for this product.
if (!defined('NITROPACK_AUTO_CACHE_CLEAR_STOCK_STATUS_CLEAR_ALL')) define('NITROPACK_AUTO_CACHE_CLEAR_STOCK_STATUS_CLEAR_ALL', true);

// TRUE if we want to mimic the OpenCart HTTP_ACCEPT_LANGUAGE logic in startup.php. FALSE for custom cases where this is disabled
if (!defined('NITROPACK_USE_HTTP_ACCEPT_LANGUAGE')) define('NITROPACK_USE_HTTP_ACCEPT_LANGUAGE', true);

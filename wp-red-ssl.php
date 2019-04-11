/**
* Plugin Name: WP Red SSL
* Plugin URI: https://github.com/rednode-ltd/wp-red-ssl/
* Description: Forces Wordpress to load everything with HTTPS.
* Version: 1.0
* Author: RedNode LTD
* Author URI: https://rednode.gr/
**/

define('FORCE_SSL_ADMIN', true);

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
    $_SERVER['HTTPS'] = 'on';
}

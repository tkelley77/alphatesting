<?php
# Database Configuration
define( 'DB_NAME', 'wp_kaster' );
define( 'DB_USER', 'kaster' );
define( 'DB_PASSWORD', 'gAWEGrrRfhFCHPw2qh6F' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'Eh_O-PrCgC9uqPrv$_(CSGP-G3+9NY1YcXyB2dBu+1TCt6-w#HpviA~2+GU#?5HU');
define('SECURE_AUTH_KEY',  'kChL-9na7U,wB,D_Ds%0)qGC-F0thE7GQLr+jZ5E.U+95yQ^RSm7?6.apg@(porh');
define('LOGGED_IN_KEY',    '*D=Us4D9gCqLkU1v@6jn7QO4f=eutzjc4q1Csc(12c,gpOdna)$p#%T%+-IXsC0s');
define('NONCE_KEY',        'kKrIQnhUspp#E&kr(CyT_Z4*Jq!s_UYxIoU45IKCnO?%9T5~@0^?w$87bc4G8PAO');
define('AUTH_SALT',        '5_k1c-F4n,3x(i5WBw__9Ix^Dim3O8,0c-iNo98lvnZJ~Nst^D,3^~rvF30s?PIU');
define('SECURE_AUTH_SALT', 't-!rE#lJH0o8n.jOxW52r^0@2hyb^A)N5gJ__*!q8yg-h+9HY!nIDx.A#$,dwIL-');
define('LOGGED_IN_SALT',   'xFWPa(dD%g)Q#h=id.6+BbsD%M(r2QYN#o?JoAjoh-n.bf3k%P?9qZ$z33~N9vVH');
define('NONCE_SALT',       '=UZU=H=sUb?sW#w#(-+aBtUS@?.-19Nl1zswY^Mw=SeKEF-QXy+z*7i$b%e9(*qB');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'kaster' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', '19d666abcd5a3dc9d0c3954192d4947446dbf5ca' );

define( 'WPE_CLUSTER_ID', '401316' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '35.242.161.108' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'kaster.wpengine.com', 1 => 'kaster.wpenginepowered.com', 2 => 'www.kaster.wpengine.com', );

$wpe_varnish_servers=array ( 0 => '127.0.0.1', );

$wpe_special_ips=array ( 0 => '35.234.158.193', 1 => 'pod-401316-utility.pod-401316.svc.cluster.local', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


define('PWP_DOMAIN_CONFIG', 'kaster.wpengine.com' );

# WP Engine Settings


// testing 



# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');

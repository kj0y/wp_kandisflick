<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', FALSE ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

# Database Configuration
define( 'DB_NAME', 'wp_kandisflick' );
define( 'DB_USER', 'kandisflick' );
define( 'DB_PASSWORD', 'C1nKWHaqZVHkS1GkbjqF' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'd87_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'HGrQ=bsd#j)Jt!M~4brA+*Q,]8D#dlB@y-t5?!MRs*94AL: FGQNSr@f&5sG!AQk');
define('SECURE_AUTH_KEY',  '!+S pj2zm(bE/iRnva1c*i~bw+d9N6}vpVw-WwsUq&KJ=8K7yPV>HN[W!y|;{z:O');
define('LOGGED_IN_KEY',    'K)l.=]jG1RA=|<(;-7_eA.Glr7_Fm7wa?4Ni>e$c38fwC=(QDq+Tz^i+MLFoVzDR');
define('NONCE_KEY',        '{>y W&HBV)G1!,&RPQ2R#%8S1l+}I,HY0d<NYes0xd{a|~MkR;;M+3{U=.+JUE-8');
define('AUTH_SALT',        ',bwE4IXT3*&q|cAFc;f>6NmXs%`IKdv/U:W&qn2{0(|U-]D>r5Ze*G)rJ]?c0DF@');
define('SECURE_AUTH_SALT', 'rr:%A/=n)FJ:W%A@+])fZc/7-ke* -Gqa<u|jJ^e9Qn]4g3#Omgha!{*zx.%YX-e');
define('LOGGED_IN_SALT',   'PCnX~{4V7-!i,G}{E1F>a!$c2 P_LZ}>tGso2-R8gp/VS*ICF|)~)jlA.`eO-NSN');
define('NONCE_SALT',       ')^}q*-T(mBf&4$;t2]NLa,TT&hkQAc7]e-z?Mf[KY[!I~ya&hB$ly>N9p=?N%5bH');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'WP_DEBUG', false);

define( 'PWP_NAME', 'kandisflick' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '8affcc92e110be6cc2352e946539ed348bd1f2ec' );

define( 'WPE_CLUSTER_ID', '140093' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

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

$wpe_all_domains=array ( 0 => 'kandisflick.com', 1 => 'kandisflick.wpengine.com', 2 => 'www.kandisflick.com', );

$wpe_varnish_servers=array ( 0 => 'pod-140093', );

$wpe_special_ips=array ( 0 => '35.185.204.105', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );


# WP Engine ID


# WP Engine Settings







# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}


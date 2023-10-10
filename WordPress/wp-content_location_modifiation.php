define ('WP_CONTENT_FOLDERNAME', 'assets');
define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME) ;

define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME);
define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/' );

define( 'UPLOADS', 'files' );

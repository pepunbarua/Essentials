<?php
//এই কোড দিয়ে wp-content ফোল্ডার এর নাম পরিবর্তন করে, অর্থাৎ আপনি এখন ফোল্ডার রিনেম করে assets নাম দিতে পারেন।
define ('WP_CONTENT_FOLDERNAME', 'assets');
define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME) ;

//এই কোড দিয়ে uploads ফোল্ডার এর নাম পরিবর্তন করে, অর্থাৎ আপনি এখন ফোল্ডার রিনেম করে files নাম দিতে পারেন। তবে এক্ষেত্র লক্ষনীয় বিষয় হলো
define( 'UPLOADS', 'files' );

define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME);
define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/' );



<?php
//এই কোড দিয়ে wp-content ফোল্ডার এর নাম পরিবর্তন করে, অর্থাৎ আপনি এখন ফোল্ডার রিনেম করে assets নাম দিতে পারেন।
define ('WP_CONTENT_FOLDERNAME', 'assets');
define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME) ;

/* এই কোড দিয়ে uploads ফোল্ডার এর নাম পরিবর্তন করে, অর্থাৎ আপনি এখন ফোল্ডার রিনেম করে files নাম দিতে পারেন।
তবে এক্ষেত্র লক্ষনীয় বিষয় হলো, আমরা uploads এর নাম পরিবর্তন করেছি তবে সেটাকে রুট ফোল্ডারে রেখেছ, অর্থাৎ নিচের কোডটি ব‍্যবহার করলে
অবশ‍্যই upload ফোল্ডারটি wp-content থেকে বের করে রুট ফোল্ডারে নিয়ে আসতে হবে।
অথবা আপনি define( 'UPLOADS', 'assets/files'); এভাবে ব‍্যবহার করতে পারেন,
তাহলে upload ফোল্ডারটি আর wp-content/assets থেকে বের করতে হবে না শুধুমাত্র uploads ফোল্ডারকে রিনেম করে files লিখলেই চলবে।
*/
define( 'UPLOADS', 'files' );

define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME);
define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/' );



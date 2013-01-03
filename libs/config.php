<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', 'http://127.0.0.1/EasterIsland_Alpha/');
define('LIBS', 'libs/');
define('JS_PATH', URL.'public/js/');
define('CSS_PATH', URL.'public/css/');
define('IMG_PATH', URL.'public/images/');
define('APP_PATH', 'app/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'dbeasterisland');
define('DB_USER', 'root');
define('DB_PASS', 'adminadmin123');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');
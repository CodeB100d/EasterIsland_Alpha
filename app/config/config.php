<?php
/*
 * CONFIGURATION FILE: 
 * Changing the array configuration names will affect your whole program static variables.
 */

/*
 * Base Url
 */
$config['base_url'] = "http://localhost/EasterIsland_Alpha/";
/*
 * Character Set Path
 */
$config['charset'] = 'UTF-8';
/*
 * Cache Path
 */
$config['cache_path'] = 'cache';
/* 
 * Encryption Configuration
 */
$config['hash_general_key'] = "MixitUp200";
$config['hash_password_key'] = "catsFLYhigh2000miles";
/*
 * Session Configuration
 */
$config['sess_cookie_name'] = 'ei_session';
$config['sess_expiration']	= 7200;
$config['sess_expire_on_close']	= TRUE;
$config['sess_encrypt_cookie']	= TRUE;
$config['sess_use_database']	= TRUE;
$config['sess_table_name'] = 'ei_sessions';
$config['sess_match_ip'] = TRUE;
$config['sess_match_useragent']	= TRUE;
$config['sess_time_to_update']	= 300;
/*
 * Cross Site Scripting Filtering
 */
$config['global_xss_filtering'] = TRUE;
/*
 * Cross Site Request Forgery
 */
$config['csrf_protection'] = TRUE;
$config['csrf_token_name'] = 'csrf_ei_';
$config['csrf_cookie_name'] = 'csrf_ei_';
$config['csrf_expire'] = 7200;
/*
 * Time Reference Local
 */
$config['time_reference'] = 'local';

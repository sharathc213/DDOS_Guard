<?php
// Configuration settings
$config = array(
    // 'templateFolder' => 'Templates',
    'enable_whitelist' => true, // Enable whitelist feature
    'whitelist_path' => 'DDOS Guard/LogAndFiles/whitelist.txt', // Path to whitelist file
    'enable_blacklist' => true, // Enable blacklist feature
    'blacklist_path' => 'DDOS Guard/LogAndFiles/blacklist.txt', // Path to blacklist file
    'enable_rate_limit' => true , // Enable rete limit check
    'ratelimit_timeout' => 5 , // Enable rete limit timeout in seconds
    'rate_limit_threshold' => 5, // Rate limit threshold (requests per minute)
    'enable_http_flood_check' => false, // Enable http_flood_check
    'enable_ban' => true, // Enable http_flood_check
    'http_flood_threshold' => 5, // HTTP flood detection threshold (requests per second)
    'log_path' => 'DDOS Guard/LogAndFiles/access.log', // Path to log file
    'enable_captcha' => true, // Enable captcha
    'captcha_threshold' => 2, // CAPTCHA verification threshold
    'captcha_secret_key' => '6LdW6rMpAAAAABMueT2R4OdWkKkRdN7MeHjqEz-e', // CAPTCHA secret key
    'recaptcha_site_key' => '6LdW6rMpAAAAAKnbRNTs0H6h61OHYVI9i__QWHn1', // reCAPTCHA site key
    'recaptcha_script_url' => 'https://www.google.com/recaptcha/api.js', // reCAPTCHA script URL
    'enable_useragent_check' => false, // Enable user agent check
    'not_rated_ua' => array( // Trusted user agents
        'CleanTalk Uptime bot.+',
        'Googlebot', 
        'Bingbot',
        'Baiduspider',
        'YandexBot',
        'facebot',
        'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)',
        'ia_archiver',
        'firefox'
    ),

    //Template
    'blacklist_template'=>'DDOS Guard/Templates/accessdenied.php',
    'captcha_fail_template'=>'DDOS Guard/Templates/captcha_fail.php',
    'captcha_template'=>'DDOS Guard/Templates/captcha.php',
    'ratelimit_template'=>'DDOS Guard/Templates/ratelimit_exced.php',
    'http_flood_template'=>'DDOS Guard/Templates/http_flood_template.php',
);
?>

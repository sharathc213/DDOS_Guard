<?php
if ($config['enable_http_flood_check']) {
    $key2 = 'http_flood_count_' . $ip;
    
    if (!isset($_SESSION[$key2])) {
        $_SESSION[$key2] = 1;
    } else {
        $_SESSION[$key2]++;
    }
    // HTTP Flood Detection
    if ($_SESSION[$key2] > $config['http_flood_threshold']) {
        if ($config['enable_ban'] && $config['enable_blacklist']) {
        addToBlacklist($ip,$config);
        }
        http_response_code(429); // Too Many Requests
        include($config['http_flood_template']);
        exit();
    }
    }
    
?>
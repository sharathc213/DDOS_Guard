<?php
if ($config['enable_rate_limit']) {
// Rate Limiting

// Get the current timestamp

// Initialize request count and last request time if not set
if (!isset($_SESSION[$key]) || !isset($_SESSION[$time_key])) {
    $_SESSION[$key] = 1;
    $_SESSION[$time_key] = $current_time;
    $_SESSION[$trigger_key]=false; 
} else {


    if ($elapsed_time >= 1 && !$_SESSION[$trigger_key]) {
        $_SESSION[$key] = 1;
        $_SESSION[$time_key] = $current_time;
    } else {
        // If the elapsed time is within one second, increment the count
        $_SESSION[$key]++;
     
        // Check if the request count exceeds the limit
        if ($elapsed_time >= 5 && $_SESSION[$trigger_key]) {
            $_SESSION[$key] = 1;
            $_SESSION[$time_key] = $current_time;
            $_SESSION[$trigger_key] = false; 
            if ($config['enable_captcha']) {
                include('Functions/Captcha.php');
                exit();
            }else{
            http_response_code(429); // Too Many Requests
            include($config['ratelimit_template']);
            exit();
            }
        }
        if ($_SESSION[$key] > $config['rate_limit_threshold']) {
            $_SESSION[$trigger_key] = true;
            if ($config['enable_captcha']) {
                include('Functions/Captcha.php');
                exit();
            }else{
            http_response_code(429); // Too Many Requests
            include($config['ratelimit_template']);
            exit();
            }
        }
        
    }
}

}
?>
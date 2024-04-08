<?php
if ($config['enable_useragent_check']) {
// Function to check if User-Agent is trusted
function isTrustedUserAgent($user_agent, $not_rated_ua) {
    foreach ($not_rated_ua as $ua_pattern) {
        if (preg_match('/' . $ua_pattern . '/i', $user_agent)) {
            return true; // User-Agent is trusted
        }
    }
    return false; // User-Agent is not trusted
}
// Check if User-Agent is trusted
if (isset($_SERVER['HTTP_USER_AGENT']) && isTrustedUserAgent($_SERVER['HTTP_USER_AGENT'], $config['not_rated_ua'])) {
    // Skip all checks for trusted user agents and serve the content directly
   $trust = true;
}

}
?>
<?php

if ($config['enable_blacklist']) {
    $blacklist = file($config['blacklist_path'], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (in_array($ip, $blacklist)) {
        http_response_code(403); // Forbidden
        include($config['blacklist_template']);
        exit();
    }
}

?>
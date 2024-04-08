<?php
if ($config['enable_whitelist']) {
    $whitelist = file($config['whitelist_path'], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (in_array($ip, $whitelist)) {
       $trust=true;
    }}

?>
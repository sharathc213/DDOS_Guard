<?php
$log_data = date('Y-m-d H:i:s') . ' - ' . $ip . ' - ' . $_SERVER['REQUEST_METHOD'] . ' ' . $_SERVER['REQUEST_URI'] . PHP_EOL;
file_put_contents($config['log_path'], $log_data, FILE_APPEND);
?>
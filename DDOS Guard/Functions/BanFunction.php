<?php
function addToBlacklist($ip,$config) {
    
    // Path to the blacklist file
    $blacklist_file = $config['blacklist_path'];

    // Open the file in append mode
    $file_handle = fopen($blacklist_file, 'a');

    // Check if file opened successfully
    if ($file_handle === false) {
        return false; // Unable to open file
    }

    // Write the IP address to the file
    fwrite($file_handle, $ip . PHP_EOL);

    // Close the file
    fclose($file_handle);

    return true; // IP address added to blacklist successfully
}
?>
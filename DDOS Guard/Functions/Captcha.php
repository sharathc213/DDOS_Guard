<?php
// CAPTCHA Verification
if ($config['enable_captcha']) {
if ($_SESSION[$key] > $config['captcha_threshold']) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($_POST['g-recaptcha-response'])) {
            include($config['captcha_fail_template']);
            http_response_code(403); // Forbidden
            exit();
        }

        $captcha_response = $_POST['g-recaptcha-response'];
        $secret_key = $config['captcha_secret_key'];

        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$captcha_response");
        $response_keys = json_decode($response, true);
echo $response;
        if (!$response_keys['success']) {
            include($config['captcha_fail_template']);
            http_response_code(403); // Forbidden
            exit();
        }else{
            $_SESSION[$key] = 1;
            $_SESSION[$time_key] = $current_time;
            header("Location: {$_SERVER['REQUEST_URI']}");
            exit();

        }
    } else {

        include($config['captcha_template']);
        exit;
    }
}
}
?>
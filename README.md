## DDOS Guard

DDOS Guard is a PHP-based solution for protecting your website from various types of attacks, including Distributed Denial of Service (DDoS) attacks, HTTP flood attacks, and more. It provides a set of features to mitigate these threats and secure your website's availability.
![DDOS](https://github.com/sharathc213/DDOS_Guard/blob/main/DDOS.jpg).
### Installation

To integrate DDOS Guard into your website, simply include the `DDOS.php` file in your PHP files like this:

```php
<?php
include("DDOS Guard/DDOS.php");
?>
```

Ensure that you update the path according to your file structure.

### Usage

Once integrated, DDOS Guard will automatically start protecting your website based on the configuration settings provided in the `config.php` file.

### Configuration

Modify the `config.php` file to customize DDOS Guard's behavior according to your requirements. Here are some of the key configuration options:

- `enable_whitelist`: Enable or disable the whitelist feature.
- `whitelist_path`: Path to the whitelist file.
- `enable_blacklist`: Enable or disable the blacklist feature.
- `blacklist_path`: Path to the blacklist file.
- `enable_rate_limit`: Enable or disable rate limiting.
- `rate_limit_threshold`: Rate limit threshold (requests per minute).
- `enable_http_flood_check`: Enable or disable HTTP flood detection.
- `http_flood_threshold`: HTTP flood detection threshold (requests per second).
- `enable_captcha`: Enable or disable CAPTCHA verification.
- `captcha_threshold`: CAPTCHA verification threshold.
- `captcha_secret_key`: CAPTCHA secret key.
- `recaptcha_site_key`: reCAPTCHA site key.
- `log_path`: Path to the log file.
- `enable_useragent_check`: Enable or disable user agent check.

Feel free to customize these settings according to your specific needs.

### Templates

DDOS Guard provides customizable templates for different scenarios:

- `blacklist_template`: Template for displaying access denied message for blacklisted IPs.
- `captcha_fail_template`: Template for displaying CAPTCHA verification failure message.
- `captcha_template`: Template for displaying the CAPTCHA form.
- `ratelimit_template`: Template for displaying rate limit exceeded message.
- `http_flood_template`: Template for displaying HTTP flood detection message.

You can modify these templates to match the look and feel of your website.

### Contributing

If you encounter any issues or have suggestions for improvement, feel free to open an issue or submit a pull request.

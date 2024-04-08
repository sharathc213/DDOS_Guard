<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 Not Found</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #222;
      color: #fff;
      text-align: center;
      padding: 50px;
    }

    h1 {
      font-size: 36px;
    }

    p {
      font-size: 18px;
    }

    a {
      color: #fff;
      text-decoration: none;
      border: 1px solid #fff;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #333;
    }
  </style>
</head>
<body>
  <h1>Captcha</h1>
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>
  <form method='POST'>
    <div class='g-recaptcha' data-sitekey='<?php echo $config['recaptcha_site_key'] ?>'></div>
    <input type='submit' value='Submit CAPTCHA'>
  </form>
</body>
</html>

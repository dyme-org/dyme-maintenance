<?php
http_response_code(503)
?>
<!doctype html>

<html>
<head>
  <meta charset="utf-8">

  <title>Temporary maintenance - Dyme</title>
  <meta name="description" content="Dyme is temporarily unavailable, but will be right back">
  <meta name="author" content="SitePoint">

  <style>
    * {
      box-sizing: border-box;
    }

    html {
      font-family: sans-serif, Arial;
      text-align: center;
      height: 100%;
      padding: 32px;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;

      margin: 0;
      background-color: #D2F5FF;
    }

    img {
      width: 128px;
      margin-bottom: 32px;
    }
  </style>

</head>

<body>

<div class="content">
  <img src="logo.png" alt="Dyme logo">
  <h1>Dyme is temporarily unavailable</h1>

  <p>We're performing server maintenance, but will be right back.</p>

  <p>For any questions, contact us at <a href="mailto:support@dyme.app">support@dyme.app</a></p>
</div>

</body>
</html>

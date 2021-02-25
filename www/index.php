<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Index</title>
  <meta charset="UTF-8" />
</head>
<body>
    <h1>It Works!</h1>
    <p>The site at www is live. Modify this page at <b>www/index.php</b>.</p>
    <footer>
        <?php echo $_SERVER['SERVER_SIGNATURE']; ?>
        <hr>
        <h3>PHP info.</h3>
    </footer>
<?php phpinfo(); ?>
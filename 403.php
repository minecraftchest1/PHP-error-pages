<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>403-Forbidden</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>403 - Forbidden</h1>
    <p>You have attempted to access an resoursce (<b><i><?php echo $_SERVER['REQUEST_URI']; ?></i></b>) that you do not have access to.</p>
    <hr />
    <footer>
        <address>
                <?php echo $_SERVER['SERVER_SIGNATURE']; ?>
        </address>
    </footer>
</body>
</html>
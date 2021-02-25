<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>404-Not Found</title>
    <meta charset="UTF-8">
    </head>
<body>
    <h1>404 - Not found</h1>
    <p>The resoursce at <b><i><?php echo $_SERVER['REQUEST_URI']; ?></i></b> could not be found. Please check your URL and try again.</p>
    <hr />
    <footer>
        <address>
                <?php echo $_SERVER['SERVER_SIGNATURE']; ?>
        </address>
    </footer>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>502-Internal Server Error</title>
    <meta charset="UTF-8">
    </head>
<body>
    <h1>502 - Bad Gateway</h1>
    <p>The resoursce at <b><i><?php echo $_SERVER['REQUEST_URI']; ?></i></b> appars to be a proxy, and an invaliad response has came from the upstream resource. Please try again later.</p>
    <hr />
    <footer>
        <address>
                <?php echo $_SERVER['SERVER_SIGNATURE']; ?>
        </address>
    </footer>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>502-Internal Server Error</title>
    <meta charset="UTF-8">
    </head>
<body>
    <h1>504 - Gateway Timeout</h1>
    <p>The resoursce at <b><i><?php echo $_SERVER['REQUEST_URI']; ?></i></b> appars to be a proxy, and a timeout has occured while waiting for the upstream resource. Please try again later.</p>
    <hr />
    <footer>
        <address>
                <?php echo $_SERVER['SERVER_SIGNATURE']; ?>
        </address>
    </footer>
</body>
</html>
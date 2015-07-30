<?php
    require_once 'app/init.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Facebook log in</title>
    </head>
    <body>
        <?php if(!isset($_SESSION['facebook'])): ?>
            <a href="<?php echo $facebook->getLoginUrl(); ?>">Sign in with Facebook</a>
        <?php endif; ?>
    </body>
</html>

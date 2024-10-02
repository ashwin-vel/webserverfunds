<!DOCTYPE html>
<html>
    <body>
    <p><?= $_SERVER['HTTP_USER_AGENT'] ?></p>
    <p> GET: <?= var_dump($_GET) ?> </p>
    <p>POST: <?= var_dump($_POST) ?></p>
    </body>
 </html>
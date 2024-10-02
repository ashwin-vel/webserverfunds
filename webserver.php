<!DOCTYPE html>
<html>
    <body>
        <div> Hi, your name is: <?= "Hello, " . htmlspecialchars($_POST['firstname']  . " " . $_POST['lastname'] ."") ?>. 
        <br>
        Your School is: <?= htmlspecialchars($_POST['school']) ?>. 
        <br>
        Your Birthday: <?= htmlspecialchars($_POST['birthday']) ?>. 
    </div>
    </body>
 </html>
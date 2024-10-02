<!DOCTYPE html>
<html>
    <body>
        <div> Hi, your name is: <?= "Hello, " . $_POST['firstname']  . " " . $_POST['lastname'] .""; ?>. 
        <br>
        Your School is: <?= $_POST['school'] ?>. 
        <br>
        Your Birthday: <?= $_POST['birthday'] ?>. 
    </div>
    </body>
 </html>
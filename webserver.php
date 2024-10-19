<!DOCTYPE html>
<html>
    
<head>
        <title>SQL test</title>
        <?php
            $bank_name = htmlspecialchars($_GET["bank_name"]); 
            $banknam = htmlspecialchars($_GET["banknam1"]); 
            $custo = htmlspecialchars($_GET["custo"]); 
            $sin = htmlspecialchars($_GET["sinnum1"]); 

            $server = "localhost";
            $username = "kevin";
            $password = "kevin05";
            $database = "scamdb";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select custname, sinnum from creditcard_num where bank_name='{$bank_name}';";
            $result = mysqli_query($conn, $sql);

            $sql1 = "INSERT INTO creditcard_num (custname, sinnum, bank_name ) VALUES ('$custo',$sin,'$banknam');";
            $result1 = mysqli_query($conn, $sql1);

            
        ?>
    </head>

    <body>
        You selected a  <?= $bank_name ?> bank.<br/>
    
             <div>  Hi, you have  added this to the SCAM database Yoopie! is: <?= htmlspecialchars($_POST['custo'] ) ?>.
             <br>
             The Added Sin Number is: <?= htmlspecialchars($_POST['sinnum1']) ?>. 
             <br>
            The added bank is: <?= htmlspecialchars($_POST['banknam1']) ?>. 
            
       

    </body>










 </html>
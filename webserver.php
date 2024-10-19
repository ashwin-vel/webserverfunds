<!DOCTYPE html>
<html>
    
<head>
        <title>SQL test</title>
        <?php
            $bank_name = htmlspecialchars($_GET["bank_name"]); 
            $banknam = htmlspecialchars($_GET["banknam"]); 
            $custo = htmlspecialchars($_GET["custname"]); 
            $sin = htmlspecialchars($_GET["sinnum"]); 

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
        <?php
            foreach($result as $row) // There should only be one row returned!
            {
                echo "{$row['custname']} has $bank_name and his SIN number is {$row['sinnum']} . \n";
            }
            // Don't forget to close the connection!
            mysqli_close($conn);
        ?>
    </body>







 </html>
<!DOCTYPE html>
<html>
    
<head>
        <title>SQL test</title>
        <?php
            $server = "localhost";
            $username = "kevin";
            $password = "kevin05";
            $database = "scamdb";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select custname from creditcard_num where bank_name='{$bankname}';";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>

    <body>
        You selected a bank <?= $bankname ?>.<br/>
        <?php
            foreach($result as $row) // There should only be one row returned!
            {
                echo "{$row['custname']} has {$row['num_students']} bank. \n";
            }
            // Don't forget to close the connection!
            mysqli_close($conn);
        ?>
    </body>







 </html>
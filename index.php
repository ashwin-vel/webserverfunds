<!DOCTYPE html>
    <html>
        <head>
          
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
            $sql = "select * from creditcard_num;";
            $result = mysqli_query($conn, $sql);

            
        ?>
    </head>

            <script>
                   function clickonit() {document.getElementById("exit").innerHTML = "Thank You For Signing out"}

            </script>
            
              <script>
                  function Toggler() {
                    var x = document.getElementById("city");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }
                </script>



        <script>
          function Imagechange() {
            document.getElementById("scam").src = "images/mem.jpg";
          }
        </script>
        

        <script>
        function changeText(id) {
          id.innerHTML = "Confirmed Toronto Supporter";
        }


        
        </script>
        <script>
         function filefetch() {
          getText("myfile.txt")
          async function getText(file) {
          let x = await fetch(file);
          let y = await x.text();
          document.getElementById("text").innerHTML = y;
          }   
        }   
          

        </script>
        <a href="https://youtu.be/dQw4w9WgXcQ?si=6Vp7YwLGTtcVRIGR"> Click Now To Find Out Your Future </a>
        </head>
            <body>
              <div>
                <h1> Download and Find Out Your Horscope </h1>
                <h2> Find Out Now To See Your Future </h2>
                <br>
                <a href="page2.html">Donate Page</a>
                <p>
                  Unlock the secrets of your future with just one click! 
                  🌟 Discover what the stars have in store for you today. 
                  Whether youre seeking love, success, or a fresh start, 
                  our personalized horoscopes offer the guidance you need. 
                  Dont miss out on the cosmic insights that could change your life. 
                  Click now and let the universe reveal your destiny! ✨🔮
                </p>
                </div>
                  
                <img src="images/indian.jpg" width="300" height="300">
                <br>

                
                <ul>
                    <li> birthday </li>
                    <li>Full Name</li>
                    <li>Bank Account Number</li>
                    <li>Favorite Color</li>
                  </ul>
       <form action="webserver.php" method="get">
            <label for="bank_name">Select a Bank:</label><br/>
            <select id="bank_name" name="bank_name">
                <?php
                    foreach($result as $row) 
                    {
                        echo "<option value='{$row['bank_name']}'>{$row['bank_name']}</option>\n";
                    }
                    // Don't forget to close the connection!b
                    mysqli_close($conn);
                ?>
            </select>
            <br/>
            <input type="submit" value="submit"/>  
        </form>
        <form action="webserver.php" method="get">
            <label for="custo">Enter Customer Name:</label>
            <input type="text"  name="custo"> 
            <br/>
            <label for="sinnum1">Enter Sin Num:</label>
            <input type="text"  name="sinnum1"> 
            <br/>
            <label for="banknam1">Enter Bank Name:</label>
            <input type="text"  name="banknam1"> 
            <input type="submit" value="submit"/>  
            <br/>
        </form>
                  <form action="webserver.php" method="post">
                    <label for="firstname"> First Name:</label>
                    <br>
                    <input type="text"  name="firstname">
                    <br> 
                    <label for="lastname"> Last Name:</label>
                    <br>
                    <input type="text"  name="lastname"> 
                    <br> 
                    <label for="school"> School Name:</label>
                    <br>
                    <input type="text"  name="school"> 
                    <br>
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday">
                    <br>
                    <input type = "submit">
                  </form>
                    <br>
                   <form>

                   
                    <label for="fname">Full Name (with space):</label>
                    <input type="text" onblur="blu()" id="fname" name="fnames">
                    
                    <p id="message"></p>
                    
                    <script>
                      function blu() {
                        var x = document.getElementById("fname").value;
                        var message = document.getElementById("message");
                    
                        if (x == "") {
                          message.innerHTML = "This Field IS REQUIRED";
                          return false;
                        } else {
                          message.innerHTML = "";
                        }
                      }
                    </script>
                    

                        <br>
                      <label for="bank account number"> bank account number:</label>
                      <input type="text" required id="bankaccountnumber" name="bank account number"
                      pattern=".{12,}" title="12 or more characters"> 
                      
                      <br>
                  

                       <label for="favcolor">Select your favorite color:</label> <br>
                   <input type="submit" value="Submit">
                   <button onclick="alert('!Warning! Your RBC Account has locked for suspicious Activity, please Call 1 666 694 2069');" >Sign In </button> <br>


                   <p id="exit"> Please Sign Out</p>
                   <button onclick="clickonit()";> Sign Out</button>
                  
                 

            

                  </form>
                  <img id="scam" src="images/scam.jpg" width="227" height="208">

                  <p>
                    To change the below image 
                    <br>
                    Click on the "Change Image" Button Below
                 </p>
                 <button onclick="Imagechange()">Change Image</button>



                  <p>Click to find out the best City in Canada dispear and come back </p> <br>
                  <button onclick="Toggler()">Try it</button> <br>

                  <p onclick="changeText(this)"> Click on this Text </p>
                  <div id="city">
                    Toronto is the best City 
                  </div>
                  <p id="text">Fetch a file to change this text from myfile.txt.</p>
                  <button onclick="filefetch()">fetch file</button> <br>

            </body>
      

    </html>

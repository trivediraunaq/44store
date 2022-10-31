<!DOCTYPE html>
<html>
    
    <head>
        <title>
         44 STORE
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/home.css" rel="stylesheet" />
        <link href="css/modal.css" rel="stylesheet" />
        
    </head>

    <body>
        <div class="navbarr">
            <a href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
        </div>


        <div class="headerr">
            
            <h1>44 STORE</h1>
            <button class="button" id="myBtn">Rate Us!</button>
            <!-- The Modal -->
            <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <form action="/action_page.php" target="_blank" autocomplete="on">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>FEEDBACK</h2>
                </div>
                <div class="modal-body">
                    
                        <label for="fname">First name:</label><br>
                        <input type="text" id="fname" name="fname" value="John"><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname" value="Doe"><br>
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" value="john.doe@example.com"><br><br><br>
                        <label for="feedback">Feedback:</label><br>
                        <textarea for="text" id="feedback" name="feedback" rows="8" cols="50"></textarea><br>
                        
                     
                </div>
                <div class="modal-footer">
                    <input type="submit" class="button2" value="Submit">
                    <input type="reset" class="button2">
                </div>
            </form>
            </div>

            </div>

        </div>
        
        


        <div class="ro1">
            <div class="column1" >APPAREL
                <div class="shirt" ><img src="img/shirt.png" alt="shirt" > </div>
            </div>
            <div class="column2" >GROCERY
                <div class="shirt" ><img src="img/grocery.png" alt="shirt" > </div>
            </div>
            <div class="column3" >HARDWARE
                <div class="shirt" ><img src="img/hardware.png" alt="shirt" > </div>
            </div>
        </div>
    
    
        <div class="footer1">
            <p>REDEFINE CONVENIENCE
            </p>
        </div>

        <div class="footer2">
            <p>Copyright 2021-2022 by H. All Rights Reserved.<br/>
            44STORE is Powered by 44STORE.</p>
        </div>
        <script src="js/modal.js"></script>
    </body>
</html>
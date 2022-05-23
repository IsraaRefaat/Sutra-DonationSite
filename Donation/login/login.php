<!Doctype html>
<html>
    <head>
        <meta charser="utf-8"/>
        <title>
            sotra-سُترة
        </title> 
        <meta name = "description" content=""/>
        <link rel="stylesheet" href="login.css"/>
        <link rel="stylesheet" href="../home/all.css"/>


    </head>
    <body>
        <div class="nav">
            <div class="logo">
            
             <a href="../home/index.php"> <h1 > &#129507 SUTRA-سُترة</h1></a>
             <a href="login.php"> <i class="fa-solid fa-user-tie fa-3x" style="color: rgb(236, 232, 232);
                position :relative;left: 1100px; margin-top: 0%; "></i></a>
            </div>
            <div class="menu"> 
                <ul>
                   
                    <li><a href= "../home/index.php">Homepage</a></li>
                    <li><a href="../home/index.php#how">About Us</a></li>
                    <li><a href="../home/index.php#con">Contact Us</a></li>
                    <li><a href="../home/index.php#si"> Sign Up</a></li>
                   
                </ul>
              
            </div>
        </div>
       
        <form action="loginning.php" autocomplete="on" method="post">
            <fieldset class="form">
                <h4>Log In</h4>
                <label for="email">Email :</label><br>
                <input  type="email"id="email" name="email"><br>
                <label for="pwd">Password :</label><br>
                <input type="password" id="pwd" name="pwd"><br>
                <p class="sign">
                    Don't have an account?
                    <a href="../home/index.php#si" target="_self">Sign Up</a>
                
                </p>
                <input type="submit" value="Log in" class="login">
            </fieldset>
        </form>
        <script src="../home/all.js"></script>

    </body>
</html>
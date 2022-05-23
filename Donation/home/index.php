<!Doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>
        SUTRA-سُترة
    </title>
    <meta name = "description" content=""/>
   <link rel="stylesheet" href="test2.css"/>
   <link rel="stylesheet" href="all.css">
</head>
<body >
<div class="main">
    <div class="nav">
        <div class="logo">

            <a href="index.php"> <h1 > &#129507 SUTRA-سُترة</h1></a>
            <a href="../login/login.php"> <i class="fa fa-fw fa-user fa-3x" style="color: rgb(236, 232, 232);
                    position :relative;left: 1100px; margin-top: 0%; "></i></a>
        </div>
        <div class="menu">
            <ul>

                <li><a href= "#">Homepage</a></li>
                <li><a href="#how">About Us</a></li>
                <li><a href="#con">Contact Us</a></li>
                <li><a href="#si"> Sign Up</a></li>
                <li><a href="../login/logout.php"> log out</a></li>

            </ul>
        </div>
    </div>
    <div class="content">
        <h2>SUTRA-<span>سُترة</span></h2>

        <h3> Support your families</h3>
        <button class="donate"><a href="../donate/Donation.html">DONATE</a></button>

    </div>
</div>


<div class="p1">
    <div class="p12">
        <p class="welcome">WELCOME TO SUTRA</p>
        <p class="para1">
            We are one of the leading non-profit organizations in Egypt that’re working towards
            improving the life of poor people,we commit our self to helping families in the poor communities improve
            their lives and achieve lasting victories over poverty. </p>
    </div>

</div>
<div class="do-icons">
    <div class="donate-with"><p class="d-with">DONATE WITH</p><br></div>
    <span class="Icons"style="color: #db4726; font-size: 10em;   ">
                <!-- <i class="fa-light fa-user"></i>
                <i class="fa-solid fa-couch"></i> -->
                <i class="fa-solid fa-shirt  " style="position :relative;left: 260px; top: 150px;  "></i>
                <i class="fa-solid fa-people-roof fa-beat" style="position: relative; left: 340px; top: 20px; fa-animation-duration: 1s;"></i>
                <i class="fa-solid fa-tent " style=" position :relative;left: 420px; top: 150px;"></i>
                <div class="final">
                    <i class="fa-solid fa-mitten " style="position :relative;left: 430px; top: 200px;" ></i>
                    <i class="fa-solid fa-socks  " style="position :relative;left: 500px; top: 200px;"></i>


                </div>
            </span>

</div>

<div class="sign" id="si">
    <p class="join"><span class="j">JOIN</span> US</p>
    <form action="../sign/sing.php" method="post" autocomplete="on" name="Sign up" class="sig">
        <h4>SIGN UP HERE</h4>
        <label for="firstname"> First Name :</label><br>
        <input type="text" id="firstname" name="firstname"><br><br>
        <label for="lastname"> Last Name :</label><br>
        <input type="text" id="lastname" name="lastname"><br><br>
        <label for="email"> Email :</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="phone" > Phone Number :</label>
        <input type="text" id="phone" name="phone"><br><br>
        <label for="pwd">Password :</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>
        <label for="pwd">Confirm Password:</label><br>
        <input type="password" id="pwd" name="cpwd"><br><br>
        <label for="gender" class="Gender"> Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>

        </select><br><br>
            <label for="city" class="City"> City :</label>
            <select id="city" name="city">
                <option value="suez">Suez</option>
                <option value="Alexandria">Alexandria</option>
                <option value="Cairo">Cairo</option>
                <option value="Giza">Giza</option>
                <option value="Ismailia">Ismailia</option>
                <option value="Fayyoum">Fayyoum</option>
                <option value="Helwan">Helwan</option>
                <option value="Beheira">Beheira</option>
                <option value="Aswan">Aswan</option>
                <option value="Assiut">Assiut</option>
                <option value="Bani Suef">Bani Suef</option>
                <option value="Daqahliya">Daqahliya</option>
                <option value="Damietta">Damietta</option>
                <option value="Gharbiya">Gharbiya</option>
                <option value="Kafr El Sheikh">Kafr El Sheikh</option>
                <option value="Luxor">Luxor</option>
                <option value="Marsa Matrouh">Marsa Matrouh</option>
                <option value="Minya">Minya</option>
                <option value="Monofiya">Monofiya</option>
                <option value="New Valley">New Valley</option>
                <option value="North Sinai">North Sinai</option>
                <option value="Port Said">Port Said</option>
                <option value="Qalioubiya">Qalioubiya</option>
                <option value="Qena">Qena</option>
                <option value="Red Sea">Red Sea</option>
                <option value="Sharqiya">Sharqiya</option>
                <option value="Sohag">Sohag</option>
                <option value="South Sinai">South Sinai</option>
                <option value="Tanta">Tanta</option>

            </select><br><br>


        
        <p class="link">Already have an account?
            <a href="../login/login.php" target="_self">Log in</a>
        </p><br>
        <input class="submit" type ="submit" value="SUBMIT"><br>

    </form>

</div>
<div class="work" id="how">
    <p class="how ">How we work</p>
    <div class="car">
        <i class="fa-solid fa-truck fa-8x" style="color: black; animation-name: changeBg 1s
            infinite; animation-duration: 10s; position :relative;left: 100px;"></i>
    </div>
    <p class="p3">After the donor completes the donation process and fills out the form,
        a trusted worker will seek to receive the donation items as soon as possible.Then check whether they are suitable
        for use again, and then give them to the people who need them most.</p>
</div>

<!-- <div class="photo">
<img src="E:\My project\images\sanjoy-sadhukhan-CNLN-QLvfyE-unsplash.jpg" width="20%" height="10%">

</div> -->

<footer class="foot" id="con"><div class="footer">
        <form action=""  method= "post" autocomplete="on" name="contact us" class="contactus">
            <h4>CONTACT US </h4>
            <!-- <label for="name"> Your name :</label><br> -->
            <input type="text" id="name" name="name" placeholder="Name"><br><br>

            <!-- <label for="email"> Email :</label><br> -->
            <input type="email" id="email" name="email" placeholder="Email"><br><br>
            <!-- <label  class="message">Enter your Message :</label><br> -->
            <textarea name="message" rows="4" cols="20"> Message</textarea ><br><br>
            <input class="submit" type ="submit" value="SUBMIT"><br>
            <p class="contact">follow us with :<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-google"></ion-icon></a> </p>


        </form>

    </div></footer>





</div>


<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="all.js"></script>
</body>
</html>
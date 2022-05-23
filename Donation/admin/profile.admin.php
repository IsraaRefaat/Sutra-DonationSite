<?php


$con = new mysqli("localhost", "root", "", "temp");

session_start();

if(isset($_SESSION)&&!empty($_SESSION))
{
    $ID=$_SESSION["ID"];

    $sql2="SELECT First_Name,Last_Name, Email, SSN  FROM admin where ID=$ID";
    $result = $con->query($sql2);

    if ($result->num_rows > 0) {
// output data of each row
        while($row = $result->fetch_assoc()) {
            $name=$row["First_Name"];
            $lname=$row["Last_Name"];
            $Email=$row["Email"];
            $SSN=$row["SSN"];

//echo  " - Name: " . $row["First_Name"]. " " . $row["Last_Name"]." - Email: " . $row["Email"]." ". " - SSN: ". $row["SSN"]." "."<br>";
// echo "DonationID: ".$row["ID"]. " - UserID: ".$row["User_ID"]." "."- Type: ".$row["Selected_Type"]." "."<br>";
        }
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>
        SUTRA-سُترة
    </title>
    <meta name = "description" content=""/>
    <link rel="stylesheet" href="../delivery/employee.css"/>
    <link rel="stylesheet" href="all.css"/>

</head>
<body>
<div class="nav">
    <div class="logo">

        <a href="../home/index.php"> <h1 > &#129507 SUTRA-سُترة</h1></a>
        <a href="../login/login.php"> <i class="fa fa-fw fa-user fa-3x" style="color: rgb(236, 232, 232);
                        position :relative;left: 980px; margin-top: 0%; "></i></a>
    </div>
    <div class="menu">
        <ul>

            <li><a href= "../home/index.php">Homepage</a></li>
            <li><a href="../home/index.php#how">About Us</a></li>
            <li><a href="../home/index.php#con">Contact Us</a></li>
            <li><a href="../home/index.php#si"> Sign Up</a></li>
            <li><a href="../login/logout.php"> Log Out</a></li>

        </ul>

    </div>
</div>


<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="profile.admin.php" target="_self"><i class="fa-solid fa-truck" ></i> Profile</a>
    <a href="report.php" target="_self"><i class="fa-solid fa-truck" ></i> Donations</a>
    <a href="employee.php" target="_self"><i class="fa-solid fa-truck" ></i> Employees</a>
    <a href="Users.php" target="_self"><i class="fa-solid fa-truck" ></i> Donors</a>


</div>
<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Options</span>
    <h2>My Profile</h2>
    <div class="info">
        <div class="information">
            <p>  First Name   :     <?php  echo "$name";?>         <br/></p>
            <p>  Last Name  :  <?php echo "$lname";?>             <br/></p>
            <p> Email  :      <?php echo "$Email";?>        <br/></p>
            <p> SSN  :       <?php echo "$SSN"?>      <br/></p>
        </div>
    </div>
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "280px";
        document.getElementById("main").style.marginLeft = "280px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>
<script src="all.js"></script>
</body>
</html>
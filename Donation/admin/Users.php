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
<style>

    table{
        border-collapse: collapse;
        margin:25px 0;
        border-radius: 5px 5px 0 0 ;
        overflow: hidden;
        box-shadow: 0 0 20px rgb(0,0, 0,0.15);
        width: 1000px;
        min-width: 400px;



    }
    thead tr{
        background-color:#c55448 ;
        color:#ffffff;
        text-align: left;
        font-weight: bold;
        letter-spacing: 1px;
        font-size: 19px;
    }
    th,td{
        padding: 12px 15px;

    }
    tbody tr{
        border-bottom: 1px solid #dddddd;
        font-size: 17px;
    }
    tbody tr:nth-of-type(even){

        background-color: #f3f3f3;
    }
    tbody tr:last-of-type{
        border-bottom: 2px solid #c55448;
    }

    thead {
        background-color:#c55448 ;

    }

</style>
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
    <h2>Donors </h2>
    <div class="info">
        <div class="information">

            <table>
                <thead>
                <tr>
                    <th>Donor ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Gender</th>

                </tr>
                </thead>

                <?php

                $con = new mysqli("localhost", "root", "", "temp");

                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }

                // read all row from database table
                $sql = "SELECT * FROM user ";
                $result = $con->query($sql);

                if (!$result) {
                    die("Invalid query: " . $con->error);
                }

                while($row = $result->fetch_assoc()) {
                    $_SESSION["dev_ID"] = $row["ID"];
                    echo "<tr>
        <td>" . $row["ID"] . "</td>
        <td>" . $row["First_Name"] . "</td>
        <td>" . $row["Last_Name"] . "</td>
        <td>" . $row["Email"] . "</td>
        <td>" . $row["Phone"] . "</td>
        <td>". $row["City"] . "</td>
        <td>". $row["Gender"] . "</td>
                    
          </tr>";
                }

                $con->close();
                ?>


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
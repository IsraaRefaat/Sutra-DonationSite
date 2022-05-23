<!DOCTYPE html>
<html>
<head>

</head>
<style>

    table{
        border-collapse: collapse;
        margin:25px 0;
        border-radius: 5px 5px 0 0 ;
        overflow: hidden;
        box-shadow: 0 0 20px rgb(0,0, 0,0.15);
        width: 600px;


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
<body>
<table>
    <thead>
    <tr>
        <th>Donation ID</th>
        <th>User ID</th>
        <th>Address</th>
        <th>Statue</th>
        <th>Type</th>
        <th>Number</th>
    </tr>
    </thead>

    <?php

    $con = new mysqli("localhost", "root", "", "temp");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // read all row from database table
    $sql = "SELECT * FROM donation";
    $result = $con->query($sql);

    if (!$result) {
        die("Invalid query: " . $con->error);
    }

    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["ID"] . "</td>
        <td>" . $row["User_ID"] . "</td>
        <td>" . $row["Address"] . "</td>
        <td>" . $row["statue"] . "</td>
        <td>" . $row["Selected_Type"] . "</td>
        <td>" . $row["Number_of_pieces"] . "</td>
    </tr>";
    }

    $con->close();
    ?>
<!--    <tbody>-->
<!--    <tr>-->
<!--        <td>4</td>-->
<!--        <td>6</td>-->
<!--        <td>clothes</td>-->
<!--    </tr>-->
<!---->
<!---->
<!--    </tbody>-->


</table>
</body>
</html>


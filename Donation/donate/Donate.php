<?php
$con = new mysqli("localhost", "root", "", "temp");

session_start();
$Del = array( "Mahmoud"=>3, "الحزلقووم"=>4, "هدرس"=>5 );
$type=$_POST['type'];
$num=$_POST["num"];
$userID=$_SESSION['userID'];
$Add=$_POST["Address"];
$statue="Done";
shuffle($Del);
if(isset($_SESSION)&&!empty($_SESSION))
{
    $sql="INSERT INTO donation (User_ID,Address,Selected_Type,Number_of_pieces,employee_ID) VALUES ('$userID','$Add','$type','$num','$Del[0]')";
    $resul=mysqli_query($con,$sql);

    if($resul)
    {
        echo '<script>
       alert("Donation successful");
       window.location="../donate/profile.user.php";
    </script>';
    }
    else{
        echo '<script>
       alert("Donation fail");
       window.location="Donation.html";
    </script>';
    }
}
else{
    echo '<script>
       alert("Donation fail");
       window.location="../login/login.php";
    </script>';
}
<?php


$con = new mysqli("localhost", "root", "", "temp");
if ($con) {
    echo "successful";
} else {
    die(mysqli_error($con));
}

 $firstName=$_POST["firstname"];
 $lastName=$_POST["lastname"];
 $email=$_POST["email"];
 $pass=$_POST["pwd"];
 $confirm=$_POST["cpwd"];
 $gender=$_POST["gender"];
 $city=$_POST["city"];
 $phone=$_POST["phone"];



 if($pass!=$confirm)
 {
     echo '<script>
   alert("the passwords did not match");
   window.location="../home/index.php#si";
</script>';
 }
 else {
     //بنكتب اسم التابل مش الداتا لانك اصلا متصله بيها
     $sql = "INSERT INTO user (First_Name,Last_Name,Email,City,Phone,Password) VALUES ( '$firstName','$lastName','$email','$city','$phone','$pass')";
     $result = mysqli_query($con, $sql);

     if ($result) {
         echo '<script>
       alert("Registration successful");
       window.location="../login/login.php";
    </script>';

     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($con);
     }
 }

mysqli_close($con);






 ?>
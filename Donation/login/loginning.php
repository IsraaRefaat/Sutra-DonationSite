<?php
session_start();


$con = new mysqli("localhost", "root", "", "temp");
if ($con) {
    echo "successful";
} else {
    die(mysqli_error($con));
}
if(isset($_POST["email"])&&isset($_POST["pwd"])) {
    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['pwd']);

    if (empty($email)) {

        header("Location: index.php?error=User Name is required");

        exit();

    } else if (empty($pass)) {

        header("Location: index.php?error=Password is required");

        exit();

    } else if (!empty($pass) && !empty($email)) {
        $sql = "SELECT * FROM admin WHERE Email='$email' AND Pass='$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $email && $row['Pass'] === $pass) {


                session_start();
                $_SESSION['ID'] = $row['ID'];
                $_SESSION['Selected_Type'] = $row['Selected_Type'];
                echo '<script>
       alert("login successful");
       window.location="../admin/profile.admin.php";
    </script>';

            }
        } else if (!empty($pass) && !empty($email)) {
            $sql = "SELECT * FROM delivery WHERE Email='$email' AND Pass='$pass'";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result);

                if ($row['Email'] === $email && $row['Pass'] === $pass) {


                    session_start();
                    $_SESSION['ID'] = $row['ID'];
                    $_SESSION['Email'] = $row['Email'];
                    echo '<script>
       alert("login successful");
       window.location="../delivery/profile.delivery.php";
    </script>';

                }
            } else {

                $sql = "SELECT * FROM user WHERE Email='$email' AND Password='$pass'";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) === 1) {

                    $row = mysqli_fetch_assoc($result);

                    if ($row['Email'] === $email && $row['Password'] === $pass) {


                        session_start();
                        $_SESSION['userID'] = $row['ID'];
                        $_SESSION['First_Name'] = $row['First_Name'];
                        echo '<script>
       alert("login successful");
       window.location="../donate/profile.user.php";
    </script>';

                    } else {

                        header("Location: ../login/login.php");

                        exit();

                    }

                } else {

                    header("Location: login.php?error=Incorect User name or password");

                    exit();

                }

            }


        } else {

            header("Location: ../home/index.php");

            exit();

        }
    }
}
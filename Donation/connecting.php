<?php

$con = new mysqli("localhost", "root", "", "temp");
if ($con) {
    echo "successful";
} else {
    die(mysqli_error($con));
}



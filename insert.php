<?php
include "./db.php";
$un = $_POST['username'];
$pwd = $_POST['password'];
$email = $_POST['email'];
$sql = "insert into register(name,password,email) values ('$un','$pwd','$email')";
$result = mysqli_query($con, $sql);
if ($result) {
    header("location: login.php");
} else {
    echo "error";
}

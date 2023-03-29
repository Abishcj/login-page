<?php
include 'db.php';
$email = $_POST['email'];
$pwd = $_POST['password'];


$sql = "select * from register ";
$res = mysqli_query($con, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    if ($data['email'] or $data['name'] == $email && $data['password'] == $pwd) {
        header("location:http://192.168.64.2/login/home.php");
        #echo 's';
    } else {
        // header("./login.php");
        echo 'error';
        // echo "<script>Un valid username</script> ";
    }
}

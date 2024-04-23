<?php
$localhost = "localhost";
$user = "root";
$password = "";
$db = "businesslabs";

$con = mysqli_connect($localhost, $user, $password, $db);

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM record WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) {
    // echo "Login successful";
    echo "<script>location.href = 'index.html' </script>";
} 
else {
    echo "Login failed";
}

?>


<?php
$localhost = "localhost";
$user = "root";
$password = "";
$db = "businesslabs";

$con = mysqli_connect($localhost, $user, $password, $db);
// if($con) {
//     echo "connection successfully";
// }

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO record VALUES ('$name', '$email', '$password')";
if(mysqli_query($con,$sql)) {
    // echo "data inserted successfully";
    echo "<script>location.href = 'log.html' </script>";

}
?>
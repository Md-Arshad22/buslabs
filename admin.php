<?php
$con = mysqli_connect("localhost", "root", "", "businesslabs");
// if($con) {
//     echo "connection successfully";
// }
$name=$_POST['name'];
$password=$_POST['password'];


// $sql = "SELECT * FROM record WHERE name = '$name' AND password = '$password'";
$sql = "SELECT * FROM admin WHERE uname = '$name' AND password = '$password'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) {
    // echo "Login successful";
    echo "<script>location.href = 'index.html' </script>";
} 
else {
    echo "Login failed";
}

?>
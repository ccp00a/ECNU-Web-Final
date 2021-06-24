<?php
include '../includes/connect.php';

$username=isset($_POST["username"])? $_POST["username"]:"";
$result = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
$con->close();
if($result->num_rows!=0)
{
    echo('false');
}
else{
    echo('true');
}
?>
<?php
include '../includes/connect.php';

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$name = $_POST['name'];
$type = $_POST['type'];
$teachername = $_POST['teachername'];
$teacherimage = addslashes(file_get_contents($_FILES['teacherimage']['tmp_name']));
$price = $_POST['price'];

$sql = "INSERT INTO items (image, name, type, teachername, teacherimage, price) VALUES ('$image', '$name', '$type', '$teachername', '$teacherimage', $price)";

$con->query($sql);
header("location: ../admin-page.php");

?>
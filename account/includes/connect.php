<?php
session_start();
$servername = "localhost";
$server_user = "webyhzhou";
$server_pass = "周逸皓";
$dbname = "webyhzhou";
$name = isset($_SESSION['name']) ? $_SESSION['name'] : "";
$role = isset($_SESSION['role']) ? $_SESSION['role'] : "";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
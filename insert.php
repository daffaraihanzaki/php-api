<?php

include("config.php");

$id= $_POST ['Id'];
$username= $_POST ['Username'];
$password = $_POST ['Password'];
$level = $_POST ['Level'];
$fullname = $_POST ['Fullname'];

mysqli_query($db, "INSERT INTO users SET Id ='$id', Username='$username',Password='$password',Level='$level',Fullname='$fullname'");

header("location:index.php");
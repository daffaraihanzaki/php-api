
<?php
  include("config.php");
  $id = $_POST['Id'];
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $level = $_POST['Level'];
  $fullname = $_POST['Fullname'];
  mysqli_query($db, "UPDATE users SET Username='$username', Password='$password', Level='$level', Fullname='$fullname' WHERE Id='$id'");
  header("location:index.php");
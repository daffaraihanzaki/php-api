<?php
  include ("config.php");
  $id = $_GET['Id'];
  $qry = "DELETE FROM users WHERE Id='$id'";
  mysqli_query($db, $qry);
  header("location:index.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Daffa Raihan Zaki</title>
    <link rel="stylesheet" href="ubah.css">
  </head>
  <body>

    <?php
      include ("config.php");
      $id = $_GET['id'];
      $qry = mysqli_query($db,"SELECT * FROM users WHERE Id='$id'");
      $baris_data = mysqli_fetch_array($qry);
      function radio($value, $input) {
        $result = $value==$input?'checked':'';
        return $result;
      } 
      ?>

      <form action="ganti.php" method="post">
        <table align="center">
          <tr>
      			<td colspan="2">
      				<h3><center><?php echo $baris_data['Id']; ?></center></h3>
      			</td>
      		</tr>
          <tr>
            <td>Username</td>
            <td>
              <input type="text" name="Username" value="<?php echo $baris_data['Username']; ?>">
              <input type="hidden" name="Id" value="<?php echo $baris_data['Id']; ?>">
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" name="Password" value="<?php echo $baris_data['Password']; ?>"></td>
          </tr>
          <tr>
            <td style="vertical-align: top">Level</td>
            <td>
              <input type="radio" name="Level" value="Admin" <?php echo radio("admin", $baris_data['Level']) ?>>Admin<br>
              <input type="radio" name="Level" value="User" <?php echo radio("user", $baris_data['Level']) ?>>User<br>
              <input type="radio" name="Level" value="Guest" <?php echo radio("guest", $baris_data['Level']) ?>>guest
            </td>
          </tr>
          <tr>
            <td>Fullname</td>
            <td><input type="text" name="Fullname" value="<?php echo $baris_data['Fullname']; ?>"></td>
          </tr>
          <tr>
            <td colspan="2">
              <center><button type="submit" value="Submit">SUBMIT</button></center>
            </td>
          </tr>
        </table>
      </form>
  </body>
</html>
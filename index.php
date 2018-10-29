<?php include("config.php"); ?>


<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
</head>
<body>

  <div>
  	<h2><center>DATA PESERTA</center></h2>
  	<table border="1" align="center" >
  <tr>
  	<th>id</th>
  	<th>username</th>
  	<th>password</th>
  	<th>level</th>
  	<th>fullname</th>
  </tr>
  </div>
  <?php
  // 1. Lakukan include koneksi.php untuk membuat koneksi
  include('config.php');
  // 2. Buat perintah SQL untuk menampilkan data
  $nama_database ="SELECT * FROM users";
  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $peserta=mysqli_query($db,$nama_database);
  // 4. Lakukan fetch dengan result type MYSQL_ASSOC
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){ 
  	echo'
  	</tr>
  		<td>'.$baris_data['Id'].'</td>
  		<td>'.$baris_data['Username'].'</td>
  		<td>'.$baris_data['Password'].'</td>
  		<td>'.$baris_data['Level'].'</td>
  		<td>'.$baris_data['Fullname'].'</td>
  	</tr>';
  }
  ?>
  <a href="input.php">INSERT DATA</a>
</body>
</html>
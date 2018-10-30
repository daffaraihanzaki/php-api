<?php include("config.php"); ?>


<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>

  <div>
  	<h2><center>DATA PESERTA</center></h2>
  	<table border="5" align="center" >
  <tr class="nana">
  	<th>Id</th>
  	<th>Username</th>
  	<th>Password</th>
  	<th>Level</th>
  	<th>Fullname</th>
    <th>Action</th>
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
    ?>
		<tr>
			<td><?php echo $baris_data['Id']; ?></td>
			<td><?php echo $baris_data['Username']; ?></td>
			<td><?php echo $baris_data['Password']; ?></td>
			<td><?php echo $baris_data['Level']; ?></td>
			<td><?php echo $baris_data['Fullname']; ?></td>
			<td align="center">
				<a class="edit" href="ubah.php?id=<?php echo $baris_data['Id']; ?>">Ubah    </a>
				<a class="edit" href="hapus.php?id=<?php echo $baris_data['Id']; ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>

  <a class="insert" href="input.php">INSERT DATA</a>
</body>
</html>
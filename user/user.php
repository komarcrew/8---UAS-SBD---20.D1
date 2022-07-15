<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../fontawesome/fontawesome/css/all.css" />
    <title>Menampilkan data dari database</title>
	<style>
	.hero {
			background-color: 	#DEB887;
			border-radius: 5px;
			padding: 10px 23px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container shadow p-3">
	<header>
	<h2 align="center" class="hero text-white">Tabel User</h2>
	</header>
	<div class="btn-toolbar mb-2 mb-md-10">
		<a class="btn btn-warning me-3" href="../data.php" role="button"><i class="fa-solid fa-angles-left me-1"></i>Kembali</a>
		<a class="btn btn-primary" href="user_tambah.php" role="button"><i class="fa-solid fa-plus me-1"></i>Tambah</a>
	</div>
	<hr>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr class="bold">
					<td>No</td>
					<td>Id</td>
					<td>Username</td>
					<td>Password</td>
					<td>Nama Lengkap</td>
					<td>Aksi</td>
				</tr>
			</thead>
			<?php
			require "../koneksi.php";
			include "../session.php";
			$no = 1;
			$query = mysqli_query($conn, 'SELECT * FROM user');
			while ($data = mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['id'] ?></td>
					<td><?php echo $data['username'] ?></td>
					<td><?php echo $data['password'] ?></td>
					<td><?php echo $data['nama_lengkap'] ?></td>
					<td>
						<a class="btn btn-success" href="user_ubah.php?id=<?= $data['id'];?>" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
						<a class="btn btn-danger" href="user_hapus.php?id=<?= $data['id'];?>" role="button"><i class="fa-solid fa-trash-can"></i></a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
	<?php require "../footer.php";?>
</div>
</body>
</html>
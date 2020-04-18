<?php 
include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($kon, "SELECT * FROM kategori");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">

</head>
<body>
<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width:100%;">
					<h2 class="card-tittle"><i class="fas fa-user-plus text-black mr-2"></i>Tambah Data Buku</h2>
				</div>
				<div class="card-body">

				<form action="proses-tambah.php" method="post">

				<table class="table">
					<tr>
						<td>Judul</td>
						<td><input style="width: 100%" type="text" name="judul"></td>
					</tr>
					<tr>
						<td>Penerbit</td>
						<td><input  style="width: 100%" type="text" name="penerbit"></td>
					</tr>
					<tr>
						<td>Pengarang</td>
						<td><input style="width: 100%" type="text" name="pengarang"></td>
					</tr>
					<tr>
						<td>Ringkasan</td>
						<td><textarea name="ringkasan" style="width: 300px; height: 170px"></textarea>
						</td>
					</tr>
					<tr>
						<td>Cover</td>
						<td><input style="width: 100%" type="file" name="cover"></td>
					</tr>
					<tr>
						<td>Stok</td>
						<td><input style="width: 100%" type="number" name="stok"></td>
					</tr>

					<tr>
						<td>Kategori</td>
						<td>
							<select style="width: 200px" name="id_kategori">
								
								<option value="">-- Pilih Kategori --</option>

								<?php

									while($kategori = mysqli_fetch_assoc($query)):

								?>

								<option value="<?php echo $kategori['id_kategori'];?>"><?php echo $kategori['kategori']; ?></option>

								<?php
									endwhile;
								?>
							</select>
					
						</td>
					</tr>
			
					<tr>
						<th></th>
						<th><input type="submit" class="btn btn-danger" name="simpan" value="Simpan"></th>
					</tr>

				</table>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>	
			</center>
</body>
</html>

<?php
include '../aset/footer.php';
?>
				
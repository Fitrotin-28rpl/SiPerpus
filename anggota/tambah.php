<?php

include '../koneksi.php';
include '../aset/header.php';

?>		

<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width:100%;">
					<h2 class="card-tittle"><i class="fas fa-user-plus text-black mr-2"></i>Tambah Data Anggota</h2>
				</div>
				<div class="card-body">

				<form action="proses-tambah.php" method="post">

				<table class="table">
					<tr>
						<td>Nama</td>
						<td><input style="width: 100%" type="text" name="nama"></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td><input  style="width: 100%" type="text" name="kelas"></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td><input style="width: 100%" type="text" name="telp"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input style="width: 100%" type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input style="width: 100%" type="password" name="password"></td>
					</tr>
					
					<tr>
						<th></th>
						<th><input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></th>
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
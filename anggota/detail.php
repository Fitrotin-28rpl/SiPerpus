<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota where id_anggota = '$id_anggota'";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width:100%;">
					<h2><i class="fas fa-address-card"></i>Detail Anggota</h2>
				</div>
				<div class="card-body">
				<table class="table">
					<tr>
						<td width="100px"><strong>Nama</strong></td>
						<td width="500px"><?= $detail['nama'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Kelas</strong></td>
						<td width="500px"><?= $detail['kelas'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Telepon</strong></td>
						<td width="500px"><?= $detail['telp'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Username</strong></td>
						<td width="500px"><?= $detail['username'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Password</strong></td>
						<td width="500px"><?= $detail['password'] ?></td>
					</tr>
					<center>
					<tr>
						<td></td>
						<td>
							<a href="edit.php?id_anggota=<?= $detail['id_anggota']; ?>" class="badge badge-warning">Edit</a>
    						<a href="hapus.php?id_anggota=<?= $detail['id_anggota']; ?>" class="badge badge-danger">Hapus</a>	
						</td>
					</tr>
				</center>
				</table>
				
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>
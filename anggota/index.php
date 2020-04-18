<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama  ";
$res = mysqli_query($kon, $sql);

$pinjam = array();

while($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}?>

<?php
include '../aset/header.php';
?>
		<div class="container">
			<div class="row mt-4">
			<div class = "col-md"></div>
		</div>
	</div>
		
		<div class="card">
  			<div class="card-header">
  				<h2 class="card-title"><i class="fas fa-users"></i></i> Data Anggota</h2>
  			</div>
 	 <div class="card-body">
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
<!--       <th scope="col">Telp</th> -->
<!--       <th scope="col">Username</th>
      <th scope="col">Password</th> -->
      <th scope="col"> Aksi</th>
    </tr>
  </thead>
<?php
	$no = 1;
	foreach ($pinjam as $p) {?>
	 <tr>
	 	<th scope="row"><?= $no ?></th>
	 	<td><?= $p['nama'] ?></td>
	 	<td><?= $p['kelas'] ?></td>
<!-- 	 	<td><?= $p['telp'] ?></td>
	 	<td><?= $p['username'] ?></td>
	 	<td><?= $p['password'] ?></td> -->
	 	
	 <td>
		<a href="detail.php?id_anggota=<?=$p['id_anggota']; ?>" class="badge badge-success">Detail</a>
 		<a href="edit.php?id_anggota=<?=$p['id_anggota']; ?>" class="badge badge-warning">Edit</a>
    	<a href="hapus.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-danger">Hapus</a>	
		<!-- <button  type="submit" class="btn btn-primary" name="simpan">Simpan</button>  -->
	 </td>

	 </tr>
	 
	 <?php
	 $no++;
	}
?>
</table>
			<div class="card">
  				<center><h4 class="card-title"><i class="fas fa-user-plus text-black mr-2"></i><a href="tambah.php"> Tambah Anggota</h4></a></h4></center>
  			</div>
  </div>
</div>


<?php
include '../aset/footer.php'
?>
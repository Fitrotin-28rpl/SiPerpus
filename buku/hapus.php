
<?php

include '../koneksi.php';
$id_buku = $_GET["id_buku"];

$query = "DELETE FROM buku WHERE id_buku = '$id_buku' ";
$buku = mysqli_query($kon,$query);

?>



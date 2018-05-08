<h2>Aplikasi Harga Barang</h2>
<hr>
<a href="tambah.php">Tambah Data</a>

<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj ->ambilkoneksi();

if ($koneksi->connect_error){
	die("koneksi gagal :" . $koneksi->connect_error);
}else{
	echo "koneksi ke basis data SUKSES!";
}
$qry = "select * from harga_barang";
$data = $koneksi -> query($qry);
?>

<table border="1">
	<tr>
		<th>KODE</th>
		<th>NAMA BARANG</th>
		<th>HARGA</th>
		<th>TINDAKAN</th>
	</tr>
<?php
if($data ->num_rows <= 0){
	echo "<tr><td>";
	echo "DATA NIHIL";
	echo "</td></tr>";
}else{
	while ($row = $data ->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row["kode"]. "</td>";
		echo "<td>" . $row["nama_barang"]. "</td>";
		echo "<td>" . $row["harga"]. "</td>";
		echo "<td>";
		echo "<a href = 'edit-form.php?kode=". 
			$row['kode']."'>Edit</a>|";
		echo "<a href = 'hapus.php?kode=". 
			$row['kode']."'>Hapus</a>";
		echo "</td>";
	}
}
?>
</table>
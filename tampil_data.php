<?php 
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table border="1">
 	<tr>
 		<th>no</th>
 		<th>barang</th>
 		<th>stok</th>
 		<th>harga beli</th>
 		<th>harga jual</th>
 		<th>action</th>
 	</tr>
 	<?php 
 	$no = 1;
 	foreach ($data_barang as $row) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $row['nama_barang'] ?></td>
		<td><?php echo $row['stok'] ?></td>
		<td><?php echo $row['harga_beli'] ?></td>
		<td><?php echo $row['harga_jual'] ?></td>
		<td>
			<a href="edit.php?id=<?php echo $row['id_barang'];?>">update</a>
			<a href="hapus.php?id=<?php echo $row['id_barang'];?>">delete</a>
		</td>
	</tr>
	<?php 
	}
	?>
	</table>
 </body>
 </html>
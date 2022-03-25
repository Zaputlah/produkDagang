<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>barang dagangan</title>
</head>
<body>
	<h1>Barang dagangan</h1>

	<a href="<?php echo base_url('/home/halaman_tambah')?>">Tambah barang</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>id</td>
			<td>nama</td>
			<td>harga</td>
			<td>aksi</td>
		</tr>
		<?php
			$count = 0;
			foreach ($queryAllProduk as $row) {
			$count = $count + 1;
		?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->nama ?></td>
			<td><?php echo $row->harga ?></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->id ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiHapus')?>/<?php echo $row->id?>">Hapus</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
<body>
	<h1>Laporan total hasil orderan</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No telpon</th>
			<th>Jenis Perawatan</th>
			<th>Tanggal</th>
			<th>Harga</th>
		</tr>
		<?php foreach($order as $row){ ?>
		<tr>
			<td><?= $row['nama']  ?></td>
			<td><?= $row['alamat']  ?></td>
			<td><?= $row['no_hp']  ?></td>
			<td><?= $row['jenis_perawatan']  ?></td>
			<td><?= $row['tgl_order']  ?></td>
			<td><?= $row['harga']  ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
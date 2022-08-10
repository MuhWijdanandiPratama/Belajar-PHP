<?php

	// deklarasi dan inisialisasi
	$merk = $_POST["hp"];
	$jenis = $_POST["jenis"];
	$jumbel = $_POST["jumbel"];

	// cek / pengkondisian
	if($merk == "Oppo"){
		if($jenis == "Regular"){
			$harga = 1500000;
		}
		else if($jenis == "Pro"){
			$harga = 1950000;
		}
	}
	if($merk == "Vivo"){
		if($jenis == "Regular"){
			$harga = 1450000;
		}
		else if($jenis == "Pro"){
			$harga = 2000000;
		}
	}
	if($merk == "Iphone"){
		if($jenis == "Regular"){
			$harga = 10000000;
		}
		else if($jenis == "Pro"){
			$harga = 12500000;
		}
	}
	if($merk == "Xiaomi"){
		if($jenis == "Regular"){
			$harga = 1300000;
		}
		else if($jenis == "Pro"){
			$harga = 1750000;
		}
	}
	if($merk == "Asus"){
		if($jenis == "Regular"){
			$harga = 1500000;
		}
		else if($jenis == "Pro"){
			$harga = 2150000;
		}
	}
	if($merk == "Huawei"){
		if($jenis == "Regular"){
			$harga = 2050000;
		}
		else if($jenis == "Pro"){
			$harga = 2650000;
		}
	}
	if($merk == "Samsung"){
		if($jenis == "Regular"){
			$harga = 1700000;
		}
		else if($jenis == "Pro"){
			$harga = 2300000;
		}
	}

	//penjumlahan
	$total = $harga*$jumbel;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
	<style>
		table{
			margin: auto;
		}
		h1{
			text-align: center;
		}
		#tag_a{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Tampil Data!</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Merk Hp</th>
			<th>Jenis</th>
			<th>Jumlah Beli</th>
			<th>Harga</th>
			<th>Total Bayar</th>
		</tr>
		<tr>
			<td>1</td>
			<td><?= $merk; ?></td>
			<td><?= $jenis; ?></td>
			<td><?= $jumbel; ?></td>
			<td><?= $harga; ?></td>
			<td><?= $total; ?></td>
		</tr>
	</table>
	<div id="tag_a">
		<a href="kasir.php">Kembali</a>
	</div>
</body>
</html>
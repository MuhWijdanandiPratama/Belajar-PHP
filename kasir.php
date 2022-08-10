<!DOCTYPE html>
<html>
<head>
	<title>program kasir dg php</title>
	<style>
		h1{
			text-align: center;
		}
		table{
			margin: auto;
		}
	</style>
</head>
<body>
	<h1>Program Kasir</h1>
	<form action="view.php" method="post">
		<table>
			<tr>
				<td>Merk HP</td>
				<td>:</td>
				<td>
					<select name="hp">
						<option value="Oppo">Oppo</option>
						<option value="Vivo">Vivo</option>
						<option value="Iphone">Iphone</option>
						<option value="Xiaomi">Xiaomi</option>
						<option value="Asus">Asus</option>
						<option value="Huawei">Huawei</option>
						<option value="Samsung">Samsung</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>:</td>
				<td>
					<select name="jenis">
						<option value="Regular">Regular</option>
						<option value="Pro">Pro</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah Beli</td>
				<td>:</td>
				<td><input type="text" name="jumbel" required=""></td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="submit">Submit</button> ||
					<button type="reset" name="reset">Reset</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
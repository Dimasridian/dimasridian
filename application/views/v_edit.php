<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head><style type="text/css">
	body
		{
		background-color: grey;
		}

	table 
		{
 	   	border-collapse: collapse;
    	border: 3px solid ;
		}

	table tr th
		{
		font-family: helvetica;
    	background: #FFFF00;
    	color: #000000;
  	  font-weight: normal;
		}
		</style>
<body>
	<center>
		<h1>Data Mahasiswa</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($labimk as $d){ ?>
	<form action="<?php echo base_url(). 'index.php/halaman/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" value="<?php echo $d->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $d->nim ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="laki-laki"/>Laki-laki</td>
			</tr>
			<td></td>
				<td><input type="radio" name="jk" value="perempuan"/>perempuan</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $d->alamat ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>
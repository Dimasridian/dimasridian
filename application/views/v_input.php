<!DOCTYPE html>
<html>
<head>
	<title> Data Mahasiswa</title>
</head>
<style type="text/css">
	body
		{
		background-color: grey;
		}

	table 
		{
  	  	font-family: times;
   		color: #2B1B17;
 	   	border-collapse: collapse;
    	border: 3px solid ;
    	border-spacing: : 8px 20px;
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
		<h1> Nama Mahasiswa TI USU</h1>
		<h3>Tambahkan Data Mahasiswa
	    </h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/halaman/tambah_aksi'; ?>" method="post">
		<table style="margin:50px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>	
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-laki"/>Laki-laki</td> 
			</tr>
			<td></td>
				<td><input type="radio" name="jk" value="perempuan"/>perempuan </td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>
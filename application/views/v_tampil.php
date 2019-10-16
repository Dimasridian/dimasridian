<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Data Mahasiswa </title>
</head>
<style>
	body
		{
		background-color: grey;
		}

	table 
		{
   		color: #000000;
 	   	border-collapse: collapse;
    	border: 5px solid ;
		}

	table tr th
		{
		font-family: helvetica;
    	background: #FFD700;
    	color: #000000;
  	    font-weight: normal;
		}
		</style>
<body>
	<center><h1> Nama Mahasiswa TI USU </h1></center>
	<center><?php echo anchor('halaman/tambah','Input Data'); ?></center>
	<table style="margin:50px auto;" border="">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($labimk as $d){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $d->nama ?></td>
			<td><?php echo $d->nim ?></td>
			<td><?php echo $d->jk ?></td>
			<td><?php echo $d->alamat ?></td>
			<td>
			 <?php echo anchor('halaman/edit/'.$d->nim,'Edit'); ?>
				<?php echo anchor('halaman/hapus/'.$d->nim,'Hapus'); ?>
			</td>
		</tr>
		<?php 
}?>
	</table>
</body>
</html>
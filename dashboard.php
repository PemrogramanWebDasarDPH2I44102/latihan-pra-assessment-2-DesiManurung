<center> 
<h1>DASHBOARD</h1>
<table border="1" cellspacing="2" cellpadding="16">
<form action="dashboard.php" method="POST">
	<tr>
		<td colspan="10" align="right">isi_paket : <input type="text" name="search"> 
			<input type="submit" name="kirim" value="Cari">

	<a style="padding-left: 320px" href="newData.php">Tambah data</a> 
	<a href="lihatData.php">Lihat Data Paket</a>
		</td>
	
	</tr>

</form>
	<tr>
		<th>tgl_datang</th>
		<th>sasaran</th>
		<th>penerima</th>
		<th>isi_paket</th>
		<th>tgl_ambil</th>
		<th colspan="2">Action</th>
	</tr>
	<?php 
		@$search = $_POST['search'];
		include ('koneksi.php');
		$sql1 = "SELECT * FROM paket  WHERE isi_paket LIKE '%$search%'";
		$result = mysqli_query($conn, $sql1);
			
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['tgl_datang']?></td>
				<td><?php echo $row['sasaran']?></td>
				<td><?php echo $row['penerima']?></td>
				<td><?php echo $row['isi_paket']?></td>
				<td><?php echo $row['tgl_ambil']?></td>
				
				<td><a href="delete.php?isi_paket=<?php echo $row['nim']; ?>"> Hapus</a> </td>
				<td> <a href="edit.php?isi_paket=<?php echo $row['nim']; ?>"> Edit</a></td>
			</tr>
			<?php
			}
		} else{
			echo "0 results";
		}
 	?>
 </table>

</center>
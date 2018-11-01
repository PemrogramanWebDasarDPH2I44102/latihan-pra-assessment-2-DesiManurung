<?php 
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<center>
	<h1 style="color: blue"> CREAT PAKET </h1>
	<form method="POST" action="dashboard.php">
		<table>
			<tr>
				<td> Isi paket </td>
				<td>:</td>
				<td><input type="text" name="isi_paket"></td>
			</tr>
			<tr>
				<td> Sasaran  </td>
				<td>:</td>
				<td><select name="sasaran">
					<option value="PILIH SASARAN ">PILIH SASARAN</option>
					<option value="desi">desi</option>
					<option value="sri">sri</option>
					<option value="ifa">ifa</option>
					<option value="firda">firda</option>
			</select>
		</td>
			</tr>
			
			<tr>
				<td> Tanggal Paket Datang  </td>
				<td>:</td>
				<td><input type="date" name="tgl_datang"></td>
			</tr>

			<tr>
				<td> Penerima Paket </td>
				<td>:</td>
				<td><input type="text" name="penerima"></td>
			</tr>
			
				<tr>
				<td> Tanggal Paket di Ambil  </td>
				<td>:</td>
				<td><input type="date" name="tgl_ambil"></td>
			</tr>
				<td colspan="3"><input type="submit" value="kirim"></td>
			</tr>
		</table>
	</form>
</body>
</center>
</html>
<?php 

	
	if (isset($_POST['isi_paket'])) {

	    $isi_paket  = $_POST['isi_paket'];
	    $sasaran    = $_POST['sasaran'];
	    $penerima    = $_POST['penerima'];
	    $tgl_datang	= $_POST['tgl_datang'];
	    $tgl_ambil  = $_POST['tgl_ambil'];

	    $sql = "INSERT INTO paket (tgl_datang,sasaran,penerima,isi_paket,tgl_ambil) 
	            VALUES ('$tgl_datang', '$sasaran','$penerima', '$isi_paket', '$tgl_ambil')"; 

	    if (mysqli_query($conn, $sql)) {
	        header("location: koneksi.php");
	    }else {
	        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
	    }


	    mysqli_close($conn);
	}

?>

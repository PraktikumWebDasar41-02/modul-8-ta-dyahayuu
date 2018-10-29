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
	<h1 style="color: blue">Tambah Data</h1>
	<form method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td> <input type="checkbox" name="hobi[]" value="Mandi"> Mandi<br>
 					 <input type="checkbox" name="hobi[]" value="Minum"> Minum<br>
 					 <input type="checkbox" name="hobi[]" value="Makan"> Makan <br> 
 					 <input type="checkbox" name="hobi[]" value="Tidur"> Tidur <br>

 			</td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td>:</td>
				<td> <input type="checkbox" name="genre[]" value="action"> action <br>
 					 <input type="checkbox" name="genre[]" value="horor"> horor <br>
 					 <input type="checkbox" name="genre[]" value="romance"> romance<br> 

 				</td>
			</tr>
				<td>Tempat Wisata</td>
				<td>:</td>
				<td> <input type="checkbox" name="wisata[]" value="Bandung"> Bandung<br>
 					 <input type="checkbox" name="wisata[]" value="Surabaya"> Surabaya <br>
 					 <input type="checkbox" name="wisata[]" value="Lombok"> Lombok<br> 
 				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input type="text" name="email"><br>
				</td>
			</tr>

			<tr>
				<td colspan="3"><input type="submit" value="kirim"></td>
			</tr>
		</table>
	</form>
</body>
</center>
</html>
<?php 

	
	if (isset($_POST['nim'])) {

	    $nama        = $_POST['nama'];
	    $nim       = $_POST['nim'];
	    $kelas		= $_POST['kelas'];
	    $list_hobi 	= implode(", ",$_POST['hobi']);
	    $list_genre = implode(", ", $_POST['genre']); 
	    $list_wisata = implode(", ", $_POST['wisata']);
	    $tgl	= $_POST['tgl'];
	    $email  	= $_POST['email'];
	    
	    $sql = "INSERT INTO dyahayu (nama,nim,kelas,hobi,genre,wisata,tgl,email) 
	            VALUES ('$nama','$nim','$kelas','$list_hobi','$list_genre','$list_wisata','$tgl','$email')"; 

	    if (mysqli_query($konek, $sql)) {
	        header("location: dashboard.php");
	    }else {
	        echo "Error: " . $sql . "<br?" . mysqli_error($konek);
	    }


	    mysqli_close($konek);
	}

?>

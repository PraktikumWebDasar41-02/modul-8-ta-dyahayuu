<?php 
include ('koneksi.php');
	$nim     = $_GET['nim'];
    $edit   = "SELECT * FROM datadiri WHERE nim = '$nim'";
    $sql    = mysqli_query($konek,$edit); 
    $row    = mysqli_fetch_assoc($sql);
    $ex_hobi = explode(", ", $row['hobi']);
    $ex_genre = explode(", ", $row['genre']);
    $ex_wisata = explode(", ", $row['wisata']);
 ?>
 <center>
 <h1>Edit Data</h1>
    <form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $row['nim'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="email" name="email" value="<?php echo $row['email'] ?>"><br>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value="<?php echo $row['kelas'] ?>"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td> 
                    <input type="checkbox" name="hobi[]" value="Mandi" <?php if(array_search("Mandi", $ex_hobi) > -1 ) { echo "checked"; }?>>Mandi<br>
                    <input type="checkbox" name="hobi[]" value="Makan" <?php if(array_search("Makan", $ex_hobi) > -1 ) { echo "checked"; }?>>Makan<br>
                    <input type="checkbox" name="hobi[]" value="Minum" <?php if(array_search("Minum", $ex_hobi) > -1 ) { echo "checked"; }?>>Minum<br> 
                    <input type="checkbox" name="hobi[]" value="Travelling" <?php if(array_search("Tidur", $ex_hobi) > -1 ) { echo "checked"; }?>>Tidur<br> 
                </td>
            </tr>
            <tr>
                <td>Genre Film</td>
                <td>:</td>
                <td> 
                    <input type="checkbox" name="genre[]" value="action" <?php if(array_search("action", $ex_genre) > -1 ) { echo "checked"; }?>> action<br>
                     <input type="checkbox" name="genre[]" value="horor" <?php if(array_search("horor", $ex_genre) > -1 ) { echo "checked"; }?> > horor<br>
                     <input type="checkbox" name="genre[]" value="romance" <?php if(array_search("romance", $ex_genre) > -1 ) { echo "checked"; }?>> romance <br> 
                </td>
            </tr>
            <tr>
                <td>Tempat Wisata</td>
                <td>:</td>
                <td> <input type="checkbox" name="wisata[]" value="Bandung" <?php if(array_search("Bandung", $ex_wisata) > -1 ) { echo "checked"; }?>> Bandung <br>
                     <input type="checkbox" name="wisata[]" value="Surabaya" <?php if(array_search("Surabaya", $ex_wisata) > -1 ) { echo "checked"; }?>> Surabaya <br>
                     <input type="checkbox" name="wisata[]" value="Lombok" <?php if(array_search("Lombok", $ex_wisata) > -1 ) { echo "checked"; }?>> Lombok<br> 
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="kirim"></td>
            </tr>
        </table>
    </form>
</center>
    <?php
    if (isset($_POST['nim'])) {
        $nim            = $_POST['nim'];
		$nama           = $_POST['nama'];
		$tgl_lahir      = $_POST['tgl_lahir'];
		$email          = $_POST['email'];
		$kelas          = $_POST['kelas'];
        $list_hobi      = implode(", ",  $_POST['hobi']);
        $list_genre     = implode(", ", $_POST['genre']);
        $list_wisata    = implode(", ", $_POST['wisata']);

        $sql = "UPDATE dyahayu SET nama='$nama', tgl='$tgl', email='$email',kelas='$kelas', hobi='$list_hobi', genre='$list_genre',wisata = '$list_wisata' WHERE nim='$nim'";

        if (mysqli_query($konek, $sql)) {
                header("location: dashboard.php");
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($konek);
        }
    
        mysqli_close($konek);
    }
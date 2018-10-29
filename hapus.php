<?php
    require_once("koneksi.php");

    $nim     = $_GET['nim'];
    $hapus = "DELETE FROM dyahayu WHERE nim='$nim'"; 

    if (mysqli_query($konek, $hapus)) {
        header("location: dashboard.php");
    }else {
        echo "Error: " . $hapus . "<br?" . mysqli_error($konek);
    }

    mysqli_close($konek);
?>
<?php
    require_once("koneksi.php");

    $nim     = $_GET['isi_data'];
    $delete = "DELETE FROM paket WHERE isi_paket='$isi_paket'"; 

    if (mysqli_query($conn, $delete)) {
        header("location: dashboard.php");
    }else {
        echo "Error: " . $delete . "<br?" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
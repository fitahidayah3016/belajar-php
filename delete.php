<?php

// Tangkap data dari form submit
if (isset ($_GET['id'])){
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect ("localhost","root","","fakultas");

    // Cek koneksi dengan MySQL
    if (mysqli_connect_errno()) {
        echo "Koneksi gagal". mysqli_connect_error();
    } else {
        echo "Koneksi berhasil";
    }

    // Buat SQL query untuk delete ke database
    $sql = "DELETE FROM mahasiswa WHERE id=$id";

    // Jalankan query
    if (mysqli_query($con,$sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Ada error ". mysqli_error();
    }

    // Tutup koneksi MySQL
    mysqli_close($con);
}

?>

<br>
<a href="index.php">Beranda</a>
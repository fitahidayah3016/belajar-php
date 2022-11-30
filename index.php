<?php
// 1. Buat koneksi dengan MySQL
$con = mysqli_connect ("localhost","root","","fakultas");

// 2. Cek koneksi dengan MySQL
if (mysqli_connect_errno()) {
    echo "Koneksi gagal". mysqli_connect_error();
} else {
    echo "Koneksi berhasil";
}

// 3. Membaca data dari table MySQL
$query = "SELECT * FROM mahasiswa";

// 4. Tampilkan data, dengan menjalankan SQL query
$result = mysqli_query ($con,$query);
$mahasiswa = [];
if ($result) {
    // Tampilkan data satu per satu
    while($row = mysqli_fetch_assoc($result)){
        $mahasiswa[] = $row;
    }
    mysqli_free_result($result);
}

// 5. Tutup koneksi MySQL
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiwa</h1>
    <a href="insert.php">Tambah Data</a>
    <table border="1" style="width:100%">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiswa as $value): ?>
        <tr>
            <td><?php echo $value ["nim"] ?></td>
            <td><?php echo $value ["nama"] ?></td>
            <td><?php echo $value ["jenis_kelamin"] ?></td>
            <td><?php echo $value ["tempat_lahir"] ?></td>
            <td><?php echo $value ["tanggal_lahir"] ?></td>
            <td><?php echo $value ["alamat"] ?></td>
            <td>
                <a href="<?php echo "update.php?id=".$value ["id"] ?>">Edit</a>
                <a href="<?php echo "delete.php?id=".$value ["id"] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
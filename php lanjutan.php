<?php

$nama = "fita hidayah";

/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
*/

/*
$no = 10;
 for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
 }
 */

 /*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

 /*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;

 do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('Avanza', 'Lamborghini', 'Xenia', 'XPander', 'Robicon');
foreach ($data as $value){
    echo $value."<br>";
}
*/

/*
$data = array('Avanza', 'Lamborghini', 'Xenia', 'XPander', 'Robicon');
echo $data[0];
*/

//PERCABANGAN//
/*
if ($nama == "fita") {
    echo $nama." adalah orang  Jember";
} else {
    echo $nama." bukan orang Jember";
}

if ($nama == "fita") {
    echo $nama." adalah orang  Jember";
} else if ($nama == "fita") {
    echo $nama." berasal dari pulau Jawa";
} else {
    echo $nama." dari mana ya?";
}
*/

/*
switch($nama) {
    case "fita":
        $pesan = $nama." adalah orang Jember";
    break;
    case "fita":
        $pesan = $nama." berasal dari pulau Jawa";
    break;
    default:
        $pesan = $nama." dari mana ya?";
}

echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "fita":
                    $pesan = $_POST['nama']." adalah orang Jember";
                break;
                case "fita":
                    $pesan = $_POST['nama']." berasal dari pulau Jawa";
                break;
                default:
                    $pesan = $_POST['nama']." dari mana ya?";
        }  

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
            }

    } else {
        echo "Anda belum input nama dan jumlah";
    }
    ?>
</body>
</html>
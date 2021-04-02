<?php
include 'koneksi.php';

$query = "SELECT * FROM alat_kode ORDER BY id DESC LIMIT 1";
$result = mysqli_query($kon, $query);
$row = mysqli_fetch_array($result);
$lastid = $row['kode'];

// var_dump($lastid);
// die;
if ($lastid == "") {
    $empid = "ALAT1";
} else {
    $lastid = substr($lastid, 4);
    $lastid = intval($lastid);
    $empid = "ALAT" . ($lastid + 1);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Com23    ewyerpatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="css/reset_css.css">
    <link rel="stylesheet" href="css/table.css">

</head>

<body>
    <?php include_once("topnav.php"); ?>
    <div class="container">
        <div class="header">
            <h3 class="judul">Tambah data Alat</h3>
            <ul>
                <li><a href="index.php">Daftar Alat</a></li>
            </ul>
        </div>
    </div>

    <form action="fungsi_tambah_alat.php" method="post">
        <div id="container">
            <table id="customers">
                <tr>
                    <td width="150"><label for="kode">Kode Peralatan</label></td>
                    <td><input style="border:none" size="10" type="text" name="kode" id="kode" value="<?= $empid; ?>" readonly></td>
                </tr>
                <tr>
                    <td><label for="kel">Kelompok Alat</label></td>
                    <td>
                        <select id="kel" name="kel" required>
                            <option value="AWS">AWS DIGI</option>
                            <option value="AWOS">AWOS</option>
                            <option value="SYNOP">SYNOP/Taman Alat</option>
                            <option value="LLWAS">LLWAS</option>
                            <option value="RADAR">Radar Cuaca</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Alat</label></td>
                    <td><input size="50" type="text" name="nama" id="nama" required></td>
                </tr>

                <tr>
                    <td><label for="jenis">Jenis Alat</label></td>
                    <td>
                        <select id="jenis" name="jenis" required>
                            <option value="Peralatan Canggih/Modern">Peralatan Canggih/Modern</option>
                            <option value="Sederhana Elektronik">Sederhana Elektronik</option>
                            <option value="Sederhana Mekanik">Sederhana Mekanik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="lok">Lokasi Alat</label></td>
                    <td><input size="50" type="text" name="lok" id="lok" required></td>
                </tr>
                <tr>
                    <td><label for="merek">Merek</label></td>
                    <td><input size="50" type="text" name="merek" id="merek" placeholder="Tulis (-) jika kosong, tanpa tanda kurung" required></td>
                </tr>
                <tr>
                    <td><label for="tipe">Tipe</label></td>
                    <td> <input size="50" type="text" name="tipe" id="tipe" placeholder="Tulis (-) jika kosong, tanpa tanda kurung" required></td>
                </tr>
                <tr>
                    <td><label for="sn">Serial Number</label></td>
                    <td><input size="50" type="text" name="sn" id="sn" placeholder="Tulis (-) jika kosong, tanpa tanda kurung" required></td>
                </tr>
                <tr>
                    <td><label for="tgl_beli">Tahun Pengadaan</label></td>
                    <td><input type="number" name="tgl_beli" id="tgl_beli" min="1900" max="2099" step="1" value="2021" required></td>
                </tr>
                <tr>
                    <td><label for="tgl_install">Tanggal Instalasi</label></td>
                    <td><input type="date" name="tgl_install" id="tgl_install" required></td>
                </tr>
                <tr>
                    <td><label for="tgl_kal">Tanggal Kalibrasi</label></td>
                    <td><input type="date" name="tgl_kal" id="tgl_kal"></td>
                </tr>
                <tr>
                    <td><label for="ket">Keterangan</label></td>
                    <td><input size="50" type="text" name="ket" id="ket"></td>
                </tr>
                <tr>
                    <td><label for="kondisi">Kondisi</label></td>
                    <td>
                        <select id="kondisi" name="kondisi" required>
                            <option value="Baik">Baik</option>
                            <option value="Rusak Ringan">Rusak Ringan</option>
                            <option value="RUSAK BERAT">Rusak Berat</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Tambah Data</button></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>
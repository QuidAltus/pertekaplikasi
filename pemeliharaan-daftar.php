<?php
require 'function.php';
include 'koneksi.php';
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/reset_css.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <?php include_once("topnav.php"); ?>
    <div class="container">
        <div class="header">
            <h3 class="judul">Pemeliharaan</h3>
            <ul>
                <li><a href="pemeliharaan.php">Input Pemeliharaan</a></li>
            </ul>
        </div>
    </div>


    <?php
    if (isset($_GET['jurusan'])) {
        $jurusan = trim($_GET['jurusan']);

        $mahasiswa = query("SELECT
        alat_mtn.tek AS tek,
        alat_mtn.cat AS cat,
        alat_mtn.lok AS lok,
        alat_mtn.tgl AS tgl,
        alat_mtn.kel AS kel
        FROM alat_mtn
        ;");
    } else {
        $mahasiswa = query("SELECT
        alat_mtn.tek AS tek,
        alat_mtn.cat AS cat,
        alat_mtn.lok AS lok,
        alat_mtn.tgl AS tgl,
        alat_mtn.kel AS kel
        FROM alat_mtn
        ;");
    }
    ?>
    <?php
    // var_dump($mahasiswa[0]["tek1"]);
    // die;
    ?>
    <form action="fungsi_tambah_kondisi_alat.php" method="POST">
        <div id="container">
        </div>

        <input type="hidden" name="max" value="<?= count($mahasiswa); ?>">
        <div id="container">
            <table id="customers">
                <tr>
                    <td>No</td>
                    <td>Tgl</td>
                    <td>Alat</td>
                    <td>Lok</td>
                    <td>Teknisi</td>
                    <td>Catatan</td>
                    <td>Aksi</td>
                </tr>

                <?php $i = 0;
                $no = 1;







                ?>





                <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                        <input type="hidden" name="kode<?= $i; ?>" value="<?= $row["kode"]; ?>">

                        <td><?= $no; ?></td>
                        <td><?= $row["tgl"]; ?></td>
                        <td><?= $row["kel"]; ?></td>
                        <td><?= $row["lok"]; ?> </td>
                        <td>
                            <?php $tek = explode(',', $row['tek']);
                            echo $tek[0] . " " . $tek[1] . " " . $tek[2] . " " . $tek[3] . " " . $tek[4]; ?>
                        </td>
                        <td><?= $row["cat"]; ?></td>
                        <td>
                            <a href="pemeliharaan-detail.php?tgl=<?= $row["tgl"]; ?>&alat=<?= $row['kel']; ?>">Detail</a>|
                            <a href="cetak-aws.php?tgl=<?= $row["tgl"]; ?>&alat=<?= $row['kel']; ?>" target="_blank">Cetak</a>|
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');">hapus</a>
                        </td>
                    </tr>
                    <?php $i++;
                    $no++; ?>

                <?php endforeach; ?>
            </table>
        </div>
    </form>
    <?php include_once("background.php"); ?>
</body>

</html>
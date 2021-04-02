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
            <h3 class="judul">Perbaikan</h3>
            <ul>
                <li><a href="perbaikan.php">Input Perbaikan</a></li>
            </ul>
        </div>
    </div>


    <?php
    if (isset($_GET['jurusan'])) {
        $jurusan = trim($_GET['jurusan']);

        $mahasiswa = query("SELECT
        alat_repair.tgl_rusak AS tgl_rusak,
        alat_repair.tgl_repair AS tgl_repair,
        alat_repair.tek AS tek,
        alat_repair.awal AS awal,
        alat_repair.akhir AS akhir,
        alat_repair.tindakan AS tindakan
        FROM alat_repair
        ;");
    } else {
        $mahasiswa = query("SELECT
        alat_repair.id AS id,
        alat_repair.kode AS kode,
        alat_repair.tgl_rusak AS tgl_rusak,
        alat_repair.tgl_repair AS tgl_repair,
        alat_repair.tek AS tek,
        alat_repair.awal AS awal,
        alat_repair.akhir AS akhir,
        alat_repair.tindakan AS tindakan,
        alat_kode.nama AS nama,
        alat_riwayat.merek AS merek,
        alat_riwayat.tipe AS tipe,
        alat_riwayat.sn AS sn,
        alat_riwayat.tgl_beli AS tgl_beli
        FROM alat_repair
        INNER JOIN alat_kode ON alat_repair.kode = alat_kode.kode
        INNER JOIN alat_riwayat ON alat_repair.kode = alat_riwayat.kode
        ORDER BY alat_repair.id DESC
        ;");
    }
    ?>
    <?php
    // var_dump($mahasiswa[0]["tgl_rusak1"]);
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
                    <td>Tgl Rusak</td>
                    <td>Tgl Perbaikan</td>
                    <td>Teknisi</td>
                    <td>ALAT</td>
                    <td>Merek/Tipe/SN</td>

                    <td>Kondisi Awal</td>
                    <td>Tindakan</td>
                    <td>Kondisi Akhir</td>
                    <td>Tahun Beli</td>
                    <td>Aksi</td>
                </tr>

                <?php $i = 0;
                $no = 1;
                ?>

                <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                        <input type="hidden" name="id" value="<?= $row["id"]; ?>">

                        <td><?= $no; ?></td>
                        <td><?= $row["tgl_rusak"]; ?></td>
                        <td><?= $row["tgl_repair"]; ?></td>
                        <td>
                            <?php $tek = explode(',', $row['tek']);
                            echo $tek[0] . " " . $tek[1] . " " . $tek[2] . " " . $tek[3] . " " . $tek[4]; ?>
                        </td>
                        <td><?= $row["nama"]; ?> </td>
                        <td><?= $row["merek"] . '&#9550;' . $row["tipe"] . '&#9550;' . $row["sn"]; ?></td>

                        <td><?= $row["awal"]; ?> </td>
                        <td><?= $row["tindakan"]; ?> </td>
                        <td><?= $row["akhir"]; ?> </td>
                        <td><?= $row["tgl_beli"]; ?></td>

                        <td>
                            <a href="perbaikan-detail.php?tgl=<?= $row["tgl"]; ?>&alat=<?= $row['kel']; ?>">Detail</a>|
                            <a href="cetak-perbaikan.php?id=<?= $row["id"]; ?>" target="_blank">Cetak</a>|
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
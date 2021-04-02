<?php
require 'function.php';
include 'koneksi.php';

$alat_kat = $_GET['alat'];
$tgl_mtn = $_GET['tgl'];

$mtnalat = query1("SELECT * FROM alat_mtn Where tgl ='$tgl_mtn' AND kel='$alat_kat'");

$mahasiswa = query("SELECT
-- alat_mtn.tek AS tek,
-- alat_mtn.cat AS cat,
-- alat_mtn.lok AS lok,
alat_kode.lok AS lok,
alat_kode.kode AS kode,
alat_kode.nama AS nama,
alat_kode.jenis AS jenis,
alat_riwayat.merek AS merek,
alat_riwayat.tgl_beli AS tgl_beli,
alat_riwayat.tgl_install AS tgl_install,
alat_riwayat.tipe AS tipe,
alat_riwayat.sn AS sn,
alat_riwayat.tgl_kal AS tgl_kal,
alat_kondisi.ket AS ket,
alat_kondisi.kondisi AS kondisi,
alat_kondisi.tgl AS tgl
FROM alat_kode
INNER JOIN alat_riwayat ON alat_riwayat.kode=alat_kode.kode
INNER JOIN alat_kondisi ON alat_kode.kode=alat_kondisi.kode
-- INNER JOIN alat_mtn ON alat_mtn.tgl=alat_kondisi.tgl
WHERE alat_kode.kel='$alat_kat'
AND alat_riwayat.id IN (SELECT MAX(alat_riwayat.id) FROM alat_riwayat GROUP BY alat_riwayat.kode)
AND alat_kondisi.tgl ='$tgl_mtn'
ORDER BY alat_kode.lok, alat_kode.nama DESC
;");

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
    <div class="container">
        <div class="header">
            <h3 class="judul">Pemeliharaan</h3>
            <ul>
                <li><a href="index.php">Daftar Alat</a></li>
                <li><a href="pemeliharaan-daftar.php">Daftar Pemeliharaan</a></li>
                <li><a href="cetak-aws.php?tgl=<?= $tgl_mtn; ?>&alat=<?= $alat_kat; ?>" target="_blank">Cetak</a></li>

            </ul>
        </div>
    </div>

    <?php
    // var_dump($mahasiswa[0]["tek1"]);
    // die;
    ?>
    <form action="fungsi_tambah_kondisi_alat.php" method="POST">
        <div id="container">
            <table id="customers">
                <tr>
                    <td width="150">
                        <label for="tgl_mtn">Tanggal Pemeliharaan</label>
                    </td>
                    <td>
                        <?= $mtnalat[0]["tgl"]; ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="kode">Teknisi</label></td>
                    </td>
                    <td>
                        <?php $daftartek = $mtnalat[0]["tek"];
                        $array = explode(',', $daftartek);
                        $notek = 1;
                        foreach ($array as $teknisi) {
                            if ($teknisi != "") {
                                $tahutek[] = $notek . "." . $teknisi;
                            }
                            $notek++;
                        }
                        echo implode('&nbsp;&nbsp;&nbsp;', $tahutek);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="lok">Lokasi Alat</label></td>
                    <td><?= $mtnalat[0]["lok"]; ?></td>
                    <?php

                    ?>
                </tr>
            </table>
        </div>

        <input type="hidden" name="max" value="<?= count($mahasiswa); ?>">
        <div id="container">
            <table id="customers">
                <tr>
                    <td>No</td>
                    <td>Nama Alat</td>
                    <td>Kondisi</td>
                    <td>Keterangan</td>
                    <td>Merek/Tipe/SN</td>
                    <td>Tanggal Install</td>
                    <td>Update</td>
                    <td>Aksi</td>
                </tr>

                <?php $i = 0;
                $no = 1;
                ?>
                <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                        <?php if ($no == 1) { ?>
                    </tr>
                    <td colspan="8" bgcolor="#5D7B9D">
                        <font color="#fff"><b><?= $row["lok"]; ?></b></font>
                    </td>
                    <tr>
                    <?php
                            $now_loc = $row["lok"];
                        }
                        if ($now_loc != $row["lok"]) {
                    ?>
                    </tr>
                    <td colspan="8" bgcolor="#5D7B9D">
                        <font color="#fff"><b><?= $row["lok"]; ?></b></font>
                    </td>
                    <tr>
                    <?php $now_loc = $row["lok"];
                        } ?>
                    <input type="hidden" name="kode<?= $i; ?>" value="<?= $row["kode"]; ?>">

                    <td><?= $no; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["kondisi"]; ?> </td>
                    <td><?= $row["ket"]; ?></td>
                    <td><?= $row["merek"] . '&#9550;' . $row["tipe"] . '&#9550;' . $row["sn"]; ?></td>
                    <td><?= $row["tgl_beli"]; ?></td>

                    <td><?= $row["tgl"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>|
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');">hapus</a>
                    </td>
                    </tr>
                    <?php $i++;
                    $no++; ?>

                <?php endforeach; ?>
            </table>
            <table id="customers">
                <tr>
                    <td>
                        <?= $mtnalat[0]["cat"]; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>
<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'function.php';
include 'koneksi.php';

$alat_kat = $_GET['alat'];
$tgl_mtn = $_GET['tgl'];
$mahasiswa = query("SELECT
        alat_mtn.tek AS tek,
        alat_mtn.cat AS cat,
        alat_mtn.lok AS lok,
        alat_kode.kode AS kode,
        alat_kode.jenis AS jenis,
        alat_kode.nama AS nama,
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
        JOIN alat_mtn ON alat_mtn.tgl=alat_kondisi.tgl
        WHERE alat_kondisi.id IN (SELECT MAX(alat_kondisi.id) FROM alat_kondisi GROUP BY alat_kondisi.kode)
        AND alat_riwayat.id IN (SELECT MAX(alat_riwayat.id) FROM alat_riwayat GROUP BY alat_riwayat.kode)
        AND alat_kode.kel='$alat_kat'
        AND alat_mtn.tgl='$tgl_mtn'
        ORDER BY alat_kode.id ASC
        ;");

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeliharaan</title>
</head>
<body>
<table border="1" cellpadding="2" cellspacing="0">
    <tr>
        <td>No</td>
        <td>Nama Peralatan</td>
        <td>Merek/Tipe/SN</td>
        <td>Kondisi</td>
        <td>Keterangan</td>
    </tr>';
$no = 1;
foreach ($mahasiswa as $row) :

    $html .= '<tr>
    <td>' . $no++ . '</td>
    <td>' . $row["nama"] . '</td>
    <td>' . $row["merek"] . ' / ' . $row["tipe"] . ' / ' . $row["sn"] . '</td>
    <td>' . $row["kondisi"] . '</td>
    <td>' . $row["ket"] . '</td>
    </tr>';
endforeach;

$html .= '</table>
</body>
</html>
';

$mpdf->WriteHTML($html);
$mpdf->Output();

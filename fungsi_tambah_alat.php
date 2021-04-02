<?php
include 'koneksi.php';

$kel = htmlspecialchars($_POST["kel"]);
$kode = htmlspecialchars($_POST["kode"]);
$jenis = htmlspecialchars($_POST["jenis"]);
$lok = htmlspecialchars($_POST["lok"]);
$nama = htmlspecialchars($_POST["nama"]);
$merek = htmlspecialchars($_POST["merek"]);
$tipe = htmlspecialchars($_POST["tipe"]);
$sn = htmlspecialchars($_POST["sn"]);
$tgl_beli = htmlspecialchars($_POST["tgl_beli"]);
$tgl_install = htmlspecialchars($_POST["tgl_install"]);
$tgl_kal = htmlspecialchars($_POST["tgl_kal"]);
$ket = htmlspecialchars($_POST["ket"]);
$kondisi = htmlspecialchars($_POST["kondisi"]);
$tgl = $tgl_install;

//tutr from dumet https://www.kursuswebsite.org/insert-multiple-row-multiple-table-php/

$queri_alat_kode = mysqli_query(
    $kon,
    "INSERT INTO alat_kode (kode, kel, jenis, nama, lok)
                VALUES('$kode','$kel','$jenis','$nama','$lok')"
);

if ($queri_alat_kode = TRUE) {
    $queri_alat_riwayat = mysqli_query(
        $kon,
        "INSERT INTO alat_kondisi (kode, kondisi, tgl, ket)
                            VALUES('$kode','$kondisi',' $tgl_install','$ket')"
    );
}

if ($queri_alat_riwayat = TRUE) {
    mysqli_query(
        $kon,
        "INSERT INTO alat_riwayat (kode, merek, tipe, sn, tgl_beli, tgl_install, tgl_kal)
                            VALUES('$kode','$merek',' $tipe','$sn','$tgl_beli',' $tgl_install','$tgl_kal')"
    );
    header('location:index.php');
}

<?php
include 'koneksi.php';

$tgl = $_POST['tgl_mtn'];
$max = $_POST['max'];
$cat = htmlspecialchars($_POST['cat']);
$lo_all = $_POST['site'];
$lok = implode(", ", $lo_all);
$tek1 = htmlspecialchars($_POST['tek1']);
$tek2 = htmlspecialchars($_POST['tek2']);
$tek3 = htmlspecialchars($_POST['tek3']);
$tek4 = htmlspecialchars($_POST['tek4']);
$tek5 = htmlspecialchars($_POST['tek5']);
$combinetek = $tek1 . "," . $tek2 . "," . $tek3 . "," . $tek4 . "," . $tek5;
$kodenormal = htmlspecialchars($_POST['kodenormal']);

for ($i = 0; $i < $max; $i++) {
    $kode[$i] = $_POST["kode$i"];
    $kondisi[$i] = $_POST["kondisi$i"];
    $ket[$i] = $_POST["ket$i"];
    $tambah_kondisi = mysqli_query(
        $kon,
        "INSERT INTO alat_kondisi (kode, kondisi, tgl, ket)
                            VALUES ('$kode[$i]','$kondisi[$i]','$tgl','$ket[$i]')"
    );
}
if ($tambah_kondisi = TRUE) {
    mysqli_query(
        $kon,
        "INSERT INTO alat_mtn (tgl, lok, cat, tek, kel)
                            VALUES('$tgl','$lok','$cat',' $combinetek','$kodenormal')"
    );
    header('location:pemeliharaan-daftar.php');
}

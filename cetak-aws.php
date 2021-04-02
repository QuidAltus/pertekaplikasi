<?php
require 'function.php';
include 'koneksi.php';

$alat_kat = $_GET['alat'];
$tgl_mtn = $_GET['tgl'];
// $alat_jenis = $_GET['jenis'];

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


// memanggil library FPDF
$image1 = 'img/ttd-zem.png';
$image2 = 'img/ttd-rokhyadin.png';
require('fpdf182/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF

$pdf = new FPDF('p', 'mm', 'A4');
// membuat halaman baru
$pdf->SetDisplayMode(80, 'single');
$pdf->SetMargins(14, 4, 8);
$pdf->SetDisplayMode('fullpage');
$pdf->AddPage();
$pdf->SetTitle('pemeliharaan' . '-' . $tgl_mtn . '-' . $alat_kat);
// $pdf->SetAutoPageBreak(false);

// header
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(0, 4, 'FM.PT.01.01.03', 0, 1, "R");
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(0, 4, 'BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA', 0, 1, 'C');


$pdf->Image('img/logo-bmkg.png', 30, 9, 13);
$pdf->Image('img/logo-nqa.png', 164, 9, 20);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(0, 4, 'STASIUN METEOROLOGI KELAS I JUANDA SIDOARJO', 0, 1, 'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 3, 'Bandar Udara Internasional Juanda Surabaya', 0, 1, 'C');
$pdf->Cell(0, 3, 'Telepon: (031) 8667540, Fax: (031) 8675342', 0, 1, 'C');
$pdf->Cell(0, 3, 'Email: stamet.juanda@bmkg.go.id dan kstujud@gmail.com', 0, 1, 'C');
$pdf->Cell(0, 3, 'Website: juanda.jatim.bmkg.go.id', 0, 1, 'C');
$pdf->Cell(0, 0.5, '', 'B', 1, 'C');
$pdf->Cell(0, 0.5, '', 'B', 1, 'C');
//----------------------------------------------------------------------------------
// judul
$pdf->Cell(0, 2, '', 0, 1);
$pdf->SetFont('Arial', 'UB', 11);
$pdf->Cell(0, 5, 'LAPORAN PEMELIHARAAN PERALATAN', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 5, $alat_kat, 0, 1, 'C');
//----------------------------------------------------------------------------------
//identitas
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 5, 'I. Identitas', 0, 1);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(7, 5, 'No', 1, 0, 'C');
$pdf->Cell(0, 5, 'Uraian', 1, 1, 'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(7, 5, '1', 'LR', 0, 'C');
$pdf->Cell(40, 5, 'Lokasi / Stasiun', 'LRT', 0, 'L');
$pdf->Cell(0, 5, ': ' . $mtnalat[0]["lok"] . ' / Stasiun Meteorologi Kelas I Juanda Sidoarjo', 'LR', 1, 'L');
$pdf->Cell(7, 5, '2', 'LR', 0, 'C');
$pdf->Cell(40, 5, 'Petugas / Teknisi ', 'LR', 0, 'L');
$daftartek = $mtnalat[0]["tek"];
$array = explode(',', $daftartek);
$notek = 1;
foreach ($array as $teknisi) {
    if ($teknisi != "") {
        $tahutek[] = $notek . "." . $teknisi;
    }
    $notek++;
}

$pdf->Cell(0, 5, ':' . implode('  ', $tahutek), 'LR', 1, 'L');
$pdf->Cell(7, 5, '3', 'LR', 0, 'C');
$pdf->Cell(40, 5, 'Waktu Pelaksanaan ', 'LR', 0, 'L');
$pdf->Cell(0, 5, ': ' . "$tgl_mtn", 'LR', 1, 'L');
$pdf->Cell(7, 5, '4', 'LRB', 0, 'C');
$pdf->Cell(40, 5, 'Jenis Peralatan', 'LRB', 0, 'L');
$jenisalat = [];
foreach ($mahasiswa as $row) {
    $jenisalat[] = $row["jenis"];
}
$test = array_unique($jenisalat);
$pdf->Cell(0, 5, ': ' . join(', ', $test), 'LRB', 1, 'L');
//-------------------------------------------------------------------------------
//Kondisi Komponen
$pdf->Cell(0, 2, '', 0, 1); // Memberikan space kebawah agar tidak terlalu rapat
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 5, 'II. Kondisi Komponen ' . $alat_kat, 0, 1);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(7, 10, 'No', 1, 0, 'C');
$pdf->Cell(55, 10, 'Nama Peralatan', 1, 0, 'C');
$pdf->Cell(55, 10, 'Merk / SN', 1, 0, 'C');
$pdf->Cell(15, 5, 'Kondisi', 1, 0, 'C');
$pdf->Cell(0, 10, 'KETERANGAN', 1, 0, 'C');
$pdf->MultiCell(0, 5, '');
$pdf->Cell(117, 5, '', 0, 0, 'C');
$pdf->Cell(5, 5, 'RB', 1, 0, 'C');
$pdf->Cell(5, 5, 'RR', 1, 0, 'C');
$pdf->Cell(5, 5, 'B', 1, 1, 'C');
$no = 1;
foreach ($mahasiswa as $row) :

    $pdf->SetFont('Arial', '', 8);
    if ($no == 1) {
        $pdf->SetFillColor(210, 221, 242);
        $pdf->Cell(0, 5, $row["lok"], 1, 1, 'L', 1);
        $now_loc = $row["lok"];
    }
    if ($now_loc != $row["lok"]) {
        $pdf->SetFillColor(210, 221, 242);
        $pdf->Cell(0, 5, $row["lok"], 1, 1, 'L', 1);
        $now_loc = $row["lok"];
    }
    $pdf->Cell(7, 5, $no, 1, 0, 'C');
    $pdf->Cell(55, 5, $row["nama"], 1, 0, 'L');
    $pdf->Cell(55, 5, $row["merek"] . '/' . $row["tipe"] . '/' . $row["sn"], 1, 0, 'L');
    if ($row["kondisi"] == "Baik") {
        $kondisiB = chr(0x33);
        $kondisiRR = "";
        $kondisiRB = "";
    } else if ($row["kondisi"] == "Rusak Ringan") {
        $kondisiB = "";
        $kondisiRR = chr(0x33);
        $kondisiRB = "";
    } else {
        $kondisiB = "";
        $kondisiRR = "";
        $kondisiRB = chr(53);
    }
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(5, 5, $kondisiRB, 1, 0, 'L');
    $pdf->Cell(5, 5, $kondisiRR, 1, 0, 'L');
    $pdf->Cell(5, 5, $kondisiB, 1, 0, 'L');
    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(0, 5, $row["ket"], 1, 1, 'L');


    $no++;
endforeach;
//----------------------------------------------------------------------
//catatan khusus
$pdf->Cell(0, 2, '', 0, 1); // Memberikan space kebawah agar tidak terlalu rapat
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 5, 'III. Catatan Khusus', 0, 1);
$pdf->SetFont('Arial', '', 8);
$pdf->MultiCell(0, 5, $mtnalat[0]["cat"], 1, 1);
//----------------------------------------------
//KEPALA SEKSI
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(0, 2, '', 0, 1);
$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(40, 5, 'Mengetahui,', 0, 1, 'C');
$pdf->Cell(10, 3, '', 0, 0);
$pdf->Cell(40, 3, 'Koordinator Bidang Observasi', 0, 0, 'C');
$pdf->Cell(53, 3, '', 0, 0);
$pdf->Cell(0, 3, 'Kepala Kelompok Peralatan Teknis', 0, 1, 'C');

$pdf->Cell(14, 4, '', 0, 0);
$pdf->Cell(70, 4, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 32), 0, 0, '', false);
$pdf->Cell(45, 4, '', 0, 0);
$pdf->Cell(0, 4, $pdf->Image($image2, $pdf->GetX(), $pdf->GetY(), 29), 0, 1, '', false);

$pdf->Cell(0, 9, '', 0, 1);
$pdf->Cell(60, 5, 'ZEM IRIANTO PADAMA, SE, S.Si', 0, 0, 'C');
$pdf->Cell(50, 5, '', 0, 0);
$pdf->Cell(0, 5, 'ROKHYADIN', 0, 0, 'C');
$fileName = 'pemeliharaan-' . $tgl_mtn . '-' . $alat_kat . '.pdf';
$pdf->Output($fileName, 'I');

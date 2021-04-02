<?php
require 'function.php';
include 'koneksi.php';

$jurusan = $_GET['jurusan'];
// $jurusan = "AWOS";
$mahasiswa = query("SELECT
        alat_kode.lok AS lok,
        alat_kode.kode AS kode, 
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
        WHERE alat_kondisi.id IN (SELECT MAX(alat_kondisi.id) FROM alat_kondisi GROUP BY alat_kondisi.kode)
        AND alat_riwayat.id IN (SELECT MAX(alat_riwayat.id) FROM alat_riwayat GROUP BY alat_riwayat.kode)
        AND alat_kode.kel='$jurusan'
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
$pdf->SetMargins(14, 13, 8);
$pdf->SetDisplayMode('fullpage');
$pdf->AddPage();
// $pdf->SetTitle('pemeliharaan' . '-' . $tgl_mtn . '-' . $alat_kat);
// $pdf->SetAutoPageBreak(false);

// header
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(0, 4, 'FM.PT.01.01.03', 0, 1, "R");
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(0, 4, 'BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA', 0, 1, 'C');


$pdf->Image('img/logo-bmkg.png', 30, 18, 13);
$pdf->Image('img/logo-nqa.png', 264, 18, 20);
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
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(0, 5, 'INVENTARIS PERALATAN', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
// $pdf->Cell(0, 5, $alat_kat, 0, 1, 'C');
//----------------------------------------------------------------------------------

//-------------------------------------------------------------------------------
//Kondisi Komponen
$pdf->Cell(0, 2, '', 0, 1); // Memberikan space kebawah agar tidak terlalu rapat
$pdf->SetFont('Arial', 'B', 10);
// $pdf->Cell(0, 5, 'II. Kondisi Komponen ' . $alat_kat, 0, 1);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(7, 10, 'No', 1, 0, 'C');
$pdf->Cell(55, 10, 'Nama Peralatan', 1, 0, 'C');
$pdf->Cell(55, 10, 'Merk/ Tipe/ SN', 1, 0, 'C');
$pdf->Cell(15, 10, 'Pengadaan', 1, 0, 'C');
$pdf->Cell(20, 10, 'Kalibrasi', 1, 0, 'C');
$pdf->Cell(0, 10, 'Keterangan', 1, 1, 'C');
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
    $pdf->Cell(15, 5, $row["tgl_beli"], 1, 0, 'C');
    $pdf->Cell(20, 5,  $row["tgl_kal"], 1, 0, 'C');
    $pdf->Cell(0, 5, $row["ket"], 1, 1, 'C');
    $no++;
endforeach;
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
$pdf->Cell(95, 4, '', 0, 0);
$pdf->Cell(0, 4, $pdf->Image($image2, $pdf->GetX(), $pdf->GetY(), 29), 0, 1, '', false);

$pdf->Cell(0, 9, '', 0, 1);
$pdf->Cell(60, 5, 'ZEM IRIANTO PADAMA, SE, S.Si', 0, 0, 'C');
$pdf->Cell(50, 5, '', 0, 0);
$pdf->Cell(0, 5, 'ROKHYADIN', 0, 0, 'C');
$fileName = 'pemeliharaan- .pdf';
$pdf->Output($fileName, 'I');

<?php
require 'function.php';
include 'koneksi.php';

$id = $_GET['id'];
$mahasiswa = query("SELECT
        alat_repair.kode AS kode,   
        alat_repair.lapor AS lapor,      
        alat_repair.tgl_rusak AS tgl_rusak,
        alat_repair.tgl_repair AS tgl_repair,
        alat_repair.tek AS tek,
        alat_repair.awal AS awal,
        alat_repair.akhir AS akhir,
        alat_repair.tindakan AS tindakan,
        alat_kode.nama AS nama,
        alat_kode.lok AS lok,
        alat_kode.jenis AS jenis,
        alat_riwayat.merek AS merek,
        alat_riwayat.tipe AS tipe,
        alat_riwayat.sn AS sn,
        alat_riwayat.tgl_beli AS tgl_beli
        FROM alat_repair
        INNER JOIN alat_kode ON alat_repair.kode = alat_kode.kode
        INNER JOIN alat_riwayat ON alat_repair.kode = alat_riwayat.kode
        WHERE alat_repair.id ='$id'
        ORDER BY alat_repair.tgl_rusak DESC
        ;");

// memanggil library FPDF
$image1 = 'img/ttd-zem.png';
$image2 = 'img/ttd-rokhyadin.png';
require('fpdf182/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p', 'mm', 'A4');
// membuat halaman baru
$pdf->SetMargins(14, 4, 8);
$pdf->SetDisplayMode('fullpage');
$pdf->AddPage();
// $pdf->SetAutoPageBreak(false);

// header
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(0, 4, 'FM.PT.01.02.01', 0, 1, "R");
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
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(0, 5, 'FORM PERBAIKAN PERALATAN', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 4, '', 0, 1);
$no = 1;
foreach ($mahasiswa as $row) :
    // data teknis
    $tek = explode(',', $row['tek']);

    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(32, 5, 'Tanggal Kerusakan', 0, 0);
    $pdf->Cell(2, 5, ':', 0, 0);
    $pdf->Cell(87, 5, $row['tgl_rusak'], 0, 0);
    $pdf->Cell(31, 5, 'Tanggal Perbaikan', 0, 0);
    $pdf->Cell(2, 5, ':', 0, 0);
    $pdf->Cell(55, 5, $row['tgl_repair'], 0, 1);
    //----------------------------------------
    $pdf->Cell(32, 5, 'Nama Alat', 0, 0);
    $pdf->Cell(2, 5, ':', 0, 0);
    $pdf->Cell(87, 5, $row['nama'], 0, 0);
    $pdf->Cell(31, 5, 'Teknisi', 0, 0);
    $pdf->Cell(5, 5, '1.', 0, 0);
    $pdf->Cell(55, 5, $tek[0], 0, 1);
    //----------------------------------------

    $pdf->Cell(32, 5, 'Merk/Tipe', 0, 0);
    $pdf->Cell(2, 5, ':', 0, 0);
    $pdf->Cell(87, 5, $row["merek"] . '/' . $row["tipe"] . '/' . $row["sn"], 0, 0);
    //$pdf->Cell(0,5,$row['sn'],0,0);
    $pdf->Cell(31, 5, '', 0, 0);
    $pdf->Cell(5, 5, '2.', 0, 0);
    $pdf->Cell(50, 5, $tek[1], 0, 1);
    //----------------------------------------
    $pdf->Cell(32, 5, 'Jenis Peralatan', 0, 0);
    $pdf->Cell(2, 5, ':', 0, 0);
    $pdf->Cell(87, 5, $row['jenis'], 0, 0);
    $pdf->Cell(31, 5, '', 0, 0);
    $pdf->Cell(5, 5, '3.', 0, 0);
    $pdf->Cell(50, 5, $tek[2], 0, 1);
    //----------------------------------------
    $pdf->Cell(32, 5, 'Lokasi Alat', 0, 0);
    $pdf->Cell(2, 5, ':', 0, 0);
    $pdf->Cell(87, 5, $row['lok'], 0, 0);
    $pdf->Cell(31, 5, '', 0, 0);
    $pdf->Cell(5, 5, '4.', 0, 0);
    $pdf->Cell(50, 5, $tek[3], 0, 1);
    //----------------------------------------
    $pdf->Cell(32, 5, 'Nama Pelapor', 0, 0);
    $pdf->Cell(2, 5, ':', 0, 0);
    $pdf->Cell(87, 5, $row['lapor'], 0, 0);
    $pdf->Cell(31, 5, '', 0, 0);
    $pdf->Cell(5, 5, '5.', 0, 0);
    $pdf->Cell(55, 5, $tek[4], 0, 1);
    //----------------------------------------
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(10, 8, '', 0, 0);
    $pdf->Cell(100, 8, '', 0, 0);
    $pdf->Cell(0, 8, 'Kepala Kelompok Peralatan Teknis', 0, 1);
    $pdf->Cell(115, 14, '', 0, 0); //spasi kebawah tidak terlalu rapat
    $pdf->Cell(60, 14, $pdf->Image($image2, $pdf->GetX(), $pdf->GetY(), 29), 0, 1, '', false);
    $pdf->Cell(10, 8, '', 0, 0);
    $pdf->Cell(115, 8, '', 0, 0);
    $pdf->Cell(0, 8, 'ROKHYADIN', 0, 1);
    //KONDISI AWAL
    $pdf->Cell(0, 0, '', 0, 1); // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0, 5, 'KONDISI AWAL', 0, 1);
    $pdf->SetFont('Arial', '', 10);
    $pdf->MultiCell(0, 5, $row['awal'], 1, 1);

    //TINDAKAN PERBAIKAN
    $pdf->Cell(0, 5, '', 0, 1); // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0, 5, 'TINDAKAN PERBAIKAN', 0, 1);
    $pdf->SetFont('Arial', '', 10);
    $pdf->MultiCell(0, 5, $row['tindakan'], 1, 1);

    //KONDISI AKHIR
    $pdf->Cell(0, 5, '', 0, 1); // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0, 5, 'KONDISI AKHIR', 0, 1);
    $pdf->SetFont('Arial', '', 10);
    $pdf->MultiCell(0, 5, $row['akhir'], 1, 1);
endforeach;

//KEPALA SEKSI
$pdf->Cell(0, 4, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(113, 8, '', 0, 0);
$pdf->Cell(50, 8, 'Mengetahui,', 0, 1);
$pdf->Cell(100, 5, '', 0, 0);
$pdf->Cell(70, 5, 'Koordinator Bidang Observasi', 0, 1);
$pdf->Cell(105, 17, '', 0, 0);
$pdf->Cell(60, 17, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 32), 0, 1, '', false);
$pdf->Cell(100, 8, '', 0, 0); //spasi kebawah tidak terlalu rapat
$pdf->Cell(80, 8, 'ZEM IRIANTO PADAMA, SE, S.Si', 0, 0);
$pdf->Output();

<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $alat = $_POST['alat'];
    $kondisi = $_POST['kondisi'];

    $tgl_rusak = $_POST['tr'];
    $tgl_repair = $_POST['tp'];
    $kel = $_POST['jurusan'];
    $kode = $_POST['kode_alat'];
    $lapor = strtoupper($_POST['lapor']);
    $lapor = ucfirst($lapor);
    $tek1 = $_POST['tek1'];
    $tek2 = $_POST['tek2'];
    $tek3 = $_POST['tek3'];
    $tek4 = $_POST['tek4'];
    $tek5 = $_POST['tek5'];
    $combinetek = $tek1 . "," . $tek2 . "," . $tek3 . "," . $tek4 . "," . $tek5;
    $awal = $_POST['awal'];
    $tindakan = $_POST['tindakan'];
    $akhir = $_POST['akhir'];
    // var_dump($_POST);
    // die;
    $timestamp = date("Y-m-d H:i:s");
    $tambah_kondisi = mysqli_query(
        $kon,
        "INSERT INTO alat_repair (kode, tgl_rusak, tgl_repair, tek, lapor, kel, awal, tindakan, akhir)
                            VALUES('$alat','$tgl_rusak','$tgl_repair',' $combinetek','$lapor','$kel','$awal','$tindakan','$akhir')"
    );
    if ($tambah_kondisi = TRUE) {
        mysqli_query(
            $kon,
            "INSERT INTO alat_kondisi (kode, kondisi, tgl)
                            VALUES ('$alat','$kondisi','$tgl_repair')"
        );
        header('location:perbaikan-daftar.php');
    }

    // if ($tes) echo '<script>alert("Data Berhasil Disimpan")</script>';
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/reset_css.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h3 class="judul">Input Perbaikan</h3>
            <ul>
                <li><a href="perbaikan-daftar.php">Daftar Perbaikan</a></li>
            </ul>
        </div>
    </div>
    <form action="" method="post">
        <div id="container">
            <table id="customers">
                <tr>
                    <td>
                        <label for="sel1">Pilih Kategori</label>
                    </td>
                    <td>
                        <div class="form-group">
                            <select name="jurusan" id="kategori">
                                <?php
                                $sql = "SELECT * FROM alat_kode GROUP BY kel";
                                $hasil = mysqli_query($kon, $sql);
                                while ($data = mysqli_fetch_array($hasil)) :
                                ?>
                                    <option value="<?= $data['kel']; ?>"><?= $data['kel']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="site">Site</label></td>
                    <td>
                        <select name="site" id="site" required class="selectSite" style="width: 170px"></select>
                    </td>
                </tr>
                <tr>
                    <td><label for="alat">Nama Alat</label></td>
                    <td>
                        <select name="alat" id="alat" required class="selectAlat" style="width: 170px"></select>
                        <input type="hidden" name="kode_alat" value="" id="pricetwo" aria-required="true" readonly>
                    </td>
                </tr>
                <tr>
                    <td><label for="tr">Tanggal Kerusakan</label></td>
                    <td><input type="date" id="tr" placeholder="Masukkan tanggal kerusakan" name="tr" required></td>
                </tr>
                <tr>
                    <td><label for="tp">Tanggal Perbaikan</label></td>
                    <td><input type="date" id="tp" placeholder="Masukkan tanggal perbaikan" name="tp" required></td>
                </tr>
                <tr>
                    <td><label for="lapor">Nama Pelapor</label></td>
                    <td><input type="text" id="lapor" placeholder="Masukkan nama pelapor" name="lapor" required></td>
                </tr>
                <tr>
                    <td><label for="kode">Teknisi</label></td>
                    </td>
                    <td>
                        <?php for ($x = 1; $x <= 5; $x++) {
                        ?>
                            <select id="tek1" name="tek<?= $x; ?>">
                                <option value="">-</option>
                                <option value="Rizzal">M. RIZZAL F.</option>
                                <option value="Anwar">M. ANWAR SYAEFUDIN</option>
                                <option value="Mira">MIRA GRAMEDIA</option>
                                <option value="Rokhyadin">ROKHYADIN</option>
                                <option value="Deni">DENI PRASETYO</option>
                                <option value="Bangkit">SHOWAN BANGKIT S.</option>
                                <option value="Yudha">ARSY YUDHA P.</option>
                            </select>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="awal">Kondisi Awal</label></td>
                    <td><textarea rows="3" id="awal" placeholder="Masukkan kondisi awal peralatan" name="awal"></textarea></td>
                </tr>
                <tr>
                    <td><label for="tindakan">Tindakan Perbaikan</label></td>
                    <td><textarea rows="5" id="tindakan" placeholder="Masukkan tindakan perbaikan peralatan" name="tindakan"></textarea></td>
                </tr>
                <tr>
                    <td><label for="akhir">Kondisi Akhir</label></td>
                    <td><textarea rows="3" id="akhir" placeholder="Masukkan kondisi akhir peralatan" name="akhir"></textarea>
                        <pre><select id="kondisi" name="kondisi" class="kondisiAkhir" required></select></pre>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="simpan" value="Simpan">Simpan</button></td>
                </tr>
            </table>
    </form>

    </div>
    <div class="tam"></div>
    <script>
        $(document).ready(function() {
            load_data($("#kategori").val(), "selectSite");

            function load_data(jurusan, jenis, kategori) {
                $.ajax({
                    method: "POST",
                    url: "selectAlat.php?jenis=" + jenis,
                    data: {
                        jurusan: jurusan,
                        kategori: kategori
                    },
                    success: function(hasil) {
                        if (jenis == "selectSite") {
                            $('.selectSite').html(hasil);
                        } else if (jenis == "selectAlat") {
                            $('.selectAlat').html(hasil);
                        } else if (jenis == "kondisiAkhir") {
                            $('.kondisiAkhir').html(hasil);
                        }
                    }
                });
            }
            $('#kategori').change(function() {
                var jurusan = $("#kategori").val();
                $('.kondisiAkhir, .selectAlat').empty();
                jenis = "selectSite";
                load_data(jurusan, jenis);
                // $('#pricetwo').val($(this).val());
            });

            $('#site').change(function() {
                var jurusan = $(this).val();
                var kategori = $("#kategori").val();
                jenis = "selectAlat";
                load_data(jurusan, jenis, kategori);
            });

            $('#alat').change(function() {
                $('#pricetwo').val($(this).val());

                var jurusan = $(this).val();
                jenis = "kondisiAkhir";
                load_data(jurusan, jenis);
            });
        });
    </script>
    <?php include_once("background.php"); ?>
</body>

</html>
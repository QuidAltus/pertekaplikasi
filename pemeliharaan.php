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
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/reset_css.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h3 class="judul">Input Pemeliharaan</h3>
            <ul>
                <li><a href="index.php">Daftar Alat</a></li>
                <li><a href="pemeliharaan-daftar.php">Daftar Pemeliharaan</a></li>

            </ul>
            <ul>
                <li>
                    <div class="form-group">
                        <label for="sel1">Pilih Alat:</label>
                        <select name="jurusan" id="namaAlat">
                            <?php
                            $sql = "SELECT * FROM alat_kode GROUP BY kel";
                            $hasil = mysqli_query($kon, $sql);
                            while ($data = mysqli_fetch_array($hasil)) :
                            ?>
                                <option value="<?= $data['kel']; ?>"><?= $data['kel']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <form action="fungsi_tambah_kondisi_alat.php" method="POST">
        <div id="container" class="data"></div>
        <div id="container" class="dataAlat"></div>
    </form>

    <?php include_once("background.php"); ?>

    <script>
        $(document).ready(function() {
            load_data($("#namaAlat").val());

            function load_data(jurusan) {
                $.ajax({
                    method: "POST",
                    url: "pemeliharaan-table.php?jenis=pemeliharaan",
                    data: {
                        jurusan: jurusan
                    },
                    success: function(hasil) {
                        $('.data').html(hasil);
                    }
                });
            }
            $('#namaAlat').change(function() {
                $('.dataAlat').empty();
                var jurusan = $("#namaAlat").val();
                load_data(jurusan);
            });
        });
    </script>

</body>

</html>
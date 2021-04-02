<?php
require 'function.php';
//cek apakah tombol submit ditekan atau belum
if (isset($_POST["submit"])) {
    // var_dump($_POST);
    //cek apaah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambah');
                document.location.href = 'index.php';
            </script>
                ";
    } else {
        echo "
            <script>
                alert('data gagal ditambah!!!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Com23    ewyerpatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

</head>

<body>
    <script>
        $(function() {
            $("#buah").autocomplete({
                source: 'auto.php'
            });
        });
    </script>

    <h1>Tambah data mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <div class="form-group">
                    <label for="alat">Nama Alat :</label>
                    <input type="text" class="form-control" id="buah" name="alat" placeholder="Nama Peralatan">
                </div>
            </li>
            <li>
                <label for="tgl_rusak">Tanggal Kerusakan</label>
                <input type="date" name="tgl_rusak" id="tgl_rusak" required>
            </li>
            <li>
                <label for="tgl_repair">Tanggal Perbaikan</label>
                <input type="date" name="tgl_repair" id="tgl_repair" required>
            </li>
            <li>
                <label for="pelapor">Pelapor</label>
                <input type="text" name="pelapor" id="pelapor" required>
            </li>
            <li>
                <label for="teknisi">Teknisi</label>
                <input type="text" name="teknisi" id="teknisi">
            </li>
            <li>
                <label for="awal">Kondisi Awal</label>
                <input type="text" name="awal" id="awal">
            </li>
            <li>
                <label for="tindakan">Tindakan Perbaikan</label>
                <input type="text" name="tindakan" id="tindakan">
            </li>
            <li>
                <label for="akhir">Kondisi Akhir</label>
                <input type="text" name="akhir" id="akhir">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>
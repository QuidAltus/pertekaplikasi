<?php
require 'function.php';

//ambil data di URL
$id = $_GET["id"];
//query data mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah tombol submit ditekan atau belum
if (isset($_POST["submit"])) {
    // var_dump($_POST);
    //cek apaah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ubah');
                document.location.href = 'index.php';
            </script>
                ";
    } else {
        echo "
            <script>
                alert('data gagal ubah!!!');
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
</head>

<body>
    <h1>Ubah data mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">email</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>
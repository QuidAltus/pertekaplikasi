<?php
require 'function.php';
include "koneksi.php";
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/plain; charset=UTF-8" />
    <title>Document</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/reset_css.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <?php include_once("topnav.php"); ?>
    <div class="container">
        <div class="header">
            <h3 class="judul">Daftar Peralatan</h3>
            <ul>
                <li><a href="tambah_alat.php">Tambah Data Alat</a></li>
                <li><a href="update-kondisi.php">Update kondisi</a></li>
                <a href="#" id="myLink">Cetak Alat</a>
            </ul>
            <ul>
                <li>
                    <div class="form-group">
                        <label for="sel1">Pilih Kategori:</label>
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
                <li>
                    <input type="button" onclick="tableToExcel('testTable', 'Daftar Alat')" value="Export to Excel">
                </li>
            </ul>
        </div>
    </div>

    <div id="container" class="data"></div>

    <script>
        $(document).ready(function() {
            load_data($("#namaAlat").val());

            function load_data(jurusan) {
                $.ajax({
                    method: "POST",
                    url: "index-table.php?jenis=daftaralat",
                    data: {
                        jurusan: jurusan
                    },
                    success: function(hasil) {
                        $('.data').html(hasil);
                    }
                });
            }
            $('#namaAlat').change(function() {
                var jurusan = $("#namaAlat").val();
                document.getElementById('myLink').setAttribute('href', 'cetak-alat.php?jurusan=' + jurusan);
                load_data(jurusan);
            });
        });
    </script>

    <script type="text/javascript">
        var tableToExcel = (function() {
            var uri = 'data:application/vnd.ms-excel;base64,',
                template =
                '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>',
                base64 = function(s) {
                    return window.btoa(unescape(encodeURIComponent(s)))
                },
                format = function(s, c) {
                    return s.replace(/{(\w+)}/g, function(m, p) {
                        return c[p];
                    })
                }
            return function(table, name) {
                if (!table.nodeType) table = document.getElementById("customers")
                var ctx = {
                    worksheet: name || 'Worksheet',
                    table: table.innerHTML
                }
                window.location.href = uri + base64(format(template, ctx))
            }
        })()
    </script>
    <?php include_once("background.php"); ?>
</body>

</html>
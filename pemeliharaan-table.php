    <?php
    require 'function.php';

    if ($_GET['jenis'] == 'pemeliharaan') {
        if (isset($_POST['jurusan'])) {
            $jurusan = trim($_POST['jurusan']);

            $mahasiswa = query("SELECT
        alat_kode.lok AS lok,
        alat_kode.kode AS kode,
        alat_kode.nama AS nama,
        alat_kode.kel AS kel,
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
        } ?>


        <div id="container">
            <table id="customers">
                <tr>
                    <td width="150">
                        <label for="tgl_mtn">Tanggal Pemeliharaan</label>
                    </td>
                    <td>
                        <input type="date" name="tgl_mtn" value="<?= date('Y-m-d'); ?>">
                    </td>
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
                    <td width="150">
                        <label for="lok">Site</label>
                    </td>
                    <td>
                        <?php
                        $sql = query("SELECT * FROM `alat_kode` WHERE kel='$jurusan' GROUP BY lok");
                        foreach ($sql as $data) {
                        ?>
                            <input type="checkbox" value="<?= $data['lok'] ?>" id="cek" onchange="check(this)" name="site[]"><?= $data['lok'] ?></input>
                        <?php
                        } ?>
                    </td>
                </tr>
            </table>
        </div>
        <script>
            function check(el) {
                var checkboxes = document.getElementsByName("site[]");
                var site = [];
                var jurusan = "<?= $jurusan ?>";
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked === true) {
                        site.push(checkboxes[i].value);
                        load_data(site, jurusan);
                    } else if ($('#cek :checkbox:not(:checked)').length == 0) {
                        $('.dataAlat').empty();
                    }
                }
            }

            function load_data(site, jurusan) {
                $.ajax({
                    method: "POST",
                    url: "pemeliharaan-table.php?jenis=" + jurusan,
                    data: {
                        site: site
                    },
                    success: function(hasil) {
                        $('.dataAlat').html(hasil);
                    }
                });
            }
        </script>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['jenis']) && isset($_POST['site'])) {
        $l = $_POST['site'];
        for ($i = 0; $i < count($_POST['site']); $i++) {
            if ($i == 0) {
                $lo[$i] = " (alat_kode.lok='$l[$i]'";
            } else {
                $lo[$i] = " or alat_kode.lok='$l[$i]'";
            }
        }
        $lok = implode(" ", $lo);
        $lok .= ')';

        $mahasiswa = query("SELECT
        alat_kode.lok AS lok,
        alat_kode.kode AS kode, 
        alat_kode.nama AS nama,
        alat_kode.kel AS kel,
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
        AND alat_kode.kel='$_GET[jenis]' and $lok
        ORDER BY alat_kode.lok, alat_kode.nama DESC
        ;");
    ?>
        <input type="hidden" name="max" value="<?= count($mahasiswa); ?>">
        <div id="container">
            <table id="customers">
                <tr>
                    <td>No</td>
                    <td>Nama Alat</td>
                    <td>Kondisi</td>
                    <td>Keterangan</td>
                    <td>Lokasi</td>
                    <td>Merek/Tipe/SN</td>
                    <td>Tanggal Install</td>
                    <td>Update</td>
                    <td>Aksi</td>
                </tr>

                <?php $i = 0;
                $no = 1; ?>
                <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                        <input type="hidden" name="kode<?= $i; ?>" value="<?= $row["kode"]; ?>">
                        <input type="hidden" name="kodenormal" value="<?= $row["kel"]; ?>">

                        <?php if ($no == 1) { ?>
                    </tr>
                    <td colspan="10" bgcolor="#5D7B9D">
                        <font color="#fff"><b><?= $row["lok"]; ?></b></font>
                    </td>
                    <tr>
                    <?php
                            $now_loc = $row["lok"];
                        }
                        if ($now_loc != $row["lok"]) {
                    ?>
                    </tr>
                    <td colspan="10" bgcolor="#5D7B9D">
                        <font color="#fff"><b><?= $row["lok"]; ?></b></font>
                    </td>
                    <tr>
                    <?php $now_loc = $row["lok"];
                        } ?>
                    <td><?= $no; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td>
                        <select id="kondisi" name="kondisi<?= $i; ?>" required>
                            <option value="<?= $row["kondisi"]; ?>"><?= $row["kondisi"]; ?></option>
                            <option value="Baik">Baik</option>
                            <option value="Rusak Ringan">Rusak Ringan</option>
                            <option value="RUSAK BERAT">Rusak Berat</option>
                        </select>
                    </td>
                    <td><input type="text" name="ket<?= $i; ?>" value="<?= $row["ket"]; ?>"> </td>
                    <td><?= $row["lok"]; ?></td>
                    <td><?= $row["merek"] . '&#9550;' . $row["tipe"] . '&#9550;' . $row["sn"]; ?></td>
                    <td><?= $row["tgl_beli"]; ?></td>

                    <td><?= $row["tgl"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>|
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');">hapus</a>
                    </td>
                    </tr>
                    <?php $i++;
                    $no++; ?>
                <?php endforeach; ?>
            </table>
            <table id="customers">
                <tr>
                    <td>
                        <textarea maxlength="255" cols="52" rows="5" name="cat" placeholder="Isi jika ada catatan khusus saat pemeliharaan alat" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><button type="submit" name="submit">Tambah Pemeliharaan</button>
                    </td>
                </tr>
            </table>
        </div>
    <?php
    }
    ?>
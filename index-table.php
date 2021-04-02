<?php
require 'function.php';
//AJAX daftar alat
if ($_GET['jenis'] == 'daftaralat') {
?>
    <table id="customers">
        <tr>
            <td>No</td>
            <td>Kalibrasi</td>
            <td>Nama Alat</td>
            <td>Merek/Tipe/SN</td>
            <td>Pengadaan</td>
            <td>Tgl Install</td>
            <td>Kondisi</td>
            <td>Update</td>
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>
        <?php
        $namaAlat = "";
        if (isset($_POST['jurusan'])) {
            $jurusan = trim($_POST['jurusan']);

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
        }
        ?>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <?php if ($i == 1) { ?>
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
            <td><?= $i; ?></td>
            <td>
                <?php if ($row['tgl_kal'] != "") : ?>
                    <?= date('d/m/y', strtotime($row['tgl_kal'])); ?>
                <?php endif; ?>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["merek"] . '&#9550;' . $row["tipe"] . '&#9550;' . $row["sn"]; ?></td>
            <td>
                <?php if ($row['tgl_beli'] != "") : ?>
                    <?= $row['tgl_beli']; ?>
                <?php endif; ?>
            </td>
            <td>
                <?php if ($row['tgl_install'] != "") : ?>
                    <?= date('d/m/y', strtotime($row['tgl_install'])); ?>
                <?php endif; ?>
            </td>
            <td>
                <?php
                if ($row["kondisi"] == "RUSAK BERAT") :
                ?><font color="red"><?= $row["kondisi"]; ?></font>
                <?php else :
                    echo $row["kondisi"];
                endif; ?></td>
            </td>
            <td>
                <?php if (($row['tgl'] != "") || ($row["tgl"] != "0000-00-00")) : ?>
                    <?= date('d/m/y', strtotime($row['tgl'])); ?>
                <?php endif; ?>
            </td>
            <td> <?= $row["ket"]; ?>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>|
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');">hapus</a>
            </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
<?php
} ?>

<?php
//AJAX daftar perbaikan
if ($_GET['jenis'] == 'perbaikan') {
?>
    <table id="customers">
        <tr>
            <td>No</td>
            <td>Nama Alat</td>
            <td>Merk / Tipe / SN</td>
            <td>TOD</td>
            <td>Tanggal Mulai Rusak</td>
            <td>Tanggal Perbaikan</td>
            <td>Data Kerusakan</td>
            <td>Tindakan Perbaikan</td>
            <td>Opsi</td>
        </tr>
        <?php
        $namaAlat = "";
        if (isset($_POST['jurusan'])) {
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM perbaikan INNER JOIN alat_kode ON perbaikan.alat = alat_kode.nama where perbaikan.kel='" . $_POST['jurusan'] . "'");
            while ($d = mysqli_fetch_array($data)) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['alat']; ?></td>
                    <td><?= $d['jenis'] ?></td>
                    <td><?php echo $d['t1'];
                        echo "\n";
                        echo $d['t2'];
                        echo "\n";
                        echo $d['t3'];
                        echo "\n";
                        echo $d['t4'];
                        echo "\n";
                        echo $d['t5']; ?>
                    </td>
                    <td><?php echo $d['tr']; ?></td>
                    <td><?php echo $d['tp']; ?></td>
                    <td><?php echo $d['awal']; ?></td>
                    <td><?php echo $d['tindakan']; ?></td>
                    <td>
                        <a href="edit-perbaikan.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    </td>
                    <td>
                        <a href="cetak.php?id=<?php echo $d['id']; ?>" target="_blank">CETAK</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
<?php
} ?>
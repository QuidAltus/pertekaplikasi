<?php
require 'function.php';
if ($_GET['jenis'] == "selectSite") {
    $query = mysqli_query($conn, "SELECT * FROM `alat_kode` WHERE kel='" . $_POST['jurusan'] . "' GROUP BY lok"); ?>
    <option value="">-</option>
    <?php while ($row = mysqli_fetch_array($query)) { ?>
        <option value="<?= $row['lok'] ?>"><?= $row['lok'] ?></option>
    <?php }
}

if ($_GET['jenis'] == "selectAlat") {
    $query = mysqli_query($conn, "SELECT kode,nama,lok FROM alat_kode WHERE kel='" . $_POST['kategori'] . "' and lok='" . $_POST['jurusan'] . "'"); ?>
    <option value="">-</option>
    <?php while ($row = mysqli_fetch_array($query)) { ?>
        <option value=<?= $row['kode'] ?>><?= $row['nama'] ?></option>
    <?php }
    echo "SELECT kode,nama,lok FROM alat_kode WHERE kel='" . $_POST['kategori'] . "' and lok='" . $_POST['jurusan'] . "'";
}

if ($_GET['jenis'] == "kondisiAkhir") {
    $query = mysqli_query(
        $conn,
        "SELECT alat_kode.kode,alat_kode.kel,alat_kode.nama,alat_kondisi.kode, alat_kondisi.kondisi,alat_kondisi.ket 
        FROM alat_kode, alat_kondisi 
        WHERE alat_kode.kode=alat_kondisi.kode and alat_kode.kode='$_POST[jurusan]' 
        ORDER BY alat_kondisi.tgl DESC LIMIT 1"
    ); ?>
    <?php while ($row = mysqli_fetch_array($query)) { ?>
        <option value="Baik" <?php if (strtolower($row['kondisi']) == 'baik') echo "selected" ?>>Baik</option>
        <option value="Rusak Ringan" <?php if (strtolower($row['kondisi']) == 'rusak ringan') echo "selected" ?>>Rusak Ringan</option>
        <option value="RUSAK BERAT" <?php if (strtolower($row['kondisi']) == 'rusak berat') echo "selected" ?>>Rusak Berat</option>
<?php }
}
?>
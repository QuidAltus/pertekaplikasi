<html lang="en">

<style>
    .topnav {
        font-family: Arial, Helvetica, sans-serif;
        margin: auto;
        width: 90%;
        overflow: hidden;
        background-color: whitesmoke;
    }

    .topnav a {
        float: left;
        color: burlywood;
        text-align: center;
        padding: 8px 10px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }
</style>

<!-- topnavbar -->
<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];
// var_dump($first_part);
?>

<div class="topnav">
    <a class=<?php if ($first_part == "") {
                    echo "active";
                } else {
                    echo "noactive";
                } ?> href="#">Home</a>
    <a class=<?php if ($first_part == "index.php") {
                    echo "active";
                } else {
                    echo "noactive";
                } ?> href="index.php">Daftar Alat</a>
    <a class=<?php if ($first_part == "pemeliharaan-daftar.php") {
                    echo "active";
                } else {
                    echo "noactive";
                } ?> href="pemeliharaan-daftar.php">Pemeliharaan</a>
    <a class=<?php if ($first_part == "perbaikan-daftar.php") {
                    echo "active";
                } else {
                    echo "noactive";
                } ?> href="perbaikan-daftar.php">Perbaikan</a>
</div>
<!-- end top navbar -->



</html>
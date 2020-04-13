<?php
include('lib/koneksi.php');
$kode = 0;

if (!empty($_GET['kodeproduk'])) {
    $kode = $_REQUEST['kodeproduk'];
}

if (!empty($_POST)) {
    // keep track post values
    $kode = $_POST['kodeproduk'];

    // delete data
    $pdo = $con;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM produk WHERE produk.kode_produk = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($kode));
    echo "Data Berhasil Di Hapus";
}

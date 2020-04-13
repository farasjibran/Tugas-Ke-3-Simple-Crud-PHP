<?php

include('lib/koneksi.php');

// mengambil data dari form update
$kdprdk = $_GET['kode'];
$nmprdk = $_POST['namaproduk'];
$hrgprdk = $_POST['hargaproduk'];
$pcs = $_POST['unitproduk'];
$ktgr = $_POST['kategoriproduk'];
$img = $_POST['img'];
$stk = $_POST['stokproduk'];

// query
$result = $con->exec("UPDATE `produk` SET `nama_produk` = '$nmprdk', `harga_produk` = '$hrgprdk', `satuan` = '$pcs', `kategori` = '$ktgr', `gambar` = '$img', `stok` = '$stk' WHERE `produk`.`kode_produk` = '$kdprdk';");

echo $result;

// cek jika if tedapat error
if ($result == true) {
    echo "Data Telah Diedit";
} else {
    echo "Data Gagal Diedit";
}

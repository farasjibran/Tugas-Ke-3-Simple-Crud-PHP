<?php

// mengambil koneksi
include('lib/koneksi.php');

// mengambil data dari form index
$kdprdk = strtotime("now");
$nmprdk = $_POST['namaproduk'];
$hrgprdk = $_POST['hargaproduk'];
$pcs = $_POST['unitproduk'];
$ktgr = $_POST['kategoriproduk'];
$img = $_POST['img'];
$stk = $_POST['stokproduk'];

// query tambah data
$result = $con->exec("INSERT INTO `produk` (`kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `gambar`, `stok`) VALUES ('MD$kdprdk', '$nmprdk', '$hrgprdk', '$pcs', '$ktgr', '$img', '$stk')");
echo $result;

// cek jika if tedapat error
if ($result == true) {
    echo "Data Tersimpan Ke Database";
} else {
    echo "Data Gagal Disimpan";
}

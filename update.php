<?php
include('lib/koneksi.php');

$kode = $_GET['kode'];

$query = $con->query("SELECT * FROM `produk` WHERE produk.kode_produk = '$kode'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Form input master</title>
    <!-- My Css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bungkus" style="margin-top: 30px">
        <h2 class="slogan" style="text-align: center; font-size: 25px; padding-top: 25px;">FORM INPUT MASTER dan Stock DATA BARANG</h2>
        <div class="inputdata">
            <form action="edit.php?kode=<?= $kode ?>" method="POST">
                <?php foreach ($query as $q) : ?>
                    <table id="formMaster" class="formmaster" style="margin-left: 10px; margin-top: 40px">
                        <tr>
                            <td width="100" class="kode">
                                <p>Kode Produk</p>
                            </td>
                            <td>
                                <p class="kodeproduk"><?php echo $kode ?></p>
                            </td>
                        </tr>

                        <!-- input nama produk  -->
                        <tr>
                            <td>
                                <p>Nama produk</p>
                            </td>
                            <td>
                                <input type="text" placeholder="input nama produk" value="<?php echo $q['nama_produk'] ?>" name="namaproduk" class="namaproduk">
                            </td>
                        </tr>

                        <!-- input harga produk -->
                        <tr>
                            <td>
                                <p>Harga produk</p>
                            </td>
                            <td>
                                <input type="text" placeholder="input harga produk" value="<?php echo $q['harga_produk'] ?>" name="hargaproduk" class="hargaproduk">
                            </td>
                        </tr>

                        <!-- input satuan produk -->
                        <tr>
                            <td>
                                <p>Satuan Barang</p>
                            </td>
                            <td>
                                <select name="unitproduk" class="satuanproduk">
                                    <option selected="selected" value="<?= $q['satuan'] ?>"><?= $q['satuan'] ?></option>
                                    <option value="Gelas">Gelas</option>
                                    <option value="Piring">Piring</option>
                                    <option value="Mangkok">Mangkok</option>
                                </select>
                            </td>
                        </tr>

                        <!-- input kategori produk -->
                        <tr>
                            <td width="100">
                                <p>Kategori Barang</p>
                            </td>
                            <td>
                                <select name="kategoriproduk" class="kategori">
                                    <option selected="selected" value="<?= $q['kategori'] ?>"><?= $q['kategori'] ?></option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Snack">Snack</option>
                                </select>
                            </td>
                        </tr>

                        <!-- input gambar -->
                        <tr>
                            <td>
                                <p>URL Gambar</p>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $q['gambar'] ?>" class="imgsize" name="img" placeholder="input url gambar">
                            </td>
                        </tr>

                        <!-- input stok produk -->
                        <tr>
                            <td>
                                <p>Stok Produk</p>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $q['stok'] ?>" name="stokproduk" class="stokproduk" placeholder="input stok produk">
                            </td>
                        </tr>

                        <!-- button input -->
                        <tr>
                            <td>
                                <button type="submit" class="buttonadd  btn btn-primary">Edit</button>
                            </td>
                        </tr>
                    </table>
                <?php endforeach; ?>
            </form>
        </div>
    </div>

</body>

</html>
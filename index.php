<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Form input master</title>
    <!-- My Css -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="bungkus" style="margin-top: 30px;">
        <h2 class="slogan" style="text-align: center; font-size: 25px; padding-top: 25px;">FORM INPUT MASTER dan Stock DATA BARANG</h2>
        <div class="inputdata">
            <form action="tambah.php" method="POST">
                <table id="formMaster" class="formmaster" style="margin-left: 10px; margin-top: 40px">
                    <tr>
                        <td width="100" class="kode">
                            <p>Kode Produk</p>
                        </td>
                        <td>
                            <p class="kodeproduk">Auto</p>
                        </td>
                    </tr>

                    <!-- input nama produk  -->
                    <tr>
                        <td>
                            <p>Nama produk</p>
                        </td>
                        <td>
                            <input type="text" placeholder="input nama produk" name="namaproduk" class="namaproduk">
                        </td>
                    </tr>

                    <!-- input harga produk -->
                    <tr>
                        <td>
                            <p>Harga produk</p>
                        </td>
                        <td>
                            <input type="text" placeholder="input harga produk" name="hargaproduk" class="hargaproduk">
                        </td>
                    </tr>

                    <!-- input satuan produk -->
                    <tr>
                        <td>
                            <p>Satuan Barang</p>
                        </td>
                        <td>
                            <select name="unitproduk" class="satuanproduk">
                                <option value="Null">Pilih satuan</option>
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
                                <option value="Null">Pilih kategori</option>
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
                            <input type="text" class="imgsize" name="img" placeholder="input url gambar">
                        </td>
                    </tr>

                    <!-- input stok produk -->
                    <tr>
                        <td>
                            <p>Stok Produk</p>
                        </td>
                        <td>
                            <input type="text" name="stokproduk" class="stokproduk" placeholder="input stok produk">
                        </td>
                    </tr>

                    <!-- button input -->
                    <tr>
                        <td>
                            <button type="submit" class="buttonadd btn btn-success">Tambah</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <!-- output semua produk -->
    <div class="outputdata" style="margin-bottom: 30px; margin-left: 280px">
        <?php
        // mengambil koneksi
        include('lib/koneksi.php');
        // query sql
        $result = $con->query('SELECT * FROM `produk`');
        $i = 1;
        // menampilkan data
        echo "<table style='margin-left: -5%;' border='1' cellspacing=0 cellpadding=20 >";
        echo  "<tr>";
        echo "<th>NO</th><th>Kode Produk</th><th>Nama Barang</th> <th>Harga</th> <th>Satuan</th><th>Kategori</th><th>Gambar</th> <th>Stok</th><th>Action</th>";
        echo "</tr>";
        foreach ($result as $dta) :
            // menyetak ke table
            echo "<tr><td>" . $i++   . "</td><td>" . $dta['kode_produk'] . "</td><td>" . $dta['nama_produk'] . "</td><td>" . "Rp." . $dta['harga_produk'] . "</td><td>" . $dta['satuan'] . "</td><td>" . $dta['kategori'] . "</td><td>" . "<img src= " . $dta['gambar'] . " >" . "</td>";
            $stok = $dta['stok'];
            echo ($dta['stok'] < 5) ? "<td style='background:red; color:#fff'>$stok</td>" : "<td>$stok</td>";
            $kode = $dta['kode_produk'];
            $_SESSION['kode_produk'] = $dta['kode_produk'];
            echo " <td><form action='delete.php' method='POST'><input type='hidden' name='kodeproduk' value='$kode'><button type='submit' name='delete' value='delete' class='btn btn-danger'>Hapus</button></form>
            <a href='update.php?kode=" . $kode . " ' class='btn btn-primary'>Edit</a></td></tr>";
        endforeach;
        echo "</table>";

        ?>
    </div>

</body>

</html>
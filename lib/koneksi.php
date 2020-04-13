<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=db_produk", "root", "");
} catch (PDOException $e) {
    echo $e->getMessage();
}

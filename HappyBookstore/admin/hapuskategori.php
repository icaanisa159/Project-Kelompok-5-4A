<?php

$value = $koneksi->query("SELECT * FROM kategori WHERE id_kategori='$_GET[id_kategori]'");
$baris = $value->fetch_assoc();

$koneksi->query("DELETE FROM kategori WHERE id_kategori='$_GET[id_kategori]'");

echo "<sript>alert('Buku Terhapus');</script>";
echo "<script>location='index.php?halaman=kategori';</script>";
?>
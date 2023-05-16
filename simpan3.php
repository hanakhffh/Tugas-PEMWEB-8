<?php
session_start();
include 'koneksi.php';

// Melakukan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "data_regis");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nama_ayah = $_POST['nama_ayah'];
    $tahun_lahir = $_POST['tahun_lahir'];
    $pendidikan = $_POST['pendidikan'];
    $pekerjaan = $_POST['pekerjaan'];
    $penghasilan_bulan = $_POST['penghasilan_bulan'];
    $berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];

    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO ayah_kandung (nama_ayah, tahun_lahir, pendidikan, pekerjaan, penghasilan_bulan, berkebutuhan_khusus) VALUES ('$nama_ayah', '$tahun_lahir', '$pendidikan', '$pekerjaan', '$penghasilan_bulan', '$berkebutuhan_khusus')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}
?>

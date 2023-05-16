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
    $nama_ibu = $_POST['nama_ibu'];
    $tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];
    $berkebutuhan_khusus_ibu = $_POST['berkebutuhan_khusus_ibu'];

    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO data_ibu (nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, berkebutuhan_khusus_ibu) VALUES ('$nama_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$berkebutuhan_khusus_ibu')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan.";
                // Mengarahkan ke halaman selanjutnya setelah 3 detik
        header("refresh:3; url=formTampilPendaftaran.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}
?>

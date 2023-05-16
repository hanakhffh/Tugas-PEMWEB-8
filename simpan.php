<?php
include 'koneksi.php';
// menyimpan data kedalan variabel
$nim           =$_POST['nim'];        
$nama          =$_POST['name'];
$jurusan       =$_POST['Jurusan'];
$jenis_kelamin =$_POST['Jenis kelamin'];
$alamat        =$_POST['alamat']; 
// query SQL untuk insert data 
$query="INSERT INTO mahasiswa SET nim='$nim',nama='$nama', Jurusan= '$jurusan',Jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi,$query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>
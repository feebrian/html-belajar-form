<?php
include '../assets/config/koneksi.php';

$nama = $_POST['t_nama'];
$hp = $_POST['t_hp'];
$email = $_POST['t_email'];
$alamat = $_POST['t_alamat'];
$tentang = $_POST['t_tentang'];
$pendidikan = $_POST['t_pendidikan'];
// upload gambar
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, 'photo-guru-upload/'.$foto);

$query = "INSERT INTO `tb_guru` (`nama`, `hp`, `email`, `alamat`, `tentang`, `pendidikan`, `foto`) VALUES ('$_POST[t_nama]', 
                              '$_POST[t_hp]', 
                              '$_POST[t_email]', 
                              '$_POST[t_alamat]',
                              '$_POST[t_tentang]',
                              '$_POST[t_pendidikan]',
                              '$foto')";
mysqli_query($koneksi, $query)
or die("SQL ERROR " .mysqli_error($koneksi));
header('location: ../../guru/guru.php');
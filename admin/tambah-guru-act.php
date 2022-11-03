<?php

// memanggil file koneksi.php untuk melakukan koneksi database
include '../assets/config/koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama   = $_POST['t_nama'];
  $hp     = $_POST['t_hp'];
  $email    = $_POST['t_email'];
  $role    = $_POST['t_role'];
  $alamat    = $_POST['t_alamat'];
  $tentang    = $_POST['t_tentang'];
  $pendidikan    = $_POST['t_pendidikan'];
  $foto = $_FILES['foto']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($foto != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'photo-guru-upload/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO tb_guru (nama, hp, email, jabatan, alamat, tentang, pendidikan, foto) VALUES ('$nama', '$hp', '$email', '$role', '$alamat', '$tentang', '$pendidikan', '$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='manage-guru.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah-guru.php';</script>";
            }
} else {
   $query = "INSERT INTO tb_guru (nama, hp, email, jabatan, alamat, tentang, pendidikan, foto) VALUES ('$nama', '$hp', '$email', '$role', '$alamat', '$tentang', '$pendidikan' null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='manage-guru.php';</script>";
                  }
}
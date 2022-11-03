<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../assets/config/koneksi.php';

	// membuat variabel untuk menampung data dari form
  $idg = $_POST['id_guru'];
  $nama   = $_POST['t_nama'];
  $hp     = $_POST['t_hp'];
  $email    = $_POST['t_email'];
  $jabatan    = $_POST['t_role'];
  $alamat    = $_POST['t_alamat'];
  $tentang    = $_POST['t_tentang'];
  $pendidikan    = $_POST['t_pendidikan'];
  $fotolama    = $_POST['fotolama'];
  $foto = $_FILES['foto']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($foto != "") {

    unlink("photo-guru-upload/".$fotolama);

    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'photo-guru-upload/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE tb_guru SET nama = '$nama', hp = '$hp', email = '$email', jabatan = '$jabatan', alamat = '$alamat', tentang = '$tentang', pendidikan = '$pendidikan', foto = '$nama_gambar_baru'";
                    $query .= "WHERE id_guru = '$idg'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='manage-guru.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah-guru.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE tb_guru SET nama = '$nama', hp = '$hp', email = '$email', jabatan = '$jabatan', alamat = '$alamat', tentang = '$tentang', pendidikan = '$pendidikan'";
      $query .= "WHERE id_guru = '$idg'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='manage-guru.php';</script>";
      }
    }
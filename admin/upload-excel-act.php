<?php
include('../assets/config/koneksi.php');
require "../assets/vendor/phpspreadsheet/autoload.php";


if (isset($_POST['upload-excel'])) {

  // deklarasi variabel
  $error    = "";
  $ekstensi = "";
  $sukses   = "";

  // upload file
  $file_name  = $_FILES['file-excel']['name'];
  $file_data  = $_FILES['file-excel']['tmp_name'];

  // cek file
  if (empty($file_name)) {
    $error .= "<li>Silahkan masukkan file...</li>";
  } else {
    $ekstensi = pathinfo($file_name)['extension'];
  }

  $extension_allowed  = array("xls", "xlsx");

  if (!in_array($ekstensi, $extension_allowed)) {
    $error .= "<li>Silahkan masukkan file dengan tipe XLS / XLSX file yang anda masukkan <b>$file_name</b> bertipe <b>$ekstensi</b>";
  }

  if (empty($error)) {
    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
    $spreadsheet  = $reader->load($file_data);
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    
    $total_data = 0;
    for ($i=1; $i < count($sheetData); $i++) { 
      
      $nis  = $sheetData[$i]['0'];
      $nama  = $sheetData[$i]['1'];
      $alamat  = $sheetData[$i]['2'];
      $kelas  = $sheetData[$i]['3'];

      // echo "$nis - $nama - $alamat - $kelas<br>";

      // simpan data ke mysql
      $sql1  = "INSERT INTO siswa (nis, nama, alamat, kelas) VALUES ('$nis', '$nama', '$alamat', '$kelas')";

      mysqli_query($koneksi, $sql1);

      $total_data++;
    }

    if ($total_data > 0) {
      $sukses = "$total_data data berhasil diupload.";
    }

  }

  // error / success message
  if ($error) {
  ?>
    <div class="alert alert-danger">
      <ul><?php echo $error ?></ul>
    </div>
  <?php
  }

  if ($sukses) {
    ?>
    <div class="alert alert-success">
      <?php echo $sukses ?>
    </div>
    <?php
  }

}

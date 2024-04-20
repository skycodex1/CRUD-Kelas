<?php
if (isset($_POST['simpan'])) {
    include_once('config.php');
    $siswa = $_POST['siswa'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "INSERT INTO siswa SET siswa='$siswa', kapasitas='$kapasitas', terisi='$terisi'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=siswa&s=view');
    } else {
        include "index.php";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}
<?php

include '../koneksi.php';
$id_anggota = $_POST['idanggota'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$status = "Tidak Meminjam";

if (isset($_POST['simpan'])) {
    extract($_POST);
    $nama_file = $_FILES[$foto]['name'];
    if (!empty($nama_file)) {
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $images = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $id_anggota . "." . $nama_file;

        // folder untuk menyimpan file

        $folder = "../images/$file_foto";
        move_uploaded_file($lokasi_file, "$folder");
    } else {
        $file_foto = "_";

        $sql = "INSERT INTO tbanggota VALUES ('$id_anggota', '$nama', '$jenis_kelamin', '$alamat', '$status', '$file_foto')";
        $query = mysqli_query($conn, $sql);

        header("location:../anggota.php?p=anggota");
    }
}

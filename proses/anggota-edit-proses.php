<?php 
    include "../koneksi.php";

    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    if ( isset($_POST['simpan'])) {
        extract($_POST);
        $nama_file = $_FILES['foto']['name'];
        if(!empty($nama_file)) {
            $lokasi_file = $_FILES['foto']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $id_anggota.".".$tipe_file;

            $folder = "../images/$file_foto";
            @unlink("$folder");

            move_uploaded_file($lokasi_file, "$folder");
        }
        else 
        $file_foto = $foto_awal;

            mysqli_query($conn, "UPDATE tbanggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', foto='$file_foto'
            WHERE idanggota='$id_anggota'"
            );

            header("location:../index.php?p=anggota");
    }

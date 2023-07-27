<?php
    include "../koneksi.php";
?>

<link rell="stylesheet" type="text/css" href="../css/dashboard.css">
<h3>Data Anggota</h3>
<div class="content">
    <table border="1" id="tabel-tampil">
        <tr>
            <th id="label-tampil-no">No</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
        <?php
            $nomor = 1;
            $query = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
            $q_tampil_anggota = mysqli_query($conn, $query);
            if(mysqli_num_rows($q_tampil_anggota)>0)
            {
                while($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
                    if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto'] == '_'))
                    $foto = "admin-profile.jpg";

                    else
                      $foto = $r_tampil_anggota['foto'];
                      ?>

        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $r_tampil_anggota['idanggota']; ?></td>
            <td><?php echo $r_tampil_anggota['nama']; ?></td>
            <td><img src="../images/<?php echo $foto; ?>" width=70px height="70px"></td>
            <td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
            <td><?php echo $r_tampil_anggota['alamat']; ?></td>
        </tr>

        <?php $nomor++; }
            }?>
    </table>
    <script>
    window.print();
    </script>
</div>
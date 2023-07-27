<?php

$id_anggota = $_POST['id'];
$q_tampil_anggota = mysqli_query($conn, "SELECT * FROM tbanggota Where idanggota = '$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($r_tampil_anggota);
if (empty($r_tampil_anggota['foto']) or ($r_tampil_anggota['foto'] == '_'));
$foto = "admin-Profile.png";
?>
<div class="label-page">
    <h3>Edit Data Anggota</h3>
</div>

<div class="content">
    <form action="proses/anggota-edit-proses.php" method="POST" enctype="multipart/form-data">
        <table id="tabel-input">
            <tr>
                <td class="label-formulir">Foto</td>
                <td class="isian-formulir">
                    <img src="images/<?php echo $foto; ?>" width=70px height=75px>
                    <input type="file" name="foto" class="isian-formulir isian-formulir-border">
                    <input type="hidden" name="foto_awal" value="<?php echo $r_tampil_anggota['foto']; ?>">
                </td>
            </tr>
            <tr>
                <td class="label-formulir">ID Anggota</td>
                <td class="isian-formulir"><input type="text" name="id_anggota"
                        value="<?php echo $r_tampil_anggota['id_anggota']; ?>" readonly="readonly"
                        class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
            </tr>
            <tr>
                <td class="label-formulir">Nama</td>
                <td class="isian-formulir"><input type="text" name="nama"
                        value="<?php echo $r_tampil_anggota['nama'];?>" class="isian-formulir isian-formulir-border">
                </td>
            </tr>
            <tr>
                <td class="label-formulir">Jenis Kelamin</td>
                <?php
                if($r_tampil_anggota['jenis_kelamin']=="pria")
                {
                    echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria' checked>Pria</label></td>
            </tr>
            <tr>
                    <td class='label-formulir'></td>
                    <td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Wanita'>Wanita</td>";
                } elseif($r_tampil_anggota['jeniskelamin']=="wanita")
                 { 
                    echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria>Pria</label></td>
                    </tr>

                    <tr>
                    <td class='label-formulir'></td>
                    <td class='isian-formulir'><input type='radio' name'jenis_kelamin' value='Wanita' checked>Wanita</td>";
                 }
                 ?>

                <input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>"
                    class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Alamat</td>
                <td class="label-formulir"><textarea rows="2" cols="40" name="alamat"
                        class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="sumbit" name="simpan" value="simpan" id="tombol-simpan"></td>
            </tr>
        </table>
    </form>
</div>
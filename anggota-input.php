<!-- <!DOCTYPE HTML>
<html>

<head>
    <Title>Input Anggota</Title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <div id="label-page">
        <h3>Input Data Anggota</Input></h3></div>
        <div id="content">
        <table>
            <form action="proses/anggota-input-proses.php" method="post" enctype="multipart/form-data">
                <div id="tabel-input">

                    <tr>
                        <td class="label-formulir">Foto</td>
                        <td class="isian-formulir"><input type="file" name="foto" class="isian-formulir isian-formulir-border"></td>
                    </tr>
                    <tr>
                        <td class="label-formulir">ID Anggota</td>
                        <td class="isian-formulir"><input type="text" name="id_anggota" class="isian-formulir isian-formulir-border"></td>
                    </tr>
                    <tr>
                        <td class="label-formulir">Nama</td>
                        <td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border"></td>
                    </tr>
                    <tr>
                        <td class="label-formulir">Jenis Kelamin</td>
                        <td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Pria">Pria</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-formulir"></td>
                        <td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-formulir">Alamat</td>
                        <td class="isian-formulir">
                            <textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-formulir"></td>
                        <td class="isian-formulir"><input type="submit" name="simpan" value="simpan" class="tombol">
                        </td>
                    </tr>
        </table>
        </form>
    </div>
</body>

</html> -->



<!DOCTYPE HTML>
<html>

<head>
    <title>INPUT Data Anggota</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="nama-alamat-perpus-container">
                <form action="proses/anggota-input-proses.php" method="post">
                    <div class="nama-alamat-perpus">
                        <h1>PERPUSTAKAAN UMUM</h1>
                    </div>
                    <div class="nama-alamat-perpus">
                        <h5>Jl. Jendral Sudirman No.45 Jakarta, Telp : 243214</h5>
                    </div>
            </div>
        </div>
        <div id="header2">
            <div id="nama-user">Hai, Saya adalah admin</div>
        </div>
        <div id="sidebar">
            <a href="index.php?p=beranda">Beranda</a>
            <p class="label-navigasi">Data Master</p>
            <ul>
                <li><a href="anggota.php?p=listmember">Data Anggota</a></li>
                <li><a href="index.php?p=listbook">Data Buku</a></li>
            </ul>
            <p class="label-navigasi">Data Transaksi</p>
            <ul>
                <li><a href="index.php?p=listborrow">Data Peminjaman</a></li>
                <li><a href="index.php?p=listbook">Data Pengembalian</a></li>
            </ul>
            <p class="label-navigasi">Laporan Transaksi</p>
            <a href="login.php">Logout</a>
        </div>
        <div id="content-container">
            <div id="label-page">
                <h3>Input Data Anggota</Input></h3>
            </div>
            <div id="content">
                <table id="tabel-input">
                    <tr>
                        <td class="label-formulir">Foto</td>
                        <td class="isian-formulir2"><input type="file" name="foto" class="isian-formulir isian-formulir-border"></td>
                    </tr>
                    <tr>
                        <td class="label-formulir">ID Anggota</td>
                        <td class="isian-formulir"><input type="text" name="id_anggota" class="isian-formulir isian-formulir-border"></td>
                    </tr>
                    <tr>
                        <td class="label-formulir">Nama</td>
                        <td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border"></td>
                    </tr>
                    <tr>
                        <td class="label-formulir">Jenis Kelamin</td>
                        <td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Pria">Pria</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-formulir"></td>
                        <td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-formulir">Alamat</td>
                        <td class="isian-formulir">
                            <textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-formulir"></td>
                        <td class="isian-formulir"><input type="submit" name="simpan" value="simpan" class="tombol">
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>

        <div id="footer">
            <!-- <h3>SISTEM INFORMASI PERPUSTAKAAN</h3> -->
        </div>
    </div>
</body>

</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
    <!-- kepala -->
    <h1>DATA REGISTRASI</h1>
    <HR></HR>
    <!-- php -->
    <?php
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tempatlahir=$_POST['ttl'];
    $tanggallahir=$_POST['tgl'];
    $pendidikan=$_POST['pendidikan'];
    $kelamin=$_POST['gender'];
    // table
    echo"<table width='700' border='5' >
    <tr><td>nama</td><td>$nama</tr></tr>
    <tr><td>alamat</td><td>$alamat</tr></tr>
    <tr><td>tempatlahir</td><td>$tempatlahir</tr></tr>
    <tr><td>tanggallahir</td><td>$tanggallahir</tr></tr>
    <tr><td>kelamin</td><td>$kelamin</tr></tr>
    <tr><td>pendidikan</td><td>$pendidikan</tr></tr>
    </table>";
    ?>
    <!-- link -->
    <a href="formdata.php">BACK TO HOME</a>
    <p align="center"><a href="http://localhost/modul_web1/webportfolio1-master/">balik ke awal</a></p>
</body>
</html>